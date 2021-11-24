<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/all.min.css" rel="stylesheet">
    <link href="template/css/custom.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Recipe App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/src/admin/recipe/list_recipe.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/src/create.php">Add recipe</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (isset($_SESSION['username'])) echo $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/src/create.php">Add recipe</a></li>
                            <li><a class="dropdown-item" href="/src/admin/recipe/list_recipe.php">Manage recipe</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/src/logout.php">logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>