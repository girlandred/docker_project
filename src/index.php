<?php
include("./app/controllers/recipe.php");
$recipes = array();
if (isset($_POST['search-term'])) {
    $recipesTitle = "You searched for '" . $_POST['search-term'] . "'";
    $recipes = search($_POST['search-term']);
} else {
    $recipes = getRecepies();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipe</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
    <?php include("/app/nav_bars/navbar.php"); ?>
    <div class="content container clearfix">
        <div class="row">
            <?php foreach ($recipes as $recipe) : ?>
                <div class="col-12 col-md-6 col-lg-4 recipe clearfix">
                    <img src="<?php echo '../img/' . $recipe['image']; ?>" alt="" class="recipe-image">
                    <div class="recipe-preview">
                        <h2><a href="one_recipe.php?id=<?php echo $recipe['id']; ?>">
                                <?php echo $recipe['recipe_title']; ?>
                            </a></h2>
                        <i class="far fa-calendar"> <?php echo date('F j, Y, g:i a', strtotime($recipe['date'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($recipe['recipe_ingredients'], 0, 150) . '...'); ?>
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="one_recipe.php?id=<?php echo $recipe['id']; ?>" class="btn read-more btn-link" type="button">Read More ...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>