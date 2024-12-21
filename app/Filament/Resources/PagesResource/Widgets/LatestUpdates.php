<?php

namespace App\Filament\Resources\PagesResource\Widgets;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use App\Models\TotalFisheriesProduction;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestUpdates extends BaseWidget
{
    public string $selectedTable = 'aquaculture_production'; // Default tabel

    // Listener untuk menangani perubahan dropdown
    protected $listeners = ['updateTable' => 'setSelectedTable'];

    public function setSelectedTable(string $table): void
    {
        $this->selectedTable = $table;
    }

    protected function getTableQuery(): Builder
    {
        $modelClass = match ($this->selectedTable) {
            'aquaculture_production' => \App\Models\AquacultureProduction::class,
            'total_fisheries_production' => \App\Models\TotalFisheriesProduction::class,
            default => \App\Models\AquacultureProduction::class,
        };

        return $modelClass::query()->latest('updated_at')->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('country_name')
                ->label('Country')
                ->sortable(),

            TextColumn::make('updated_at')
                ->label('Last Updated')
                ->formatStateUsing(fn ($state) => now()->diffInDays($state) <= 7 
                    ? "<span class='text-green-500'>{$state->format('d M Y H:i')}</span>"
                    : "<span class='text-red-500'>{$state->format('d M Y H:i')}</span>")
                ->html() // Mengizinkan HTML untuk style warna
                ->sortable(),
        ];
    }

    protected function getTableHeading(): ?string
    {
        return 'Latest Updates';
    }
}
