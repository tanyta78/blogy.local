<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Shareboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link"
                        href="<?php echo ROOT_URL; ?>">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="<?php echo ROOT_URL; ?>shares">Shares</a>
                </li>
               
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item ">
                    <a class="nav-link"
                        href="<?php echo ROOT_URL; ?>users/login">Login </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="<?php echo ROOT_URL; ?>users/register">Register</a>
                </li>
               
            </ul>
            
        </div>
    </nav>

    <main role="main" class="container">
        <div class="row justify-content-center">
            <?php require($view);?>
        </div>

    </main><!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>


</body>

</html>