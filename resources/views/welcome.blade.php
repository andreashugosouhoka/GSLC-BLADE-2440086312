welcome.blade.php

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('template')

    @section('title', 'Click Home to see something..')

    @section('content')
        <head>
                

                <nav class="navbar navbar-expand-lg navbar-primary bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Home
        </div>
      </nav>
        </body>
    @endsection
</html>
