
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{--? YIELD DEFINE ESPACIOS DE CONTENIDO DINAMICOS --}}
        {{--? NOS PERMITE INDICAR DONDE SE INSERTARA EL CONTENIDO DE LA VISTA --}}
        @yield('title', config('app.name'))
    </title>

    {{--* VITE NOS PERMITE CONECTAR LARAVEL CON VITE QUE ES UN ADMINISTRADOR Y COMPILADOR DE RECURSOS FRONTEND --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{--* CREAR ESPACCIOS PARA INSERTAR CONTENIDO ADICIONAL  --}}

{{--* La diferencia con @yield es importante:
- @yield: normalmente recibe una sección de contenido.
- @stack: permite acumular contenido de diferentes vistas o componentes. 
--}}
    @stack('styles')
</head>

<body>

    {{--? PERMITE INSERTAR OTROS ARCHIVOS BLADE --}}
    {{--* ENCABEZADO --}}
    @include('components.header')

    <div class="app-container">

        {{--* MENÚ LATERAL --}}
        @include('components.sidebar')

        {{--* CONTENIDO PRINCIPAL --}}
        <main class="main-content">

            @yield('content')

        </main>

    </div>

    {{--* PIE DE PÁGINA --}}
    @include('components.footer')

    {{--* Scripts adicionales por vista --}}
    @stack('scripts')

</body>
</html>
