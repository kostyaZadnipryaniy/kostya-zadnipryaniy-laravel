<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Front extends Model
{
    use HasFactory;
    protected $table = 'fronts';
    protected $guarded = ['value'];
    protected $fillable = ['comment', 'value', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    use SoftDeletes;
}
