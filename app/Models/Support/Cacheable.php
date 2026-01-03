<?php

namespace App\Models\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait Cacheable
{
    protected static function bootCacheable(): void
    {
        static::saved(static function ($model) {
            $model->internalRefreshCache();
        });

        static::deleted(static function ($model) {
            $model->internalRefreshCache();
        });
    }

    private function internalRefreshCache(): void
    {
        $key = Str::snake(Str::pluralStudly(class_basename($this))).'.all';

        Cache::forget($key);
        Cache::rememberForever($key, function () {
            return $this->cacheQuery(static::query())->get();
        });
    }

    public static function refreshCache(): void
    {
        (new static)->internalRefreshCache();
    }

    protected function cacheQuery($query)
    {
        return $query;
    }
}
