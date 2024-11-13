<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public static array $roles=[
        ['name' => 'admin', 'display_name' => 'Administrador', 'description' => 'Administrador de la aplicación – Puede hacer y deshacer todo'],
        ['name' => 'creator', 'display_name' => 'Creador', 'description' => 'Puede crear post y modificarlos mientras estén en modo draft.'],
        ['name' => 'editor', 'display_name' => 'Editor', 'description' => 'Puede editar un post solo si está en modo pending'],
        ['name' => 'validator', 'display_name' => 'Verificador', 'description' => 'Puede cambiar el estado de un post de pending a published.'],
        ['name' => 'eraser', 'display_name' => 'Eliminador', 'description' => 'Puede borrar un post en cualquier momento.'],
        ['name' => 'reader', 'display_name' => 'Lector', 'description' => 'Solo puede acceder al listado de los posts y a cada uno de ellos de manera individual.'],
    ];
        /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$roles as $role) {
            Role::create($role);
        }
    }
}
