<!--Charlie Fuseau 09/04/2020
index contact -->
<html>

<?php 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

// path du dossier PHPMailer % fichier d'envoi du mail 
// require_once "phpmailer/src/Exception.php"; 
// require_once "phpmailer/src/PHPMailer.php"; 
// require_once "phpmailer/src/SMTP.php";

require_once "libb/phpmailer/src/Exception.php"; 
require_once "libb/phpmailer/src/PHPMailer.php"; 
require_once "libb/phpmailer/src/SMTP.php";
// print_r ("../../../libb/phpmailer/src/SMTP.php") ;



		if(isset($_POST['sendmail'])) 
		{
			require "libb/phpmailer/credential.php";
			
			$mail = new PHPMailer;

			$mail->SMTPDebug = 0;                               // Enable verbose debug output

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
			$mail->Body = $_POST['nom']."<br>".$_POST['numero']."<br>".$_POST['email']."<br><br>".$_POST['message'];
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
<h1>Un renseignement ?<br> Un devis ? </h1>
		<h2>Contactez-nous</h2>
		
<form role="form" method="post" enctype="" action="<?php echo WEBROOT; ?>"">
<br><br>
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
			<textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="6000" rows="10" required></textarea>
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
			<button class="buttonfullsize" type="submit" name="sendmail">Envoyer</button>
		</td>
	</tr>
</table>
</form>

</div>
		<!-- Images used to open the lightbox -->
<div class="row">

  <div class="column">
    <img src="<?php echo IMG."annonce5.jpg"; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."annonce6.jpg"; ?>" onclick="openModal();currentSlide(2)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."annonce7.jpg"; ?>" onclick="openModal();currentSlide(3)" class="hover-shadow img">
  </div>
  <div class="column">
    <img src="<?php echo IMG."annonce8.jpg"; ?>" onclick="openModal();currentSlide(4)" class="hover-shadow img">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      
      <img src="<?php echo IMG."annonce5.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo IMG."annonce6.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo IMG."annonce7.jpg"; ?>" style="width:100%">
    </div>

    <div class="mySlides">
     
      <img src="<?php echo IMG."annonce8.jpg"; ?>" style="width:100%">
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

</html> 


