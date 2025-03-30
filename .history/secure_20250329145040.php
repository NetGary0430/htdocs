<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure</title>
</head>
<body>
    <form action="secure.php" method = "POST>
    <p>New Name: <input type = "text" name = "name">
    <input type = "submit"></p></form>
    <?php
    require ('../connect_db.php');
    $q = 'SELECT * FROM top_5_films'
    ?>
    
</body>
</html>