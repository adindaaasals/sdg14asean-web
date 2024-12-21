<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($latestUpdates as $update)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $update->country_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap {{ now()->diffInDays($update->updated_at) <= 7 ? 'text-green-500' : 'text-red-500' }}">
                {{ $update->updated_at->format('d M Y H:i') }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
