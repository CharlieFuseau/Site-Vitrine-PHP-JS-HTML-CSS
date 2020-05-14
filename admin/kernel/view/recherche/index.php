<html>
	<body>
	<?php
require_once "php/loggedonly.php";
loggedonly();
?>
<?php
//Charlie Fuseau index Recherche

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require_once "libb/phpmailer/src/Exception.php"; 
require_once "libb/phpmailer/src/PHPMailer.php"; 
require_once "libb/phpmailer/src/SMTP.php";

if(isset($_POST['sendmail'])) 
{
	require "libb/phpmailer/credential.php";
	
	$mail = new PHPMailer;

	// $mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->IsMail();

	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                 // SMTP username
	$mail->Password = PASS;                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom(EMAIL, 'Garage Fortin');
		// $mail->addAddress($_POST['email']);     // Add a recipient
	$mail->addAddress(EMAIL);     // Add a recipient

	$mail->addReplyTo(EMAIL);
	// print_r($_FILES['file']); exit;
	/*	
	for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++)
	{ 
		$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
	}
	*/
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $_POST['subject'];
	$mail->Body = $_POST['nom']."<br>".$_POST['numero']."<br>".$_POST['email']."<br><br>".$_POST['recherche'];

	//$mail->AltBody = $_POST['message'];

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    //echo 'Message has been sent'; ///////////////////////////////////////////////////////// faire popup///////////////////////////////////////
	}
}
	 
?>
<div class="bodybackground">
	<br>
		<h1>Le véhicule que vous cherchez n'est pas dans notre stock nous vous proposons de le trouver pour vous</h1>
		<h2>Dès la reception de votre requète nous mettons tout notre professionalisme et notre connaissance de l'automobile afin de trouver le véhicule le plus adéquat a votre recherche </h2>
		
	
	
<form role="form" method="post" action="<?php echo WEBROOT; ?>">
<table class="tablerecherche">
	<tr>
		<td>		
			
			<input type="text" id="nom" name="nom" placeholder="Nom Prénom" maxlength="50" required>
		</td>
		<td>
			
			<input type="number" id="numero" name="numero" placeholder="Numéro" required>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			
			<input type="email" id="email" name="email" placeholder="Email" maxlength="50" required>
		</td>
	</tr>
    <tr>
		<td colspan="2">
			
			<input type="text" id="subject" name="subject" placeholder="Sujet" maxlength="50" required>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			
			<textarea class="form-control" type="textarea" id="recherche" name="recherche" placeholder="Marque, Modèle, Année, Motorisation, Kilométrage, Option, Budget, ..." maxlength="6000" rows="10" required></textarea>
		</td>
	</tr>
           <!--
		<div class="row">
               <div class="col-sm-9 form-group">
                   <label for="name">File:</label>
                   <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
               </div>
           </div>
		-->
    <tr>
		<td colspan="2">
			<button class="buttonfullsize" type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Envoyer le mail</button>
		</td>
	</tr>
</table>
</form>
		
					<!-- Images used to open the lightbox -->
		<div class="row">
		<div class="column">
			<img src="<?php echo IMG."annonce9.jpg"; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow img">
		</div>
		<div class="column">
			<img src="<?php echo IMG."annonce10.jpg"; ?>" onclick="openModal();currentSlide(2)" class="hover-shadow img">
		</div>
		<div class="column">
			<img src="<?php echo IMG."annonce11.jpg"; ?>" onclick="openModal();currentSlide(3)" class="hover-shadow img">
		</div>
		<div class="column">
			<img src="<?php echo IMG."annonce12.jpg"; ?>" onclick="openModal();currentSlide(4)" class="hover-shadow img">
		</div>
		</div>
		
		<!-- The Modal/Lightbox -->
		<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">
		
			<div class="mySlides">
			
			<img src="<?php echo IMG."annonce9.jpg"; ?>" style="width:100%">
			</div>
		
			<div class="mySlides">
			
			<img src="<?php echo IMG."annonce10.jpg"; ?>" style="width:100%">
			</div>
		
			<div class="mySlides">
			
			<img src="<?php echo IMG."annonce11.jpg"; ?>" style="width:100%">
			</div>
		
			<div class="mySlides">
			
			<img src="<?php echo IMG."annonce12.jpg"; ?>" style="width:100%">
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
</div>		
	<?php	
	echo"<script src=\"".JS."img.js\"></script>";	
	?>

	</body>
</html>
