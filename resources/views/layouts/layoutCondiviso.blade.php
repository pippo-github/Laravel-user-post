<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>applicazione finale</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel='stylesheet' type='text/css' href='{{asset("./css/footerBar/style.css")}}' />
</head>
<body>
 
 @include('layouts.navBarApplicazione')

<div style='position:relative; width:100%;'>

    
    <div class="container" style="margin-top: 150px;  min-height:62.2vh;">
        
        @include('gestioneMessaggiSuccessi-Errori.messaggiUtente')
        
        @yield("contenuti")
        
    </div>    
    
    <div id='footerBar' class="p-2 text-white text-center">
            &copy; giuseppe tarallo | London, UK  2023
    </div>

</div>



</body>
</html>



