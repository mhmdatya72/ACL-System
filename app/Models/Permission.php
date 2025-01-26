<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['control', 'function', 'title'];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_permission');
    }
    
}
