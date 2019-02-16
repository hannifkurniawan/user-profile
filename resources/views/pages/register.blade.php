@extends('layouts.master')

@section('title', 'Home')

@section('styles')

@include('layouts.includes.styles')

@endsection

@section('nav')


@endsection

@section('content')
<!-- MAIN -->
<main class="login">
	<div class="container">
		<div class="card card-login">
            <div class="card-header text-center">
                <img src="https://via.placeholder.com/112x112?text=BRAND+LOGO" class="rounded-circle" alt="">
                <h6 class="text-uppercase mt-4 mb-0">Register</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="email" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="email" class="form-control" name="name" placeholder="Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password"  placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <label for="">Password Confirmation</label>
                        <input type="password" class="form-control" name="password-confirmation"  placeholder="Your Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link" href="/">Log In</a>
                        <input type="submit" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
	</div>
</main>
<!-- MAIN-END -->
@endsection

@section('footer')

@include('layouts.includes.footer')

@endsection

@section('scripts')

@include('layouts.includes.scripts')

@endsection
