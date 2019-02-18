@extends('layouts.master')

@section('title', 'index')

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
                <h6 class="text-uppercase mt-4 mb-0">Login</h6>
            </div>
            <div class="card-body">
                <form action="">
                {{-- <form id="register-form" class="form-horizontal" method="POST" action="{{ route('login') }}"> --}}
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link" href="/register">Register</a>
                        <input type="submit" class="btn btn-primary" value="Sign In">
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
    <script>
         $('#register-form').submit(function(e){
            
            // Prevent normal form submission, we well do in JS instead
            e.preventDefault();
            // Get form data
            var data = {
                    name: $('[name=email]').val(),
                    password: $('[name=password]').val(),
            };
            // Send the request
            $.post($('this').attr('action'), data, function(response) {
                if (response.success) {
                    // If register success, go to home
                    console.log('success');
                    
                    window.location.replace("{{ route('home') }}");
                }
            });
        });
    </script>

@endsection
