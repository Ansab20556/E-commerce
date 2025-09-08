@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="contact_section layout_padding">
    <div class="container">
        <h1 class="touch_taital">Contact Us</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_text">
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Phone Number" name="phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="email-bt" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Message" rows="5" name="message" required></textarea>
                            </div>
                            <div class="send_btn"><button type="submit">SEND</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
