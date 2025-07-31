<div class="pl-2 lg:w-470">
    <div>
        <h1 class="text-xl font-bold p-2">Album</h1>
    </div>
    <ul class='flex'>
        <a href="{{route('SetOrder', ['order' => 1])}}"><li class="p-2 flex hover:border-b-3 border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
            </svg>

            Terbaru
        </li></a>
         <a href="{{route('SetOrder', ['order' => 2])}}"><li class="p-2 flex hover:border-b-3 border-blue-500">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />
             </svg>



            Terlama
        </li></a>
        
         <a href="{{route('SetOrder', ['order' => 4])}}"><li class="p-2 flex hover:border-b-3 border-blue-500">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
           </svg>




            A-Z
        </li></a>
        
    </ul>

        <div class="ml-5">
        <div class="grid lg:grid-cols-5 grid-cols-2 lg:w-400 lg:mt-5 mt-5">
            @foreach($album_user as $single_data)
            <div class="lg:w-64  w-32 mb-5 shadow-xs">
                

            <input type="hidden" name="" value="https:://localhost.com/view{{ $single_data->url }}" id="{{'Link'.$single_data->id}}">

            
            <div class="flex justify-end items-center justify-items-center">
                <div class="ml-2 flex">
                    <input type="checkbox" name="justif" id="">
                </div>
            </div>
            @if($single_data->Upload->count() > 0)
            
            <a href="view/{{ $single_data->url }}"><img src="{{asset('storage/'.$single_data->Upload()->first()->file_name)}}" alt="" class="lg:w-64 lg:h-64 w-32 h-32"></a>
            @else
            <a href="view/{{ $single_data->url }}"><img src="{{asset('storage/')}}" alt="" class="lg:w-64 lg:h-64 w-32 h-32"></a>
            @endif
            <div class="justify-self-center pt-2">
                <p>{{$single_data->nama}}</p>
            </div>
            <div class="flex justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <p class='text-xs lg:pr-3'>{{$single_data->Upload->count()}}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                </svg>
                </div>

            </div>
             @endforeach
        </div>
       
        </div>
        
        
    </div>
  
    </div>
    @include('layouts.popup.create-album')
    </div>
    
    
</div>

