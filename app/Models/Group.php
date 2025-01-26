<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'level',
        'allow_guest_access',
        'status',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'group_permission');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_group');
    }

}
