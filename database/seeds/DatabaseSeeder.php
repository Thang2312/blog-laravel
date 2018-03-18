<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(userName::class);
    }
}

class userName extends Seeder
{
  function run()
  {
    for($i = 1;$i < 11;$i++){
      DB::table('users')->insert(
        ['name'=>str_random(3),'email'=>str_random(3).'@gmail.com','password'=>bcrypt('matkhau')]
      );
    }
  }
}
