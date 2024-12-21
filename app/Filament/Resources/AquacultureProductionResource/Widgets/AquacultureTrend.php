<?php

// namespace App\Filament\Resources\AquacultureProductionResource\Widgets;

// use Filament\Widgets\ChartWidget;
// use Illuminate\Support\Facades\DB;


// class AquacultureTrend extends ChartWidget
// {
//     protected static ?string $heading = 'Aquaculture Production Trends';
//     public ?int $selectedCountry = null; // Properti untuk negara yang dipilih

//     protected function getData(): array
//     {
//         $query = \App\Models\AquacultureProduction::query()
//             ->select(
//                 'country_name',
//                 DB::raw('COALESCE(SUM(aquaculture_production_2020), 0) as production_2020'),
//                 DB::raw('COALESCE(SUM(aquaculture_production_2021), 0) as production_2021'),
//                 DB::raw('COALESCE(SUM(aquaculture_production_2022), 0) as production_2022')
//             );

//         // Filter berdasarkan negara yang dipilih
//         if ($this->selectedCountry) {
//             $query->where('id', $this->selectedCountry);
//         }

//         $data = $query->groupBy('country_name')->orderBy('country_name')->get();

//         // Format data untuk chart
//         $datasets = [];
//         $labels = ['2020', '2021', '2022'];

//         foreach ($data as $row) {
//             $datasets[] = [
//                 'label' => $row->country_name,
//                 'data' => [
//                     $row->production_2020,
//                     $row->production_2021,
//                     $row->production_2022,
//                 ],
//             ];
//         }

//         return [
//             'datasets' => $datasets,
//             'labels' => $labels,
//         ];
//     }

//     protected function getType(): string
//     {
//         return 'line';
//     }

//     protected function getOptions(): array
//     {
//         return [
//             'responsive' => true,
//             'interaction' => [
//                 'mode' => 'index',
//                 'intersect' => false,
//             ],
//             'plugins' => [
//                 'legend' => [
//                     'display' => true,
//                     'position' => 'top',
//                 ],
//             ],
//         ];
//     }
// }
