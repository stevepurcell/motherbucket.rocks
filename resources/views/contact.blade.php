@extends('layouts.app')

@section('content')
        <section class="full-wrapper parallax-wrapper contact"> <!-- Contact -->
        	<div class="parallax" data-velocity="-.3" data-fit="0">
            	<div id="anchor05"></div>
                <div class="front-content contact">
                    <h1>Contact Us</h1>
                    <div class="spacer"></div>

                    <form method="post" id="contact" class="peThemeContactForm form" action="mail.php">
                        <div id="personal" class="bay form-horizontal">
                            <div class="control-group">
                                <div class="controls name">
                                	<h2>Name</h2>
                                    <input class="required span9" type="text" name="author" data-fieldid="0" id="name">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls email">
                                	<h2>Email</h2>
                                    <input class="required span9" type="email" name="email" data-fieldid="1" id="email">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="control-group">
                                <div class="controls message">
                                	<h2>Message</h2>
                                    <textarea name="message" rows="12" class="required span9" data-fieldid="2" id="comments"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls send-btn">
                                    <button type="submit" class="contour-btn red buttoncontact">Send Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="notifications">
                            <div id="contactFormSent" class="formSent alert alert-success">
                                <strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</div>
                            <div id="contactFormError" class="formError alert alert-error">
                                <strong>Oops, An error has ocurred!</strong> See the marked fields above to fix the errors.</div>
                        </div>
                    </form>

                </div>
                <div class="square-bg"></div>
                <div class="overlay"></div>
            </div>
        </section><!-- end Contact -->
        <div class="clear"></div>
@endsection