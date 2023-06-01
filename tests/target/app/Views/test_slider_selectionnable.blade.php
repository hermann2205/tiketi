<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="https://fr.flossmanuals.net/processing/la-video/static/v2_Processing_sortir_la_video_moviemaker_interface.png" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.geekeries.fr%2Ffeatured-image-generator%2F&psig=AOvVaw3wOvjTtMj76kwBQepFF2Oc&ust=1683729213429000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCT7Ku66P4CFQAAAAAdAAAAABAJ.jpg" class="d-block w-100"
                    alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="http://fr.wikipedia.org/wiki/Fichier:Erm6.JPG" class="d-block w-100" alt="Image 4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <form>
        <div class="form-group">
            <label for="selectedImage">Image sélectionnée :</label>
            <input type="text" class="form-control" id="selectedImage" readonly>
        </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#slider').on('slide.bs.carousel', function(e) {
                var index = $(e.relatedTarget).index();
                $('#selectedImage').val('Image ' + (index + 1));
            });
        });
    </script>

</div>

<!--   DEUXIEME MODEL -->
<!DOCTYPE html>
<html>

<head>
    <title>Slider Bootstrap avec formulaire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Slider Bootstrap avec formulaire</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://fr.flossmanuals.net/processing/les-evenements-souris/static/Processing-Evenement_Souris-04_Souris_Dragged-fr-old.png" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="https://fr.flossmanuals.net/processing/la-ligne-de-temps/static/Processing-la_ligne_de_temps-ligne_qui_tourne-fr-old.png" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="https://fr.flossmanuals.net/processing/la-ligne-de-temps/static/Processing-la_ligne_de_temps-balle_motion_blur_1-fr-old.png" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="https://fr.flossmanuals.net/processing/les-objets/static/Processing-Les_Objets-Balle2-fr-old.png" alt="Image 4">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <form method="post">
            <div class="form-group">
                <label for="photo">Photo sélectionnée :</label>
                <input type="text" class="form-control" id="photo" name="photo" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('.carousel-item').click(function() {
                var photo = $(this).find('img').attr('src');
                $('#photo').val(photo);
            });
        });
    </script>

</body>

</html>