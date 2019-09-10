<?php

namespace App;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Model;

class Movietrailer extends Model
{
   protected $table="movietrailers";
      protected $primarykey="id";
      // protected $primarykey="catstatus";
       protected $fillable=['title',
       'image',
       'description',
       'durition',
     'type',
 'date','link'];





    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
    }

}