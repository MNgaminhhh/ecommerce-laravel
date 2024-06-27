@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Category</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Components</a></div>
        <div class="breadcrumb-item">Table</div>
      </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Categories</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.sub-category.update',$category->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="inputState">Category</label>
                                <select id="inputState" class="form-control" name="category">
                                    <option value="">Select</option>
                                    @foreach ($categories as $cat)
                                        <option {{$category->category_id===$cat->id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="status" value="{{$category->status}}">
                                    <option {{$category->status==1 ? 'selected' : ''}} value="1">Active</option>
                                    <option {{$category->status==0 ? 'selected' : ''}} value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
