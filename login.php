<?php
include_once 'config.php';

//haetaan admin tunnuksettietokannasta

  
 $sql = "SELECT email FROM Admin";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
         $adminEmail = $row["email"];
         
    }
} else {
    echo "0 results";
}


$sql = "SELECT password FROM Admin";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
         $adminPassword = $row["password"];
       
    }
} else {
    echo "0 results";
}




// tarkastetaan tunnukset

    if(isset($_POST["login"])) {
        
       
        
        $userEmail = $_POST['userEmail'];
        $userPassword =  $_POST['userPassword'];
        
      $_SESSION['AdminEmail'] =  $userEmail;
       $_SESSION['AdminPassword'] =  $userPassword;
       
       //verrataan käyttäjän tietoja admin tietoihin
       if ($userEmail == $adminEmail && $userPassword == $adminPassword) {
   
    $_SESSION['userIsAdmin'] = 1;
    
}else {
   
    $_SESSION['userIsAdmin'] = 0;
    alert("käyttäjätunnus tai salasana on virheellinen");
}
  
    }
    
    //poistaa käyttäjän admin oikeudet
    if(isset($_POST["logOutForm"])) {
  
  $_SESSION['userIsAdmin'] = 0;
     
 }
 
?>

