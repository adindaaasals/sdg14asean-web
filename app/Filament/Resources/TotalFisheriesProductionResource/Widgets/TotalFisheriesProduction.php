<?php

namespace App\Filament\Resources\TotalFisheriesProductionResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class TotalFisheriesProduction extends BaseWidget
{
    protected function getStats(): array
    {
        $totalProduction = DB::table('total_fisheries_production')
            ->sum('total_fisheries_production_2022');

        return [
            Stat::make('Total Fisheries Production', $totalProduction)
                ->description('Data for 2022')
                ->color('info'),
        ];
    }
}
