<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginSource = $_POST["login_source"] ?? "";
    $nextValue = $_POST["next"] ?? "";

    // Create a string with the data
    $data = "Login Source: $loginSource\nNext Value: $nextValue\n\n";

    // Specify the path to the text file
    $filePath = "data.txt";

    // Open the file in append mode and write the data
    file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);

    echo "Data saved successfully!";
} else {
    echo "Invalid request method";
}
?>
