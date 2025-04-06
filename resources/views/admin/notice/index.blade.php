@extends('admin.layouts.app')
@section('content')
    <div class="p-6" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">
                Institute Notices
            </h2>
            <a href="{{ route('admin.notice.create') }}"
                class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                <i class="fas fa-plus mr-2"></i> Add Notice
            </a>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif


        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Featured
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Date
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Attachment
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($notices as $notice)
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ ($notices->currentPage() - 1) * $notices->perPage() + $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $notice->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $notice->isFeatured }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $notice->created_at->format('d-M-Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($notice->file)
                        <a href="{{ asset('' . $notice->file) }}" target="_blank"
                            class="text-blue-600 hover:text-blue-900">
                            View PDF
                        </a>
                        @else
                        No Attachment
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="{{ route('admin.notice.action', ['action' => 'edit', 'id' => encrypt($notice->id)]) }}"
                        class="text-indigo-600 hover:text-indigo-900 mr-3">
                        <i class="fas fa-edit"></i>
                        </a>
                        <a onclick="confirm('Are You Sure You Want To Delete?')" href="{{ route('admin.notice.action', ['action' => 'delete', 'id' => encrypt($notice->id)]) }}" class="text-red-600 hover:text-red-900">
                        <i class="fas fa-trash"></i>
                        </a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <div class="p-4">
            {{ $notices->links() }}
            </div>
        </div>
    </div>
@endsection
