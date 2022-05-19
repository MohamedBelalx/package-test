<?php

namespace DatabaseService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;

    public static function test(){
        echo 'this is test from the fucking model2';
    }
}

