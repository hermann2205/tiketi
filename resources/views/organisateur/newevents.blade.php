@include("organisateur.dependances.header")
@include("organisateur.dependances.css")
<div>
    Catégories d evenements non payants!

</div>


@if (!count($allcateg))
    <h6>
        Aucun evenement non payable disponible
    </h6>
@else
    @foreach ($allcateg as $el)
        {{$el->nomCategEvenements}}
        <a href="{{route('organisateur.base')}}/eventnbcateg/{{$el->idCategEvenements}}/{{$el->tokenCategEvenements}}">
            Choisir
        </a>
    </br>
    @endforeach
@endif

@include("organisateur.dependances.js")
@include("organisateur.dependances.footer")
