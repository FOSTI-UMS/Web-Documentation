<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function materi()
    {
        return $this->hasMany(Materi::class, 'category_id');
    }
}
