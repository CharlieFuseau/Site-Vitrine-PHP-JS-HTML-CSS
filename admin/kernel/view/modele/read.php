<!DOCTYPE html>
<html>
<head>
<?php
require_once "php/loggedonly.php";
loggedonly();
?>

<style>

.mySlides {display: none}


/* Slideshow container */
.slideshow-container {
  width: 70%;

  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.1);
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #FFFFFF;
}



/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  
  
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topleft {a
  float: left;
  cursor: pointer;
  font-size: 28px;
}

.topleft:hover {color: red;}
</style>
</head>
<body>
<div class="slideshow-container">
	<div style='text-align:center'>
		<?php 
			// $slide = 0;
			foreach ($photo as $k => $val)
			{
				extract ($val);
				echo"<div class='mySlides animateleft'>";
					echo '<img class="imgvoiture" style="width:100%" height="500px"  src="data:image/png;base64,'.base64_encode($photo_image).'"/>';
				echo"</div>";
				// $slide ++;
				// echo"<span class='dot' onclick='currentSlide($slide)'></span>"; 
			}
		?>
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>	
</div>

<br><br>


<?php	
echo"<div class='tab'>";
	for ($i=0; $i<count($description); $i++)
	{
		 $m = $i + 1;
		
		echo"<div class='tab'>";
			echo "<button class='tablinks' onclick=\"openConfiguration(event, '$m')\">Configuration $m</button>";
		echo"</div>";
			// print_r ($description[$i]);
			foreach ($description as $k => $val)
			{
				extract ($val);
				// print_r ($val);
				
				
				
				echo"<div id='$m' class='tabcontent'>"; 
					echo"<span onclick=\"this.parentElement.style.display='none'\" class=\"topleft\">&times</span>";
					echo "<table class=\"tableannonce\">";
					
						echo"<tr class=\"trannonce\">";
							echo "<td colspan='2' class=\"tdannonce\" >Informations techniques</td>";
						echo"</tr>";
					
						echo"<tr class=\"trannonce\">";
							echo "<td class=\"tdannonce\" >Modèle </br>".$modele_libelle."</td>";
							echo"<td class=\"tdannonce\" >Prix </br>".$description_prix."€</td>";
						echo"</tr>";
					
						echo"<tr class=\"trannonce\">";
							echo"<td class=\"tdannonce\" >Boite de vitesse </br>".$description_boite."</td>";
							echo"<td class=\"tdannonce\" >Carburant </br>".$description_energie."</td>";
						echo"</tr>";
					
						echo"<tr class=\"trannonce\">";
							echo"<td class=\"tdannonce\" >Finition </br>".$description_finition."</td>";
							echo"<td class=\"tdannonce\" >Motorisation </br>".$description_motorisation."</td>";
						echo"</tr>";
					
						echo"<tr class=\"trannonce\">";
							echo"<td class=\"tdannonce\" >Nombre de portes </br>".$description_portes."</td>";
							echo"<td class=\"tdannonce\" >Puissance DIN </br>".$description_puissance." cv</td>";
						echo"</tr>";
					
						$m ++;
					
					echo "</table>";
					echo"</br></br>";
				echo"</div>";
				
				
				
				//echo "<td><a href=\"".WEBROOT."vehicule/updateForm/$vehicule_id\"><img alt=\"Modifier\" class=\"icon\" src=\"".IMG."icons8-modifier-64.png\"></a></td>";
				//echo "<td><a href=\"".WEBROOT."vehicule/delete/$vehicule_id\"><img alt=\"Supprimer\" class=\"icon\" src=\"".IMG."icons8-effacer-50.png\"></a></td>";
				
			
			}
	}	
?>
<script>
function openConfiguration(evt, m) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(m).style.display = " block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();
</script>
   
<script>

var slideIndex = 0;
showSlidesAnimated();

function showSlidesAnimated() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlidesAnimated, 10000); // Change image every 10 seconds
}
</script>

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
  //dots[slideIndex-1].className += " active";
}
</script>   
</body>
</html> 
