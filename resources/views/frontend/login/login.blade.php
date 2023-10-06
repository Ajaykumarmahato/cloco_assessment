@extends('frontend.layout.app')


@section('content')
    <div class="container">
        <div class="row login-div ">

            <div class="col-lg-12 p-2">
                <form action="{{ route('login') }}" method="POST" class="form-control p-3">
                    @csrf
                    <div class="form-group d-flex justify-content-center">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                            id="">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                            id="">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4 form-control">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
