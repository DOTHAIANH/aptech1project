<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h3>Resister</h3>
    <form action="login_submit.php" method="POST">
        <table>
            <tr>
                <td>Ten dang nhap: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mat Khau: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colpan="2">
                <button type="submit" name="submit">Dang nhap</button>
                <button type="reset">Lam moi</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>