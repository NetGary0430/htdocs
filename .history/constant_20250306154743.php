<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php
    # Statements to be inserted here
    define('USER', 'Mike');
    echo '<p>Hello ' . USER. '</p>';

    echo '<p>You are using PHP version ' . PHP_VERSION;
    echo ' running on ' . PHP_OS .'</p>';
    ?>
</body>
</html>