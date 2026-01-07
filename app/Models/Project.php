<?php

namespace App\Models;

use App\Models\Support\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use Cacheable;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'menu_title_sk',
        'menu_title_en',
        'title_sk',
        'title_en',
        'length_sk',
        'length_en',
        'slug_sk',
        'slug_en',
        'abstract_sk',
        'abstract_en',
        'text_sk',
        'text_en',
        'is_active',
        'photo',
    ];

    public function cacheQuery($query)
    {
        return $query->where('is_active', '=', true);
    }
}
