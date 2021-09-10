<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
    <link rel="stylesheet" href="{{asset('css/designcontent.css')}}">
    <script src="https://kit.fontawesome.com/370c428977.js" crossorigin="anonymous"></script>
    
    <title>Angie Pino</title>
</head>
<body style="display:flex;">
<div class="menumain">
        <div class="fijo">
        <div class="perfil"></div>
        <div class="separador"></div>
        <span class="typed"></span>
        <ul class="menup">
            <li><a href="">About</a></li>
            <li><a href="">Experience</a></li>
            <li><a href="">Education</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="footermenu">
            Copyright © Angie Pino 
        </div> 
        </div>
    </div>
    <div class="contentmain">
        
        @yield('content')
        
        <div class="footer">
            Copyright © Angie Pino 
        </div>
        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>