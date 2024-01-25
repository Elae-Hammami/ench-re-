<!-- display_products.php -->
<?php
// Include your database connection or any necessary setup here

$mysqli = mysqli_connect("localhost", "root", "", "tic");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$currentTime = date("Y-m-d H:i:s");

// Fetch product data from the database
$sql = "SELECT * FROM products ORDER BY id DESC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $count = 0;

    while ($row = $result->fetch_assoc()) {
        $uploadTime = $row['upload_time'];

        // Check if the current time is beyond the upload time
        if (strtotime($currentTime) > strtotime($uploadTime)) {
            continue; // Skip displaying this product
        }

        // Start a new row for every two cards
        if ($count % 2 == 0) {
            echo '<div class="row">';
        }

        echo '<div class="col-md-6">';
        echo '<div class="card mb-3" style="max-width: 540px;">';
        echo '<div class="row g-0">';
        echo '<div class="col-md-4">';
        echo '<img src="uploads/' . $row['photo'] . '" class="img-fluid rounded-start" alt="Product Photo">';
        echo '</div>';
        echo '<div class="col-md-8">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['name'] . '</h5>';
        echo '<p class="card-text">' . $row['description'] . '</p>';
        echo '<p class="card-text"><small class="text-muted">Price: $' . $row['price'] . '</small></p>';
        echo '<a href="commande.html" class="btn btn-primary" x>Commander</a>';


        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // End the row for every two cards
        if ($count % 2 == 1 || $count == $result->num_rows - 1) {
            echo '</div>';
        }

        $count++;
    }
} else {
    echo '<p>No products found.</p>';
}


$result->close();
$mysqli->close();
?>

