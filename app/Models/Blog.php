<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','excerpt','image','description'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
