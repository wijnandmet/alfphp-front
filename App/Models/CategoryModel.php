<?php

namespace App\Models;

use ALF\Database\Model;

class CategoryModel extends Model
{
    private $table = 'categories';

    private $columns = [
        'title' => ['type' => 'varchar', 'maxlength' => 255, 'minlength' => 0, 'nullable' => false, 'default' => null],
    ];


    public function test()
    {
        return $this->hasOne(TestModel::class);
    }
}