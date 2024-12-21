@extends('filament::page')

@section('content')
    <h1>halo</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 py-6">
        <!-- Widget 1 -->
        <div class="col-span-1">
            @livewire('filament.widgets.total-countries')
        </div>

        <!-- Widget 2 -->
        <div class="col-span-1">
            @livewire('filament.resources.total-fisheries-production-resource.widgets.total-fisheries-production')
        </div>

        <!-- Widget 3 -->
        <div class="col-span-2">
            @livewire('filament.resources.pages-resource.widgets.latest-updates')
        </div>

        <!-- Widget 4 -->
        <div class="col-span-1">
            @livewire('filament.resources.aquaculture-production-resource.widgets.aquaculture-trend')
        </div>

        <!-- Widget 5 -->
        <div class="col-span-1">
            @livewire('filament.resources.total-fisheries-production-resource.widgets.top-contributors-fisheries')
        </div>
    </div>
@endsection
