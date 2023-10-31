@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-1 mt-1">Popular Brands</h5>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
          <a href="{{ url('popular-brand/create') }}" class="btn btn-primary waves-effect waves-light">Add Brands</a>
        </div>
      </div>
      <div class="card-body">
          <div class="table-responsive text-nowrap">
              <table class="table">
                  <thead class="table-light">
                      <tr>
                          <th>No</th>
                          <th>Photo</th>
                          <th>Merk</th>
                          {{-- <th>Description</th> --}}
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                      <?php 
                          $no = 1;
                      ?>
                      @if (!empty($brands))
                          @foreach ($brands as $item)
                              <tr>
                                  <td>{{ $no++ }}</td>
                                  <td><img src="{{asset('img/popular_brand')}}/{{$item->image}}" alt="merk logo"  style="max-height: 2rem;"></td>
                                  <td>{{ $item->merk }}</td>
                                  {{-- <td>{{ $item->description }}</td> --}}
                                  <td>
                                      <a class="btn btn-primary btn-sm" href="{{ url('complaint-show') }}/{{$item->id}}">Show</a>
                                  </td>
                              </tr>
                          @endforeach
                      @endif
                  </tbody>
              </table>
              <footer class="px-3 py-3">
                  {{ $brands->links('vendor.pagination.bootstrap-4') }}
              </footer>
          </div>
      </div>
</div>
@endsection
