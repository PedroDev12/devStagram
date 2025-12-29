@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')

<div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-20 md:mt-2">

    <!-- Collage de imágenes -->
    <div class="relative w-[320px] h-[420px]">

        <!-- Imagen izquierda -->
        <img 
            src="{{ asset('img/imagen.jpg') }}"
            class="absolute top-10 -left-10 w-48 h-64 object-cover
                   rounded-3xl rotate-[-8deg] z-10 shadow-xl"
        >

        <!-- Imagen central -->
        <img 
            src="{{ asset('img/registrar.jpg') }}"
            class="absolute top-0 left-1/2 -translate-x-1/2
                   w-56 h-80 object-cover rounded-3xl z-20 shadow-2xl"
        >

        <!-- Imagen derecha -->
        <img 
            src="{{ asset('img/imagen_2.jpg') }}"
            class="absolute top-12 -right-10 w-48 h-64 object-cover
                   rounded-3xl rotate-[8deg] z-10 shadow-xl"
        >
    </div>

    <!-- Formulario -->
    <div class="w-full md:w-3/12">
        <div class="bg-white p-8 rounded-xl shadow-xl">

            <form method="POST" action="" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block mb-2 uppercase text-gray-500 font-bold text-sm">
                        Nombre
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500"
                    />
                </div>

                <div>
                    <label for="username" class="block mb-2 uppercase text-gray-500 font-bold text-sm">
                        Username
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500"
                    />
                </div>

                <div>
                    <label for="email" class="block mb-2 uppercase text-gray-500 font-bold text-sm">
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu email de registro"
                        class="border p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500"
                    />
                </div>

                <div>
                    <label for="password" class="block mb-2 uppercase text-gray-500 font-bold text-sm">
                        Password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="********"
                        class="border p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500"
                    />
                </div>

                <div>
                    <label for="password_confirmation" class="block mb-2 uppercase text-gray-500 font-bold text-sm">
                        Repetir Password
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="********"
                        class="border p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500"
                    />
                </div>

                <input
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                           uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>

        </div>
    </div>

</div>

@endsection
