<!--Charlie Fuseau 08/04/2020 
index main -->
<?php
require_once "php/loggedonly.php";
loggedonly();
?>
<html>



<body>



<slider>
	<slide><p>Garage Fortin </br></br> 
	Rémy Fortin et son équipe vous accompagnent dans la recherche de votre 
	véhicule neuf ou d'occasion et garantit son suivi </br></br> 
	Nous vous proposons aussi un service de location complet : 
	Mini bus 9 places, Utilitaire....</p></slide>
	
	<slide><p>Profiter d'une remise jusqu'à - 20 % sur une sélection de véhicule neuf tout en conversant la garantie constructrice</p></slide>
	
	<slide><p>Vous recherchez un véhicule spécifique? </br></br> Précisez-nous votre recherche et nous trouvons la voiture qui correspond le mieux a vos attentes</p></slide>
	<slide><p>Slide 4</p></slide>
</slider>







<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="<?php echo IMG."annonce1.jpg"; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."annonce2.jpg"; ?>" onclick="openModal();currentSlide(2)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."annonce3.jpg"; ?>" onclick="openModal();currentSlide(3)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."annonce4.jpg"; ?>" onclick="openModal();currentSlide(4)" class="hover-shadow img">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      
      <img src="<?php echo IMG."annonce1.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo IMG."annonce2.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo IMG."annonce3.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
     
      <img src="<?php echo IMG."annonce4.jpg"; ?>" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

   
  </div>
</div>


	<?php	
	echo"<script src=\"".JS."img.js\"></script>";	
	?>



</body>
</html> 