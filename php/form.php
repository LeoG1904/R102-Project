<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/formulaire.css">
    <link rel="icon" href="../img/favicon.png">
  </head>
  <body>
    <header>
      <div class="BlackMode">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div id="text">
        <a href="../index.html">Accueil</a>
      </div>
    </header>
    <div class="menu">
        <a href="#Presentation">Présentation</a>
        <a href="#Parcours">Parcours</a>
        <a href="#Pro">Expériences Professionnels</a>
        <a href="#Passions">Passions</a>
    </div>
    <div class="contenue">
      <?php
      /*---------------------------------------------------------------*/
      /*
          Titre : Formulaire d'envoi de mail                                                                            
          Source:                                                                                                                      
              URL   : https://phpsources.net/code_s.php?id=57
              Auteur           : Mathieu                                                                                            
              Date édition     : 01 Sept 2004                                                                                       
              Date mise à jour : 13 Sept 2019                                                                                    
      */
      /*---------------------------------------------------------------*/?>
      <form name="contact_form" method="post" action="">
      <table width="500">
      <tr>
      <td valign="top">
        <label for="nom">Nom *</label>
      </td>
      <td valign="top">
        <input  type="text" name="nom" maxlength="50" size="30" value="<?php if (
        isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">
      </td>
      </tr>
      <tr>
      <td valign="top"">
        <label for="prenom">Prénom *</label>
      </td>
      <td valign="top">
        <input  type="text" name="prenom" maxlength="50" size="30" value="<?php if
        (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
      </td>
      </tr>
      <tr>
      <td valign="top">
        <label for="email">Email Addresse *</label>
      </td>
      <td valign="top">
        <input  type="text" name="email" maxlength="80" size="30" value="<?php if 
        (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
      </td>
      </tr>
      <tr>
      <td valign="top">
        <label for="telephone">Téléphone</label>
      </td>
      <td valign="top">
        <input  type="text" name="telephone" maxlength="30" size="30" value="
        <?php if (isset($_POST['telephone'])) echo htmlspecialchars($_POST['telephone'])
        ;?>">
      </td>
      </tr>
      <tr>
      <td valign="top">
        <label for="commentaire">Commentaire *</label>
      </td>
      <td valign="top">
        <textarea  name="commentaire" cols="28" rows="10"><?php if (isset($_POST[
        'commentaire'])) echo htmlspecialchars($_POST['commentaire']);?></textarea>
      </td>
      </tr>
      <tr>
      <td colspan="2" style="text-align:center">
        <input type="submit" value=" Envoyer ">
      </td>
      </tr>
      </table>
      </form>

    <?php
      if(isset($_POST['email'])) {
  
      // Le destinataire et le sujet du mail
      $email_to = "killian.ferrier.pro@gmail.com";
      $email_subject = "Site IUT AIX";
  
      function died($error) {
          // Code d'érreur
          echo 
          "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
          " formulaire que vous avez envoyé. ";
          echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
          echo $error."<br /><br />";
          echo "Merci de corriger ces erreurs.<br /><br />";
          die();
      }
  
  
      // si la validation des données attendues existe
      if(!isset($_POST['nom']) ||
          !isset($_POST['prenom']) ||
          !isset($_POST['email']) ||
          !isset($_POST['telephone']) ||
          !isset($_POST['commentaire'])) {
          died(
          'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
          ' problème.');
      }
  
      
  
      $nom = $_POST['nom']; // required
      $prenom = $_POST['prenom']; // required
      $email = $_POST['email']; // required
      $telephone = $_POST['telephone']; // not required
      $commentaire = $_POST['commentaire']; // required
  
      $error_message = "";
      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  
      if(!preg_match($email_exp,$email)) {
        $error_message .= 
        'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
      }
    
        // Prend les caractères alphanumériques + le point et le tiret 6
        $string_exp = "/^[A-Za-z0-9 .'-]+$/";
    
      if(!preg_match($string_exp,$nom)) {
        $error_message .= 
        'Le nom que vous avez entré ne semble pas être valide.<br />';
      }
    
      if(!preg_match($string_exp,$prenom)) {
        $error_message .= 
        'Le prénom que vous avez entré ne semble pas être valide.<br />';
      }
    
      if(strlen($commentaire) < 2) {
        $error_message .= 
        'Le commentaire que vous avez entré ne semble pas être valide.<br />';
      }
    
      if(strlen($error_message) > 0) {
        died($error_message);
      }
  
      $email_message = "Détail.\n\n";
      $email_message .= "Nom: ".$nom."\n";
      $email_message .= "Prenom: ".$prenom."\n";
      $email_message .= "Email: ".$email."\n";
      $email_message .= "Telephone: ".$telephone."\n";
      $email_message .= "Commentaire: ".$commentaire."\n";
  
      // create email headers
      $headers = 'From: '.$email."\r\n".
      'Reply-To: '.$email."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_message, $headers);
      ?>
        
        <!-- mettez ici votre propre message de succès en html -->
        
      Merci de nous avoir contacter. Votre commentaire sera prit en compte.
      
      <?php

    }
    ?>
    </content>
    <script src="../javascript/menu.js"></script>
  </body>
</html>