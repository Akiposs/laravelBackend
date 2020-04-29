<?php

namespace App\Services\Impl;

use App\Services\UserService;



class UserServiceImpl implements UserService
{
    /**
     * ユーザー情報を取得する
     */
    public function getUser(){
        return "test3だよ";
    }

    /**
     * ユーザー情報を保存(新規作成・更新)する
     */
    public function saveUser(){
        //
    }
}