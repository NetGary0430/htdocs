<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
    # Statements to be inserted here
    $number = 2; $letter = 'B';

    switch ($number)
        {
            case 1 : echo 'Number is One<br>'; break;
            case 2 : echo 'Number is Two<br>'; break;
            case 3 : echo 'Number is Three<br>'; break;
            default : echo 'Number is Unrecognized<br>';
        }
    
    switch ($letter)
    {
        case 'A' : echo 'Letter is A<br>'; break;
        case 'B' : echo 'Letter is B<br>'; break;
        case 'C' : echo 'Letter is C<br>'; break;
        default : echo 'Letter is Unrecognized<br>';
    } 
    ?>
</body>
</html>