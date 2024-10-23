<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hr_skill_categories';
    protected $fillable = [
        'name',
        'skillType'
    ];
}
