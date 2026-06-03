<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Muhammad Aliff Al Fitroh',
            'email' => 'alif.fitroh1@gmail.com',
            'message' => 'hubungi saya',
        ]);
    }
}
