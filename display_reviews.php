<?php
include 'db.php';

$sql = "SELECT name, city, review, rating, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<h2 class="review-title">Customer Reviews</h2>';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="review-card">';
        echo '<h3 class="review-name">' . htmlspecialchars($row['name']) . '</h3>';
        echo '<p class="review-city">' . htmlspecialchars($row['city']) . '</p>';
        echo '<p class="review-comment">' . htmlspecialchars($row['review']) . '</p>';
        
        // Display star ratings dynamically
        echo '<div class="review-rating">';
        for ($i = 1; $i <= 5; $i++) {
            echo $i <= $row['rating'] ? '★' : '☆';
        }
        echo '</div>';
        
        echo '</div>';
    }
} else {
    echo "<p class='no-reviews'>No reviews yet.</p>";
}

$conn->close();
?>
