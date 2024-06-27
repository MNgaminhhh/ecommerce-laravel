@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Brand</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Components</a></div>
        <div class="breadcrumb-item">Edit Brand</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Brand</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Preview</label><br>
                                <img width="200" src="{{ asset($brand->logo) }}" alt="Brand Logo">
                            </div>
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $brand->name }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="is_featured">Is Featured</label>
                                <select class="form-control @error('is_featured') is-invalid @enderror" id="is_featured" name="is_featured">
                                    <option value="">Select</option>
                                    <option value="1" {{ $brand->is_featured == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $brand->is_featured == '0' ? 'selected' : '' }}>No</option>
                                </select>
                                @error('is_featured')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value="">Select</option>
                                    <option value="1" {{ $brand->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $brand->status == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
