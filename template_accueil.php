<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<div id="home" class="d-flex justify-content-center align-items-center">
<div class="homeinfos text-center">
<h1><?php bloginfo( 'name' ); ?></h1>
<p class="lesloganquivabien"><?php bloginfo( 'description' ); ?></p>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <h2><?= get_field( "competence_01_titre" ); ?></h2>
            <?= get_field( "competence_01_description" ); ?>
        </div>
        <div class="col-12 col-md-4">
       <h2> <?= get_field( "competence_02_titre" ); ?></h2>
        <?= get_field( "competence_02_description" ); ?>
        </div>
        <div class="col-12 col-md-4">
        <h2><?= get_field( "competence_03_titre" ); ?></h2>
        <?= get_field( "competence_03_description" ); ?>
        </div>
    </div>
</div>


<?php $value = get_field( "images_du_slider" ); 




?>


<section id="slider">
<!-- Slideshow container -->
<div class="slideshow-container">
<?php

for ($i=0; $i < count($value) ; $i++) { 
    echo '<div class="mySlides fade">';
    echo '<div class="numbertext">'.($i+1).' / '.count($value).'</div>';
    echo '<img src='.$value[$i]["image_slide"].' />';
    echo '<div class="text">'.$value[$i]["titre_slide"].'</div>';
    echo ' </div>';
}
?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<?php
for ($i=0; $i < count($value) ; $i++) { 
echo ' <span class="dot" onclick="currentSlide('.($i+1).')"></span>';
}

    ?>
 

</div>


</section>




<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<?php get_footer(); ?>
