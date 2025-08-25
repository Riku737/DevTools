<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title . " - DevTools" ?? "DevTools"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <header class="navbar border-bottom py-2 navbar-expand-lg sticky-top bg-white">

        <div class="container-lg">

            <a class="navbar-brand fw-bold" href="<?php echo url_for('index.php'); ?>">
                DevTools
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('/index.php'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('/index.php'); ?>">Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('/index.php'); ?>">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="<?php echo url_for('login.php'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="<?php echo url_for('suggest.php'); ?>">Suggest a resource</a>
                    </li>
                </ul>
            </div>

        </div>

    </header>