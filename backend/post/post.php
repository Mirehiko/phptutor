<?php 
    var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php include_once '../nav.php' ?>

    <main>
        <form action="post.php" class="form" method="POST">
            <input type="email" class="form-control" name="email" id="email" placeholder="email">
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
            <input type="submit" value="Отправить">
        </form>
    </main>
</body>
</html>