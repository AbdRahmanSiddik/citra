<!-- resources/views/show_histogram.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Histogram</title>
</head>
<body>
    <h1>Image Histogram</h1>

    <!-- Tampilkan gambar histogram -->
    <img src="{{ $output }}" alt="Histogram">

    <a href="/show">lihat detail histogram</a>

</body>
</html>
