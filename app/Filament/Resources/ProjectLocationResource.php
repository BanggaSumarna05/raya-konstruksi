<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectLocationResource\Pages;
use App\Models\ProjectLocation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectLocationResource extends Resource
{
    protected static ?string $model = ProjectLocation::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationLabel = 'Lokasi Peta';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Marker Peta Proyek')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(100)
                            ->label('Nama Lokasi')
                            ->placeholder('Sumba, Jakarta, Pekanbaru...'),
                        Forms\Components\TextInput::make('lat')
                            ->required()
                            ->numeric()
                            ->minValue(-90)
                            ->maxValue(90)
                            ->step(0.0000001)
                            ->label('Latitude'),
                        Forms\Components\TextInput::make('lng')
                            ->required()
                            ->numeric()
                            ->minValue(-180)
                            ->maxValue(180)
                            ->step(0.0000001)
                            ->label('Longitude'),
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Urutan'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif / Tampilkan')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('lat')
                    ->label('Lat'),
                Tables\Columns\TextColumn::make('lng')
                    ->label('Lng'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Urutan'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif'),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status')
                    ->trueLabel('Aktif')
                    ->falseLabel('Nonaktif'),
            ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectLocations::route('/'),
            'create' => Pages\CreateProjectLocation::route('/create'),
            'edit' => Pages\EditProjectLocation::route('/{record}/edit'),
        ];
    }
}
