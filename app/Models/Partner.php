<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['code','partner_name','partner_s_description','partner_description','partner_img'];

    public function products()
    {
        return $this->hasMany(Product::class, 'partner_id');
    }
}
