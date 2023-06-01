@include("organisateur.dependances.header")
@include("organisateur.dependances.css")
<div>
    Choissisez le mode
</div>
<a href="{{route('organisateur.newBillingEvents')}}">manifestations payantes</a>
<a href="{{route('organisateur.newEvents')}}">manifestations non payantes</a>
@include("organisateur.dependances.js")
@include("organisateur.dependances.footer")
