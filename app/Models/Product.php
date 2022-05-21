<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use BinaryCats\Sku\HasSku;
use Str;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'images',
        'details',
        'category_id',
        'inventory_id',
        'size',
        'cost',
        'material',
        'short_desc',
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            //
                $model->slug  = Str::of($model->name)->slug('-').Carbon::now()->timestamp;
        });
    }

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function inventory(){
        return $this->hasOne(Inventory::class, 'id', 'inventory_id');
    }

    public function order(){
        return $this->hasOne(Order::class,'user_id','user_id');
    }
}
