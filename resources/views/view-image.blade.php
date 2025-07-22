@extends('layouts.home')

@section('container')
    <div class="justify-self-center">
        @if ($image_data->private == 0)
        <div class="w-64 h-44 lg:ml-60 mt-10">
            <img src="{{asset('storage/'.$image_data->file_name)}}" alt="">
            
       </div>    
       <div class="lg:ml-60">
            <ul class="">
                <li class="font-semibold">Embed Codes</li>
                
            </ul>
            <select name="cek" id="" class="bg-gray-100 p-1">
                <option value="">Viewer Link</option>
                <option value="">Embed Direct Link</option>
                <option value="">HTML Codes</option>
            </select>
       </div>

       @else
       @if ($image_data->user_id == Auth::id())
           
       
        <div class="w-64 h-44 lg:ml-60 mt-10">
                <img src="{{asset('storage/'.$image_data->file_name)}}" alt="">
                
        </div>    
        <div class="lg:ml-60">
                <ul class="">
                    <li class="font-semibold">Embed Codes</li>
                    
                </ul>
                <select name="cek" id="" class="bg-gray-100 p-1">
                    <option value="">Viewer Link</option>
                    <option value="">Embed Direct Link</option>
                    <option value="">HTML Codes</option>
                </select>
        </div>

         @else

       <h1 class="text-center lg:ml-60">Anda tidak memiliki izin untuk melihat file ini</h1>
       
       @endif

      

        @endif
        
    </div>
@endsection