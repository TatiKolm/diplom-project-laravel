@extends('layouts.app')
@section('content')
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>

                            <h3>Email Here</h3>
                            <p><a href="mailto:hello@orgo.com">hello@orgo.com</a></p>
                            <p><a href="mailto:support@orgo.com">support@orgo.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>

                            <h3>Location Here</h3>
                            <p>2750 Quadra Street Victoria Road, New York, Canada</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class='bx bxs-phone-call'></i>
                            </div>

                            <h3>Call Here</h3>
                            <p><a href="tel:1234567890">+123 456 7890</a></p>
                            <p><a href="tel:2414524526">+241 452 4526</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->

        <!-- Start Map Area -->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- End Map Area -->
        
        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Ready To Get Started?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Email*</label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Phone*</label>
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Subject*</label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message*</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>

                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe To Our Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Enter Email Address" name="EMAIL" required autocomplete="off">

                            <button type="submit">Subscribe Now</button>
                            
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area -->
@endsection