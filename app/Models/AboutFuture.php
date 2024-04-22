<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AboutFuture extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['future_img','future_name','future_description'];

}
