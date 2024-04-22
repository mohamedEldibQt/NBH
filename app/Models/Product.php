<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['partner_id','product_name','product_img'];

    public function partner(){
            return $this->belongsTo(Partner::class,'partner_id','id');
    }
}
