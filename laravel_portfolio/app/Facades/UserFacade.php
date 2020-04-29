<?php

namespace App\Facades;

use App\Services\UserService;
use Illuminate\Support\Facades\Facade;


class UserFacade extends Facade
{
    /**
     * ユーザー情報を取得する
     */
    public static function getUser(){
        $service = app(UserService::class);
        $answer = $service->getUser();
        return $answer;
    }

    /**
     * ユーザー情報を保存(新規作成・更新)する
     */
    public static function saveUser(){
        //
    }

}
