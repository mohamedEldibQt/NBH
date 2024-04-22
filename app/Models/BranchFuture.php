<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BranchFuture extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['branch_id','branch_future_name','branch_future_description','branch_future_img'];
}
