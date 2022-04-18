@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="tz-link-widget">
                    <aside class="widget">
                        <form method="get" id="searchform" class="tz-bog-search" action="#">
                            <input type="text" name="s" id="s" placeholder="Search by word">
                            <label class="fa fa-search">&nbsp;</label>
                        </form>
                    </aside>
                    <aside class="widget widget-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Log In Form</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Register Form</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Remind User</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Reset Pass</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Edit User Profile</strong>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tz-joom-profile">
                    <h4 class="joom-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images">EDIT USER PROFILE</h4>
                    <p>Please enter the email address for your account.</p>
                    <div class="tz-profile-me">
                        <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Image"><a href="#">ABOUT ME</a>
                        </h5>
                        <p>Maecenas ultrices viverra ligula, vel lobortis ante pulvinar sed. Donec erat magna, aliquam
                            vitae semper vitae, accumsan vel nisl. Vivamus pellentesque orci sit amet odio dictum eget
                            commodo nulla consequat. Proin iaculis tristique nisl ut eleifend. Maecenas lacus purus,
                            malesuada eu scelerisque ac, commodo sed orci. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Curabitur a tortor ut leo mattis
                            cursus. Vestibulum laoreet interdum pellentesque. Suspendisse vitae cursus urna.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla velit metus, ornare vitae
                            malesuada in, fermentum ac turpis. Vestibulum convallis pulvinar tellus eget ultricies. Sed
                            sollicitudin, sem vitae elementum euismod, velit arcu mattis diam, in scelerisque purus
                            lorem eget elit. Sed vitae nunc in metus semper hendrerit. Curabitur metus felis, interdum
                            quis sodales at, aliquam eu eros. Proin ac lacus urna, vel pulvinar ante. Integer posuere,
                            sapien ut iaculis molestie, justo quam ultrices orci, eu laoreet nisl libero vel elit.</p>
                        <small class="entry-meta">
                            <i class="fa fa-pencil"></i>
                            <a href="#"> Edit</a>
                        </small>
                    </div>
                    <div class="tz-profile-courses">
                        <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Image"><a href="#">COURSE</a></h5>
                        <div>
                            <h3><i class="fa fa-check-circle"></i><a href="#">Master Of Gamification</a></h3>
                            <span>Start date:<a href="#">May 29, 2014</a></span>
                            <span>Class:<a href="#">D09</a></span>
                        </div>
                        <small class="entry-meta">
                            <i class="fa fa-pencil"></i>
                            <a href="#"> Edit</a>
                        </small>
                    </div>
                    <div class="tz-profile-event">
                        <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Image"><a href="#">EVENTS</a></h5>
                        <ul>
                            <li>
                                <i class="fa fa-chevron-circle-down"></i> <a href="#">Science In The New Era</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-circle-down"></i> <a href="#">How To Sell Anything</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-circle-down"></i> <a href="#">Sussecful on your Business</a>
                            </li>
                        </ul>
                        <small class="entry-meta">
                            <i class="fa fa-pencil"></i>
                            <a href="#"> Edit</a>
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="tz-profile-user">
                    <div class="tz-user-thumbnail">
                        <img src="{{ asset('front/icons/avatar.png') }}" alt="Images">
                        <img src="{{ asset('front/icons/avatar.png') }}" alt="Images">
                    </div>
                    <h5><img src="{{ asset('front/demos/check.png') }}" alt="Images"><a href="#">ETHICTEAM</a></h5>
                    <p>Wedding Filmographer Newyork, USA</p>
                    <span class="tz-share-public">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-youtube-play"></i>
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </span>
                    <small class="entry-meta">
                        <i class="fa fa-pencil"></i>
                        <a href="#"> Edit</a>
                    </small>
                </div>
                <div class="tz-profile-image">
                    <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images"><a href="#">PHOTOS</a></h5>
                    <ul>
                        <li><a href="#"><img src="{{ asset('front/demos/JoomlaBase/images-2-profile-user.jpg" alt="Images"></a></li>
                        <li><a href="#"><img src="{{ asset('front/demos/JoomlaBase/images-3-profile-user.jpg" alt="Images"></a></li>
                        <li><a href="#"><img src="{{ asset('front/demos/JoomlaBase/images-4-profile-user.jpg" alt="Images"></a></li>
                        <li><a href="#"><img src="{{ asset('front/demos/JoomlaBase/images-5-profile-user.jpg" alt="Images"></a></li>
                        <li><a href="#"><img src="{{ asset('front/demos/JoomlaBase/images-6-profile-user.jpg" alt="Images"></a></li>
                        <li><a href="#"><img src="{{ asset('front/demos/JoomlaBase/images-7-profile-user.jpg" alt="Images"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
