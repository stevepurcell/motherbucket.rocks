@extends('layouts.app')

@section('content')
<div class="main-wrapper">
    <section id="discography" class="section"><!-- About Us -->
        <h1>About Us</h1>
        <div class="spacer"></div>
        <div class="disc-container">
            <ul>
                <li><!-- Luke -->
                    <div class="disc-img open-disc" id="disc-01.html">
                        <img src="img/luke.png" width="75%" alt='img' />
                        <div class="overlay"></div>
                    </div>
                    <div class="disc-info">
                        <h2>Luke Kemmer</h2>
                        <p>Lead Guitar, Lead Vocals</p>
                    </div>
                </li>
                <li><!-- Jason -->
                    <div class="disc-img open-disc" id="disc-01.html">
                        <img src="img/jason.png" alt='img' />
                        <div class="overlay"></div>
                    </div>
                    <div class="disc-info">
                        <h2>Jason Shepard</h2>
                        <p>Drums, Vocals</p>
                    </div>
                </li>
                <li><!-- Steve -->
                    <div class="disc-img open-disc" id="disc-01.html">
                        <img src="img/steve.png" alt='img' />
                        <div class="overlay"></div>
                    </div>
                    <div class="disc-info">
                        <h2>Steve Purcell</h2>
                        <p>Bass, Vocals</p>
                    </div>
                </li>
                    </ul>
                </div>

            </section><!-- end Discography -->
            <div class="clear"></div>
        </div>

@endsection