<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * @var array
     */
    protected $fillable =[
        'user_id',
        'schedule_name',
        'schedule_detail',
        'start_time',
        'end_time',
        'remind_at',
        'reminded_at'
    ];

    //ユーザーモデルへのリレーション
    public function user(){
        return $this->belongsTo('User');
    }
}
