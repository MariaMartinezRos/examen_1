<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    public static function create(array $role): Role
    {
        $newRole = new self();
        $newRole->name = $role['name'];
        $newRole->display_name = $role['display_name'];
        $newRole->description = $role['description'];
        $newRole->save();

        return $newRole;
    }
}
