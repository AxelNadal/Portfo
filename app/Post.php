<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'titre', 'contenu'
    ];

    public function user()
    {
        return $this->belongsTo("App\User","user_id","id");
    }
}
