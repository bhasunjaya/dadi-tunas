@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
@endsection


@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title mb-4">Inline Forms With Hstack</h5> --}}
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif


                    @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" id="change-password" method="post" action="{{ route('profile.post') }}">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">
                        <div class="mb-3">
                            <label for="current_password">Current Password</label>
                            <input id="current-password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password" placeholder="Enter Current Password" value="{{ old('current_password') }}">
                            <div class="text-danger" id="current_passwordError">@error('current_password'){{ $message }}@enderror</div>
                        </div>

                        <div class="mb-3">
                            <label for="newpassword">New Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new_password" placeholder="Enter New Password">
                            <div class="text-danger" id="passwordError">@error('password'){{ $message }}@enderror</div>
                        </div>

                        <div class="mb-3">
                            <label for="userpassword">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new_password" placeholder="Enter New Confirm password">
                            <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                        </div>

                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id="{{ Auth::user()->id }}" type="submit">Update Password</button>
                        </div>
                    </form>

                </div>
                <!-- end card body -->
            </div>
        </div>
    </div>
@endsection
