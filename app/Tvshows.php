<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;
class Tvshows extends Model
{
    
   protected $table="tvshows";
      protected $primarykey="id";
      // protected $primarykey="catstatus";
       protected $fillable=['title',
       'image',
       'description',
       
    
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
