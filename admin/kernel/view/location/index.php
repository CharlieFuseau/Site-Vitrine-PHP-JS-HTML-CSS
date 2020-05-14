<!-- inex location -->
<?php
require_once "php/loggedonly.php";
loggedonly();
?>

<html>

	<body>
	
		<br>
		<h1>Envie de voyager ? Un minibus 9 Places est a votre disposition,très facile a conduire avec une vaste soute a bagage</h1>
		
		<h2>	Appelez nous pour connaître les disponibilitées </h2>
		<h2>	Le minibus n'est pas assuré par le garage </h2>
		<h2>	Un chèque de caution : 1000€ </h2>
		<h2>	0.10€ du km supplémentaire </h2>
				
				
				
		<table class="tableloc">
			<tr>
				<td>		</td><td>1 Jour</td><td>2 Jours</td><td>3 Jours</td><td>4 Jours</td><td>1 Semaine</td><td>2 Semaines</td><td>3 Semaines</td>
			</tr>
			<tr>
				<td>200 Kms</td><td>69,00€</td><td>129,00€</td><td>155,00€</td><td>195,00€</td><td>		</td><td>		</td><td>		</td>
			</tr>
			<tr>
				<td>300 Kms</td><td>95,00€</td><td>145,00€</td><td>165,00€</td><td>205,00€</td><td>		</td><td>		</td><td>		</td>
			</tr>
			<tr>
				<td>400 Kms</td><td>110,00€</td><td>149,00€</td><td>175,00€</td><td>215,00€</td><td>		</td><td>		</td><td>		</td>
			</tr>
			<tr>
				<td>500 Kms</td><td>125,00€</td><td>159,00€</td><td>185,00€</td><td>225,00€</td><td>275,00€</td><td>		</td><td>		</td>
			</tr>
			<tr>
				<td>600 Kms</td><td>139,00€</td><td>165,00€</td><td>195,00€</td><td>235,00€</td><td>300,00€</td><td>		</td><td>		</td>
			</tr>
			<tr>
				<td>750 Kms</td><td>155,00€</td><td>179,00€</td><td>215,00€</td><td>245,00€</td><td>325,00€</td><td>		</td><td>		</td>
			</tr>
			<tr>
				<td>1000 Kms</td><td>170,00€</td><td>210,00€</td><td>235,00€</td><td>275,00€</td><td>350,00€</td><td>515,00€</td><td>705,00€</td>
			</tr>
			<tr>
				<td>1250 Kms</td><td>		</td><td>235,00€</td><td>265,00€</td><td>295,00€</td><td>375,00€</td><td>535,00€</td><td>725,00€</td>
			</tr>
			<tr>
				<td>1500 Kms</td><td>		</td><td>245,00€</td><td>285,00€</td><td>315,00€</td><td>395,00€</td><td>555,00€</td><td>745,00</td>
			</tr>
			<tr>
				<td>1750 Kms</td><td>		</td><td>295,00€</td><td>310,00€</td><td>335,00€</td><td>430,00€</td><td>595,00€</td><td>765,00€</td>
			</tr>
			<tr>
				<td>2000 Kms</td><td>		</td><td>325,00€</td><td>350,00€</td><td>365,00€</td><td>465,00€</td><td>615,00€</td><td>795,00€</td>
			</tr>
			<tr>
				<td>2500 Kms</td><td>		</td><td>		</td><td>395,00€</td><td>385,00€</td><td>495,00€</td><td>645,00€</td><td>825,00€</td>
			</tr>
			<tr>
				<td>3000 Kms</td><td>		</td><td>		</td><td>475,00€</td><td>410,00€</td><td>550,00€</td><td>685,00€</td><td>885,00€</td>
			</tr>
			<tr>
				<td>3500 Kms</td><td>		</td><td>		</td><td>		</td><td>440,00€</td><td>595,00€</td><td>765,00€</td><td>950,00€</td>
			</tr>
			<tr>
				<td>4000 Kms</td><td>		</td><td>		</td><td>		</td><td>460,00€</td><td>645,00€</td><td>795,00€</td><td>1005,00€</td>
			</tr>
			<tr>
				<td>4500 Kms</td><td>		</td><td>		</td><td>		</td><td>		</td><td>		</td><td>		</td><td>1075,00€</td>
			</tr>
		</table>
		
			
			
	
			<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="<?php echo IMG."minibus1.jpg"; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."minibus2.jpg"; ?>" onclick="openModal();currentSlide(2)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."minibus3.jpg"; ?>" onclick="openModal();currentSlide(3)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."minibus4.jpg"; ?>" onclick="openModal();currentSlide(4)" class="hover-shadow img">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      
      <img src="<?php echo IMG."minibus1.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo IMG."minibus2.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo IMG."minibus3.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
     
      <img src="<?php echo IMG."minibus4.jpg"; ?>" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>



   
  </div>
</div>

</body>
</html>

	<?php	
	echo"<script src=\"".JS."img.js\"></script>";	
	?>

