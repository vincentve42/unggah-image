@extends('layouts.home')

@section('container')
<div class="justify-self-center">


    <div class="lg:flex lg:justify-between pt-10">
        <div>
            <form action="{{route('Login')}}" method="post">
                @csrf
                <h5 class="text-xl">Masuk</h5>
                
                <div class="mt-5">
                    <p class="font-semibold">Email </p>
                    <input type="text" name="email" placeholder="Masukan email anda" id="" class="bg-gray-200 p-2">
                </div>
                <div class="mt-5">
                    <p class="font-semibold">Password </p>
                    <input type="text" name="password" placeholder="Masukan password anda" id="" class="bg-gray-200 p-2">
                </div>
                <div class="mt-5 flex">
                  
                    <p class="text-xs text-blue-500">Forgot your Password?</p>
                </div>
                @if ($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <ul>
                            <li class="text-red-500 text-xs">{{$error}}</li>
                        </ul>
                    @endforeach
                </div>
                @endif
                <div class="mt-5">
                    <button type="submit" class="bg-gray-200  p-2 text-black">Masuk </button>
                </div>
            </form>
        </div>
        <div>
            <h5 class="justify-self-center lg:mt-35 mt-10 pl-30 pr-30">Atau</h5>
        </div>
        <div class="lg:mt-0 mt-5">
            
            <div>
                <p>Masuk dengan</p>
            </div>
            <div class="flex pt-5">
                
                   
                    <img src="{{asset('google.svg')}}" alt="" srcset="" class="w-6 h-6">
            </div>
        </div>
    </div>

</div>
@endsection