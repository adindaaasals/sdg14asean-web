@extends('layouts.app')

@section('content')
<div class="grid grid-cols-2 gap-6">
    <!-- Baris 1 -->
    <div class="col-span-1">
        @livewire('total-countries')
    </div>
    <div class="col-span-1">
        @livewire('total-fisheries-production')
    </div>

    <!-- Baris 2 -->
    <div class="col-span-1">
        @livewire('latest-updates')
    </div>
    <div class="col-span-1">
        @livewire('aquaculture-production-trends')
    </div>

    <!-- Baris 3 -->
    <div class="col-span-1">
        @livewire('top-contributors')
    </div>
    <div class="col-span-1">
        <div id="mpaMap" style="height: 300px;"></div>
    </div>
</div>
@endsection
