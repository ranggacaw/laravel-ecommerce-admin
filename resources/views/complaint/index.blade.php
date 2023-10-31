@extends('layouts.app')

@section('content')   
<div class="card">
    <h5 class="card-header">List Complaints</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php 
                    $no = 1;
                ?>
                @if (!empty($complaints))
                    @foreach ($complaints as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ url('complaint-show') }}/{{$item->id}}">Show</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
