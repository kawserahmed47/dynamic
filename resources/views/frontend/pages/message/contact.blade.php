@extends('frontend.master')

@section('content')

<div class="google-map" id="contact-google-map" >
    <iframe style="width: 100%" height="550px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d645.0359828886742!2d90.41299622118032!3d23.858588385567185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1608986210713!5m2!1sen!2sbd"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>

<section class="contact-section sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-form-content">
                    <div class="title">
                        <span>Contact with us</span>
                        <h2>Send Message</h2>
                    </div><!-- /.title -->
                    <form action="http://layerdrops.com/printify/inc/sendemail.php" class="contact-form">
                        <input type="text" name="name" placeholder="Your full name" />
                        <input type="text" name="email" placeholder="Your email address" />
                        <textarea name="message" placeholder="What you are looking for?"></textarea>
                        <button type="submit" class="thm-btn yellow-bg">Submit Now</button>
                        <div class="form-result"></div><!-- /.form-result -->
                    </form>
                </div><!-- /.contact-form-content -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="contact-info text-center">
                    <div class="title text-center">
                       <span>Contact info</span>
                       <h2>Details</h2>
                    </div><!-- /.title -->
                    <div class="single-contact-info">
                        <h4>Address</h4>
                        <p>88 New Street, Washington DC <br /> United States, America</p>
                    </div><!-- /.single-contact-info -->
                    <div class="single-contact-info">
                        <h4>Phone</h4>
                        <p>Local: 222 999 888 <br /> Mobile: 000 8888 999</p>
                    </div><!-- /.single-contact-info -->
                    <div class="single-contact-info">
                        <h4>Email</h4>
                        <p>needhelp@printify.com <br /> inquiry@printify.com</p>
                    </div><!-- /.single-contact-info -->
                    <div class="single-contact-info">
                        <h4>Follow</h4>
                        <div class="social">
                           <a href="#" class="fab fa-twitter hvr-pulse"></a><!--  
                            --><a href="#" class="fab fa-pinterest hvr-pulse"></a><!--  
                            --><a href="#" class="fab fa-facebook-f hvr-pulse"></a><!--  
                            --><a href="#" class="fab fa-youtube hvr-pulse"></a>
                       </div><!-- /.social -->
                    </div><!-- /.single-contact-info -->
                </div><!-- /.contact-info -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.contact-section -->


    
@endsection