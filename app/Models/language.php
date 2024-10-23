<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'hr_languages';
    protected $fillable = [
        'name'
    ];
}
