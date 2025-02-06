<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.blog.index');
    }

    public function ajax_listing(Request $request)
    {

        $blog_list = array();
        $total_rows = 0;
        if ($request->search != null && !empty($request->search)) {
            $blog_list = Blog::orWhere('title', 'like', '%' . $request->search . '%')->orWhere('content', 'like', '%' . $request->search . '%')->orWhere('author', 'like', '%' . $request->search . '%')->orWhere('category', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%');
            $total_rows = $blog_list->get()->count();
            $blog_list = $blog_list->skip($request->offset)->take($request->limit)->orderBy($request->sort, $request->order)->get();
        } else {
            $blog_list = Blog::orderBy($request->sort, $request->order);
            $total_rows = $blog_list->get()->count();
            $blog_list = $blog_list->skip($request->offset)->take($request->limit)->get();
        }

        $data = array();
        if (!empty($blog_list)) {
            foreach ($blog_list as $key => $blog) {
                $row = array();
                $row['id'] = $key + 1;
                $row['category'] = $blog->category ?? '';
                $row['title'] = $blog->title ?? '';
                $row['content'] = $blog->content ?? '';
                $row['author'] = $blog->author ?? '';
                $row['description'] = $blog->description ?? '';
                $row['image'] = "<img class='view' src='" . $blog->getFirstMediaUrl('blog') . "' height='70px' width='70px' />";

                $row['is_active'] = $portfolio->is_active ?? '';

                $status = "";
                if ($blog->is_active == "1") {
                    $status = '<a href="javascript:void(0);" onclick="change_state(' . $blog->id . ',0);" class="btn btn-success btn-circle btn-xs"> <b>Active</b> </a>';
                } else {
                    $status = '<a href="javascript:void(0);" onclick="change_state(' . $blog->id . ',1);" class="btn btn-danger btn-circle btn-xs"> <b>Inactive</b> </a>';
                }
                $row['is_active'] = $status;

                $action = '<a href="' . url('admin/blog/show/' . base64_encode($blog->id)) . '"><i class="fa fa-search fa-1x view-color"></i>&nbsp; &nbsp; &nbsp;</a><a href="' . url('admin/blog/edit/' . base64_encode($blog->id)) . '"><i class="fa fa-pencil fa-1x edit-color"></i>&nbsp; &nbsp; &nbsp;</a><a href="javascript:void(0);" onclick="remove_blog(' . $blog->id . ');"><i class="fa fa-trash delete-color"></i></a>';
                $row['action'] = $action;
                $data[] = $row;
            }
        }
        $response = array(
            "rows" => $data,
            "total" => $total_rows
        );
        echo json_encode($response);
    }

    public function change_status(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);
        if ($blog->is_active == false) {
            $blog->is_active = true;
        } else {
            $blog->is_active = false;
        }
        $blog->save();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog = Blog::all();
        return view('admin.pages.blog.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'description' => 'nullable',
        ]);

        $blog = Blog::create($validatedData);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $blog->addMedia($file)->toMediaCollection('blog');
        }

        if ($blog) {
            return redirect()->route('admin.blog.index')->with('success', 'Blog has been added successfully.');
        } else {
            return redirect()->route('admin.blog.index')->with('error', 'Blog not created.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = base64_decode($request->id);
        $blog = Blog::find($id);
        return view('admin.pages.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = base64_decode($request->id);
        $blog = Blog::find($id);
        return view('admin.pages.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'description' => 'nullable',
        ]);

        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->withErrors('Blog not found. Please try again.');
        }

        $update = $blog->update($request->all());

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $blog->clearMediaCollection('blog');
            $blog->addMedia($file)->toMediaCollection('blog');
        }

        if ($update) {
            return redirect()->route('admin.blog.index')->with('success', 'Blog has been updated successfully.');
        } else {
            return redirect()->route('admin.blog.index')->with('error', 'Blog not updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);
        $blog->is_deleted = true;
        if ($blog) {
            $blog->clearMediaCollection('blog');
            $blog->delete();
            return redirect()->back()->with('success', 'Image and Blog record have been deleted successfully.');
        }
        return redirect()->back()->with('error', 'Blog not found.');
    }
}
