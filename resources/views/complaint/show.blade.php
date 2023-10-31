@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">Show Complaint</h5>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text fw-bold mb-0">Name :</p>
                        <p class="card-text">{{ $complaint->name }}</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text fw-bold mb-0">Email :</p>
                        <p class="card-text">{{ $complaint->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text fw-bold mb-0">Phone :</p>
                        <p class="card-text">{{ $complaint->phone }}</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text fw-bold mb-0">Subject :</p>
                        <p class="card-text">{{ $complaint->subject }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text fw-bold mb-0">Message</p>
                        <p class="card-text">{{ $complaint->message }}</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
