<?php

// namespace App\Filament\Resources\TotalFisheriesProductionResource\Widgets;

// use Filament\Widgets\StatsOverviewWidget as BaseWidget;
// use Filament\Widgets\StatsOverviewWidget\Stat;
// use Illuminate\Support\Facades\DB;

// class TopContributorsFisheries extends BaseWidget
// {
//     protected function getStats(): array
//     {
//         // Query untuk mendapatkan 3 negara penyumbang terbesar
//         $data = \App\Models\CaptureFisheriesProduction::query()
//             ->select('country_name', DB::raw('SUM(capture_fisheries_production_2022) as total_production'))
//             ->groupBy('country_name')
//             ->orderBy('total_production', 'desc')
//             ->limit(3)
//             ->get();

//         // Map data ke dalam format Stat
//         // $stats = $topCountries->map(function ($country) {
//         //     return Stat::make($country->country_name, number_format($country->total_production))
//         //         ->description('Fisheries Production')
//         //         ->color('success'); // Bisa diubah menjadi 'danger', 'warning', atau lainnya
//         // });

//         return [
//             Stat::make('Top 1', $data[0]->country_name . ': ' . $data[0]->total_production ?? 'N/A'),
//             Stat::make('Top 2', $data[1]->country_name . ': ' . $data[1]->total_production ?? 'N/A'),
//             Stat::make('Top 3', $data[2]->country_name . ': ' . $data[2]->total_production ?? 'N/A'),
//         ];
//     }
// }
