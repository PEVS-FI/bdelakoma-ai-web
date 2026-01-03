<?php

namespace App\Filament\Resources\Pages\Schemas;

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

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('global.team_members.form.basic_info'))
                    ->schema([
                        FileUpload::make('photo')
                            ->label(__('global.pages.form.photo'))
                            ->disk('public')
                            ->visibility('public')
                            ->directory('pages')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getFilename())
                                    ->prepend('pages-'),
                            )
                            ->storeFileNamesIn('photo'),
                        Grid::make(3)
                            ->schema([
                                Toggle::make('is_active')
                                    ->label(__('global.pages.form.is_active'))
                                    ->required(),
                                Toggle::make('show_in_menu')
                                    ->label(__('global.pages.form.show_in_menu'))
                                    ->required(),
                                TextInput::make('menu_id')
                                    ->requiredIf('show_in_menu', true)
                                    ->prefix(__('global.pages.form.menu_id_short'))
                                    ->hiddenLabel()
                                    ->maxLength(254),
                            ]),
                    ]),

                Tabs::make(__('global.pages.form.basic_info'))
                    ->tabs([
                        Tab::make('🇸🇰 '.__('global.languages.sk'))
                            ->schema([
                                TextInput::make('title_sk')
                                    ->required()
                                    ->label(__('global.pages.form.title_sk'))
                                    ->maxLength(254)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug_sk', Str::slug($state))),
                                TextInput::make('slug_sk')
                                    ->required()
                                    ->label(__('global.pages.form.slug_sk'))
                                    ->prefix(config('app.url').'/page/')
                                    ->readOnly()
                                    ->maxLength(254),
                                RichEditor::make('text_sk')
                                    ->label(__('global.pages.form.text_sk'))
                                    ->maxLength(65534)
                                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                    ->toolbarButtons([
                                        ['h2', 'h3'],
                                        ['bold', 'italic'],
                                        ['link', 'code'],
                                        ['undo', 'redo'],
                                    ]),
                            ]),
                        Tab::make('🇺🇸 '.__('global.languages.en'))
                            ->schema([
                                TextInput::make('title_en')
                                    ->required()
                                    ->label(__('global.pages.form.title_en'))
                                    ->maxLength(254)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug_en', Str::slug($state))),
                                TextInput::make('slug_en')
                                    ->required()
                                    ->label(__('global.pages.form.slug_en'))
                                    ->prefix(config('app.url').'/page/')
                                    ->readOnly()
                                    ->maxLength(254),
                                RichEditor::make('text_en')
                                    ->label(__('global.pages.form.text_en'))
                                    ->maxLength(65534)
                                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                                    ->toolbarButtons([
                                        ['h2', 'h3'],
                                        ['bold', 'italic'],
                                        ['link', 'code'],
                                        ['undo', 'redo'],
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
