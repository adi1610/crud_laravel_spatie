<?php

// namespace Database\Seeders;
// use App\Models\Penduduk;
// use Database\Seeders\PendudukSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(PendudukSeeder::class);
    }
}
