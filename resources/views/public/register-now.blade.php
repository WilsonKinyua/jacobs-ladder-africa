@extends('layouts.public')
@section('title')
    - Register Now
@endsection
@section('description')
    Join the movement and be a member
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url({{ asset('img/back.jpg') }});">
            <div class="container">
                <div class="pages-title">
                    <h1><span>Join the movement and be a member</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp;<a class="active"
                            href="{{ route('register.now') }}">Register Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="register-img-wrapper">
                            <div class="bg-light-dark">
                                <div class="register-content">
                                    <h2 class="text-white">Jacob’s Ladder Africa</h2>
                                    <h4 class="text-white">The Power <span>For The Future</span> | Building <span>Your
                                            Dreams</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-right">
                        <form id="register_form">
                            @csrf
                            <h3>Join the movement and be a member</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->count() > 0)
                                        <div class="alert alert-danger">
                                            <ul class="list-unstyled">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <style>
                                        .d-none {
                                            display: none;
                                        }
                                    </style>
                                    <div class="alert alert-success d-none" role="alert">
                                        <small>Details received successfully. You will receive more communication
                                            shortly.</small>
                                    </div>
                                    <div class="alert alert-danger d-none" role="alert">
                                        <small>Something went wrong! Please try again by reloading the page.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label required">Full Name</label>
                                <input type="text" class="form-control" id="" name="full_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label required">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $('#register_form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: "POST",
                url: '{{ route('register.create') }}',
                data: form.serialize(),
                success: function(data) {
                    $('#register_form').find('.alert-success').removeClass('d-none');
                    $('#register_form').find('.alert-danger').addClass('d-none');
                    $('#register_form')[0].reset();
                },
                error: function(data) {
                    $('#register_form').find('.alert-success').addClass('d-none');
                    $('#register_form').find('.alert-danger').removeClass('d-none');
                },
            });
        });
    </script>
@endsection
