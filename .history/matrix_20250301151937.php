<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix</title>
</head>
<body>
    <?php
    # Statements to be inserted here
    $letters = array('A', 'B', 'C');
    $numbers = array(1, 2, 3);
    $matrix = array('Letter' => $letters, 'Number' => $numbers);

    echo "<p>Start: {$matrix['Letter'][0]}</p>";

    foreach($matrix as $array => $list)
    {
        echo '<ul>';
                foreach($list as $key => $value)
                {echo "<li>$array[$key] => $value";}
                echo '</ul>';
    }
    ?>
</body>
</html>