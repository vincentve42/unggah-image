@if(Auth::user())
<div x-show="upload" x-data='{preview:false}'  x-transition:enter.duration.500ms x-transition:leave.duration.750ms class="shadow-2xl bg-white fixed lg:h-128 w-full">
  <p></p>
@else
<div x-show="upload" x-transition:enter.duration.500ms x-transition:leave.duration.750ms class="shadow-2xl  fixed lg:h-128 w-full">
  
@endif


<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="justify-self-center lg:mr-30 lg:top-20 flex">
        
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20 text-blue-500 ">
        
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
</svg>
<input type="file" name="file" class="absolute top-10 h-20 w-500 left-2 opacity-0" id="" onchange="loadFile(event)" @click = 'preview = !preview'>
</div>

    <h1 class="lg:text-xl text-center lg:mr-30 lg:pt-5">Drag and Drop from your computer</h1>

    @if(Auth::user())
    
 
   <div x-show='preview' class="justify-self-center lg:mr-30 ">
  
    <img src="" alt="" id="output"  class="w-32 h-32">

  </div> 
  <div class="justify-self-center lg:mr-30 ">
    
<p class="mt-5">Izin</p>
  </div>
   <div class="justify-self-center lg:mr-30 mt-5">
    
    <div class="mt-2">
    <select class="p-1 border border-black lg:w-64 w-full" name="izin" id="">
       <option value="0">Public</option>
       <option value="1">Private</option>
       <option value="2">Private ( Only Has Link )</option>
    </select>
  
    </div>
  </div>
  <div class="justify-self-center lg:mr-30 ">
<p class="mt-5">Album</p>
  </div>
   <div class="justify-self-center lg:mr-30 mt-5">
    
    <div class="mt-2">
    <select class="p-1 border border-black lg:w-64 w-full" name="album" id="">
       @foreach ($data_album as $single_data)
         <option value={{ $single_data->id }}>{{$single_data->nama}}</option>
       @endforeach
    </select>
  
    </div>
  </div>
  
  <div class="justify-self-center lg:pt-5 pt-5 lg:mr-30">
    <button type="submit" class="bg-blue-500 p-2 pr-4 pl-4 text-white">Upload</button>
  </div>
    
    @else
     <div x-show='preview' class="justify-self-center lg:mr-30 ">
    <img src="" alt="" id="output" class="w-32 h-32">

  </div> 
    <input type="hidden" name="option" value="0">
    <div class="justify-self-center lg:pt-20 lg:mr-30">
    <button type="submit" class="bg-blue-500 p-2 pr-4 pl-4 text-white">Upload</button>
  </div>

    @endif
  

</form>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  };


</script>