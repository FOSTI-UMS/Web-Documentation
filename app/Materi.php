<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = "materi";
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
