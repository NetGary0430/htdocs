<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query</title>
</head>
<body>
    <?php
    require (' ../connect_db.php');
    $q = 'SHOW TABLES';
    $r = mysqli_query ($dbc, $q);

    if ($r)
    {echo '<h1> Result Set Returned OK</h1>';}
    else
    
    ?>
</body>
</html>