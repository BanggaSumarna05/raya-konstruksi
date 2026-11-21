<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageSocialLinks extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-share';

    protected static ?string $navigationLabel = 'Social Media';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $title = 'Social Media';

    protected static string $view = 'filament.pages.manage-social-links';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'instagram_url' => Setting::get('instagram_url', 'https://www.instagram.com/raya.konstruksi'),
            'threads_url' => Setting::get('threads_url', 'https://www.threads.net/@raya.konstruksi'),
            'linkedin_url' => Setting::get('linkedin_url', 'https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all'),
        ]);
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tautan Sosial Media')
                    ->description('Tautan ini dipakai di panel Instagram (News), panel LinkedIn dan Threads (Careers), serta ikon di footer.')
                    ->schema([
                        Forms\Components\TextInput::make('instagram_url')
                            ->url()
                            ->required()
                            ->label('URL Instagram')
                            ->placeholder('https://www.instagram.com/raya.konstruksi'),
                        Forms\Components\TextInput::make('threads_url')
                            ->url()
                            ->required()
                            ->label('URL Threads')
                            ->placeholder('https://www.threads.net/@raya.konstruksi'),
                        Forms\Components\TextInput::make('linkedin_url')
                            ->url()
                            ->required()
                            ->label('URL LinkedIn')
                            ->placeholder('https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all'),
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
            ->title('Tautan sosial media berhasil disimpan')
            ->success()
            ->send();
    }
}
