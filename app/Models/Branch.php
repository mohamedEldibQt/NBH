<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['branch_name','branch_description','slug'];
    public function images()
    {
        return $this->hasMany(BranchImage::class, 'branch_id');
    }
    public function teams()
    {
        return $this->hasMany(BranchTeam::class, 'branch_id');
    }
    public function futures()
    {
        return $this->hasMany(BranchFuture::class, 'branch_id');
    }
}
