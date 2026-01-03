<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * @throws FileNotFoundException
     */
    public function run(): void
    {
        $pages = [
            [
                'title_sk' => 'Výskum',
                'title_en' => 'Research',
                'slug_sk' => Str::slug('Výskum'),
                'slug_en' => Str::slug('Research'),
                'photo_source' => 'research.png',
                'is_active' => true,
                'show_in_menu' => true,
                'menu_id' => 1,
            ]
        ];

        foreach ($pages as $pageData) {
            $photoPath = null;
            $sourcePath = resource_path('images/pages/' . $pageData['photo_source']);

            if (File::exists($sourcePath)) {
                $filename = $pageData['photo_source'];
                Storage::disk('public')->put('pages/' . $filename, File::get($sourcePath));
                $photoPath = 'pages/' . $filename;
            }

            Page::factory()->create([
                'title_sk' => $pageData['title_sk'],
                'title_en' => $pageData['title_en'],
                'slug_sk' => $pageData['slug_sk'],
                'slug_en' => $pageData['slug_en'],
                'photo' => $photoPath,
                'is_active' => $pageData['is_active'],
                'show_in_menu' => $pageData['show_in_menu'],
                'menu_id' => $pageData['menu_id'],
            ]);
        }
    }
}
