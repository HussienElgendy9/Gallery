@extends('layouts.app1')

@section('title') Account Registration @endsection

@section('content')
<div class="container name1 mx-auto  my-5" style="background-color: #f2f2f2;">
    <div class="row1">
        <!-- Left Side with Image -->
        <div class="col1">
            <img src="{{ url('/images/ss.png') }}" alt="" > {{--style="height: 100vh; width: 100%; object-fit: cover;"--}}
        </div>

        <!-- Right Side with Login Form -->
        <div class="col2">
            <div class="login-form p-4" > {{--style="max-width: 350px; width: 100%;"--}}
                <h2 class="mb-4 text-center">Registration</h2>

                <form action="{{route('register.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="re-write the Password" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="myFile" name="profilepic" accept=".jpg,.jpeg,.png">
                    </div>

                    <button type="submit" class="btn btn-success w-100 mb-3">Sign Up</button>

                </form>

                <div class="text-center mt-3">
                    <span>Have an Account? </span><a href="{{ route('login') }}" class="text-success">Log-in</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
