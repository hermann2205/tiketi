<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Etape 2: les configurations!

    <form action="{{route('organisateur.second_validation')}}" method="post">
    @csrf
    @if (session('data'))
        <?php $var_s = session('data');?>

        @for ($i=0; $i < count($var_s) ; $i++)
        <?php
            $v = substr(strrchr($var_s[$i],"-"),1,4);
            $vms = strpos($var_s[$i],"-");
            $v_ = substr($var_s[$i],0,$vms);
         ?>
            <div>
                    <div>
                        <h5>
                            {{$var_s[$i]}}
                        </h5>
                    </div>
                <input type="hidden" value="{{$code_id}}" name="code_id[]">
                <input type="hidden" value="{{$v}}" name="categ[]" id="" placeholder="categories de la place">
                <input type="number" name="nbrplac[]" id="" placeholder="nombre de place pour cette catégories">
                <input type="text" name="price[]" id="" placeholder="prix par billet">
                <select name="devise[]" id="">
                    <option value="USD">USD</option>
                    <option value="CDF" avtive> CDF</option>
                </select>
            </div>
        @endfor
        <input type="submit" value="valider">
    </form>

    @else
            <h5>
                Action non réquise!
            </h5>
    @endif





</body>
</html>
