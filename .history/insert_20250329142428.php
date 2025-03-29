<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
    require ('../connect_db.php');
    function show_records($dbc)
    {
        $q = 'SELECT * FROM top_5_films';
        $r = mysqli_query($dbc, $q);
        if ($r)
        {
            echo '<h1>Records in top_5_films table</h1>';
            while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
            {
                echo '<br>' . $row['position'].' | ' .$row['title'] . ' @ ' . $row['year'];
            }
        }
        else {echo '<p>' .mysqli_error($dbc) .'</p>';}
    }
    show_records($dbc);

    $q = 'INSERT INTO top_5_films(title, year)
    VALUES ("Tremors", 1990)';
    $r 

    ?>
</body>
</html>