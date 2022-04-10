<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'code'=> 'ADM',
                'label'=> 'Administrador',
            ],
            [
                'code'=> 'PRE',
                'label'=> 'Presidente',
            ],
            [
                'code'=> 'TES',
                'label'=> 'Tesorero',
            ],
            [
                'code'=> 'MIE',
                'label'=> 'Miembro',
            ],
            [
                'code'=> 'INV',
                'label'=> 'Invitado',
            ],
        ];
        foreach ($roles as $role) {
            Roles::create($role);
        }
    }
}
