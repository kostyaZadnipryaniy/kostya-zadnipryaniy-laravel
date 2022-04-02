<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tail extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Category::class, 'category_tails', 'tail_id', 'category_id');
    }

}
