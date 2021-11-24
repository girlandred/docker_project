<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/recipe.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/all.min.css" rel="stylesheet">
    <link href="template/css/custom.css" rel="stylesheet">
    <title>Admin Section - Manage recipe</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/nav_bars/navbar_a.php"); ?>


    <div class="container">
        <div class="row">

            <div class="content col-12">
                <h2 class="page-title">Manage recipe</h2>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th colspan="3">Action recipe</th>
                    </thead>
                    <tbody>
                        <?php foreach ($recipes as $key => $recipe) : ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $recipe['recipe_title'] ?></td>
                                <td><a href="./edit.php?id=<?php echo $recipe['id']; ?>" class="edit">edit</a></td>
                                <td><a href="./edit.php?delete_id=<?php echo $recipe['id']; ?>" class="delete">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </div>

    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>