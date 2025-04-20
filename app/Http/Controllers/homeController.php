<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $data['notice'] = Notice::orderBy('id', 'desc')->where('isFeatured', '=', 'yes')->limit(8)->get();

        return view('user.home', $data);
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function comingsoon()
    {
        return view('user.coming-soon');
    }
    public function notice()
    {
        $data['notice'] = Notice::orderBy('id', 'desc')->paginate(15);
        return view('user.notice', $data);
    }
    public function faculty()
    {
        return view('user.faculty');
    }
    public function courses(Request $request)
    {
 
    // Get all course categories with their courses grouped by subcategories
    $categories = DB::table('course_categories')
        ->orderBy('display_order')
        ->get();

    $coursesData = [];
    
    foreach ($categories as $category) {
        $subcategories = DB::table('course_subcategories')
            ->where('category_id', $category->id)
            ->orderBy('display_order')
            ->get();
            
        $categoryData = [
            'info' => $category,
            'subcategories' => []
        ];
        
        if ($subcategories->count() > 0) {
            // If this category has subcategories
            foreach ($subcategories as $subcategory) {
                $courses = DB::table('new_courses')
                    ->where('category_id', $category->id)
                    ->where('subcategory_id', $subcategory->id)
                    ->orderBy('serial_number')
                    ->get();
                    
                $categoryData['subcategories'][] = [
                    'info' => $subcategory,
                    'courses' => $courses
                ];
            }
        } else {
            // If this category doesn't have subcategories
            $courses = DB::table('new_courses')
                ->where('category_id', $category->id)
                ->orderBy('serial_number')
                ->get();
                
            $categoryData['courses'] = $courses;
        }
        
        $coursesData[$category->slug] = $categoryData;
    }

   // return view('user.course', compact('categories', 'coursesData'));

        if ($request->filter == null)
            $data['courses'] = Courses::get();
        else
            $data['courses'] = Courses::orderBy('id', 'desc')->where('category', $request->filter)->get();
        

            return view('user.course',$data, compact('categories', 'coursesData'));
    }

    public function getCourseTabContent($slug)
    {
        // Get the category info
        $category = DB::table('course_categories')
            ->where('slug', $slug)
            ->first();
        
        if (!$category) {
            return '<div class="text-center py-4 text-red-500">Category not found</div>';
        }
        
        // Fetch the course data for this category
        $subcategories = DB::table('course_subcategories')
            ->where('category_id', $category->id)
            ->orderBy('display_order')
            ->get();
            
        $categoryData = [
            'info' => $category,
            'subcategories' => []
        ];
        
        if ($subcategories->count() > 0) {
            // If this category has subcategories
            foreach ($subcategories as $subcategory) {
                $courses = DB::table('new_courses')
                    ->where('category_id', $category->id)
                    ->where('subcategory_id', $subcategory->id)
                    ->orderBy('serial_number')
                    ->get();
                    
                $categoryData['subcategories'][] = [
                    'info' => $subcategory,
                    'courses' => $courses
                ];
            }
        } else {
            // If this category doesn't have subcategories
            $courses = DB::table('new_courses')
                ->where('category_id', $category->id)
                ->orderBy('serial_number')
                ->get();
                
            $categoryData['courses'] = $courses;
        }
        
        // Return the rendered tab content
        return view('user.components.course-tab-content', [
            'category' => $category,
            'categoryData' => $categoryData
        ])->render();
    }
}
