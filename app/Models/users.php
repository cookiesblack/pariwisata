<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = "tb_user";

    static function getUserbyId($id){
        $data = users::where(["id"=>$id])->selectRaw("user_name")->get();
        return $data[0]->name;
    }
}
