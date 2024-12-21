@extends('layouts.app')

@section('content')
<div class="text-center mt-12 font-bold text-2xl">
    <h1>ASEAN MAPS</h1>
</div>

{{-- Include buttonMaps --}}
<div class="inline-flex rounded-md mt-10 px-8 md:px-0 xl:px-16" role="group">
    <button
        type="button"
        data-api-url="{{ url('/api/aquaculture-production') }}"
        data-method="linear" 
        class="rounded-s-lg border-l border-b border-t border-black bg-transparent px-6 md:px-12 lg:px-20 xl:px-20 py-2 md:py-5 xl:py-3 text-xs md:text-sm font-medium hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75]">
        Aquaculture Production
    </button>
    <button
        type="button"
        data-api-url="{{ url('/api/capture-fisheries-production') }}"
        data-method="stddev" 
        class="border-l border-b border-t border-black bg-transparent px-8 md:px-12 lg:px-20 xl:px-20 py-2 md:py-5 xl:py-3 text-xs md:text-sm font-medium hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75]">
        Capture Fisheries Production
    </button>
    <button
        type="button"
        data-api-url="{{ url('/api/marine-protected-areas') }}"
        data-method="linear" 
        class="border-l border-b border-t border-black bg-transparent px-8 md:px-12 lg:px-20 xl:px-20 py-2 md:py-5 xl:py-3 text-xs md:text-sm font-medium hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75]">
        Marine Protected Areas
    </button>
    <button
        type="button"
        data-api-url="{{ url('/api/total-fisheries-production') }}"
        data-method="stddev" 
        class="rounded-e-lg border border-black bg-transparent px-8 md:px-14 lg:px-24 xl:px-20 py-4 md:py-3 text-xs md:text-sm font-medium hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75]">
        Total Fisheries Production
    </button>
</div>

<div id="indicatorTitle" class="mt-6 pl-20 text-lg font-bold">
    
</div>

{{-- <div id="statistics" class="mt-4 p-4 bg-gray-100 rounded shadow">
    <h3 class="text-lg font-bold">Statistics:</h3>
    <ul id="statisticsList" class="list-disc pl-5"></ul>
</div> --}}

<div class="flex items-center text-center space-x-4 mt-2 pl-20">
    <label for="yearSelect" class="text-lg font-bold text-black">Select Years:</label>
    <select id="yearSelect" class="block p-2 border border-gray-300 rounded">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select>
</div>

{{-- Area Peta --}}
<div class="relative h-screen px-10 py-5 z-0">
    <div id="map" class="h-[calc(100vh-100px)] w-full"></div>
    <div class="text-right text-xs">
        <p>Source of data: The World Bank Group</p>
    </div>
    <div id="statistics" class="absolute top-4 left-10 bg-white p-4 shadow-lg rounded-md z-10">
        Loading statistics...
    </div>
</div>

<div id="legend" class="absolute bottom-4 right-0 bg-white p-4 shadow-lg rounded-md z-10">
    
</div>

{{-- Tambahkan dependensi Leaflet --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-choropleth"></script>
<script src="{{ asset('js/mapScript.js') }}"></script>

@endsection
