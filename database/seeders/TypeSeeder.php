<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();
        $allTypes = [
            'HTML',
            'CSS',
            'JAVASCRIPT',
            'VUE',
            'SQL',
            'PHP',
            'LARAVEL'
        ];
        foreach ($allTypes as $singleTypes) {
            $singleTypes = Type::create([
                'title' => $singleTypes,
                'slug' => str()->slug($singleTypes)
            ]);

        }
    }
}
