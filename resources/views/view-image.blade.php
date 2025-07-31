@extends('layouts.home')

@section('container')
    <div class="justify-self-center">
        @if ($image_data->private == 0)
        
        <div class="w-64 h-44 lg:ml-70 mt-10">
            <img src="{{asset('storage/'.$image_data->file_name)}}" alt="">
            @if($image_data->user_id > 0)
           
                <p class="justify-self-center">Uploaded By : {{$image_data->User->name}}</p>
           

            @else
                <p class="justify-self-center">Uploaded By : Anonymous</p>
            @endif
                
       </div>    
       
       <div class="lg:ml-75">
            <ul class="flex">
                    <div class="flex p-2">
                        <div class="pr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                        </svg>
                        </div>

                        <li class="font-semibold">HTML</li>
                        
                    </div>
                    <div class="flex p-2">
                        
                        <li class="font-semibold">View</li>
                    </div>
                    <div class="flex p-2">
                        
                        <li class="font-semibold">Direct</li>
                    </div>
                    
                </ul>
       </div>

       @elseif($image_data->private == 1)

       <div class="justify-self-center">
        
        @if ($image_data->user_id == Auth::id())
           
       
        <div class="w-64 h-44 lg:ml-70 mt-10">
                <img src="{{asset('storage/'.$image_data->file_name)}}" alt="">
                 @if($image_data->user_id > 0)
           
                <p class="justify-self-center mt-2">Uploaded By : {{$image_data->User->name}}</p>
           

                @else
                    <p class="justify-self-center mt-2">Uploaded By : Anonymous</p>
                @endif
                
        </div>    
        <div class="lg:ml-75">
                <ul class="flex ">
                    <div class="flex p-2">
                        <div class="pr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                        </svg>
                        </div>

                        <li class="font-semibold">HTML</li>
                        
                    </div>
                    <div class="flex p-2">
                        
                        <li class="font-semibold">View</li>
                    </div>
                    <div class="flex p-2">
                        
                        <li class="font-semibold">Direct</li>
                    </div>
                    
                </ul>
               
            @else

            <h5 class="justify-self-center lg:ml-70 lg:mt-10 text-5xl font-semibold">Something wrent wrong.....</h5>
            <h5 class="justify-self-center lg:ml-60 lg:mt-1 text-xl font-semibold">Please Login as owner of this image, to access this file</h5>

            <div class="justify-self-center lg:ml-60 mt-5 bg-blue-500">
                <button class="p-2 text-white">Login As Owner</button>
            </div>

        @endif

        
        </div>
            
       </div> 
       @elseif($image_data->private == 2)  
        <div class="justify-self-center">

        
       <div class="lg:ml-50">
            <ul class="">
                 <div class="w-64 h-44 lg:ml-20 mt-10">
                    <img src="{{asset('storage/'.$image_data->file_name)}}" alt="">
                    @if($image_data->user_id > 0)
                
                        <p class="justify-self-center">Uploaded By : {{$image_data->User->name}}</p>
                

                    @else
                        <p class="justify-self-center">Uploaded By : Anonymous</p>
                    @endif
            
       </div>    
       <div class="lg:ml-20">
            <ul class="flex">
                    <div class="flex p-2">
                        <div class="pr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                        </svg>
                        </div>

                        <li class="font-semibold">HTML</li>
                        
                    </div>
                    <div class="flex p-2">
                        
                        <li class="font-semibold">View</li>
                    </div>
                    <div class="flex p-2">
                        
                        <li class="font-semibold">Direct</li>
                    </div>
                    
                </ul>
           
        </div>
        </div>
        @endif
        
    </div>
@endsection