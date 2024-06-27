<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SubCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Str;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SubCategoryDataTable $datatables)
    {
        return $datatables->render('admin.sub-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.sub-category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'=>['required'],
            'name'=>['required','max:200','unique:sub_categories,name'],
            'status'=>['required'],
        ]);

        $subCategory = new SubCategory();
        $subCategory->category_id=$request->category;
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->status = $request->status;
        $subCategory->save();

        toastr('Created successfully!','success');
        return redirect()->route('admin.sub-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $category = SubCategory::findOrFail($id);
        return view('admin.sub-category.edit',compact('category','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category'=>['required'],
            'name'=>['required','max:200','unique:sub_categories,name,'.$id],
            'status'=>['required'],
        ]);

        $subCategory = SubCategory::findOrFail($id);
        $subCategory->category_id=$request->category;
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->status = $request->status;
        $subCategory->save();

        toastr('Updated successfully!','success');
        return redirect()->route('admin.sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $childCategory = ChildCategory::where('category_id',$subCategory->id)->count();
        if($childCategory>0){
            return response(['status'=>'error','message'=>'This items contain child items for delete this you have to delete the child items first!']);
        }
        $subCategory->delete();
        return response(['status'=>'success','message'=>'Deleted successfully']);
    }
    public function changeStatus(Request $request) {
        $subCategory = SubCategory::findOrFail($request->id);
        $subCategory->status = $request->status == 'true' ? 1 : 0;
        $subCategory->save();
        return response()->json(['message' => 'Status has been updated']);
    }
}
