<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Blog</title>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
    <x-navbar/>
    {{ $slot }}
</body>
</html>

{{--
app layout di tambahkan ke halaman lain menggunakan <x-app>ISI_KONTEN</x-app> dan di app.blade.php
ditambahkan {{ $slot }} untuk menampung isi dari halaman lain
--}}