<?php

namespace App\Filament\Resources\TeamMembers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class TeamMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_before')
                    ->label(__('global.team_members.form.title_before')),
                TextColumn::make('first_name')
                    ->label(__('global.team_members.form.first_name')),
                TextColumn::make('surname')
                    ->label(__('global.team_members.form.surname')),
                TextColumn::make('title_after')
                    ->label(__('global.team_members.form.title_after')),
                ImageColumn::make('photo')
                    ->disk('public')
                    ->visibility('public')
                    ->circular()
                    ->label(__('global.team_members.form.photo')),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
