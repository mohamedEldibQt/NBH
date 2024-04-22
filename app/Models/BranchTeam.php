<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BranchTeam extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];
    protected $fillable = ['branch_id','branch_team_img','branch_team_position','branch_team_name','branch_team_description'];

}
