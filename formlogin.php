<!DOCTYPE html>
<html>
    <head>
        <title>Formulario Login</title>
        <meta charset ="UTF-8">
        <link rel ="stylesheet" type ="text/css" href ="stylesheet.css">
    </head>
    <body>
        <form method="POST">
            <h1><?php if ($error) echo ERROR_MESSAGE; ?></h1><br>
            Username: <input name="user" type="text"><br>
            Password: <input name="pass" type="text"><br><br>
            <input type="submit" name="login" value="submit">
        </form>
    </body>
</html>
