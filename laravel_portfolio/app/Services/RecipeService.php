<?php

namespace App\Services;

interface RecipeService{

    /**
     * 複数のレシピ情報を取得
     */
    public static function getRecipeList();

    /**
     * 単体のレシピ情報を取得
     */
    public static function getRecipe();

    /**
     * 単体のレシピ情報を保存(新規作成・更新)
     */
    public static function saveRecipe();

    /**
     * 単体のレシピ情報を削除
     */
    public static function deleteRecipe();

}