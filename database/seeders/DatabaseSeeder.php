<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Vérifier si le rôle 'admin' existe déjà
        $adminRole = Role::where('name', 'admin')->first();
        if (!$adminRole) {
            // Créer le rôle 'admin' s'il n'existe pas encore
            $adminRole = Role::create(['name' => 'admin']);
            // Attribuer toutes les permissions disponibles au rôle 'admin'
            $adminRole->givePermissionTo(Permission::all());
        }

        // Vérifier si le rôle 'user' existe déjà
        $agentRole = Role::where('name', 'user')->first();
        if (!$agentRole) {
            // Créer le rôle 'user' s'il n'existe pas encore
            $agentRole = Role::create(['name' => 'user']);
            // Attribuer toutes les permissions disponibles au rôle 'user'
            $agentRole->givePermissionTo(Permission::all());
        }

        // Créer un utilisateur et attribuer le rôle 'admin'
        $admin = User::create([
            'name' => 'hicham',
            'email' => 'hicham@gmail.com',
            'password' => bcrypt('hicham*24')
        ]);
        $admin->assignRole($adminRole);

        // Créer un utilisateur et attribuer le rôle 'user'
        $agent = User::create([
            'name' => 'ghizlane',
            'email' => 'ghizlane@gmail.com',
            'password' => bcrypt('ghizlane*24')
        ]);
        $agent->assignRole($agentRole);
    }
}
