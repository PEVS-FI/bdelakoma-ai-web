<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;


class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)
                    ->schema([
                        Section::make(__('global.team_members.form.basic_info'))
                            ->schema([
                                FileUpload::make('photo')
                                    ->label(__('global.team_members.form.photo'))
                                    ->avatar()
                                    ->disk('public')
                                    ->visibility('public'),
                                TextInput::make('title_before')
                                    ->label(__('global.team_members.form.title_before'))
                                    ->maxLength(254),
                                TextInput::make('first_name')
                                    ->label(__('global.team_members.form.first_name'))
                                    ->maxLength(254)
                                    ->autofocus()
                                    ->required(),
                                TextInput::make('surname')
                                    ->label(__('global.team_members.form.surname'))
                                    ->maxLength(254)
                                    ->required(),
                                TextInput::make('title_after')
                                    ->maxLength(254)
                                    ->label(__('global.team_members.form.title_after')),
                            ]),
                        Tabs::make(__('global.team_members.form.additional_info'))
                            ->tabs([
                                Tab::make(__('global.languages.sk'))
                                    ->schema([
                                        RichEditor::make('annotation')
                                            ->label(__('global.team_members.form.annotation'))
                                            ->maxLength(65534)
                                            ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                            ->toolbarButtons([
                                                ['bold', 'italic'],
                                            ]),
                                    ]),
                                Tab::make(__('global.languages.en'))
                                    ->schema([
                                        RichEditor::make('annotation')
                                            ->label(__('global.team_members.form.annotation'))
                                            ->maxLength(65534)
                                            ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                            ->toolbarButtons([
                                                ['bold', 'italic'],
                                            ]),
                                    ]),

                            ])
                    ])
            ]);
    }
}
