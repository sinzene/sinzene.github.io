<?php 
    if (isset($_POST['upload'])) {
        echo "pressed";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
    <form action="?" method="post" enctype="multipart/form-data">
        <label>upload file</label>
        <p><input type="file" name="file"></p>
        <p><input type="submit" name="upload" value="Upload Image"></p>
    </form>
</body>
</html>