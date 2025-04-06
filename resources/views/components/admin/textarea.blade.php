<div>
    {!! Form::label(str_replace(' ', '_', $name), null, ['class' => 'block  text-sm font-medium text-gray-700']) !!}
    <div class="relative mt-1">
        {!! Form::textarea(
            str_replace(' ', '_', $name),
            $value,
            array_merge(
            [
                'class' =>
                'w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 ' .
                ($errors->has(str_replace(' ', '_', $name))
                    ? 'border-red-300 focus:ring-red-500 focus:border-red-500'
                    : 'border-gray-300 focus:ring-indigo-500 focus:border-indigo-500'),
                'rows' => 5, // Set the default number of rows
            ],
            $attributes,
            ),
        ) !!}
        @error(str_replace(' ', '_', $name))
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <i class="fas fa-exclamation-circle text-red-500"></i>
            </div>
        @enderror
    </div>
    @error(str_replace(' ', '_', $name))
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror

</div>
