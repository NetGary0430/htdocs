<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action_handler</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $mail = $_Post['mail'];
    $comment = $_POST['comment'];
    echo "<p>Thanks for this comment $name...</p>";
    echo "<p><i>$comment</i></p>";
    echo "<p></p>"
    ?>
</body>
</html>