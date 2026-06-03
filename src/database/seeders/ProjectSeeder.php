<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Website Mini Game Berbasis Laravel',
            'description' => 'Website mini game berbasis Laravel yang menyediakan permainan sederhana seperti Tic Tac Toe dengan sistem login, register, dashboard pengguna, dan panel admin berbasis Filament.',
            'analysis' => 'Project ini dibuat untuk membangun platform mini game berbasis web yang dapat dimainkan langsung melalui browser tanpa instalasi tambahan. Sistem memiliki autentikasi pengguna, dashboard statistik bermain, serta panel admin untuk pengelolaan data game dan pengguna. Pengembangan dilakukan menggunakan metode prototype agar fitur dan tampilan dapat dievaluasi secara bertahap.',
            'architecture' => 'Arsitektur sistem menggunakan konsep MVC (Model View Controller) dengan Laravel sebagai backend framework. Frontend dibangun menggunakan Blade Template, Tailwind CSS, dan JavaScript untuk antarmuka interaktif. Database menggunakan MySQL untuk penyimpanan data pengguna dan game. Environment development dijalankan menggunakan Docker dan Laravel Sail, sedangkan panel admin dibangun menggunakan Filament.',
            'tech_stack' => 'Laravel, PHP, MySQL, Tailwind CSS, JavaScript, Docker, Laravel Sail, Filament, Blade Template',
            'image' => null,
        ]);
    }
}
