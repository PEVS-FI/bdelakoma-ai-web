<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class TeamMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_before',
        'first_name',
        'surname',
        'title_after',
        'annotation_sk',
        'annotation_en',
        'skills_sk',
        'skills_en',
        'photo',
    ];

    protected function casts(): array
    {
        return [
            'skills' => 'array',
        ];
    }

    protected static function booted(): void
    {
        static::saved(static function () {
            Cache::forget('team_members.all');
            Cache::rememberForever('team_members.all', static function () {
                return TeamMember::query()
                    ->get();
            });
        });

        static::deleted(static function () {
            Cache::forget('team_members.all');
            Cache::rememberForever('team_members.all', static function () {
                return TeamMember::query()
                    ->get();
            });
        });
    }
}
