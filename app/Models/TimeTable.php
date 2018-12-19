<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeTable extends Model
{
    
    use SoftDeletes;
    
    protected $table = 'timetables';
    protected $dates = ['deleted_at'];
    protected $appends = ['like_count'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'place', 'hash_tag', 'start_at', 'end_at'];
    
    /**
     * 1:1
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function like()
    {
        return $this->hasOne('App\Models\Like', 'timetable_id', 'id');
    }
    
    public function getLikeCountAttribute()
    {
        return $this->like->count;
    }
}
