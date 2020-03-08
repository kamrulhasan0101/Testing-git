<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    protected $fillable = ['title','excerpt','body','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
