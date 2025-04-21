<!-- Tab Navigation -->
<section id="programs" class="py-8 bg-white border-b">
<div class="mb-8">
    <!-- For mobile: scrollable tabs -->
    <div class="overflow-x-auto pb-2 md:hidden">
        <div class="flex whitespace-nowrap min-w-full">
            @foreach($categories as $category)
                <button class="tab-button {{ $loop->first ? 'active-tab border-primary text-primary border-b-2' : 'border-b' }} px-4 py-3 mx-1 mb-2 rounded-t-lg font-medium text-center" 
                    data-tab="{{ $category->slug }}">
                    {{ Str::of($category->name)->afterLast('AISECT Academy for') }}
                </button>
            @endforeach
        </div>
    </div>
    
    <!-- For desktop: regular tabs -->
    <div class="hidden md:flex flex-wrap justify-center">
        @foreach($categories as $category)
            <button class="tab-button {{ $loop->first ? 'active-tab border-primary text-primary border-b-2' : 'border-b' }} px-4 py-2 mx-1 mb-2 rounded-t-lg font-medium" 
                data-tab="{{ $category->slug }}">
                {{ Str::of($category->name)->afterLast('AISECT Academy for') }}
            </button>
        @endforeach
    </div>
</div>

<!-- Tab Content -->
<div class="tab-content bg-white rounded-lg shadow-md p-4">
    @foreach($categories as $category)
        <div id="tab-{{ $category->slug }}" class="tab-pane {{ $loop->first ? 'active' : 'hidden' }}">
            @if($loop->first)
                <!-- Render first tab content directly -->
                @include('user.components.course-tab-content', [
                    'category' => $category,
                    'categoryData' => $coursesData[$category->slug]
                ])
            @else
                <!-- Loading placeholder for other tabs -->
                <div class="tab-loading-placeholder">
                    <div class="py-8 text-center text-gray-500">
                        <p>Click to load {{ $category->name }} courses</p>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</div>
</section>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab functionality with dynamic content loading
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanes = document.querySelectorAll('.tab-pane');
    let loadedTabs = ['{{ $categories->first()->slug }}']; // Track which tabs have been loaded
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tabId = button.getAttribute('data-tab');
            
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => {
                btn.classList.remove('active-tab');
                btn.classList.remove('border-primary');
                btn.classList.remove('text-primary');
                btn.classList.add('border-b');
                btn.classList.remove('border-b-2');
            });
            
            tabPanes.forEach(pane => {
                pane.classList.add('hidden');
            });
            
            // Add active class to clicked button
            button.classList.add('active-tab');
            button.classList.add('border-primary');
            button.classList.add('text-primary');
            button.classList.remove('border-b');
            button.classList.add('border-b-2');
            
            // Show the corresponding tab pane
            const tabPane = document.getElementById(`tab-${tabId}`);
            tabPane.classList.remove('hidden');
            
            // Check if we need to load the tab content
            if (!loadedTabs.includes(tabId)) {
                // Get the placeholder element
                const placeholder = tabPane.querySelector('.tab-loading-placeholder');
                if (placeholder) {
                    // Show loading indicator
                    placeholder.innerHTML = '<div class="flex justify-center py-8"><div class="animate-spin rounded-full h-10 w-10 border-t-2 border-b-2 border-primary"></div></div>';
                
                    // Fetch tab content via AJAX
                    fetch(`/courses/tab/${tabId}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.text();
                        })
                        .then(html => {
                            tabPane.innerHTML = html;
                            loadedTabs.push(tabId);
                            
                            // Re-attach event listeners for the newly loaded content
                            attachShowMoreListeners(tabPane);
                        })
                        .catch(error => {
                            console.error('Error loading tab content:', error);
                            placeholder.innerHTML = '<div class="text-center py-8 text-red-500">Failed to load content. Please try again.</div>';
                        });
                }
            }
        });
    });
    
    // Function to attach show more listeners to newly loaded content
    function attachShowMoreListeners(container) {
        // Desktop show more functionality
        container.querySelectorAll('.show-more-desktop').forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                const moreCoursesEl = document.getElementById(`${target}-more`);
                
                if (moreCoursesEl.classList.contains('hidden')) {
                    moreCoursesEl.classList.remove('hidden');
                    this.innerHTML = 'Show less courses <i class="fas fa-chevron-up ml-1"></i>';
                } else {
                    moreCoursesEl.classList.add('hidden');
                    this.innerHTML = 'Show more courses <i class="fas fa-chevron-down ml-1"></i>';
                }
            });
        });
        
        // Mobile show more functionality
        container.querySelectorAll('.show-more-mobile').forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                const moreCoursesEl = document.getElementById(`${target}-mobile-more`);
                
                if (moreCoursesEl.classList.contains('hidden')) {
                    moreCoursesEl.classList.remove('hidden');
                    this.innerHTML = 'Show less courses <i class="fas fa-chevron-up ml-1"></i>';
                } else {
                    moreCoursesEl.classList.add('hidden');
                    this.innerHTML = 'Show more courses <i class="fas fa-chevron-down ml-1"></i>';
                }
            });
        });
    }
    
    // Attach listeners to the initially loaded tab
    attachShowMoreListeners(document.getElementById(`tab-{{ $categories->first()->slug }}`));
});
</script>
@endpush