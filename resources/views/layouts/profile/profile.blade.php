<div>
    <div class="bg-gray-100 w-full h-32">
        <div class="top-2">
        <div class="flex bg-gray-500 justify-self-center lg:justify-self-end absolute  top-28 lg:top-21 items-center justify-items-center p-1 mr-5 rounded-2xl pr-2">
            <div class="p-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
</svg>
</div>
            <p class="text-white text-xs">Change Background</p>
        </div>

        </div>
    </div>
    <div class="flex lg:justify-between">
        <div class="flex">
        <div class="lg:h-64 lg:w-64 w-48 h-48 rounded-full pl-1 pt-3">
            <img src="{{asset($user_data->profile_url)}}" alt="">
        </div>
        <div>
            <p class="font-semibold pt-6 text-xl">{{$user_data->name}}</p>
            <div class="flex">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>

                </div>
                <p class='text-blue-500 text-xs pl-1'>Edit</p>
            </div>
            <div class="flex ">
                <div class="flex justify-between ">
                <p class="mr-2">{{$following_count}}</p><p class="text-gray-300">Following</p><p class="lg:ml-5 ml-3 text-gray-300"> | </p><p class="ml-2">0</p><p class="text-gray-300 ml-1">Follower</p>
            </div>
            
            
            </div>
            <div class="flex ">
                <div class="flex justify-between ">
                <p class="mr-2">{{$following_count}}</p><p class="text-gray-300">Image</p><p class="lg:ml-5 ml-3 text-gray-300"> | </p><p class="ml-2">0</p><p class="text-gray-300 ml-1">Album</p>
            </div>
            
            
            </div>  
            
        </div>
        

        
    </div>

     <div class="mt-5">
        
        
         <div class=" border border-gray-300  rounded-4xl mr-2 mt-5">

        <input type="text" name="" placeholder="Search Here" id="" class="p-1 lg:w-full w-48">

         </div>

        <div class="flex bg-gray-100 rounded-4xl p-1 pb-2 pl-4 pr-4 pt-2 ml-15 w-48 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
</svg>

            <div class="pl-2">
            <button @click='create_album = !create_album' class="text-gray-500 ">Create Album</button>
            </div>
    </div>
    
    <div>
       
    </div>
    
</div>

 