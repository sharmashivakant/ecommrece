<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';

    protected $fillable=[
                'user_id','address_line1','city','postal_code','country','mobile','notes'

    ];

    public function profile()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
