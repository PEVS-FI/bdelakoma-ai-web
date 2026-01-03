<?php

namespace App\Models;

use App\Models\Support\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Page extends Model
{
    use HasFactory, SoftDeletes;
    use Cacheable;

    protected $fillable = [
        'title_sk',
        'title_en',
        'slug_sk',
        'slug_en',
        'photo',
        'text_sk',
        'text_en',
        'is_active',
        'show_in_menu',
        'menu_id'
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'show_in_menu' => 'boolean',
        ];
    }

    protected function cacheQuery($query)
    {
        return $query->where('is_active', '=', true);
    }

    protected static function booted(): void
    {
        static::saved(static function () {
            Cache::forget('pages.global');
            Cache::rememberForever('pages.global', static function () {
                return Page::query()
                    ->where('show_in_menu', true)
                    ->where('is_active', true)
                    ->get();
            });
        });

        static::deleted(static function () {
            Cache::forget('pages.global');
            Cache::rememberForever('pages.global', static function () {
                return Page::query()
                    ->where('show_in_menu', true)
                    ->where('is_active', true)
                    ->get();
            });
        });
    }
}
