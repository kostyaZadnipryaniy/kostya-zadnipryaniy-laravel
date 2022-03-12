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
    protected $fillable = ['comment', 'value'];

    use SoftDeletes;
}
