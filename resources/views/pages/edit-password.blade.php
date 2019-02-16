@extends('layouts.master')

@section('title', 'Update Password')

@section('styles')

@include('layouts.includes.styles')

@endsection

@section('nav')

@include('layouts.includes.navbar')

@endsection

@section('content')
<!-- MAIN -->
<main class="">
	<div class="container">
		<div class="card">
            <div class="card-header text-center">
                <h6 class="text-uppercase mt-4 mb-0">Update Password</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <dl class="row">
                        
                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="Your Name" value="Hannif Kurniawan M" readonly></dd>
                        
                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-9"><input type="email" class="form-control" name="email" placeholder="Your Email" value="hannif.kurniawan@gmail.com" readonly></dd>
                        
                        <dt class="col-sm-3">Your Password</dt>
                        <dd class="col-sm-9"><input type="password" class="form-control" name="password" placeholder="Your Password" value=""></dd>

                        <dt class="col-sm-3">New Password</dt>
                        <dd class="col-sm-9"><input type="password" class="form-control" name="new-password" placeholder="Your New Password" value=""></dd>

                        <dt class="col-sm-3">New Password Confirmation</dt>
                        <dd class="col-sm-9"><input type="password" class="form-control" name="new-password-confirmation" placeholder="New Password Confirmation" value=""></dd>
                                                
                    </dl>
                    <input type="submit" class="btn btn-primary float-right" value="Update Password">
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
