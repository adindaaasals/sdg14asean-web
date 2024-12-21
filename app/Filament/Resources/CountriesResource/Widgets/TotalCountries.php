<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalCountries extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Countries', 10)
                ->description('Number of countries in ASEAN')
                ->color('success') // Warna hijau untuk memberikan kesan positif
                ->icon('heroicon-s-globe-alt') // Menambahkan ikon globe dari Heroicons
                ->extraAttributes(['class' => 'text-lg font-bold']), // Menambahkan gaya tambahan pada teks
        ];
    }
}
