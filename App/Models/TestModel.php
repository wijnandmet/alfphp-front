<?php

namespace App\Models;

use ALF\Database\Model;

class TestModel extends Model
{
    private string $table = 'tests';

    private array $columns = [
        'title' => ['type' => 'varchar', 'maxlength' => 255, 'minlength' => 0, 'nullable' => false, 'default' => null],
    ];

    public function category() {
        return $this->hasOne(CategoryModel::class);
    }
}