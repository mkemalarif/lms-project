<?php

use App\User;
use App\Teacher;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);
        // $this->call(CourseSeeder::class);
        // $this->call(Teacher::class);
        // $this->call(Student::class);
        $users = factory(App\User::class,7)->create()->each(function($user){
            $user->assignRole('Teacher');
        });
        $teachers = factory(App\Teacher::class,7)->create();

        $class = factory(App\Grade::class,7)->create();
        $parent = factory(App\Parents::class,7)->create();
        $student = factory(App\Student::class,30)->create();

        // $users2 = factory(App\User::class,10)->create()->each(function($user){
        //     $user->assignRole('Student');
        // });

        $user = User::create([
            'name'          => 'Admin',
            'username'      => 'admin',
            'email'         => 'admin@mail.com',
            'password'      => bcrypt('admin'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user3 = User::create([
            'name'          => 'Parent',
            'email'         => 'parent@mail.com',
            'username'      => 'parent',
            'password'      => bcrypt('parent'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Parent');

        $user4 = User::create([
            'name'          => 'Student',
            'username'      => 'student',
            'email'         => 'student@mail.com',
            'password'      => bcrypt('student'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Student');

        DB::table('parents')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '0147854545',
                'current_address'   => '46 Custer Street',
                'permanent_address' => '46 Custer Street',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('grades')->insert([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => 'One',
            'class_description' => 'class one'
        ]);

        DB::table('students')->insert([
            [
                'user_id'           => $user4->id,
                'parent_id'         => 1,
                'roll_number'       => 1,
                "class_id"          => 1,
                'gender'            => 'male',
                'phone'             => '7801256654',
                'dateofbirth'       => '2007-04-11',
                'current_address'   => '103 Pine Tree Lane',
                'permanent_address' => '103 Pine Tree Lane',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

    }
}
