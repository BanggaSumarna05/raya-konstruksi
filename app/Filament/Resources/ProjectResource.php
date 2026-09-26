<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Proyek')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Judul Proyek')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) =>
                                $set('slug', Str::slug($state))
                            ),
                        Forms\Components\TextInput::make('slug')
                            ->maxLength(255)
                            ->label('Slug (URL)')
                            ->helperText('Auto-generated dari judul. Bisa diubah manual.'),
                        Forms\Components\TextInput::make('client')
                            ->maxLength(255)
                            ->label('Klien / Stakeholder'),
                        Forms\Components\TextInput::make('duration')
                            ->maxLength(255)
                            ->label('Waktu Pengerjaan')
                            ->placeholder('Contoh: Jan 2025 – Mar 2025'),
                        Forms\Components\TextInput::make('location')
                            ->required()
                            ->maxLength(255)
                            ->label('Lokasi'),
                        Forms\Components\TextInput::make('service_type')
                            ->required()
                            ->maxLength(255)
                            ->label('Jenis Service')
                            ->placeholder('Contoh: Construction & Fabrication'),
                        Forms\Components\Textarea::make('description')
                            ->rows(4)
                            ->label('Deskripsi Proyek')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Foto')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('projects')
                            ->visibility('public')
                            ->label('Foto Cover / Utama')
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('gallery')
                            ->image()
                            ->disk('public')
                            ->directory('projects/gallery')
                            ->visibility('public')
                            ->multiple()
                            ->reorderable()
                            ->maxFiles(30)
                            ->label('Galeri Foto (bisa upload banyak sekaligus)')
                            ->helperText('Upload foto-foto dokumentasi proyek. Bisa drag & drop untuk urutkan.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Cover'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Judul'),
                Tables\Columns\TextColumn::make('client')
                    ->searchable()
                    ->label('Klien'),
                Tables\Columns\TextColumn::make('location')
                    ->searchable()
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('service_type')
                    ->searchable()
                    ->label('Jenis Service'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
