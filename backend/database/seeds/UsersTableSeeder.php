<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $this->seeder();
    }
    /**
     * 添加负责人（1名）
     */
    private function seeder(){
        $user=new User();
        $user->name='admin';
        $user->email='test@163.com';
        $user->password=bcrypt('admin');
        $user->save();
    }
    
}
