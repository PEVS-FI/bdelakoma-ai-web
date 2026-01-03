<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_'.locale())
                    ->label(__('global.pages.form.title_'.locale())),
                ImageColumn::make('photo')
                    ->disk('public')
                    ->visibility('public')
                    ->circular()
                    ->label(__('global.pages.form.photo')),
                ToggleColumn::make('is_active')
                    ->label(__('global.pages.form.is_active')),
                ToggleColumn::make('show_in_menu')
                    ->label(__('global.pages.form.show_in_menu')),
                TextColumn::make('menu_id')
                    ->color('primary')
                    ->label(__('global.pages.form.menu_id')),

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
