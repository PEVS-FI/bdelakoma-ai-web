<?php

namespace App\Models;

use App\Models\Support\Cacheable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use HasFactory, SoftDeletes;
    use Cacheable;

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
        static::addGlobalScope('order', static function (Builder $builder) {
            $builder->orderBy('surname')->orderBy('first_name');
        });
    }
}
