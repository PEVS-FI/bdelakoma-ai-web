<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('global.team_members.form.basic_info'))
                    ->schema([
                        FileUpload::make('photo')
                            ->label(__('global.team_members.form.photo'))
                            ->avatar()
                            ->disk('public')
                            ->visibility('public')
                            ->directory('team-members')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('team-member-'),
                            )
                            ->storeFileNamesIn('photo'),
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
                        Tab::make('🇸🇰 '.__('global.languages.sk'))
                            ->schema([
                                RichEditor::make('annotation_sk')
                                    ->label(__('global.team_members.form.annotation'))
                                    ->maxLength(65534)
                                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                    ->toolbarButtons([
                                        ['bold', 'italic'],
                                    ]),
                                Repeater::make('skills_sk')
                                    ->label(__('global.team_members.form.skills'))
                                    ->schema([
                                        TextInput::make('name')
                                            ->maxLength(254)
                                            ->label(__('global.team_members.form.skill_name'))
                                            ->required(),
                                    ]),
                            ]),
                        Tab::make('🇺🇸 '.__('global.languages.en'))
                            ->schema([
                                RichEditor::make('annotation_en')
                                    ->label(__('global.team_members.form.annotation'))
                                    ->maxLength(65534)
                                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                    ->toolbarButtons([
                                        ['bold', 'italic'],
                                    ]),
                                Repeater::make('skills_en')
                                    ->label(__('global.team_members.form.skills'))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('global.team_members.form.skill_name'))
                                            ->maxLength(254)
                                            ->required(),
                                    ]),
                            ]),

                    ]),
            ]);
    }
}
