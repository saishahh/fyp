@extends('layouts.app')

@section('content')
    <!-- Heading -->
    <h1 class="display-6 fw-bold text-center"><strong>Share your experiences!</strong><br></h1>

    <div class="container">
        <div class="card custom-card-width">
            <div class="card-header">
                <h4>
                    <a href="/readform" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form class="bootstrap-form-with-validation"
                    style="padding: 20px;background: linear-gradient(145deg, #d7d7d7, white);" action="{{ route('store') }}"
                    method="POST">
                    @csrf <!-- CSRF token for form security -->

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
                                placeholder="Please fill in your course" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="phone">Phone</label>
                            <input class="form-control" type="text" id="text-input" name="phone"
                                placeholder="Please fill in your phone number" required>
                        </div>
                    </div>

                    <!-- Company Name -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="company">Company Name</label>
                            <input class="form-control" type="text" id="text-input" name="company"
                                placeholder="Please fill in your company name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="role">Role</label>
                            <input class="form-control" type="text" id="text-input" name="role"
                                placeholder="Please fill in your role in the company" required>
                        </div>
                    </div>

                    <!-- State -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="state">State</label>
                            <select class="form-select" name="state" required>
                                <option value="" disabled selected>*Please Select*</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="region">Region</label>
                            <input class="form-control" type="text" id="text-input" name="region"
                                placeholder="Please fill in the region" required>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="form-group mb-3">
                        <label class="form-label fw-semibold" for="review">Feedbacks</label>
                        <textarea class="form-control" id="textarea-input-2" name="review" placeholder="Please fill in your comments here"
                            rows="10" required></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="form-group mb-3" style="text-align: center;">
                        <button class="btn btn-primary" type="reset" style="margin: 10px;">Reset</button>
                        <button class="btn btn-primary" type="submit" name="insert" style="margin: 10px;">Submit</button>
                    </div>

                    <span><b>Instruction: You only need to submit this form once only</b></span>
                </form>
            </div>
        </div>
    </div>
@endsection
