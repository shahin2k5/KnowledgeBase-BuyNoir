<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;


class Article extends Model
{
    use HasFactory, Loggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'article_category_id',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(ArticleCategory::class,'article_category_id','id');
    }

}
