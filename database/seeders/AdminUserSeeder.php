<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder {
    public function run() {
        User::updateOrCreate(
            ['email' => 'admin@trendora.test'],
            ['name' => 'Admin','password' => Hash::make('password'), 'is_admin' => true]
        );
    }
}
