<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = ['snippet', 'human_date'];
    protected $with = ['images', 'author'];
    /** @mixin \Eloquent */
    public function getBodyAttribute($value){
        return str_replace("\n", '<br>', $value);
    }

    public function getSnippetAttribute(){
        return substr($this->body, 0, 280);
    }
    public function getHumanDateAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
    

}
