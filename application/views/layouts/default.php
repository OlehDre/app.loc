<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <title><?php echo $title; ?></title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg" style="background-color: #02dbb7;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/addEmployer.html">addNewEmployer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/depts.html">Depts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/allEmployers.html">AllEmployers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <?php echo $content; ?>
    </div>
</main>

<footer>

</footer>

</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
">

</script>
</html>