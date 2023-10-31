@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">Add New Brands</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-8">
                <form action="{{ url('popular-brand/createStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Name or Brand Merk</label>
                        <input type="text" class="form-control" name="merk" placeholder="Adidas">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image or Logo Brand</label>
                        <small class="text-light fw-medium">(PNG is better)</small>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" cols="30" rows="5"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
