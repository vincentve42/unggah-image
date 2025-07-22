<div x-show="upload" class="shadow-2xl  absolute lg:h-64 w-full">
<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="justify-self-center lg:mr-30 lg:top-20 flex">
        
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20 text-blue-500 ">
        
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
</svg>
<input type="file" name="file" class="absolute top-10 h-20 w-500 left-2 opacity-0" id="">
</div>

    <h1 class="lg:text-xl text-center lg:mr-30 lg:pt-5">Drag and Drop from your computer</h1>

    @if(Auth::user())

    @else

    <input type="hidden" name="option" value="0">

    @endif
  <div class="justify-self-center lg:pt-20 lg:mr-30">
    <button type="submit" class="bg-blue-500 p-2 pr-4 pl-4 text-white">Upload</button>
  </div>

</form>
</div>