 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    

{{csrf_field()}}
nom : {{$user->name}} <br>
@php
$var=1
@endphp

   notes globales:   {{$moy->mod1}} {{$moy->cof1}}

<div>
nom modules : {{$notes->mod}}

@foreach($notes as $note)
 nom modules : {{$notes->mod}}
@endforeach

@php
 $coftotal=($moy->cof1)+($moy->cof2)+($moy->cof3)
 @endphp 
 le nombre total do coefficient est {{$coftotal}} <br>



 @php
 $me1= (($moy->mod1)*($moy->cof1))
 @endphp
 @php
 $me2= (($moy->mod2)*($moy->cof2))
 @endphp
 @php
 $me3= (($moy->mod3)*($moy->cof3))
 @endphp
 @php
 $me= ($me1+$me2+$me3)/$coftotal
 @endphp
 
 votre moyenne est : {{$me}}
 @php
 $var=0 
 @endphp





</body>
</html>
<consulter notes <br>
