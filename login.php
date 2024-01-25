<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Connexion à la base de données

$dbname = "tic";
$conn =  mysqli_connect ("localhost", "root", "", "tic");
// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Échapper les caractères spéciaux pour éviter les injections SQL
//$username = mysqli_real_escape_string($conn, $username);
//$password = mysqli_real_escape_string($conn, $password);

// Requête SQL pour récupérer l'utilisateur en fonction du nom d'utilisateur et du mot de passe
$query = "SELECT * FROM client WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

// Vérification si l'utilisateur existe
if ($result->num_rows > 0) {
    // Utilisateur trouvé, vous pouvez rediriger vers une page sécurisée
 session_start();
    $_SESSION['username'] = $username;  // Stockez les informations de session si nécessaire
    header("Location: teste.php");  // Rediriger vers une page de bienvenue par exemple
} else {
    // Si l'utilisateur n'est pas trouvé, vous pouvez rediriger vers une page d'erreur ou réafficher le formulaire de connexion
    echo "Identifiants invalides. Veuillez réessayer.";
}
    // Requête SQL pour récupérer le mot de passe stocké dans la base de données
   
    //$result = $conn->query("SELECT id, username, password FROM client WHERE username='$username'");

   // if ($result->num_rows > 0) {
    //    $row = $result->fetch_assoc();

        // Vérification du mot de passe
      //  if (password_verify($password, $row["password"])) {
      //      $_SESSION["username"] = $row["username"];
       //     header("Location: teste.html");
       //     exit();
       // } else {
       //     echo "Identifiants invalides. Veuillez réessayer.";
       // }
   // } else {
       // echo "Nom d'utilisateur non trouvé.";
   // }

    $conn->close();

?>

