<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PythonScriptController extends Controller
{
    public function index(Request $request)
    {
        // Path ke citra Anda
        $imagePath = public_path('images/IMG-20231024-WA0032.jpg'); // Ganti dengan path ke citra Anda

        // Jalankan script Python untuk menghasilkan histogram
        $command = escapeshellcmd("python " . base_path('app/Scripts/script.py') . " " . escapeshellarg($imagePath));
        $output = shell_exec($command . " 2>&1"); // Jalankan script Python dan tangkap outputnya

        // Path ke gambar histogram yang telah disimpan
        $histogramImagePath = public_path('images/histogram.png');

        // Cek apakah histogram.png benar-benar ada
        if (!file_exists($histogramImagePath)) {
            // Jika tidak ada, tampilkan pesan error atau log
            Log::error("File histogram.png tidak ditemukan setelah menjalankan script Python.");
            abort(404); // Contoh penanganan error, sesuaikan dengan kebutuhan Anda
        }

        // Tampilkan view dan kirimkan path histogram
        return view('python_output', ['output' => asset('images/histogram.png')]);
    }

    public function show_histogram_detail(Request $request)
    {
        // Path ke citra Anda
        $image = $request->session()->get('uploaded_image');
        $imagePath = public_path('images/input/'.$image);

        // Jalankan script Python untuk menghasilkan histogram
        $command = escapeshellcmd("python " . base_path('app/Scripts/HistogramDetail.py') . " " . escapeshellarg($imagePath));
        $output = shell_exec($command . " 2>&1"); // Jalankan script Python dan tangkap outputnya

        // Path ke gambar histogram yang telah disimpan
        $histogramImagePath = public_path('images/histogram.png');

        // Cek apakah histogram.png benar-benar ada
        if (!file_exists($histogramImagePath)) {
            // Jika tidak ada, tampilkan pesan error atau log
            Log::error("File histogram.png tidak ditemukan setelah menjalankan script Python.");
            abort(404); // Contoh penanganan error, sesuaikan dengan kebutuhan Anda
        }

        // Tampilkan view dan kirimkan path histogram
        return redirect('/image_edit');
    }

    public function show_histogram_rgb_detail(Request $request)
    {
        $image = $request->session()->get('uploaded_image');
        $imagePath = public_path('images/input/'.$image);

        // Jalankan script Python untuk menghasilkan histogram
        $command = escapeshellcmd("python " . base_path('app/Scripts/HistogramRGBDetail.py') . " " . escapeshellarg($imagePath));
        shell_exec($command . " 2>&1"); // Jalankan script Python dan tangkap outputnya

        // Path ke gambar histogram yang telah disimpan
        $histogramImagePath = public_path('images/histogram_rgb.png');

        // Cek apakah histogram.png benar-benar ada
        if (!file_exists($histogramImagePath)) {
            // Jika tidak ada, tampilkan pesan error atau log
            Log::error("File histogram.png tidak ditemukan setelah menjalankan script Python.");
            abort(404); // Contoh penanganan error, sesuaikan dengan kebutuhan Anda
        }

        // Tampilkan view dan kirimkan path histogram
        return redirect('/image_edit');
    }

    public function show_gray_histogram_detai(Request $request)
    {
        $image = $request->session()->get('uploaded_image');
        $imagePath = public_path('images/input/'.$image);

        // Jalankan script Python untuk menghasilkan histogram
        $command = escapeshellcmd("python " . base_path('app/Scripts/HistogramGrayDetail.py') . " " . escapeshellarg($imagePath));
        shell_exec($command . " 2>&1"); // Jalankan script Python dan tangkap outputnya

        // Path ke gambar histogram yang telah disimpan
        $histogramImagePath = public_path('images/histogram_gray.png');

        // Cek apakah histogram.png benar-benar ada
        if (!file_exists($histogramImagePath)) {
            // Jika tidak ada, tampilkan pesan error atau log
            Log::error("File histogram.png tidak ditemukan setelah menjalankan script Python.");
            abort(404); // Contoh penanganan error, sesuaikan dengan kebutuhan Anda
        }

        // Tampilkan view dan kirimkan path histogram

        return redirect('/image_edit/gray');
    }
}
