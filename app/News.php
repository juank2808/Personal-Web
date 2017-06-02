<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }
    public function scopeSearch($query, $title){
        return $query->where('title','LIKE',"%$title%");
        
    }
}
