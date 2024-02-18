<?php
// Number guessing game

// Generate a random number between 1 and 100
$number = rand(1, 100);

// Initialize variables
$guess = null;
$message = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's guess from the form
    $guess = $_POST['guess'];

    // Validate the guess
    if (!is_numeric($guess) || $guess < 1 || $guess > 100) {
        $message = "Please enter a valid number between 1 and 100.";
    } else {
        // Compare the guess with the random number
        if ($guess < $number) {
            $message = "Too low! Try again.";
        } elseif ($guess > $number) {
            $message = "Too high! Try again.";
        } else {
            $message = "Congratulations! You guessed the number!";
            // Optionally, you can add more logic here such as offering to play again
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Number Guessing Game</h1>
    <p>Guess a number between 1 and 100:</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="guess" min="1" max="100" required>
        <input type="submit" value="Submit">
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>
