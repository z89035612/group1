<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
<<<<<<< HEAD
                    'display_name' => __('voyager::seeders.roles.admin'),
                ])->save();
=======
                'display_name' => __('voyager::seeders.roles.admin'),
            ])->save();
>>>>>>> cherry
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
<<<<<<< HEAD
                    'display_name' => __('voyager::seeders.roles.user'),
                ])->save();
=======
                'display_name' => __('voyager::seeders.roles.user'),
            ])->save();
>>>>>>> cherry
        }
    }
}
