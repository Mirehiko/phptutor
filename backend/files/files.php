<?php 
    // echo getcwd();
    // echo '<br>';
    // get_current_user();
    // echo '<br>';
    // $processUser = posix_getpwuid(posix_geteuid());
    // print $processUser['name'];
    // echo '<br>';
    // var_dump($_FILES);

    $message = '';
    $root_dir = '/application/public/';
    $media = 'media';

    $file = trim(mb_strtolower($_FILES['file']['name']));
    $tmp_name = $_FILES['file']['tmp_name'];

    if (!file_exists($root_dir.$media)) {
        mkdir($root_dir.$media, 0775, true);
    }

    $filename = "$media/$file";
    $filename = $root_dir.$filename;
    move_uploaded_file($tmp_name, $filename);

    if (file_exists($filename) && !empty($_FILES)) {
        $message = "Image $file successfuly uploaded";
    }
    else {
        $message = "Some problems with upload file";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php include_once '../nav.php' ?>
    <main>
        <form action="#" method="POST" class="form" enctype="multipart/form-data">
            <div class="message">
                <?php echo $message ?>
            </div>
            <input type="file" name="file" id="file">
            <input type="submit" value="Отправить">
        </form>
    </main>
</body>
</html>