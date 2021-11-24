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
    <title>Admin Section - Edit recipes</title>

    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/all.min.css" rel="stylesheet">
    <link href="template/css/custom.css" rel="stylesheet">
</head>

<body>
    <?php include(ROOT_PATH . "/app/nav_bars/navbar_a.php"); ?>

      <div class="container">
        <div class="row">
            <div class="content col-12">
                <h2 class="page-title">Edit recipes</h2>
                <?php include(ROOT_PATH . "/app/validate/formErrors.php"); ?>

 
                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="mb-3">
                        <label for="recipe_title" class="form-label">Recipe title</label>
                        <input type="text" name="recipe_title" id="recipe_title" value="<?php echo $recipe_title ?>" class="text-input form-control">
                    </div>
                    <div class="mb-3">
                        <label for="recipe_ingredients" class="form-label">Ingredients</label>
                        <textarea name="recipe_ingredients" id="recipe_ingredients"  class="form-control"><?php echo $recipe_ingredients ?></textarea>
                    </div>
                    <div class="mb-3">    
                        <label for="recipe_instructions" class="form-label">Instruction</label>
                        <textarea name="recipe_instructions" id="recipe_instructions"  class="form-control"><?php echo $recipe_instructions ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="text-input form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="update-recipe" class="btn btn-primary">Update recipe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>