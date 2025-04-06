@extends('admin.layouts.app')
@section('content')
    <div class="p-6" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100">
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">
                    Institute Notices
                </h2>
            </div>
            
            <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($notice->id)
                    <input type="hidden" name="id" value="{{ $notice->id }}">
                @endif
                <div class="mb-4">
                    {!! Form::adText('title',$notice->title) !!}
                </div>
                <div class="mb-4">
                    {!! Form::adTextArea('description',$notice->description) !!}
                </div>
                <div class="mb-4 grid grid-cols-2 gap-4 items-center">
                    <div>
                        {!! Form::adFile('pdf', 'Upload PDF') !!}
                        @if ($notice->file)
                        <a href="{{ asset('' . $notice->file) }}" target="_blank" class="text-blue-600 hover:text-blue-900">
                            View PDF
                        </a>
                        @endif
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="featured" name="featured" class="form-checkbox h-5 w-5 text-indigo-600" @if ($notice->isFeatured == 'yes')checked @endif>
                        <label for="featured" class="ml-2 text-gray-700">Set as Featured</label>
                    </div>
                </div>


                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
