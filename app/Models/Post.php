<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    // protected $fillable = ['title', 'content', 'image'] // الحقول المسموح الوصول الى قواعد البيانات;
    protected $guarded = []; // الحقول الممنوع الوصول لقواعد البيانات
}
