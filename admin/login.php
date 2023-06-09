
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container mt-4">
        
        <form action="auth.php" method="post">
        <h1>Вход</h1>
            <input type="text" class="form-control" name="login"  id="login" placeholder="login"><br>
            <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"><br>
            <button class="btn btn-success" type="submit">Login</button><br>
        </form>
    </div>
</body>
</html>