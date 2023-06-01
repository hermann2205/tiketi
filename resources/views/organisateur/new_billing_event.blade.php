@include("organisateur.dependances.header")
@include("organisateur.dependances.css")
<div>
    Catégories d evenements
    @if (!count($allcateg))
           <h6>
                aucune catégories payante disponible
           </h6>
    @endif

    @foreach ($allcateg as $el)
    {{$el->nomCategEvenements}}  <a href="{{route('organisateur.base')}}/eventcateg/{{$el->idCategEvenements}}/{{$el->tokenCategEvenements}}">Choisir</a></br>
    @endforeach
</div>
@include("organisateur.dependances.js")
@include("organisateur.dependances.footer")
