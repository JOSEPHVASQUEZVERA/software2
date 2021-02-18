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
    <body >
    
        <div class="contenedor">
        @include('partials.nav')
        <div class="row content" >
        @include('partials.aside')
        
        <div class="datos">
            <div class='bg-secondary data'>
                <h6 class=type>Datos Personales</h6>
            </div>
            <div class="margen d-flex justify-content-star">
                <div>
                <div class="div-margen">
                <h6 class="word">Nombre: <u>{{$data[0]->nombres}}</u></h6>
                </div>
                <div class="div-margen" >
                <h6 class="word">Apellido: <u>{{$data[0]->apellidosP}}</u></h6>
                </div>
                <div class="div-margen">
                <h6 class="word">DNI: <u>{{$data[0]->dni}}</u></h6>
                </div>
                <div class="div-margen">
                <h6 class="word">Codigo: <u>{{$data[0]->CodigoAlumno}}</u></h6>
                </div>
                <div>
                <h6 class="word">Email: <u>{{$data[0]->correo}}</u></h6>
                </div>
                <div class="div-margen">
                <h6 class="word">Facultad: <u>{{$data[0]->nombre_fac}}</u></h6>
                </div>
                <div class="div-margen">
                <h6 class="word">Escuela: <u>{{$data[0]->nombre_esc}}</u></h6>
                </div>
                <div class="div-margen">
                <h6 class="word">Ciclo: <u>{{$data[0]->ciclo}}</u></h6>
                </div>

                </div>
              
            </div>
                      
        
            
        </div>
        </div>
        
       
        
        
        








        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>