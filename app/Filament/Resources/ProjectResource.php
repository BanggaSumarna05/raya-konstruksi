<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Proyek'),
                Forms\Components\TextInput::make('client')
                    ->maxLength(255)
                    ->label('Klien / Stakeholder'),
                Forms\Components\TextInput::make('duration')
                    ->maxLength(255)
                    ->label('Waktu Pengerjaan'),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255)
                    ->label('Lokasi'),
                Forms\Components\TextInput::make('service_type')
                    ->required()
                    ->maxLength(255)
                    ->label('Jenis Service'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('projects')
                    ->visibility('public')
                    ->label('Gambar Utama'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Judul'),
                Tables\Columns\TextColumn::make('client')
                    ->searchable()
                    ->label('Klien'),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->label('Durasi'),
                Tables\Columns\TextColumn::make('location')
                    ->searchable()
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('service_type')
                    ->searchable()
                    ->label('Jenis Service'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
