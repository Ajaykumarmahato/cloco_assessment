@extends('frontend.layout.app')


@section('content')
    <div class="container">
        <div class="row login-div ">
            <div class="col-lg-12 p-2">
                <form action="{{ route('registerUser') }}" id="register-form" method="POST" class="form-control p-3">
                    @csrf
                    <div class="form-group d-flex justify-content-center">
                        <h3>Register</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>First Name</label>
                                <input class="form-control @error('first_name') is-invalid @enderror" type="text"
                                    name="first_name" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Last Name</label>
                                <input class="form-control @error('last_name') is-invalid @enderror" type="text"
                                    name="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Phone Number</label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Date of Birth</label>
                                <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob"
                                    value="{{ old('dob') }}">
                                @error('dob')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="m" {{ old('gender') == 'm' ? 'selected' : '' }}>Male</option>
                                    <option value="f" {{ old('gender') == 'f' ? 'selected' : '' }}>Female</option>
                                    <option value="o" {{ old('gender') == 'o' ? 'selected' : '' }}>Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label>Address</label>
                        <input class="form-control @error('address') is-invalid @enderror" type="text" name="address"
                            value="{{ old('address') }}">
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                    name="password" value="{{ old('password') }}">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-4">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-4 form-control">Submit</button>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('welcome') }}" class="text-decoration-none mt-3">Login!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
