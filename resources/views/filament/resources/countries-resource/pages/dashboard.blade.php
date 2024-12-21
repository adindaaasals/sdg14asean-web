<x-filament-panels::page>
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-1">
            @livewire(\App\Filament\Widgets\TotalCountries::class)
        </div>
        <div class="col-span-1">
            @livewire(\App\Filament\Resources\TotalFisheriesProductionResource\Widgets\TotalFisheriesProduction::class)
        </div>
    
        <div class="col-span-2">
            @livewire(\App\Filament\Resources\PagesResource\Widgets\LatestUpdates::class)
        </div>
    
        <div class="col-span-1">
            @livewire(\App\Filament\Resources\AquacultureProductionResource\Widgets\AquacultureTrend::class)
        </div>
        <div class="col-span-1">
            @livewire(\App\Filament\Resources\TotalFisheriesProductionResource\Widgets\TopContributorsFisheries::class)
        </div>
    </div>
</x-filament-panels::page>
