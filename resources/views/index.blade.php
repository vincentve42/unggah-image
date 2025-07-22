@extends('layouts.home')

@section('container')
    <div x-show='title' class="justify-self-center lg:pt-10 pt-10  text-center lg:ml-60">
        <h1 class="lg:text-4xl text-2xl font-bold  justify-self-center ">Upload and share your images.</h1>
        <div class="lg:pt-5 justify-self-center">
            <h2 class="text-center lg:text-xl lg:flex hidden ">Drag and down your image, and you can share it now to entire world and 4MB Limit.</h2>
            <h2 class="text-center lg:text-xl lg:flex hidden lg:ml-5">In form of direct, image files, or html code for free. With lightning speed.</h2>
        </div>
        <div class="lg:pt-5 pt-5 text-center">
            <input type="hidden" name="option" value="0">
            <div>

            
            <button @click='upload = !upload; navbar = false; title = false' type="" class="bg-blue-500 text-white p-2 pl-6 pr-6">Start Uploading</button>

            </div>
        </div>
    </div>
@endsection