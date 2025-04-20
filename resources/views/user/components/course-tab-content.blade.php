<h3 class="text-xl font-bold mb-4 text-primary">{{ $category->name }}</h3>

@if(isset($categoryData['subcategories']) && count($categoryData['subcategories']) > 0)
    @foreach($categoryData['subcategories'] as $subcategoryData)
        <div class="mb-6">
            <h4 class="text-lg font-semibold mb-3 text-gray-800 border-b pb-2">
                {{ $subcategoryData['info']->name }}
            </h4>
            
            <!-- Mobile course cards -->
            <div class="md:hidden">
                <div class="space-y-4">
                    @foreach($subcategoryData['courses']->take(5) as $course)
                        <div class="bg-white border rounded-lg p-4 shadow-sm">
                            <h5 class="font-semibold text-primary">{{ $course->serial_number }}. {{ $course->program_name }}</h5>
                            <div class="mt-2 flex justify-between text-sm">
                                <span class="text-gray-700"><i class="far fa-clock mr-1"></i> {{ $course->duration }}</span>
                                <span class="text-gray-700"><i class="fas fa-graduation-cap mr-1"></i> {{ $course->eligibility }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                @if($subcategoryData['courses']->count() > 5)
                    <div class="mt-4 flex justify-center">
                        <button class="show-more-mobile text-primary hover:underline text-sm flex items-center py-2 px-4 border border-primary rounded-full"
                            data-target="{{ $category->slug }}-{{ $subcategoryData['info']->id }}-mobile">
                            Show more courses <i class="fas fa-chevron-down ml-1"></i>
                        </button>
                    </div>
                    
                    <div id="{{ $category->slug }}-{{ $subcategoryData['info']->id }}-mobile-more" class="hidden mt-4 space-y-4">
                        @foreach($subcategoryData['courses']->skip(5) as $course)
                            <div class="bg-white border rounded-lg p-4 shadow-sm">
                                <h5 class="font-semibold text-primary">{{ $course->serial_number }}. {{ $course->program_name }}</h5>
                                <div class="mt-2 flex justify-between text-sm">
                                    <span class="text-gray-700"><i class="far fa-clock mr-1"></i> {{ $course->duration }}</span>
                                    <span class="text-gray-700"><i class="fas fa-graduation-cap mr-1"></i> {{ $course->eligibility }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            
            <!-- Desktop table view -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white hidden md:table">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">S.No.</th>
                            <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Programs</th>
                            <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Duration</th>
                            <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Eligibility</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($subcategoryData['courses']->take(5) as $course)
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-3 text-sm">{{ $course->serial_number }}</td>
                                <td class="py-2 px-3 text-sm">{{ $course->program_name }} {{ $course->short_name ? "({$course->short_name})" : '' }}</td>
                                <td class="py-2 px-3 text-sm">{{ $course->duration }}</td>
                                <td class="py-2 px-3 text-sm">{{ $course->eligibility }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @if($subcategoryData['courses']->count() > 5)
                <!-- Desktop show more button -->
                <div class="mt-3 flex justify-center hidden md:flex">
                    <button class="show-more-desktop text-primary hover:underline text-sm flex items-center"
                        data-target="{{ $category->slug }}-{{ $subcategoryData['info']->id }}">
                        Show more courses <i class="fas fa-chevron-down ml-1"></i>
                    </button>
                </div>
                
                <!-- Desktop more courses section -->
                <div id="{{ $category->slug }}-{{ $subcategoryData['info']->id }}-more" class="hidden overflow-x-auto mt-4">
                    <table class="min-w-full bg-white hidden md:table">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">S.No.</th>
                                <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Programs</th>
                                <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Duration</th>
                                <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Eligibility</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($subcategoryData['courses']->skip(5) as $course)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-3 text-sm">{{ $course->serial_number }}</td>
                                    <td class="py-2 px-3 text-sm">{{ $course->program_name }} {{ $course->short_name ? "({$course->short_name})" : '' }}</td>
                                    <td class="py-2 px-3 text-sm">{{ $course->duration }}</td>
                                    <td class="py-2 px-3 text-sm">{{ $course->eligibility }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    @endforeach
@else
    <!-- Categories without subcategories -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white hidden md:table">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">S.No.</th>
                    <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Programs</th>
                    <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Duration</th>
                    <th class="py-2 px-3 text-left text-sm font-semibold text-gray-700">Eligibility</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($categoryData['courses'] as $course)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-3 text-sm">{{ $course->serial_number }}</td>
                        <td class="py-2 px-3 text-sm">{{ $course->program_name }} {{ $course->short_name ? "({$course->short_name})" : '' }}</td>
                        <td class="py-2 px-3 text-sm">{{ $course->duration }}</td>
                        <td class="py-2 px-3 text-sm">{{ $course->eligibility }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Mobile view for categories without subcategories -->
        <div class="md:hidden space-y-4 mt-4">
            @foreach($categoryData['courses'] as $course)
                <div class="bg-white border rounded-lg p-4 shadow-sm">
                    <h5 class="font-semibold text-primary">{{ $course->serial_number }}. {{ $course->program_name }}</h5>
                    <div class="mt-2 flex justify-between text-sm">
                        <span class="text-gray-700"><i class="far fa-clock mr-1"></i> {{ $course->duration }}</span>
                        <span class="text-gray-700"><i class="fas fa-graduation-cap mr-1"></i> {{ $course->eligibility }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif