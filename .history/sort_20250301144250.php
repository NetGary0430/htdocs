<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
</head>
<body>
    <?php
    # Statements to be inserted here
    $cars = array('Dodge' => 'Viper',
                'Chevrolet' => 'Camaro',
                'Ford' => 'Mustang');
    echo '<dl><dt>Original Element Order:<dd></dd></dt></dl>';
    foreach($cars as $key => $value)
    {echo '&bull; ', $key.''.$value;}
    ksort($cars);
    echo '<dt>Sorted Into Key Order:<dd></dd></dt>' 
    ?>
</body>
</html>