<?php
$dbname = "tic";
$conn = mysqli_connect("localhost", "root", "", "tic");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
$numtel = mysqli_real_escape_string($conn, $_POST['numtel']);

$sql = "INSERT INTO commandes (nom, prenom, adresse, numtel) 
        VALUES ('$nom', '$prenom', '$adresse', '$numtel')";

if ($conn->query($sql) === TRUE) {
    header("location:teste.php");
} else {
    echo "Erreur lors de l'enregistrement de la commande : " . $conn->error;
}

// Remove the product from the display after the order is successfully processed
// You need to identify the product in the database and update its status or remove it
// For example, if your products table has a column 'status', you can set it to 'hidden' or 'sold'
// Adjust this part according to your database schema

$conn->close();
?>
