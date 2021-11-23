<?php

include("./src/app/database/logic.php");
include("./src/app/validate/rights.php");
include("./src/app/validate/validateRecipe.php");

$table = 'recipe';

$errors = array();
$recipes = selectAll($table);

$id = "";
$recipe_title = "";
$recipe_ingredients = "";
$recipe_instructions = "";

if (isset($_GET['id'])) {
    $recipe = selectOne($table, ['id' => $_GET['id']]);
    $id = $recipe['id'];
    $recipe_title = $recipe['recipe_title'];
    $recipe_ingredients = $recipe['recipe_ingredients'];
    $recipe_instructions = $recipe['recipe_instructions'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    header("location: ./list_recipe.php");
    exit();
}

if (isset($_POST['add-recipe'])) {
    $errors = validateRecipe($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination =  "../img/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "recipe image required");
    }
    if (count($errors) == 0) {
        unset($_POST['add-recipe']);
        $_POST['recipe_ingredients'] = htmlentities($_POST['recipe_ingredients']);
        $_POST['recipe_instructions'] = htmlentities($_POST['recipe_instructions']);
        $recipe_id = create($table, $_POST);
        if (($_SESSION['admin'])) {
            header("location: ./list_recipe.php");
        } else {
            header("location: ./index.php");
        }        exit();
    } else {
        $recipe_title = $_POST['recipe_title'];
        $recipe_ingredients = $_POST['recipe_ingredients'];
        $recipe_instructions = $_POST['recipe_instructions'];
    }
}

if (isset($_POST['update-recipe'])) {
    adminOnly();
    $errors = validateRecipe($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination =  "../img/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "recipe image required");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-recipe'], $_POST['id']);
        $_POST['recipe_ingredients'] = htmlentities($_POST['recipe_ingredients']);
        $_POST['recipe_instructions'] = htmlentities($_POST['recipe_instructions']);
        $recipe_id = update($table, $id, $_POST);
        header("location: ./list_recipe.php");
    } else {
        $recipe_title = $_POST['recipe_title'];
        $recipe_ingredients = $_POST['recipe_ingredients'];
        $recipe_instructions = $_POST['recipe_instructions'];
    }
}
