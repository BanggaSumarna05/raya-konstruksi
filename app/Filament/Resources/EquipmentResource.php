<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipmentResource\Pages;
use App\Models\Equipment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EquipmentResource extends Resource
{
    protected static ?string $model = Equipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'Equipment Fleet';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Detail Unit')
                    ->schema([
                        Forms\Components\TextInput::make('brand')
                            ->required()
                            ->maxLength(100)
                            ->label('Merek')
                            ->placeholder('HYUNDAI, KOBELCO, CATERPILLAR...'),
                        Forms\Components\TextInput::make('type')
                            ->required()
                            ->maxLength(100)
                            ->label('Tipe Alat')
                            ->placeholder('Excavator, Crawler Crane, Dump Truck...'),
                        Forms\Components\TextInput::make('model')
                            ->required()
                            ->maxLength(100)
                            ->label('Model')
                            ->placeholder('SK200, D6GC, ...'),
                        Forms\Components\TextInput::make('years')
                            ->maxLength(50)
                            ->label('Tahun')
                            ->placeholder('Contoh: 2015-2019 atau 2024'),
                        Forms\Components\TextInput::make('qty')
                            ->numeric()
                            ->required()
                            ->default(1)
                            ->minValue(1)
                            ->label('Jumlah Unit'),
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Urutan Tampil'),
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
                Tables\Columns\TextColumn::make('brand')
                    ->searchable()
                    ->sortable()
                    ->label('Merek'),
                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->label('Tipe Alat'),
                Tables\Columns\TextColumn::make('model')
                    ->searchable()
                    ->label('Model'),
                Tables\Columns\TextColumn::make('years')
                    ->label('Tahun'),
                Tables\Columns\TextColumn::make('qty')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->color('info')
                    ->label('Unit'),
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
            'index' => Pages\ListEquipments::route('/'),
            'create' => Pages\CreateEquipment::route('/create'),
            'edit' => Pages\EditEquipment::route('/{record}/edit'),
        ];
    }
}
