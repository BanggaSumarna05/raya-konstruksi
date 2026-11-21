<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThreadsPostResource\Pages;
use App\Models\ThreadsPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ThreadsPostResource extends Resource
{
    protected static ?string $model = ThreadsPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationLabel = 'Threads Posts';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Threads Post')
                    ->schema([
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->url()
                            ->maxLength(500)
                            ->rule(fn () => function (string $attribute, $value, $fail) {
                                if (! preg_match(ThreadsPost::URL_PATTERN, (string) $value)) {
                                    $fail('Link harus berupa post Threads (contoh: https://www.threads.net/@raya.konstruksi/post/POST_ID).');
                                }
                            })
                            ->label('Link Post')
                            ->placeholder('https://www.threads.net/@raya.konstruksi/post/POST_ID')
                            ->helperText('Tempel link post Threads (Share > Copy link). Post akan tampil sebagai embed di halaman Careers.')
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
                    ->label('Link Post'),
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
            'index' => Pages\ListThreadsPosts::route('/'),
            'create' => Pages\CreateThreadsPost::route('/create'),
            'edit' => Pages\EditThreadsPost::route('/{record}/edit'),
        ];
    }
}
