<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return $this->image ? "/storage/" . $this->image : '/storage/profile/faZiRKnuanhM7DQ63KuzrsLaL3gh2f7qi87viASy.jpeg';
    }

    public function user()
    {
        return $this->belongsto(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
