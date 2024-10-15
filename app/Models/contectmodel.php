<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contectmodel extends Model
{

    use HasFactory;
    protected $table = 'contect';


    public function user(){
         return $this->belongsTo(User::class);
    }
}
