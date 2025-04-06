<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Facades\Storage; // Assuming you have a Notice model
class NoticeController extends Controller
{
    public function index()
    {

        $notices = Notice::orderBy('id','desc')->paginate(10); // Fetch all notices from the database
        return view('admin.notice.index', compact('notices'));
    }
    public function create()
    {
        return view('admin.notice.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png|max:2048', // Adjust file validation as needed
            //'featured' => 'required|in:yes,no', // Assuming you have a featured field
        ]);
        if ($request->has('id')) {
            $notice = Notice::find($request->id);
        } else {
            $notice = new Notice();
        }

        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = Storage::put('public/notices', $file);
            $notice->file = Storage::url($path);
        }
        $notice->isFeatured = $request->input('featured') ? 'yes' : 'no'; // Assuming you have a featured field
        $notice->save(); // Save the notice to the database
        // Validate and store the notice
        // Redirect or return a response
        return redirect()->route('admin.notice.index')->with('success', 'Notice Updated successfully.');
    }
    public function edit(Request $request)
    {
        if ($request->action == 'delete') {
            $request['id'] = decrypt($request->id);
            $notice = Notice::find($request->id);
            if ($notice) {
                $notice->delete();
                return redirect()->route('admin.notice.index')->with('success', 'Notice deleted successfully.');
            } else {
                return redirect()->route('admin.notice.index')->with('error', 'Notice not found.');
            }
        } elseif ($request->action == 'edit') {
            $request['id'] = decrypt($request->id);
            $notice = Notice::find($request->id);
            if ($notice) {
                return view('admin.notice.create', compact('notice'));
            } else {
                return redirect()->route('admin.notice.index')->with('error', 'Notice not found.');
            }
        }
        //  return view('admin.notice.edit', compact('id'));
    }
}
