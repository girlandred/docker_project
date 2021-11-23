<?php

function validateRecipe($recipe)
{
    $errors = array();

    if (empty($recipe['recipe_title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($recipe['recipe_ingredients'])) {
        array_push($errors, 'recipe_ingredients is required');
    }

    if (empty($recipe['recipe_instructions'])) {
        array_push($errors, 'recipe_instructions is required');
    }


    $existingRecipe = selectOne('recipe', ['recipe_title' => $recipe['recipe_title']]);
    if ($existingRecipe) {
        if (isset($recipe['update-recipe']) && $existingRecipe['id'] != $recipe['id']) {
            array_push($errors, 'recipe with that title already exists');
        }

        if (isset($recipe['add-recipe'])) {
            array_push($errors, 'recipe with that title already exists');
        }
    }

    return $errors;
}
