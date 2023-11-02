<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-200">
    {{-- <input type="hidden" name="nis"> --}}
    <div class="bg-purple-500 text-white text-4xl font-bold top-0 left-0 right-0 py-10">
        <div class="container mx-auto text-center">{{ config('app.name', 'Laravel') }}</div>
    </div>
<div class="flex">
   <section class="border-solid border-2 border-purple-500 flex justify-center text-center w-[30%] h-[85vh]">
    <div class="w-[80%] flex justify-center flex-col">
        <div class="flex justify-center">
            <img src="{{ ('img/logo_derren.png')}}" alt="" class="mt-14 mb-4 rounded-full">
        </div>
        <div class="text-xl font-semibold mb-3">Nis mu : {{$nis}}</div>
        @if($siswa == null)
        <div class="text-1xl text-center">..:: SISWA TIDAK DITEMUKAN ::..</div>
        @else
        <div class="text-4xl font-semibold mb-3">{{$siswa->nama }}</div>
        <div class="text-lg font-semibold mb-3">NISN : {{$siswa->nisn}}</div>
        <div class="text-lg font-semibold mb-3">Kelas : {{$siswa->kelas->nama_kelas}}</div>
        <div class="text-lg font-semibold mb-3">Jurusan : {{$siswa->kelas->jurusan->nama_jurusan}}</div>
        <div class="text-lg font-semibold mb-3">Alamat : {{$siswa->alamat}}</div>

        @endif
    </div>
</section>
<section class="border-solid border-2 border-purple-500 w-[80%]">
    <div class="relative overflow-x-auto">
        <table class="w-full text-lg text-left text-gray-700 ">
            <thead class="text-gray-900 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Kode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pelanggaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hapus..??
                    </th>
                </tr>
            </thead>
            
        </table>
    </div>
</section>
</div>
</body>
</html>
