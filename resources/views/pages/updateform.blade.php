@extends('layouts.app')

@section('content')
    <!-- Heading -->
    <h1 class="display-6 fw-bold text-center"><strong>Share your experiences!</strong><br></h1>

    <div class="container">
        <div class="card custom-card-width">
            <div class="card-header">
                <h4>
                    <a href="{{route('showform')}}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form class="bootstrap-form-with-validation"
                    style="padding: 20px;background: linear-gradient(145deg, #d7d7d7, white);"
                    action="{{ route('update', $data->id) }}" method="POST">
                    @csrf
                    @method('PATCH')<!-- CSRF token for form security -->

                    <!-- Name -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="name">Name</label>
                            <input class="form-control" type="text" id="text-input" name="name"
                                placeholder="Please fill in your name" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="email">Email</label>
                            <input class="form-control" type="email" id="email-input" name="email"
                                placeholder="Please fill in your email" value="{{ Auth::user()->email }}" disabled>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="course">Course</label>
                            <input class="form-control" type="text" id="text-input" name="course"
                                placeholder="Please fill in your course" required value="{{ $data->course }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="phone">Phone</label>
                            <input class="form-control" type="text" id="text-input" name="phone"
                                placeholder="Please fill in your phone number" required value="{{ $data->phone }}">
                        </div>
                    </div>

                    <!-- Company Name -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="company">Company Name</label>
                            <input class="form-control" type="text" id="text-input" name="company"
                                placeholder="Please fill in your company name" required value="{{ $data->company }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="role">Role</label>
                            <input class="form-control" type="text" id="text-input" name="role"
                                placeholder="Please fill in your role in the company" required value="{{ $data->role }}">
                        </div>
                    </div>

                    <!-- State -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="state">State</label>
                            <select class="form-select" name="state" required>
                                <option value="" disabled>*Please Select*</option>
                                <option value="Johor" {{ $data->state == 'Johor' ? 'selected' : '' }}>Johor</option>
                                <option value="Kedah" {{ $data->state == 'Kedah' ? 'selected' : '' }}>Kedah</option>
                                <option value="Kelantan" {{ $data->state == 'Kelantan' ? 'selected' : '' }}>Kelantan</option>
                                <option value="Melaka" {{ $data->state == 'Melaka' ? 'selected' : '' }}>Melaka</option>
                                <option value="Negeri Sembilan" {{ $data->state == 'Negeri Sembilan' ? 'selected' : '' }}>Negeri Sembilan</option>
                                <option value="Pahang" {{ $data->state == 'Pahang' ? 'selected' : '' }}>Pahang</option>
                                <option value="Penang" {{ $data->state == 'Penang' ? 'selected' : '' }}>Penang</option>
                                <option value="Perak" {{ $data->state == 'Perak' ? 'selected' : '' }}>Perak</option>
                                <option value="Perlis" {{ $data->state == 'Perlis' ? 'selected' : '' }}>Perlis</option>
                                <option value="Selangor" {{ $data->state == 'Selangor' ? 'selected' : '' }}>Selangor</option>
                                <option value="Sabah" {{ $data->state == 'Sabah' ? 'selected' : '' }}>Sabah</option>
                                <option value="Sarawak" {{ $data->state == 'Sarawak' ? 'selected' : '' }}>Sarawak</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="region">Region</label>
                            <input class="form-control" type="text" id="text-input" name="region"
                                placeholder="Please fill in the region" required value="{{ $data->region }}">
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="form-group mb-3">
                        <label class="form-label fw-semibold" for="review">Feedbacks</label>
                        <textarea class="form-control" id="textarea-input-2" name="review" placeholder="Please fill in your comments here"
                            rows="10" required>{{ $data->review }}</textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="form-group mb-3" style="text-align: center;">
                        <button class="btn btn-primary" type="submit" name="update"
                            style="margin: 10px;">Update</button>
                    </div>

                    <span><b>Instruction: You only need to submit this form once only</b></span>
                </form>
            </div>
        </div>
    </div>
@endsection
