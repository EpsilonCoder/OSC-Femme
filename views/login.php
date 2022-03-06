<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="card  col-5 offset-3">

        <h5 class="card-header info-color bg-black text-white text-center py-4">
            <strong>Connexion</strong>
        </h5>
        <div class="card-body px-lg-5 pt-0">
            <form action="" id="login-form" method="POST">
                <div class="form-group">
                    <label for="username" class="text-black">username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="text-black">password</label>
                    <input type="password" name="password" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <input type="submit" name="LoginSubmit" class="btn btn-success btn-md" value="submit">
                </div>
                <div class="text-right" id="reg_link">
                    <a href="?register=true" class="text-black">Inscrivez vous ici</a>
                </div>

            </form>
        </div>

    </div><br><br><br><br>