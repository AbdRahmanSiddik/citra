<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{

    public function index()
    {
        // Define the directory path
        $input_image = public_path('images/input');
        $histogram_image = public_path('images');

        if(File::exists($histogram_image)){
            $file = File::files($histogram_image);
            foreach ($file as $f){
                File::delete($f);
            }
        }

        // Check if the input_image exists
        if (File::exists($input_image)) {
            // Get all files in the input_image
            $files = File::files($input_image);

            // Iterate through each file and delete it
            foreach ($files as $file) {
                File::delete($file);
            }
        }

        return view('pages.input_image');
    }

    public function procces(Request $request)
    {
        $image = $request->file('image');
        $token = 'your_image';
        $extension = $image->getClientOriginalExtension();
        $file_name = $token.'.'.$extension;
        $image_path = 'images/input/' . $file_name;
        $image->move(public_path('images/input/'), $file_name);

        // Format yang didukung oleh browser HTML
        $supportedFormats = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

        if (!in_array(strtolower($extension), $supportedFormats)) {
            // Jika bukan format yang didukung, konversi ke jpg menggunakan Python
            $new_file_name = $token . '.jpg';
            $new_image_path = public_path('images/input/' . $new_file_name);

            $command = escapeshellcmd("python " . base_path('app/Scripts/convert_to_jpg.py') . " " . escapeshellarg($image_path) . " " . escapeshellarg($new_image_path));
            shell_exec($command . " 2>&1");

            // Update file name dan path setelah konversi
            $file_name = $new_file_name;
        }

        $request->session()->put('uploaded_image', $file_name);

        return redirect('/image_edit');
    }

    public function edit_image(Request $request)
    {
        $image = $request->session()->get('uploaded_image');
        $imagePath = public_path('images/input/'.$image);

        $command = escapeshellcmd("python " . base_path('app/Scripts/script.py') . " " . escapeshellarg($imagePath));
        shell_exec($command . " 2>&1");

        $command_rgb = escapeshellcmd("python " . base_path('app/Scripts/HistogramRGB.py') . " " . escapeshellarg($imagePath));
        shell_exec($command_rgb . " 2>&1");

        $histogramImagePath = asset('images/histogram.png');

        return view('pages.histogram', [
            'histogram' => $histogramImagePath,
            'histogram_rgb' => asset('images/histogram_rgb.png'),
            'image' => asset('images/input/'.$image),
        ]);
    }

    public function gray_image(Request $request)
    {
        $image = $request->session()->get('uploaded_image');
        $imagePath = public_path('images/input/'.$image);

        $new_file_name = 'grayimage.jpg';
        $new_image_path = public_path('images/input/' . $new_file_name);

        $command = escapeshellcmd("python " . base_path('app/Scripts/convert_to_gray.py') . " " . escapeshellarg($imagePath) . " " . escapeshellarg($new_image_path));
        shell_exec($command . " 2>&1");

        $command_gray_hist = escapeshellcmd("python " . base_path('app/Scripts/HistogramGray.py') . " " . escapeshellarg($imagePath));
        shell_exec($command_gray_hist . " 2>&1");

        return view('pages.histogram_gray', [
            'grayImage' => asset('images/input/'.$new_file_name),
            'rgbImage' => asset('images/input/'.$image),
            'histogram_gray' => asset('images/histogram_gray.png')
        ]);
    }

    public function normalize_rgb(Request $request)
    {
        $image = $request->session()->get('uploaded_image');
        $imagePath = public_path('images/input/'.$image);


        $command = escapeshellcmd("python " . base_path('app/Scripts/NormalizeRGB.py') . " " . escapeshellarg($imagePath));
        shell_exec($command . " 2>&1");

        $normalized_name = 'normalized_rgb_image.png';
        $new_path = public_path('images/input/'.$normalized_name);

        $command_hist = escapeshellcmd("python " . base_path('app/Scripts/HistogramRGB.py') . " " . escapeshellarg($new_path));
        shell_exec($command_hist . " 2>&1");

        return view('pages.hist_normalized_rgb', [
            'rgbImage' => asset('images/input/'.$image),
            'normalizedImage' => asset('images/input/'.$normalized_name),
            'histogram' => asset('images/histogram_rgb.png')
        ]);
    }

    public function normalize_gray(Request $reques)
    {
        $image = 'grayimage.jpg';
        $imagePath = public_path('images/input/'.$image);

        $command = escapeshellcmd("python " . base_path('app/Scripts/NormalizeGray.py') . " " . escapeshellarg($imagePath));
        shell_exec($command . " 2>&1");

        $normalized_name = 'normalized_grayscale_image.png';
        $new_path = public_path('images/input/'.$normalized_name);

        $command_hist = escapeshellcmd("python " . base_path('app/Scripts/HistogramGray.py') . " " . escapeshellarg($new_path));
        shell_exec($command_hist . " 2>&1");

        return view('pages.hist_normalized_gray', [
            'grayImg' => asset('images/input/'.$image),
            'normalizedGrayImg' => asset('images/input/'.$normalized_name),
            'histogram_gray' => asset('images/histogram_gray.png'),
        ]);
    }
}
