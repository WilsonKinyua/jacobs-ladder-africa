@extends('layouts.public')
@section('title')
    - Our Team
@endsection
@section('description')
    Our team. From our headquarters in Nairobi, Kenya, Jacob’s Ladder Africa team comprises of experts with a desire and
    passion for youth empowerment and climate change
@endsection
@section('content')
    <div class="push-top-header">
        <div>
            <div class="container">
            </div>
        </div>
    </div>
    <section class="mt-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 p-4 text-center">
                    <h1 class="text-uppercase text-decoration-underline">Meet our Team</h1>
                </div>
                @forelse ($teams as $team)
                    <div class="col-md-6 col-lg-6 mb-5 text-center">
                        <div class="team-portrait" data-bs-toggle="modal" data-bs-target="#team{{$team->id}}">
                            <figure class="tp-headshot">
                                @if ($team->profile_picture)
                                    <img src="{{ $team->profile_picture->getUrl() }}" alt="{{ $team->name ?? '' }}">
                                @endif
                            </figure>
                            <div class="tp-caption">
                                <div class="inner-tp-caption">
                                    <div class="team-intro">
                                        <h3 class="text-uppercase">{{ $team->name ?? '' }}</h3>
                                        <p>
                                            {{ $team->title ?? '' }}
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="team-intro-caption">
                                        <p>
                                            {!! $team->intro_caption !!}
                                            <br>
                                            <a class="main-color">Read more <i class="fa fa-arrow-right"></i></a>
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="tp-social d-flex justify-content-center">
                                        @if (!empty($team->twitter_url))
                                            <div class="social-icon">
                                                <p>
                                                    <a target="_blank" href="{{ $team->twitter_url }}"><i
                                                            class="fa fa-twitter"></i></a>
                                                </p>
                                            </div>
                                        @endif
                                        @if (!empty($team->linkedin_url))
                                            <div class="social-icon">
                                                <p>
                                                    <a target="_blank"href="{{ $team->linkedin_url }}"><i
                                                            class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- team modal -->
                    <div class="modal fade" id="team{{$team->id}}" tabindex="-1"
                        aria-labelledby="{{ $team->id }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bold" id="{{ $team->id }}Label"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                @if ($team->profile_picture)
                                                    <img src="{{ $team->profile_picture->getUrl() }}"
                                                        class="team-modal-img rounded-start" alt="{{ $team->name ?? '' }}">
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title text-uppercase">{{ $team->name ?? '' }}</h5>
                                                    <p>
                                                        <strong>
                                                            <small class="main-color">
                                                                {{ $team->title ?? '' }}
                                                            </small>
                                                        </strong>
                                                    </p>
                                                    <p class="team-desc">
                                                        {!! $team->user_bio !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <h2 class="mb-5 text-danger">No team members available!</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
