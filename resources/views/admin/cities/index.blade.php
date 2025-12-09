@extends('admin.layouts.app')
@section('title', 'Cities')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Cities & Shipping</h1>
    <a href="{{ route('admin.cities.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add City</a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">City Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Area Type</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Shipping Cost</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @foreach($cities as $city)
            <tr>
                <td class="px-6 py-4">{{ $city->name }}</td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs rounded {{ $city->area_type == 'inside' ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800' }}">
                        {{ ucfirst($city->area_type) }}
                    </span>
                </td>
                <td class="px-6 py-4">৳{{ number_format($city->shipping_cost, 2) }}</td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs rounded {{ $city->status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $city->status ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.cities.edit', $city) }}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                    <form action="{{ route('admin.cities.destroy', $city) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $cities->links() }}
</div>
@endsection
