@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 mb-3">
            <!-- Search Bar -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Search</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="...">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
            <!-- End Search Bar -->
        </div>
        <div class="col-lg-9">
            <!-- Student List Card -->
            <div class="card">
                <div class="card-header">
                    <h4>Past Experiences</h4>
                </div>
                <div class="card-body">
                    @foreach($alldata as $data)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <h5 class="card-title">{{ $data->name }}</h5>
                                    <p><strong>Course:</strong> {{ $data->course }}</p>
                                    <p><strong>Company:</strong> {{ $data->company }}</p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-muted">({{ $data->email }})</p>
                                    <p><strong>Region:</strong> {{ $data->region }}</p>
                                    <p><strong>Role:</strong> {{ $data->role }}</p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-muted"><strong>Phone:</strong> {{ $data->phone }}</p>
                                    <p><strong>State:</strong> {{ $data->state }}</p>
                                </div>
                            </div>
                            <p><strong>Review:</strong> {{ $data->review }}</p>
                            {{-- <div class="btn-group">
                                <a href="{{route('readform',$data->id)}}" class="btn btn-success btn-sm">Read</a>
                                <a href="#" class="btn btn-primary btn-sm">Update</a>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End Student List Card -->
        </div>
    </div>
</div>
{{-- Pagination bar --}}
<div class="d-flex justify-content-center">
{!! $alldata->links() !!}
</div
@endsection
    