<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">

    <title>Rumah Project</title>
</head>
<body>
    <section>
        <form action="../crud/validation.php" method="post">
            <div class="form-login">
                <h2>Login</h2>
                <div class="input-box">
                    <input type="text" name="admin" placeholder="Username"><br>
                </div>
                <div class="input-box">
                    <input type="password" name="pw_admin" placeholder="Password"><br>
                </div>
                <div class="btn">
                    <input type="submit" value="Login" name="submit">
                </div>
            </div>
        </form>
    </section>
</body>
</html>