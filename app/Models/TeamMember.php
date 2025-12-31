<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
            'skills_sk' => 'array',
            'skills_en' => 'array',
        ];
    }

    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => collect([
                $this->title_before,
                $this->first_name,
                $this->surname,
                $this->title_after
            ])->filter()->join(' '),
        );
    }

    protected static function booted(): void
    {
        static::saved(static function () {
            Cache::forget('team_members.all');
            Cache::rememberForever('team_members.all', static function () {
                return TeamMember::query()
                    ->orderBy('surname')->orderBy('first_name')
                    ->get();
            });
        });

        static::deleted(static function () {
            Cache::forget('team_members.all');
            Cache::rememberForever('team_members.all', static function () {
                return TeamMember::query()
                    ->orderBy('surname')->orderBy('first_name')
                    ->get();
            });
        });
    }
}
