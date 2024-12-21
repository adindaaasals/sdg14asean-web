<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\TotalCountries::class,
            \App\Filament\Resources\TotalFisheriesProductionResource\Widgets\TotalFisheriesProduction::class,
            \App\Filament\Resources\PagesResource\Widgets\LatestUpdates::class,
            // \App\Filament\Resources\AquacultureProductionResource\Widgets\AquacultureTrend::class,
            \App\Filament\Resources\TotalFisheriesProductionResource\Widgets\TopContributorsFisheries::class,
        ];
    }
}
