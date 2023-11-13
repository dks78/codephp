
<?php
  // var_dump($_GET);
  echo "Bonjour" . " ". $_GET['user_name']." ". "de nous avoir contacté à propos de votre".
   " ".$_GET['subject'] . "</br>". "<br>"
   ." ". "Un de nos conseiller vous contactera soit 
   à l’adresse" ." ".$_GET['user_email']. " ". "ou par téléphone". "</br>"." au" ." ". $_GET['phone']
   ." ".  "dans les plus brefs délais pour traiter votre demande" ." ". ":"."<br>"."<br>"."<br>"."<br>". $_GET['message'];; 
  // echo  $_GET['user_name'] ;
  // echo  $_GET['user_email'];
  // echo  $_GET['user_message'];
  // echo  $_GET['subject'];




?>
