<?php
    $path = 'img/';
    if(isset($_POST['uploadfile'])) {
        // print_r($_FILES);
        if($_FILES['upload']['error'] == 0) {
            $file = $path.basename($_FILES['upload']['name']);
            move_uploaded_file($_FILES['upload']['tmp_name'], $file);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<!-- CSS -->
<style>
    body {
        width: 100%;
    }
    form {
        width: 15%;
        padding: 30px;
        display: flex;
        margin: 3% auto;
        border-radius: 10px;
        border: 5px double grey;
        background-color: whitesmoke;
    }
</style>

<body>

    <?php
        if(isset($_POST['uploadfile'])) {
            echo "<center><img src='".$file."' width='500px'></center>";
        }
    ?>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="upload">Upload Image</label></td>
            </tr>
            <tr>
                <td><input type="file" name="upload"></td>
            </tr>
            <tr>
                <input type="hidden" name="uploadfile" value="OK">
                <td><button type="submit">Upload</button></td>
            </tr>
        </table>
    </form>
    
</body>
</html>