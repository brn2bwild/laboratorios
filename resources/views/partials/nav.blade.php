<nav class="bg-indigo-600 fixed h-screen flex flex-col justify-between text-gray-200">
   {{-- navegación primaria --}}
   <div class="hidden md:flex flex-col items-center justify-between h-screen font-semibold menu-primario">
      <div class="flex flex-col w-full justify-end">
         <div class="flex justify-end">
            <button class="hover:text-indigo-600 hover:bg-gray-200 p-4 botonMenuprimario">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
            </button>
         </div>
         <a class="w-full py-4 px-8 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('dashboard')}}">Dashboard</a>
         <a class="w-full py-4 px-8 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('alumnos.index')}}">Alumnos</a>
         <a class="w-full py-4 px-8 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('laboratorios.index')}}">Laboratorios</a>
         <a class="w-full py-4 px-8 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('indicadores.index')}}">Indicadores</a>
      </div>
      <div class="flex flex-col items-center justify-between w-full">
         <a class="w-full py-4 px-8 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('login')}}">Login</a>
         <a class="w-full py-4 px-8 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('register')}}">Registrarse</a>
      </div>
   </div>

   {{-- navegación iconos --}}
   <div class="hidden flex-col items-center justify-between h-screen font-semibold menu-iconos">
      <div class="flex flex-col w-full justify-end">
         <div class="flex justify-end">
            <button class="hover:text-indigo-600 hover:bg-gray-100 p-4 botonMenuiconos">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
            </button>
         </div>
         <a class="w-full py-4 px-4 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
          </svg></a>
         <a class="w-full py-4 px-4 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('alumnos.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg></a>
         <a class="w-full py-4 px-4 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('laboratorios.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg></a>
         <a class="w-full py-4 px-4 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('indicadores.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg></a>
      </div>
      <div class="flex flex-col items-center justify-between w-full">
         <a class="w-full py-4 px-4 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('login')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
          </svg></a>
         <a class="w-full py-4 px-4 text-center hover:bg-gray-200 hover:text-indigo-600" href="{{route('register')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg></a>
      </div>
   </div>
</nav>
{{-- <script>
   const btnMenuprimario = document.querySelector('.botonMenuprimario');
   const btnMenuiconos = document.querySelector('.botonMenuiconos');
   const menuprimario = document.querySelector('.menu-primario');
   const menuiconos = document.querySelector('.menu-iconos');
   const contenido = document.querySelector('#contenido');

   btnMenuprimario.addEventListener('click', ()=>{
         menuprimario.classList.remove('md:flex');
         menuiconos.classList.add('md:flex');
         contenido.classList.replace('ml-40', 'ml-12');
   });
   btnMenuiconos.addEventListener('click', ()=>{
         menuprimario.classList.add('md:flex');
         menuiconos.classList.add('hidden');
         menuiconos.classList.remove('md:flex');
         contenido.classList.replace('ml-12', 'ml-40');
   });
</script> --}}