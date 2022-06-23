@extends('layouts.public')
@section('title')
    - Contact Us
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url({{ asset('img/contact-us.jpg') }});">
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
                            <p>&nbsp;<a class="text-dark" href="tel:+254 730 116 325">+254 730 116 606 | +254 730 116
                                    325</a></p>
                        </div>
                        <div class="contact-list-info">
                            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                            <p>&nbsp;<a class="text-dark"
                                    href="mailto:info@jacobsladder.africa">info@jacobsladder.africa</a></p>
                        </div>
                        <div class="contact-list-info">
                            <div class="contact-icon"><i class="fa fa-map"></i></div>
                            <p class="text-dark">&nbsp;8273 NW 56th ST Tom, Nairobi, 33195 Kenya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-us-form shadow p-4 border-radius" id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name *"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email address *"
                                        required="required">
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
                                    <textarea name="message" class="form-control" placeholder="Your message *" rows="5" required="required"></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfiSuoeAAAAABqCJ76UO-ZGITmqD6cqRYnhIJdD">
                                    </div>
                                </div>
                                <p class="text-danger display-none" id="errorMessage">
                                    <small>
                                        Please check the recaptcha *
                                    </small>
                                </p>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <button type="submit" data-sitekey="reCAPTCHA_site_key" class="btn btn-readmore">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
