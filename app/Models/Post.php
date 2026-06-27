<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'content', 'image'] // الحقول المسموح الوصول الى قواعد البيانات;
    protected $guarded = []; // الحقول الممنوع الوصول لقواعد البيانات
}
