@extends('layouts.public')
@section('title')
    - Contact Us
@endsection
@section('content')
    <div class="push-top-header">
        <div>
            <div class="container">
                <div class="pages-title">
                    <h1><span>Contact Us</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp;<a class="active"
                            href="{{ route('contact.us') }}">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Talk to us</h2>
                        <div class="contact-list-info">
                            <div class="contact-icon"><i class="fa fa-phone"></i></div>
                            <p>&nbsp;<a class="text-dark" href="tel:+254 757 917 741">+254 757 917 741</a></p>
                        </div>
                        <div class="contact-list-info">
                            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                            <p>&nbsp;<a class="text-dark"
                                    href="mailto:info@jacobsladder.africa">info@jacobsladder.africa</a></p>
                        </div>
                        <div class="contact-list-info">
                            <div class="contact-icon"><i class="fa fa-map"></i></div>
                            <p class="text-dark">&nbsp;Consummate Court, Ole Dume Road, Nairobi, Kenya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-us-form shadow p-4 border-radius" id="contact_form">
                        @csrf
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
                                    <small>Message has been received successfully.</small>
                                </div>
                                <div class="alert alert-danger d-none" role="alert">
                                    <small>Something went wrong! Please try again by reloading the page.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name *" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email address *"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control"
                                        placeholder="Please enter your phone *">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your message *" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <button type="submit" class="btn btn-readmore">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $('#contact_form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: "POST",
                url: '{{ route('contact.create') }}',
                data: form.serialize(),
                success: function(data) {
                    $('#contact_form').find('.alert-success').removeClass('d-none');
                    $('#contact_form').find('.alert-danger').addClass('d-none');
                    $('#contact_form')[0].reset();
                },
                error: function(data) {
                    $('#contact_form').find('.alert-success').addClass('d-none');
                    $('#contact_form').find('.alert-danger').removeClass('d-none');
                },
            });
        });
    </script>
@endsection
