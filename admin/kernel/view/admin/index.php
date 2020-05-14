<!-- index admin -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <fieldset>
    <legend>Identifiez-vous</legend>
    <?php
      // Rencontre-t-on une erreur ?
      if(!empty($errorMessage)) 
      {
        echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
      }
    ?>
   <p>
      <label for="login">Login :</label> 
      <input type="text" name="login" id="login" required value="" />
    </p>
    <p>
      <label for="password">Password :</label> 
      <input type="password" name="password" id="password" required value="" /> 
      <input type="submit" name="submit" value="Se logguer" />
    </p>
  </fieldset>
</form>