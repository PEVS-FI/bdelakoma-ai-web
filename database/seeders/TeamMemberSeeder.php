<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeamMemberSeeder extends Seeder
{
    /**
     * @throws FileNotFoundException
     */
    public function run(): void
    {
        $members = [
            [
                'title_before' => 'RNDr.',
                'first_name' => 'Ján',
                'surname' => 'Lacko',
                'title_after' => 'PhD.',
                'annotation_sk' => null,
                'annotation_en' => null,
                'skills_sk' => null,
                'skills_en' => null,
                'photo_source' => 'jan_lacko.jpg',
            ],
            [
                'title_before' => null,
                'first_name' => 'Oskar',
                'surname' => 'Frešo',
                'title_after' => 'BSc.',
                'annotation_sk' => null,
                'annotation_en' => null,
                'skills_sk' => null,
                'skills_en' => null,
                'photo_source' => 'oskar_freso.jpg',
            ],
            [
                'title_before' => 'Ing. Bc.',
                'first_name' => 'Pavol',
                'surname' => 'Frešo',
                'title_after' => null,
                'annotation_sk' => null,
                'annotation_en' => null,
                'skills_sk' => null,
                'skills_en' => null,
                'photo_source' => 'pavol_freso.jpg',
            ],
        ];

        foreach ($members as $memberData) {
            $photoPath = null;
            $sourcePath = resource_path('images/team-members/' . $memberData['photo_source']);

            if (File::exists($sourcePath)) {
                $filename = $memberData['photo_source'];
                Storage::disk('public')->put('team-members/' . $filename, File::get($sourcePath));
                $photoPath = 'team-members/' . $filename;
            }

            TeamMember::create([
                'title_before' => $memberData['title_before'],
                'first_name' => $memberData['first_name'],
                'surname' => $memberData['surname'],
                'title_after' => $memberData['title_after'],
                'annotation_sk' => $memberData['annotation_sk'],
                'annotation_en' => $memberData['annotation_en'],
                'skills_sk' => $memberData['skills_sk'],
                'skills_en' => $memberData['skills_en'],
                'photo' => $photoPath,
            ]);
        }
    }
}
