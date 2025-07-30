<div>
    @if(is_null($user_data->banner))
<div class="bg-gray-100 w-full h-32">
    @else
<div class="bg-gray-100 w-full h-32" style="background-image : url({{ asset('storage/banner/' . $user_data->banner) }})">
    @endif
    
       

        

        

    
    </div>
    <div class="flex lg:justify-between">
        <div class="flex">
        <div class="lg:h-64 lg:w-64 w-48 h-48 rounded-full pl-1 pt-3">
            <img src="{{asset($user_data->profile_url)}}" alt="">
        </div>
        <div>
            <div class="flex items-center justify-items-center">
            <p class="font-semibold pt-6 text-xl">{{$user_data->name}}</p>
           
            <form action="{{route('FollowUser')}}" method="get">
                @csrf
                <input type="hidden" name="id" value="{{$user_data->id}}">
            <div class="flex mt-6 ml-6 bg-indigo-500 items-center rounded-2xl justify-items-center p-1">
 @if(Auth::user()->Following->where('followed_id', $user_data->id)->count() < 1)
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
</svg>

            <button type="submit" class="font-semibold   text-white  rounded-2xl text-xs">Follow</button>
             
                 
             @else

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
</svg>

            <button type="submit" class="font-semibold   text-white  rounded-2xl text-xs">UnFollow</button>
@endif
            </div>
            </form>
            
           
            </div>
            <div class="flex">
                <div>
                   

                </div>
                
            </div>
            <div class="flex ">
                <div class="flex justify-between ">
                <p class="mr-2">{{$following_count}}</p><p class="text-gray-300">Following</p><p class="lg:ml-5 ml-3 text-gray-300"> | </p><p class="ml-2">0</p><p class="text-gray-300 ml-2">Follower</p>
            </div>
            
            
            </div>
            <div class="flex ">
                <div class="flex justify-between ">
                <p class="mr-2">{{$image_count}}</p><p class="text-gray-300">Image</p><p class="lg:ml-5 ml-3 text-gray-300"> | </p><p class="ml-2">{{ $album_count }}</p><p class="text-gray-300 ml-2">Album</p>
            </div>
            
            
            </div>  
            
        </div>
        

        
    </div>

     <div class="mt-5">
        
        <form action="{{route('Search')}}" method="get">
         <div class=" border border-gray-300  rounded-4xl mr-2 mt-5">

            <input type="hidden" name="pencarian" value="{{session()->get('page')}}">
            @if(session('page') == 1)

            


            @endif
        <input type="text" name="search" placeholder="Search Here" id="" class="p-1 lg:w-full w-48">

         </div>
</form>
        
    
    <div>
       
    </div>
    
</div>

 