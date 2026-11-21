<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficeResource\Pages;
use App\Models\Office;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OfficeResource extends Resource
{
    protected static ?string $model = Office::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Offices / Kantor';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Kantor')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(100)
                            ->label('Nama Kantor')
                            ->placeholder('Head Office, Workshop, Surabaya Office...'),
                        Forms\Components\TextInput::make('icon')
                            ->maxLength(50)
                            ->default('bi-geo-alt')
                            ->label('Ikon Bootstrap Icons')
                            ->helperText('Kelas ikon bootstrap-icons, mis: bi-building, bi-tools, bi-geo-alt'),
                        Forms\Components\Textarea::make('address')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull()
                            ->label('Alamat')
                            ->placeholder('Gunakan Enter untuk baris baru'),
                        Forms\Components\TextInput::make('phone')
                            ->tel()
                            ->maxLength(30)
                            ->label('Telepon (opsional)'),
                        Forms\Components\TextInput::make('maps_url')
                            ->url()
                            ->maxLength(500)
                            ->label('Link Google Maps (tombol "View Map")'),
                        Forms\Components\Textarea::make('embed_url')
                            ->rows(3)
                            ->columnSpanFull()
                            ->label('URL Embed Maps (iframe, opsional)'),
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
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Kantor'),
                Tables\Columns\TextColumn::make('address')
                    ->limit(50)
                    ->label('Alamat'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telepon'),
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
            'index' => Pages\ListOffices::route('/'),
            'create' => Pages\CreateOffice::route('/create'),
            'edit' => Pages\EditOffice::route('/{record}/edit'),
        ];
    }
}
