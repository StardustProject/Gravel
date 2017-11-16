<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 关联情绪
     *
     * @param
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function emotions()
    {
        return $this->belongsToMany('App\Emotion', 'articles_emotions');
    }
}
