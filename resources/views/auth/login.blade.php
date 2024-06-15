@extends('layouts.app')

@section('content')

<div class="flex justify-between mt-10 mx-10">
    <img src="{{ asset('/img/educacion.png')}}" alt="logo" class="object-contain" style="width: 200px;">
    <div class="text-center text-2xl font-bold pr-20"> 
        <p>TECNOLÓGICO NACIONAL DE MÉXICO</p>  
        <p>INSTITUTO TECNOLÓGICO DE TLALNEPANTLA</p>
    </div>
    <img src="{{ asset('/img/ittla.png')}}" alt="otra imagen" class="object-contain" style="width: 100px;">
</div>
   
<div class="flex justify-center items-center">
    <div class="bg-white shadow-md rounded-lg mt-20" style="width: 500px;">
        <div class="flex justify-center bg-green-900 py-5">
            <h1 class="text-base font-bold text-white uppercase text-center px-5">Sistema de Integral de Encuestas de Egreso</h1>

        </div>
        <div class="p-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mt-2">
                    <label for="email" class="block font-medium text-gray-700 font-bold text-xl">Correo</label>
                    <input id="email" type="text" name="email" value="{{ old('email') }}"  required autofocus
                        class="block w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm @error('technical_number') border-red-500 @enderror" placeholder="ingrese su correo">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block font-medium text-gray-700 font-bold text-xl">Contraseña</label>
                    <input id="password" type="password" name="password" required
                        class="block w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm @error('password') border-red-500 @enderror" placeholder="ingrese su contraseña">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-green-700 text-stone-800 shadow-sm focus:ring-green-700 focus:bg-green-700">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recordar contraseña') }}</span>
                    </label>
                </div>

                <div class="flex items-center mt-20">
                    <button type="submit" class="w-full items-center px-4 py-3 border border-transparent rounded-md font-semibold text-sm text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-center">
                        INICIAR SESIÓN
                    </button>
                </div>
            </form>
        </div>
        
    </div>
</div>

@endsection