<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
    $page_title = "Register";
    include('includes/header.html');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        # Statements to be inserted here (Steps 3-10).
        require ('../connect_db.php');
        $errors = array();

        if(empty($_POST['first_name']))
        { $errors[] = 'Enter your first name.'; }
        else
        { $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));}

        if(empty($_POST['last_name']))
        { $errors[] = 'Enter your last name.'; }
        else
        { $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));}

        if(empty($_POST['email']))
        { $errors[] = 'Enter your email address.'; }
        else
        { $e = mysqli_real_escape_string($dbc, trim($_POST['email']));}

        if(!empty($_POST['pass1']))
        {   if ($_POST['pass1'])
            $errors[] = 'Passwords do not match.'; }
        else
        { $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));}
    }
    ?>
    
</body>
</html>