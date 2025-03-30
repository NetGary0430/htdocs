<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure</title>
</head>
<body>
    <form action="secure.php" method = "POST">
    <p>New Name: <input type = "text" name = "name"><input type = "submit"></p>
    </form>
    <?php
    require ('../connect_db.php');
    $q = 'SELECT * FROM top_5_films WHERE position = 1';
    $r = mysqli_query($dbc, $q);
    while ($row = mysqli_fetch_array($r, MYSQLI_NUM))
    {
        echo "<p> Title: $row[1] </p>";
    }
    mysqli_close($dbc);

    if(!empty($_POST['position']) && !is_numeric($_POST['position']))
    {
        $name = $_POST['title'];
        $q = 'UPDATE top_5_films SET name = "'.$title.'" WHERE id = 1';
        mysqli_query($dbc, $q);
    } else { echo 'No valid new title submitted';}
    $name = mysqli_real_escape_string($dbc, $name);
    $name = strip_tags($title);
    ?>
    
</body>
</html>