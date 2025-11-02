<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id', 'id');
    }
}
