<?php
function checkMinor($age) {
    if ($age < 18) {
        return "The person is a minor.";
    } else {
        return "The person is not a minor.";
    }
}

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the age from the form input
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $result = checkMinor($age);
    echo $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Minor Status</title>
</head>
<body>
    <form method="post" action="">
        <label for="age">Enter the person's age:</label>
        <input type="number" id="age" name="age" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>
