<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>sinzene</title>
</head>
<body style="font-family: sans-serif; background-color: rgb(43, 43, 43);">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input style="color: rgb(255, 255, 255); border-radius: 5px;" type="file" name="file" />
        <button style="border: none; border-radius: 5px; width: 100px; height: 30px;" type="submit" name="upload">upload</button>
    </form>
</body>
</html>
<?php
$files = scandir("uploads");
for($a = 2; $a < count($files); $a++){
    ?>
        <p>
            <a style="color: rgb(0, 119, 255);" download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>
    <?php
}