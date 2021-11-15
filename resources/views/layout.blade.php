<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{mix('css/app.css')}}">
   <script src="{{mix('js/app.js')}}" defer></script>
   <meta name="csrf-token" content="{{csrf_token()}}">
   <title>@yield('title')</title>

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <style>
      body{
         font-family: 'Nunito', sans-serif;
      }
   </style>

</head>
<body class="antialiased">
   <div class="w-full leading-normal mx-auto flex">
      <header>
         @include('partials.nav')
      </header>
      <div id="contenido" class="ml-36 pl-4 bg-gray-200">
         @yield('content')
      </div>
   </div>
</body>
<script>
   const btnMenuprimario = document.querySelector('.botonMenuprimario');
   const btnMenuiconos = document.querySelector('.botonMenuiconos');
   const menuprimario = document.querySelector('.menu-primario');
   const menuiconos = document.querySelector('.menu-iconos');
   const contenido = document.querySelector('#contenido');

   btnMenuprimario.addEventListener('click', ()=>{
         menuprimario.classList.remove('md:flex');
         menuiconos.classList.add('md:flex');
         contenido.classList.replace('ml-36', 'ml-10');
   });
   btnMenuiconos.addEventListener('click', ()=>{
         menuprimario.classList.add('md:flex');
         menuiconos.classList.add('hidden');
         menuiconos.classList.remove('md:flex');
         contenido.classList.replace('ml-10', 'ml-36');
   });
</script>
</html>