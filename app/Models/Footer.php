<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Footer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['logo','footer_description','location','phone_num','contact_email'];

}
