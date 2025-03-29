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
        $q = 'SELECT * FROM prints';
        $r = mysqli_query($dbc, $q);
        if ($r)
        {
            echo '<h1>Records in prints table</h1>'
        }
    }

    ?>
</body>
</html>