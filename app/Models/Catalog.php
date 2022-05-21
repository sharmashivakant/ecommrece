<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $fillable =[
                    'user_id','name','cata_image','title','price','size'

    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id','id');
    }
}
