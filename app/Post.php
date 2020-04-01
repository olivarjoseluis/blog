<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['fecha_publicado'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
