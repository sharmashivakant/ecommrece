<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;
    protected $fillable =['user_id','product_num','product_id','order_id','address_id','amount','products','payment_type','payment_status','status'];


    public function product(){
            return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function profile(){
        return $this->hasOne(Profile::class, 'user_id', 'user_id');
    }

    public function address(){
            return $this->hasOne(Address::class,'id','address_id');
    }

    public function payment(){
        return $this->hasOne(Payment::class,'order_id','id');
    }
}
