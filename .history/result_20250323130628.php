<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
    require ('../connect_db.php');
    $q = 'SHOW TABLES';
    $r = mysqli_query ($dbc, $q);

    if ($r)
    {echo '<h1> Tables on site_db database</h1>';}
    else
    {echo '<p>' . mysqli_error($dbc) . '</p>';}

    while ($row = mysqli_fetch_array($r, MYSQLI_NUM))
    {
        echo '<br>. $row[0]';
    }
    
    mysqli_close ($dbc);
    ?>
</body>
</html>