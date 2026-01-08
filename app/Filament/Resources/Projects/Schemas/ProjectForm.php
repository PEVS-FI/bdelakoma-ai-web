<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('global.team_members.form.basic_info'))
                    ->schema([
                        FileUpload::make('photo')
                            ->label(__('global.projects.form.photo'))
                            ->disk('public')
                            ->visibility('public')
                            ->directory('pages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getFilename())
                                    ->prepend('projects-'),
                            )
                            ->storeFileNamesIn('photo'),
                        Grid::make(3)
                            ->schema([
                                TextInput::make('code')
                                    ->label(__('global.projects.form.code'))
                                    ->maxLength(254),
                                TextInput::make('length_sk')
                                    ->label(__('global.projects.form.length'))
                                    ->maxLength(254),
                                Toggle::make('is_active')
                                    ->label(__('global.projects.form.is_active'))
                                    ->required(),
                            ]),
                    ]),

                Tabs::make(__('global.projects.form.basic_info'))
                    ->tabs([
                        Tab::make('🇸🇰 '.__('global.languages.sk'))
                            ->schema([
                                TextInput::make('menu_title_sk')
                                    ->required()
                                    ->label(__('global.projects.form.menu_title_sk'))
                                    ->maxLength(254),
                                TextInput::make('title_sk')
                                    ->required()
                                    ->label(__('global.projects.form.title_sk'))
                                    ->maxLength(254)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug_sk', Str::slug($state))),
                                TextInput::make('slug_sk')
                                    ->required()
                                    ->label(__('global.projects.form.slug_sk'))
                                    ->prefix(config('app.url').'/project/')
                                    ->readOnly()
                                    ->maxLength(254),
                                RichEditor::make('abstract_sk')
                                    ->label(__('global.projects.form.abstract_sk'))
                                    ->extraInputAttributes(['style' => 'min-height: 150px;'])
                                    ->maxLength(65534)
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                        ['undo', 'redo'],
                                    ]),
                                RichEditor::make('text_sk')
                                    ->label(__('global.projects.form.text_sk'))
                                    ->maxLength(16777214)
                                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                        ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                        ['table', 'attachFiles'],
                                        ['undo', 'redo'],
                                    ]),
                            ]),
                        Tab::make('🇺🇸 '.__('global.languages.en'))
                            ->schema([
                                TextInput::make('menu_title_en')
                                    ->required()
                                    ->label(__('global.projects.form.menu_title_en'))
                                    ->maxLength(254),

                                TextInput::make('title_en')
                                    ->required()
                                    ->label(__('global.projects.form.title_en'))
                                    ->maxLength(254)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug_en', Str::slug($state))),
                                TextInput::make('slug_en')
                                    ->required()
                                    ->label(__('global.projects.form.slug_en'))
                                    ->prefix(config('app.url').'/page/')
                                    ->readOnly()
                                    ->maxLength(254),
                                RichEditor::make('abstract_en')
                                    ->label(__('global.projects.form.abstract_sk'))
                                    ->extraInputAttributes(['style' => 'min-height: 150px;'])
                                    ->maxLength(65534)
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                        ['undo', 'redo'],
                                    ]),

                                RichEditor::make('text_en')
                                    ->label(__('global.projects.form.text_en'))
                                    ->maxLength(16777214)
                                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                        ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                        ['table', 'attachFiles'],
                                        ['undo', 'redo'],
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
