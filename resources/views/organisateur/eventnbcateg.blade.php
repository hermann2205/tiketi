@include("organisateur.dependances.header")
@include("organisateur.dependances.css")
<div>
    Choix des détails
</div>
<form action="{{route("organisateur.first_nb_validation")}}" method="post">
    @csrf
    <input type="hidden" name="code_v" value="{{$code_v}}">
    <div>
        <label for="namev">Nom de la manifestation</label><br>
        <input type="text" name="namev" id="namev" placeholder="bonjour">
    </div>
    <div>
<label for="descev">Donnez une courte description rélative à votre manifestation</label><br>
 <textarea name="descev" id="descev" cols="30" rows="10"></textarea>
</div>
 <div>
 <label for="nbreplace">le nombre de place</label><br>
 <input type="number" name="nbreplace" id="nbreplace">
</div>
<div>
    <label for="datev">date de l'évenement</label><br>
    <input type="datetime-local" name="datev" id="datev">
</div>
    <input type="hidden" value="{{$code_v}}" name="categplace">
 <div style="margin-top:10px">
 <input type="submit" value="valider">
</div>
</form>
        @include("organisateur.dependances.js")
@include("organisateur.dependances.footer")
