<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Project;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $publishedBlogs = Blog::where('is_published', 1)->count();
        $draftBlogs     = Blog::where('is_published', 0)->count();
        $totalProjects  = Project::count();
        $totalUsers     = User::count();

        return [
            Stat::make('Total Projects', $totalProjects)
                ->description('All portfolio projects')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Published News', $publishedBlogs)
                ->description("{$draftBlogs} draft remaining")
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info')
                ->chart([1, 5, 2, 8, 3, 10, 5]),

            Stat::make('System Administrators', $totalUsers)
                ->description('Registered accounts')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning')
                ->chart([4, 4, 4, 4, 4, 4, 4]),
        ];
    }
}
