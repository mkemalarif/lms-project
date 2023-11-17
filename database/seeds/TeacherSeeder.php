<?php

use App\User;
use App\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesAndPermissionsSeeder::class);
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $guru1 = User::create([
            "name" => "Khurairah S.pd",
            "username" => "khurairah",
            "email" => "khurairah@gmail.com",
            "password" => bcrypt("guru"),
            "created_at" => date("d-m-Y"),
        ]);
        $guru1->assignRole('Teacher');

        $guru2 = User::create([
            "name" => "Hamrullah S.pd",
            "username" => "hamrullah",
            "email" => "hamrullah@gmail.com",
            "password" => bcrypt("guru"),
            "created_at" => date("d-m-Y"),
        ]);
        $guru2->assignRole('Teacher');

        DB::table('teachers')->insert([
            [
                'user_id'           => $guru1->id,
                'gender'            => 'male',
                'phone'             => '6969540014',
                'dateofbirth'       => '1990-04-11',
                'current_address'   => '63 Walnut Hill Drive',
                'permanent_address' => '385 Emma Street',
                'created_at'        => date("Y-m-d")
            ]
        ]);
        
    }
}
