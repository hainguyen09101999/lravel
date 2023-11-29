
@extends('main.main')
@section('page')
    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.477508070785!2d106.62946327834491!3d10
        .774692531850958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ea168a65c0b%3A0x2a4a7
        dc43e177de1!2zMTIgVHLhu4tuaCDEkMOsbmggVGjhuqNvLCBIb8OgIFRoYW5oLCBUw6JuIFBow7osIFRow6BuaCBwaOG
        7kSBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2sbd!4v169754262
        3099!5m2!1sen!2sbd" 
    height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact Us</h2>
                            <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                                strict attention.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>America</h4>
                                <p>195 E Parker Square Dr, Parker, CO 801 <br />+43 982-314-0958</p>
                            </li>
                            <li>
                                <h4>France</h4>
                                <p>109 Avenue Léon, 63 Clermont-Ferrand <br />+12 345-423-9893</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@stop()
