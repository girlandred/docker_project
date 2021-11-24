<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/recipe.php");

if (isset($_GET['id'])) {
    $recipe = selectOne('recipe', ['id' => $_GET['id']]);
}
$recipes = selectAll('recipe');

?>
<!DOCTYPE html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<html lang="en">

<head>
    <title><?php echo $recipe['recipe_title']; ?></title>

    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/all.min.css" rel="stylesheet">
    <link href="/template/css/custom.css" rel="stylesheet">
</head>

<body>

    <?php include(ROOT_PATH . "/app/nav_bars/navbar.php"); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 content clearfix">
                <div class="main-content-wrapper">
                    <div class="main-content single">
                        <h1 class="recipe-title">
                            <?php echo $recipe['recipe_title']; ?>
                        </h1>
                        <img src="<?php echo BASE_URL . '/template/img/' . $recipe['image']; ?>" alt="" class="recipe-image" />
                        <div class="recipe-content">
                            <?php echo html_entity_decode($recipe['recipe_ingredients']); ?>
                        </div>

                        <div class="recipe-instructions">
                            <?php echo html_entity_decode($recipe['recipe_instructions']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 200vh;"></div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>