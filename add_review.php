<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $city = $conn->real_escape_string($_POST['city']);
    $review = $conn->real_escape_string($_POST['review']);
    $rating = intval($_POST['rating']);

    // Insert into database
    $sql = "INSERT INTO reviews (name, city, review, rating) VALUES ('$name', '$city', '$review', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Review submitted successfully!'); window.location.href='home.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
