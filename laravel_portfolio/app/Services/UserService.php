<?php

namespace App\Services;

interface UserService{

    /**
     * ユーザー情報を取得する
     */
    public function getUser();

    /**
     * ユーザー情報を保存(新規作成・更新)する
     */
    public function saveUser();

}