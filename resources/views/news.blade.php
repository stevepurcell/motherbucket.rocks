@extends('layouts.app')

@section('content')
<div class="main-wrapper">
    <section id="discography" class="section"><!-- Discography -->
        <h1>About Us</h1>
        <div class="spacer"></div>
        <div class="disc-container">
            <ul>
                <li><!-- Disc #1 -->
                    <div class="disc-img">
                        <img src="img/steve.png" alt='img' />
                    </div>
                    <div class="disc-info">
                        <h2>Steve Purcell</h2>
                        <p>Bass, Vocals</p>
                    </div>
                </li><!-- end Disc #1 -->
                <li><!-- Disc #2 -->
                    <div class="disc-img">
                        <img src="img/jason.png" alt='img' />
                    </div>
                    <div class="disc-info">
                        <h2>Jason Shepard</h2>
                        <p>Drums, Vocals</p>
                    </div>
                </li><!-- end Disc #2 -->

                <li><!-- Disc #3 -->
                    <div class="disc-img">
                        <img src="img/luke.png" width="75%" alt='img' />
                    </div>
                    <div class="disc-info">
                        <h2>Luke Kemmer</h2>
                        <p>Lead Guitar, Lead Vocals</p>
                    </div>
                </li><!-- end Disc #3 -->

                    </ul>
                </div>

            </section><!-- end Discography -->
            <div class="clear"></div>
        </div>

@endsection