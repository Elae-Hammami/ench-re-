<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productPrice = $_POST["productPrice"];
    $uploadTime = $_POST["uploadTime"];
    $selectedOption = $_POST["selectedOption"];

    // Handle the uploaded file
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["productPhoto"]["name"]);

    if (move_uploaded_file($_FILES["productPhoto"]["tmp_name"], $targetFile)) {
        // File upload successful, save data to the database
        $mysqli = new mysqli("localhost", "root", "", "tic");

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO products (name, description, price, upload_time, selectOption, photo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        // Bind parameters with data types
        $stmt->bind_param("ssdsss", $productName, $productDescription, $productPrice, $uploadTime, $selectedOption, basename($_FILES["productPhoto"]["name"]));
        $stmt->execute();

        $stmt->close();
        $mysqli->close();

        // Redirect back to the main page
        header("Location: teste.php");
        exit();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
