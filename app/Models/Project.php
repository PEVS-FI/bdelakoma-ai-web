<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Project extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'length',
        'code',
        'annotation',
    ];

    protected static function booted(): void
    {
        static::saved(static function () {
            Cache::forget('projects.all');
            Cache::rememberForever('projects.all', static function () {
                return Project::query()
                    ->get();
            });
        });

        static::deleted(static function () {
            Cache::forget('projects.all');
            Cache::rememberForever('projects.all', static function () {
                return Project::query()
                    ->get();
            });
        });
    }
}
