<div x-show='create_album'>
  
 
  <div class="fixed inset-0 bg-black/30 backdrop-blur-sm z-40"></div>

  
  <div class="fixed z-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
              shadow-2xl shadow-indigo-500 rounded-4xl w-128 lg:h-92 bg-white p-6">
     
    <form action="">
        <div class="flex justify-between items-center justify-items-center">

        <h5 class="lg:text-xl lg:pl-4 pt-5">Create Album</h5>
        <div class="pr-2 pt-2">
        <svg @click='create_album = !create_album' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>

</div>
        </div>
        <div class="lg:pt-5 lg:pl-5">
        <p>Nama Album</p>
        <input type="text" name="" class="p-2 rounded-2xl bg-gray-100" placeholder="Nama Album Kamu" id="">
        </div>
        <div class="lg:pt-5 lg:pl-5">
        <p>Perizinan</p>
        <select name="" class="p-2 bg-gray-100 lg:w-64" id="" >
            <option value="">Public</option>
            <option value="">Has Link</option>
            <option value="">Private</option>
        </select>
        </div>
        <div class="lg:pl-5 lg:pt-10 p-2 ">
            <button class="bg-gray-100 p-2">Buat Album</button>
        </div>
    </form>

</div>
</div>
</div>
