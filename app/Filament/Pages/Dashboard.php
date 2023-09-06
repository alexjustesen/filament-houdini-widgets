<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BlogPostsChart;
use App\Filament\Widgets\EventsChart;
use App\Filament\Widgets\StatsOverview;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{
    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('button')
                ->label('Action button')
                ->action(fn () => $this->doTheThing()),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            BlogPostsChart::make(),
            EventsChart::make(),
        ];
    }

    protected function doTheThing(): void
    {
        Notification::make()
            ->title('The things has been done!')
            ->success()
            ->send();
    }
}
