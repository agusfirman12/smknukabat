<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['created_at'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
