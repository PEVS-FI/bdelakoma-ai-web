<?php

namespace App\Filament\Resources\TeamMembers;

use App\Filament\Resources\TeamMembers\Pages\CreateTeamMember;
use App\Filament\Resources\TeamMembers\Pages\EditTeamMember;
use App\Filament\Resources\TeamMembers\Pages\ListTeamMembers;
use App\Filament\Resources\TeamMembers\Schemas\TeamMemberForm;
use App\Filament\Resources\TeamMembers\Tables\TeamMembersTable;
use App\Models\TeamMember;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Users;

    public static function form(Schema $schema): Schema
    {
        return TeamMemberForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamMembersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeamMembers::route('/'),
            'create' => CreateTeamMember::route('/create'),
            'edit' => EditTeamMember::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getRecordTitle(?Model $record): ?string
    {
        return $record->full_name ?? null;
    }

    public static function getGlobalSearchResultTitle(Model $record): string
    {
        return $record->full_name;
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['first_name', 'surname'];
    }

    public static function getModelLabel(): string
    {
        return __('global.team_members.form.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('global.team_members.form.plural');
    }

    protected static bool $hasTitleCaseModelLabel = false;
}
