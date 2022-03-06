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

    <div id="register">
        <h3 class="text-center text-white pt-5">
            Register Form
        </h3>

        <div class="card  col-5 offset-3">

            <h5 class="card-header info-color bg-black text-white text-center py-4">
                <strong>Inscription</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">
                <form action="" id="register-form" method="POST">
                    <div class="form-group">
                        <label for="username" class="text-black">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-black">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div><br>

                    <div class="form-group">
                        <input type="submit" name="registerSubmit" class="btn btn-success btn-md" value="submit">
                    </div><br><br>
                    <div class="text-right" id="reg_link">
                        <a href="?login=true" class="text-black">Se connecter</a>
                    </div>

                </form>
            </div>
        </div>

    </div>