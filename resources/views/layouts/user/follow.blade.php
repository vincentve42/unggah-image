@php
    
    use App\Models\User;
@endphp

<div class="pl-2 lg:w-470">
    
    
    <div>
        
        <h1 class="text-xl font-bold p-2">Following</h1>
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
         
        
    </ul>
  
        

        <div class="ml-5">
        <div class="grid lg:grid-cols-5 grid-cols-2 lg:w-400 lg:mt-5 mt-5">
            @foreach($data_following as $single_data)
            <div class="lg:w-64  w-32 mb-5 shadow-xs">
                

           

            
            <div class="flex justify-end items-center justify-items-center">
                <div class="ml-2 flex">
                    
                    
                        
                    

                </div>
            </div>
            
            <a href="view/{{ $single_data->url }}"><img src="{{asset(''. User::find($single_data->followed_id)->profile_url)}}" alt="" class="lg:w-64 lg:h-64 w-32 h-32"></a>
            <div class="justify-self-center pt-2">
                <p>{{User::find($single_data->followed_id)->name}}</p>
            </div>
            <div class="flex justify-end">
                <div onclick="Link({{ 'Link'.$single_data->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
</svg>

                </div>

            </div>
        </div>
        @endforeach
        </div>
        
    </div>
  
    </div>
    @include('layouts.popup.create-album')
    </div>
    
    
</div>

