<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6433b517fa.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
        .algo {
            background-color: royalblue;
            border-radius: 10px;
            text-align:center;
            border:solid 1px black;
            width:85px;
            margin:10px auto;
            transition: color .5s;
            }
        .algo:hover {
            color: white;
            }
            .title {
    font-size: 12px;
    font-weight: bold;
}
.for {
    margin-left: 5.5px;
}

.data{
    width:1000px;
    height:35px
}
.datos{
    background-image: url('https://pbs.twimg.com/media/EKYxaXWWoAAaP3Y.jpg:large');
    background-size:cover;
    position:relative;
    z-index:-10;
    
}
.datos::before{
    content:'';
    position:absolute;
    top:0;
    right:0;
    left:0;
    bottom:0;
    background-color:black;
    z-index:-5;
    opacity:0.5
}
.content{
    height:100vh
    
}
.margen{
    margin:0 80px;
    z-index:1
    
}
.contenedor{
    width:100vw
}
.type{
    text-align:center;
    margin:0;
    font-size:20px;
    font-weight:bold;
    color:white;
    letter-spacing: 2px;
}
.div-margen{
    margin:20px 0
}
.word{
    margin:0;
    font-size:20px;
    font-weight:400;
    color:white;
    letter-spacing: 1.5px;
    font-family: 'Roboto', sans-serif;
}

        </style>



</head>

<body>

<div class="contenedor">
        @include('partials.nav')
        <div class="row content" >
        @include('partials.aside')


<div>
    <h6>Bienvenido a la Matricula 2020-II dsdsdsd</h6>
    <h6>Antes de continuar con el proceso de matricula, verifique que cumpla con los 
        requisitos para la matricula que estan listados en el siguiente cuadro:</h6>

    <br>
    <input type="checkbox" name="Voucher" {{$data[0]->voucher == 'true' ? 'checked=""' : ''}} disabled="true"> Voucher> 
    <label for="voucher">Voucher</label>
    <br>
    <input type="checkbox" name="encuesta" {{$data[0]->encuesta == 'true' ? 'checked=""' : ''}} disabled="true"> Encuesta> 
    <label for="encuesta">Encuesta</label>
     <br>
    <input type="checkbox" name="ficha" {{$data[0]->ficha == 'true' ? 'checked=""' : ''}} disabled="true"> Ficha> 
    <label for="ficha">Ficha</label>

    //{{$data[0]->voucher}}
   // {{$data[0]->encuesta}}
    //{{$data[0]->ficha}}
    

    @php
    $vou=$data[0]->voucher;
    @endphp

    @php
    $enc=$data[0]->encuesta;
    @endphp

    @php
    $fic=$data[0]->ficha;
    @endphp

    @if($vou==true && $enc==true)

            <button type="button">Continuar</button>
    @endif






</div>







</body>

</html>