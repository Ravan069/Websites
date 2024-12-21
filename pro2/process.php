<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    echo "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9;'>";
    echo "<h2 style='color: #333;'>Submitted Information:</h2>";
    echo "<ul style='list-style: none; padding: 0;'>";
    echo "<li><strong>Name:</strong> $name</li>";
    echo "<li><strong>Email:</strong> $email</li>";
    echo "<li><strong>Phone:</strong> $phone</li>";
    echo "<li><strong>Date of Birth:</strong> $dob</li>";
    echo "<li><strong>Gender:</strong> $gender</li>";
    echo "</ul>";
    echo "</div>";
} else {
    echo "<p style='color: red; text-align: center;'>Invalid request method.</p>";
}
?>
