<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7711c3f1fc.js" crossorigin="anonymous"></script>
    <title> {{ $title }} </title>
    @vite('resources/js/app.js')
  </head>

  <body>
    {{-- HEADER COMUNE IN TUTTE LE PAGINE --}}
    <!-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> -->
    @include('header.header')

    {{-- IN QUESTA WEB APP CAMBIA SOLO IL CONTENUTO DEL MAIN --}}
    <main>
      <div class="container">
        @yield('main')
      </div>
    </main>

    {{-- FOOTER COMUNE IN TUTTE LE PAGINE --}}
    @include('footer.footer')
  </body>

</html>
