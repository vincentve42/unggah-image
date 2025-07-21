@extends('layouts.home')

@section('container')
<div class="grid lg:grid-cols-2 grid-cols-1">
    <div class="p-5 shadow-xs pt-5  w-full rounded-full lg:hidden">
        <img src="stewie.jpg" alt="" srcset="" class="">
    </div>
    <div class="pt-10 overflow-hidden">
        <div class="w-full">
        <h1 class="lg:pl-5 pl-5 pt-5 pb-1 lg:text-3xl text-2xl flex text-blue-400 lg:justify-self-start justify-self-center">Tentang</h1>
        <h1 class="lg:pl-5 pl-5  lg:text-3xl text-2xl flex text-blue-400 lg:justify-self-start justify-self-center">Kami</h1>
        <p class="pl-10 lg:pl-5  text-xs lg:text-sm pt-5 lg:justify-self-start w-90 lg:w-full  lg:pr-1 pr-2 hover:translate-x-1 hover:scale-105 transition duration-300">Kami adalah platform unggah gambar cepat dan gratis yang dirancang untuk memudahkan siapa saja menyimpan, membagikan, dan mengelola gambar secara online. Didirikan dengan misi memberikan layanan penyimpanan gambar yang ringan, cepat, dan andal, Kami hadir sebagai solusi ideal bagi pengguna yang membutuhkan cara sederhana untuk berbagi gambar tanpa harus membuat akun atau menghadapi proses rumit.</p>
    </div>
    <div class="lg:w-full w-100 pr-2">
        <h1 class="pl-4 pb-2 pt-5 text-xl font-semibold lg:text-start text-center hover:scale-120 hover:translate-x-20 transition duration-500 hover:text-blue-500">Visi</h1>
        <ul>
            <li class="pl-10 lg:pl-5 lg:text-sm text-xs hover:translate-x-10 hover:scale-115 transition duration-300">Menjadi platform unggah gambar pilihan utama yang cepat, aman, dan mudah diakses siapa saja.</li>
        </ul>
    </div>
     <div class="lg:w-full w-100 pr-2">
        <h1 class="pl-4 pb-2 pt-5 text-xl font-semibold lg:text-start text-center hover:scale-120 hover:translate-x-20 transition duration-500 hover:text-blue-500">Misi</h1>
        <ul class="">
            <div class="flex pl-9 lg:pl-3 items-center justify-items-center hover:translate-x-10 hover:scale-110 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <li class=" lg:text-sm text-xs">Menjadi software Open Source.</li>
            </div>
            <div class="flex pl-9 lg:pl-3 items-center justify-items-center hover:translate-x-10 hover:scale-110 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <li class=" lg:text-sm text-xs">Cepat memproses image yang diupload.</li>
            </div>
            <div class="flex pl-9 lg:pl-3 items-center justify-items-center hover:translate-x-10 hover:scale-110 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <li class=" lg:text-sm text-xs ">Fleksibel dan dapat diintegrasikan dengan software lain.</li>
            </div>
            
        </ul>
    </div>
    </div>
    <div class="p-5 shadow-xs ml-60 w-196 hidden lg:flex">
        <img src="stewie.jpg" alt="" srcset="" class="">
    </div>
   <div class="pt-10 pl-1 shadow-xs w-256 hidden lg:flex">
        <img src="feature.png" alt="" srcset="" class="w-172">
    </div>
    <div>
        <div class="lg:w-full lg:pt-50 w-100 pr-2 lg:ml-60 pt-10">
        <h1 class="pl-10 pb-2 lg:pt-10 text-xl font-semibold lg:text-start text-center">Fitur Kami</h1>
        <ul>
            <li class="pl-10 lg:pl-10  lg:text-sm text-xs hover:scale-110 transition duration-300">🔄 Dukungan API publik untuk integrasi otomatis.</li>
             <li class="pl-10 lg:pl-10  lg:text-sm text-xs hover:scale-110 transition duration-300">📁 Mendukung berbagai format gambar: JPG, PNG, dll.</li>
              <li class="pl-10 lg:pl-10  lg:text-sm text-xs hover:scale-110 transition duration-300">🌐 Dapat diakses dari berbagai perangkat (responsif).</li>
               <li class="pl-10 lg:pl-10  lg:text-sm text-xs hover:scale-110 transition duration-300">🔒 Penyimpanan aman dan kontrol privasi gambar.</li>
        </ul>
        <button class="ml-10 bg-blue-500 rounded-4xl p-4 text-white lg:mt-10 hover:scale-110 transition duration-300 hover:bg-indigo-500">Join Sekarang</button>
    </div>
    </div>
</div>
@endsection