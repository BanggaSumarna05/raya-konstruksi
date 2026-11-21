<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Notifications\Notification;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Settings';

    protected static ?string $navigationGroup = 'System';

    protected static ?string $title = 'Pengaturan Situs';

    protected static string $view = 'filament.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'inquiry_recipient_email' => Setting::get('inquiry_recipient_email', config('mail.inquiry_recipient', 'marketing@rayakonstruksi.com')),
            'contact_email' => Setting::get('contact_email', 'info@rayakonstruksi.com'),
        ]);
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Umum')
                    ->schema([
                        Forms\Components\TextInput::make('inquiry_recipient_email')
                            ->email()
                            ->required()
                            ->label('Email Penerima Form Inquiry')
                            ->helperText('Email tujuan pengiriman pesan dari form Contact Us.'),
                        Forms\Components\TextInput::make('contact_email')
                            ->email()
                            ->label('Email Kontak (opsional)'),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        foreach ($this->form->getState() as $key => $value) {
            Setting::put($key, $value);
        }

        Notification::make()
            ->title('Settings berhasil disimpan')
            ->success()
            ->send();
    }
}
