@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Table</h1>
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
                        <h4>Create Slider</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Banner</label>
                                <input type="file" class="form-control" name="banner">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" class="form-control" name="type">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Starting Price</label>
                                <input type="text" class="form-control" name="starting_price">
                            </div>
                            <div class="form-group">
                                <label>Button Url</label>
                                <input type="text" class="form-control" name="btn_url">
                            </div>
                            <div class="form-group">
                                <label>Serial</label>
                                <input type="text" class="form-control" name="serial">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select name="status" class="form-control" id="inputState">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

