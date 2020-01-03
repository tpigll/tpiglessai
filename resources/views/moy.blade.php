<consulter notes <br>
{{csrf_field()}}
nom : {{$user->name}} <br>
@php
$var=1
@endphp
 @foreach($notes as $note)
 {{$note->mod}}   {{$note->interro}}  {{$note->ci}}  {{$note->ef}} 

@if( $var =='1')
 {{ App\Module::where('userid', '=', $user->id)->pluck('mod')  }} <br>
 {{ App\Module::where('userid', '=', $user->id)->pluck('interro')  }} <br>
 {{ App\Module::where('userid', '=', $user->id)->pluck('ci')  }} <br>
 {{ App\Module::where('userid', '=', $user->id)->pluck('ef')  }} <br>
 {{ App\Module::where('userid', '=', $user->id)->pluck('moy')  }} <br>

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

 @endif
@endforeach