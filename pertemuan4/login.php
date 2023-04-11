<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Form</title>
</head>

<!-- CSS -->
<style>
    body {
        width: 100%;
    }
    form {
        width: 15%;
        padding: 30px;
        background-color: whitesmoke;
        display: flex;
        margin: 3% auto;
        border-radius: 10px;
    }
</style>

<body>

    <!-- awal validasi form -->
    <?php
        
        if(isset($_GET['username'])) {
            $user = $_GET['username'];
            if($user == "") {
                echo "<script>
                    alert('Username atau Password Anda salah!')
                </script>";
            }
        }

        
    ?>
    <!-- akhir validasi -->

    <form action="index.php" method="GET" autocomplete="off">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username"></td>
            </tr>
            <td></td>
        
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <td></td><td></td>

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="login">Login</button>
                    <button type="reset">Reset</button>
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>