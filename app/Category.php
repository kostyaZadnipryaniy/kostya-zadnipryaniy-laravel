<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function fronts(){
        return $this->belongsTo(Front::class, 'front_id', 'id');
    }

    public function tails(){
        return $this->belongsTo(Tail::class, 'category_tails', 'category_id', 'tail_id');
    }

}
