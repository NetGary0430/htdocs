<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset_handler</title>
</head>
<body>
    <?php
    if (isset($_POST['defintion']))
    {
        $definition = $_POST['definition'];
    }
    else
    {
        $definition = NULL;
    }
    
    # Response statements to be inserted here
    if ($definition != NULL)
    {
        if ($definition = 'Scripting')
            {echo "$definition is Incorrect";}
        else
            {echo "$definition is Correct";}
        else
            
    }
    ?>
</body>
</html>