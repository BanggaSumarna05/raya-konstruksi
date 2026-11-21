<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkedinPostResource\Pages;
use App\Models\LinkedinPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LinkedinPostResource extends Resource
{
    protected static ?string $model = LinkedinPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationLabel = 'LinkedIn Posts';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('LinkedIn Post')
                    ->schema([
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->url()
                            ->maxLength(500)
                            ->rule(fn () => function (string $attribute, $value, $fail) {
                                if (! preg_match(LinkedinPost::URL_PATTERN, (string) $value)) {
                                    $fail('Gunakan URL embed LinkedIn (contoh: https://www.linkedin.com/embed/feed/update/urn:li:share:...).');
                                }
                            })
                            ->label('Embed URL')
                            ->placeholder('https://www.linkedin.com/embed/feed/update/urn:li:share:...')
                            ->helperText('Open the post on LinkedIn, choose Embed this post, and paste the iframe src value.')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Urutan Tampil'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif / Tampilkan')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('url')
                    ->limit(70)
                    ->searchable()
                    ->label('Embed URL'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Urutan'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif'),
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
            'index' => Pages\ListLinkedinPosts::route('/'),
            'create' => Pages\CreateLinkedinPost::route('/create'),
            'edit' => Pages\EditLinkedinPost::route('/{record}/edit'),
        ];
    }
}
