@extends('user.layouts.app')
@section('title', 'Notice')
@section('content')
 <!-- Page Title -->
 <section class="py-10 bg-primary text-white">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl md:text-4xl font-bold text-center">Notice Board</h1>
      <p class="text-center mt-2 text-white/80">Stay updated with the latest announcements and information</p>
    </div>
  </section>

  <!-- Notice Board Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
        Notice Board
      </h2>
      <div
        class="max-w-4xl mx-auto bg-gray-50 rounded-lg shadow-md overflow-hidden"
      >
        <div class="bg-primary py-4 px-6">
          <h3 class="text-xl font-bold text-white">Latest Announcements</h3>
        </div>
        <div class="divide-y divide-gray-200">
          <!-- Notice 1 -->
          <div class="p-6 hover:bg-gray-100 transition duration-300">
            <div
              class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2"
            >
              <div>
                <h4 class="text-lg font-semibold text-primary">
                  New Semester Registration Open
                </h4>
                <p class="text-gray-700 mt-2">
                  Registration for the Fall 2023 semester is now open. All
                  students are required to complete their registration
                </p>
                <a href="#" class="mt-3 inline-flex items-center text-secondary hover:text-secondary/80 font-medium transition duration-300">
                  <i class="far fa-file-pdf mr-2"></i> Download PDF
                </a>
              </div>
              <span
                class="bg-tertiary text-white text-sm px-3 py-1 rounded-full whitespace-nowrap self-start sm:self-center flex-shrink-0 mt-2 sm:mt-0"
                >July 20, 2023</span
              >
            </div>
          </div>

          <!-- Notice 2 -->
          <div class="p-6 hover:bg-gray-100 transition duration-300">
            <div
              class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2"
            >
              <div>
                <h4 class="text-lg font-semibold text-primary">
                  Scholarship Application Deadline
                </h4>
                <p class="text-gray-700 mt-2">
                  The last date to apply for merit-based scholarships for
                  the academic year 2023-24 is July 31st. Submit your
                  applications online.
                </p>
                <a href="#" class="mt-3 inline-flex items-center text-secondary hover:text-secondary/80 font-medium transition duration-300">
                  <i class="far fa-file-pdf mr-2"></i> Download PDF
                </a>
              </div>
              <span
                class="bg-tertiary text-white text-sm px-3 py-1 rounded-full whitespace-nowrap self-start sm:self-center flex-shrink-0 mt-2 sm:mt-0"
                >July 15, 2023</span
              >
            </div>
          </div>

          <!-- Notice 3 -->
          <div class="p-6 hover:bg-gray-100 transition duration-300">
            <div
              class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2"
            >
              <div>
                <h4 class="text-lg font-semibold text-primary">
                  Campus Career Fair
                </h4>
                <p class="text-gray-700 mt-2">
                  Annual career fair will be held on August 5th. Over 50
                  companies will be participating. Prepare your resumes and
                  portfolios.
                </p>
                <a href="#" class="mt-3 inline-flex items-center text-secondary hover:text-secondary/80 font-medium transition duration-300">
                  <i class="far fa-file-pdf mr-2"></i> Download PDF
                </a>
              </div>
              <span
                class="bg-tertiary text-white text-sm px-3 py-1 rounded-full whitespace-nowrap self-start sm:self-center flex-shrink-0 mt-2 sm:mt-0"
                >July 10, 2023</span
              >
            </div>
          </div>

          <!-- Notice 4 -->
          <div class="p-6 hover:bg-gray-100 transition duration-300">
            <div
              class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2"
            >
              <div>
                <h4 class="text-lg font-semibold text-primary">
                  Library Hours Extended
                </h4>
                <p class="text-gray-700 mt-2">
                  The main library will now remain open until 11 PM on
                  weekdays to accommodate student needs during the final
                  examination period.
                </p>
                <a href="#" class="mt-3 inline-flex items-center text-secondary hover:text-secondary/80 font-medium transition duration-300">
                  <i class="far fa-file-pdf mr-2"></i> Download PDF
                </a>
              </div>
              <span
                class="bg-tertiary text-white text-sm px-3 py-1 rounded-full whitespace-nowrap self-start sm:self-center flex-shrink-0 mt-2 sm:mt-0"
                >July 5, 2023</span
              >
            </div>
          </div>
        </div>
        <div class="bg-gray-100 p-4 text-center">
          <a
            href="#"
            class="text-primary hover:text-primary/80 font-medium inline-flex items-center transition duration-300"
          >
            View All Notices
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Archive Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
        Notice Archives
      </h2>
      
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
          <div class="flex flex-wrap gap-4">
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> July 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> June 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> May 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> April 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> March 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> February 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> January 2023
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition duration-300">
              <i class="fas fa-folder mr-2"></i> 2022 Archives
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection