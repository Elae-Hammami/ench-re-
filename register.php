<?php
//Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupérer les valeurs du formulaire
    $username = $_POST["username"];
    $email = $_POST["Email"];
    $numtel = $_POST["numtel"];
    $date_naissance = $_POST["date_de_naissance"];
    $adresse = $_POST["adresse"];
    $password = $_POST["password"]; 
  

    // Connexion à la base de données (à adapter en fonction de votre configuration)
    $servername = "localhost";
    //$username_db = "votre_nom_utilisateur";
    //$password_db = "votre_mot_de_passe";
    $dbname = "tic";

    $conn =  mysqli_connect ("localhost", "root", "", "tic");

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }
       $sql = "INSERT INTO client (username, email, numtel, datenais, adresse, password) 
               VALUES ('$username', '$email', '$numtel', '$date_naissance', '$adresse', '$password')";
       
       if ($conn->query($sql) === TRUE) {
        header("location:teste.php");
       } else {
           echo "Erreur lors de l'enregistrement: " . $conn->error;
       }
       
       // Fermer la connexion à la base de données
       $conn->close();
   }
   ?>
   
?>