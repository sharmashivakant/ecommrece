<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable =[
            'user_id','first_name','last_name','phone','address','state','city','country','image','pincode'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function order(){
        return $this->hasOne(Order::class,'id','user_id');
    }

    public function payment(){
        return $this->hasOne(Payment::class,'id','payment_id');
    }
    
}



