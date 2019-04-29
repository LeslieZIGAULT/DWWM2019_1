<?php include('header.php');?>


<?php
echo "<h2 class='text-center'>Bienvenue sur votre application</h2>";
?>

<?php
echo "<h2 class='text-center'> G.L Materiaux</h2>";
?>

<?php
echo 
    "<p class='text-center'> Vous devez construire votre maison, refaire votre toiture, faire une clôture, monter une cloison, pour tout cela vous avez besoin de matériel de construction. G.L Matériaux est à votre disposition.Commandez en ligne nos produit!</p>"

?>


<div class="container-fluid" id="carousel" style="max-width: 75%; max-height: 35%">
    <div id="slideshow" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bulldozer-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bulldozer-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bulldozer-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="box">

</div>





<?php include('footer.html');?>
