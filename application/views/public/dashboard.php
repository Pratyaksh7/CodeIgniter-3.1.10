<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>DASHBOARD</title>
</head>
<body>
    <div class="container-fluid " >
        <div class="rows">
        <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
            <ul class="navbar-nav " >
                <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/user/signup') ?>">SignUp</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/user/userlogin') ?>">Login</a>
                </li>
              
            </ul>
        </nav>
        </div>
    </div>
</body>
</html>