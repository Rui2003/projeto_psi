<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('titulo.pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <br><h2><b> Make Your Transition</b></h2>
<br>
<img src="img/dj.jpg">
</head>
<body style="text-align:center;">
    <br>
    <br>
        <h2><b>@yield('header')</b></h2>
        <a class="btn btn-secondary" href="welcome" role="button">Index &raquo;</a>
        <a class="btn btn-secondary" href="noticias" role="button">Noticias &raquo;</a>
         <a class="btn btn-secondary" href="empresa" role="button">Empresa &raquo;</a>
          <a class="btn btn-secondary" href="ondeestamos" role="button">Onde Estamos &raquo;</a>
        <a class="btn btn-secondary" href="contactos" role="button">Contactos &raquo;</a></p>

        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')"></script>

        @yield('conteudo')


       
</body>
</html>