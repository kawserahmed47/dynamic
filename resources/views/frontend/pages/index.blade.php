@extends('frontend.master')

@section('content')

{{-- Slider --}}
@include('frontend.layouts.slider')


<section class="welcome-section sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-img-box">
                    <img src="{{asset('public/frontend')}}/img/welcome-1-1.png" alt="Awesome Image"/>
                </div><!-- /.welcome-img-box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="welcome-content">
                    <div class="title">
                        <p>Welcome to dynamic printing solutions</p>
                        <h3>Dream it. Print it.</h3>
                    </div><!-- /.title -->
                    <p>When we say we’re not happy until you’re happy, we really do mean it. So whether it’s a typo or an image that didn’t print quite the way you hoped, we’ll do everything we can to <br /> fix it.</p>
                    <p>We love great design and believe it can work wonders for every business. That’s why we make it simple to create beautiful, expertly crafted business stationery.</p>
                    <a href="about.html" class="thm-btn yellow-bg">Learn More</a>
                </div><!-- /.welcome-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.welcome-section -->



<section class="service-style-two">
    <div class="overlay"></div><!-- /.overlay -->
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="service-content">
                    <span>For your perfect printing</span>
                    <h2>Why are we <br /> best ?</h2>
                    <p>Take your business cards, Flyers and Stickers to the next level with exclusive and innovative features.</p>
                </div><!-- /.service-content -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="unique-feature">
                            <img src="{{asset('public/frontend')}}/img/unique-feature-hand.png" alt="Awesome Image"/>
                            <div class="content">
                                <i class="printify-icon-white-sheets"></i>
                                <h3>Quality <br />Printing</h3>
                            </div><!-- /.content -->
                        </div><!-- /.unique-feature -->
                    </div><!-- /.col-sm-4 -->
                    <div class="col-sm-4 text-center">
                        <div class="unique-feature">
                            <img src="{{asset('public/frontend')}}/img/unique-feature-hand.png" alt="Awesome Image"/>
                            <div class="content">
                                <i class="printify-icon-brochure-folded"></i>
                                <h3>Timely<br />Delivery</h3>
                            </div><!-- /.content -->
                        </div><!-- /.unique-feature -->
                    </div><!-- /.col-sm-4 -->
                    <div class="col-sm-4 text-center">
                        <div class="unique-feature">
                            <img src="{{asset('public/frontend')}}/img/unique-feature-hand.png" alt="Awesome Image"/>
                            <div class="content">
                                <i class="printify-icon-circular-sticker"></i>
                                <h3>Eco<br />Minded</h3>
                            </div><!-- /.content -->
                        </div><!-- /.unique-feature -->
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.service-style-two -->



<section class="what-we-do sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
            <span>Our features</span>
            <h3>What We Do</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br /> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-lg-4 col-md-4" style="margin-bottom: 20px">
                
                    <div class="single-what-we-do">
                        <div class="img-box">
                            <img style="width: 100%" src="{{asset('public/frontend')}}/img/what-we-do-1-1.jpg" alt="" />
                        </div><!-- /.img-box -->
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="service-details.html"><h3>3D Printing</h3></a>
                            <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                            <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-what-we-do -->
               
            
            </div><!-- /.col-md-6 -->

            <div class="col-lg-4 col-md-4"  style="margin-bottom: 20px">
                <div class="single-what-we-do">
                    <div class="img-box">
                        <img style="width: 100%" src="{{asset('public/frontend')}}/img/what-we-do-1-1.jpg" alt="" />
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="service-details.html"><h3>3D Printing</h3></a>
                        <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                        <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-what-we-do -->
            </div><!-- /.col-md-6 -->

            <div class="col-lg-4 col-md-4"  style="margin-bottom: 20px">
                <div class="single-what-we-do">
                    <div class="img-box">
                        <img style="width: 100%" src="{{asset('public/frontend')}}/img/what-we-do-1-1.jpg" alt="" />
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="service-details.html"><h3>3D Printing</h3></a>
                        <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                        <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-what-we-do -->
            </div><!-- /.col-md-6 -->


        <div class="col-lg-4 col-md-4"  style="margin-bottom: 20px">
                
                <div class="single-what-we-do">
                    <div class="img-box">
                        <img style="width: 100%" src="{{asset('public/frontend')}}/img/what-we-do-1-1.jpg" alt="" />
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="service-details.html"><h3>3D Printing</h3></a>
                        <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                        <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-what-we-do -->
           
        
        </div><!-- /.col-md-6 -->

        <div class="col-lg-4 col-md-4"  style="margin-bottom: 20px">
            <div class="single-what-we-do">
                <div class="img-box">
                    <img style="width: 100%" src="{{asset('public/frontend')}}/img/what-we-do-1-1.jpg" alt="" />
                </div><!-- /.img-box -->
                <div class="text-box hvr-bounce-to-bottom">
                    <a href="service-details.html"><h3>3D Printing</h3></a>
                    <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                    <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                </div><!-- /.text-box -->
            </div><!-- /.single-what-we-do -->
        </div><!-- /.col-md-6 -->

        <div class="col-lg-4 col-md-4"  style="margin-bottom: 20px">
            <div class="single-what-we-do">
                <div class="img-box">
                    <img style="width: 100%" src="{{asset('public/frontend')}}/img/what-we-do-1-1.jpg" alt="" />
                </div><!-- /.img-box -->
                <div class="text-box hvr-bounce-to-bottom">
                    <a href="service-details.html"><h3>3D Printing</h3></a>
                    <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                    <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                </div><!-- /.text-box -->
            </div><!-- /.single-what-we-do -->
        </div><!-- /.col-md-6 -->
      
          
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.what-we-do -->

<section class="testi-carousel-wrapper">
	<div class="overlay"></div><!-- /.overlay -->
    <div class="thm-container">
	    <div class="testi-carousel owl-carousel owl-theme">
	        <div class="item single-testimonials">
                <div class="img-box">
                    <img src="{{asset('public/frontend')}}/img/testi-1-1.jpg" alt="Awesome Image"/>
                </div><!-- /.img-box -->
                <div class="text-box">
                    <h3>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</h3>
                    <p>Christine Eve</p>
                </div><!-- /.text-box -->
	        </div>
	        <div class="item single-testimonials">
                <div class="img-box">
                    <img src="{{asset('public/frontend')}}/img/testi-1-2.jpg" alt="Awesome Image"/>
                </div><!-- /.img-box -->
                <div class="text-box">
                    <h3>I never leave the house without my business cards. They accompany me to meetings, interviews and all social events, I am very happy with printify.</h3>
                    <p>Jessica Brown</p>
                </div><!-- /.text-box -->
	        </div>
	    </div>
    </div><!-- /.thm-container -->
</section><!-- /.testi-carousel-wrapper -->


<section class="pricing-section sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
            <span>Choose best product</span>
            <h3>Our Products</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br />the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12"  style="margin-bottom: 20px">
                <div class="single-pricing text-center">
                    <i class="printify-icon-continuous-feed-paper"></i>
                    <div class="line"></div><!-- /.line -->
                    <h6><span class="price-currency">$</span>25.00</h6>
                    <ul class="list-box">
                        <li>Rounded & Colored </li>
                        <li>Preimum Paper</li>
                        <li>Extra Thick</li>
                    </ul><!-- /.list-box -->
                    <a href="#" class="thm-btn yellow-bg">Buy Now</a>
                </div><!-- /.single-pricing -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12"  style="margin-bottom: 20px">
                <div class="single-pricing text-center">
                    <i class="printify-icon-brochure-folded"></i>
                    <div class="line"></div><!-- /.line -->
                    <h6><span class="price-currency">$</span>35.00</h6>

                    <ul class="list-box">
                        <li>Rounded & Colored </li>
                        <li>Preimum Paper</li>
                        <li>Extra Thick</li>
                    </ul><!-- /.list-box -->
                    <a href="#" class="thm-btn yellow-bg">Buy Now</a>
                </div><!-- /.single-pricing -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12"  style="margin-bottom: 20px">
                <div class="single-pricing text-center">
                    <i class="printify-icon-circular-sticker"></i>
                    <div class="line"></div><!-- /.line -->
                    <h6><span class="price-currency">$</span>45.00</h6>

                    <ul class="list-box">
                        <li>Rounded & Colored </li>
                        <li>Preimum Paper</li>
                        <li>Extra Thick</li>
                    </ul><!-- /.list-box -->
                    <a href="#" class="thm-btn yellow-bg">Buy Now</a>
                </div><!-- /.single-pricing -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-6 col-xs-12"  style="margin-bottom: 20px">
                <div class="single-pricing text-center">
                    <i class="printify-icon-continuous-feed-paper"></i>
                    <div class="line"></div><!-- /.line -->
                    <h6><span class="price-currency">$</span>25.00</h6>

                    <ul class="list-box">
                        <li>Rounded & Colored </li>
                        <li>Preimum Paper</li>
                        <li>Extra Thick</li>
                    </ul><!-- /.list-box -->
                    <a href="#" class="thm-btn yellow-bg">Buy Now</a>
                </div><!-- /.single-pricing -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12"  style="margin-bottom: 20px">
                <div class="single-pricing text-center">
                    <i class="printify-icon-brochure-folded"></i>
                    <div class="line"></div><!-- /.line -->
                    <h6><span class="price-currency">$</span>35.00</h6>

                    <ul class="list-box">
                        <li>Rounded & Colored </li>
                        <li>Preimum Paper</li>
                        <li>Extra Thick</li>
                    </ul><!-- /.list-box -->
                    <a href="#" class="thm-btn yellow-bg">Buy Now</a>
                </div><!-- /.single-pricing -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px">
                <div class="single-pricing text-center">
                   
                    <i class="printify-icon-circular-sticker"></i>
                    <div class="line"></div><!-- /.line -->
                    <h6><span class="price-currency">$</span>45.00</h6>
                    <ul class="list-box">
                        <li>Rounded & Colored </li>
                        <li>Preimum Paper</li>
                        <li>Extra Thick</li>
                    </ul><!-- /.list-box -->
                    <a href="#" class="thm-btn yellow-bg">Buy Now</a>
                </div><!-- /.single-pricing -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.pricing-section sec-pad -->




<section class="faq-section">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-5">
                <div class="we-believe-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="single-we-believe text-center">
                            <div class="img-box">
                                <img src="{{asset('public/frontend')}}/img/we-belive-in-1-1.jpg" alt="Awesome Image"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <h3>We believe in the <br /> power of great <br /> design</h3>
                                <p>Design helps us stand out: from the clothes we wear, to the homes we live in, to the business cards we use. Design tells a story about <br /> us and what we stand for.</p>
                                <a href="services.html" class="thm-btn yellow-bg">Learn More</a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-we-believe -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="single-we-believe text-center">
                            <div class="img-box">
                                <img src="{{asset('public/frontend')}}/img/we-belive-in-1-2.jpg" alt="Awesome Image"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <h3>We believe in the <br /> power of great <br /> design</h3>
                                <p>Design helps us stand out: from the clothes we wear, to the homes we live in, to the business cards we use. Design tells a story about <br /> us and what we stand for.</p>
                                <a href="services.html" class="thm-btn yellow-bg">Learn More</a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-we-believe -->
                    </div><!-- /.item -->
                </div><!-- /.we-believe-carousel -->
            </div><!-- /.col-md-5 -->
            <div class="col-md-7">
                <div class="faq-content">
                    <div class="title">
                        <span>Question and answers</span>
                        <h2>Frequently <br />Asked Questions</h2>
                    </div><!-- /.title -->
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Want to make plan for retairment?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4>How I can get good plan for future for my children education?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>I can get online appointmet with agent?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Need a good insurace for term plan?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.faq-content -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.faq-section -->


<section class="call-to-action-one">
	<div class="overlay"></div><!-- /.overlay -->
	<div class="inner-wrapper">
		<div class="thm-container">
			<div class="row">
				<div class="col-md-6">
					<div class="call-to-action-content">
						<div class="title">
							<span>Business stationery printing</span>
							<h2>Even More Good <br /> Stuff</h2>
						</div><!-- /.title -->
						<ul class="list-box">
							<li><i class="fas fa-check-circle"></i>Professional designs with added fizz</li>
							<li><i class="fas fa-check-circle"></i>Create an army of business stationery</li>
							<li><i class="fas fa-check-circle"></i>Take your attention to detail up a level</li>
							<li><i class="fas fa-check-circle"></i>Totally safe for laser printers</li>
						</ul><!-- /.list-box -->
						<a href="about.html" class="thm-btn yellow-bg">Learn More</a>
					</div><!-- /.call-to-action-content -->
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.thm-container -->
	</div><!-- /.inner -->
</section><!-- /.call-to-action -->

<section class="team-section sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
            <span>The leadership</span>
            <h3>Meet the Team</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br /> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="team-carousel owl-carousel owl-theme">
        	<div class="item">
        		<div class="single-team-carousel">
        			<div class="inner">
						<div class="img-box">
							<img src="{{asset('public/frontend')}}/img/team-1-1.png" alt="Awesome Image"/>
						</div><!-- /.img-box -->
						<div class="team-content">
							<div class="title">
								<span>Chief marketing officer</span>
								<h3>Brendan Milliren</h3>
							</div><!-- /.title -->
							<p>Jessica leads our customer team and holds guardianship of our brand.</p>
							<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She’s responsible for our brand strategy and making sure we stay close to our customers. Jessica’s two big passions are the ocean and music. She has a formidable record library – with her purple vinyl of Purple Rain the jewel in her collection.</p>
						</div><!-- /.team-content -->
        			</div><!-- /.inner -->
        		</div><!-- /.single-team-carousel -->
        	</div><!-- /.item -->
        	<div class="item">
        		<div class="single-team-carousel">
        			<div class="inner">
						<div class="img-box">
							<img src="{{asset('public/frontend')}}/img/team-1-2.png" alt="Awesome Image"/>
						</div><!-- /.img-box -->
						<div class="team-content">
							<div class="title">
								<span>Chief marketing officer</span>
								<h3>Mei Langhans</h3>
							</div><!-- /.title -->
							<p>Jessica leads our customer team and holds guardianship of our brand.</p>
							<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She’s responsible for our brand strategy and making sure we stay close to our customers. Jessica’s two big passions are the ocean and music. She has a formidable record library – with her purple vinyl of Purple Rain the jewel in her collection.</p>
						</div><!-- /.team-content -->
        			</div><!-- /.inner -->
        		</div><!-- /.single-team-carousel -->
        	</div><!-- /.item -->
        	<div class="item">
        		<div class="single-team-carousel">
        			<div class="inner">
						<div class="img-box">
							<img src="{{asset('public/frontend')}}/img/team-1-3.png" alt="Awesome Image"/>
						</div><!-- /.img-box -->
						<div class="team-content">
							<div class="title">
								<span>Chief marketing officer</span>
								<h3>Tawana Ledsinger</h3>
							</div><!-- /.title -->
							<p>Jessica leads our customer team and holds guardianship of our brand.</p>
							<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She’s responsible for our brand strategy and making sure we stay close to our customers. Jessica’s two big passions are the ocean and music. She has a formidable record library – with her purple vinyl of Purple Rain the jewel in her collection.</p>
						</div><!-- /.team-content -->
        			</div><!-- /.inner -->
        		</div><!-- /.single-team-carousel -->
        	</div><!-- /.item -->
        </div><!-- /.team-carousel -->
	</div><!-- /.thm-container -->
</section><!-- /.team-section -->

{{-- <section class="service-style-one sec-pad">
	<img src="{{asset('public/frontend')}}/img/service-bg-1-1.jpg" class="background-right" alt="Awesome Image"/>
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="service-content">
					<div class="title">
						<span>Checkout our services</span>
						<h2>Explore Printing <br />Services</h2>
					</div><!-- /.title -->
					<p>We’re an online print and design company that is passionate about great design and the difference it can make to our customers and the world.</p>
					<p>We want to set a new standard for print, with remarkable new products that bring great design and uncompromising, high standards to the web. </p>
					<div class="btn-box">
                        <div class="phone-btn"><a href="mailto:info@dps-bd.com"> <i class="fas fa-envelope"></i>info@dps-bd.com</a> <a href="tel:+8888 999"> <i class="fas fa-phone"></i> 000 8888 999</a> </div><!-- /.phone-btn -->
					</div><!-- /.btn-box -->
				</div><!-- /.service-content -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="service-right-content">
					<div class="inner">
						<div class="divider hor"></div><!-- /.divider -->
						<div class="divider ver"></div><!-- /.divider -->
						<div class="row">
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-t-shirt-with-square"></i>
									<a href="service-details.html"><h3>T-Shirt <br /> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-brochure-folded"></i>
									<a href="service-details.html"><h3>Flyer <br /> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-continuous-feed-paper"></i>
									<a href="service-details.html"><h3>Poster <br /> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-circular-sticker"></i>
									<a href="service-details.html"><h3>Sticker <br /> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
						</div><!-- /.row -->
					</div><!-- /.inner -->
				</div><!-- /.service-right-content -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.service-style-one --> --}}


<section class="recent-projects sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
            <span>Work showcase</span>
            <h3>Recent Projects</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br /> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<div class="single-recent-project">
        			<div class="img-box">
        				<img src="{{asset('public/frontend')}}/img/project-1-1.jpg" alt="Awesome Image"/>
        			</div><!-- /.img-box -->
        			<div class="text-box">
        				<a href="project-details.html" class="more"><i class="fas fa-plus"></i></a>
        				<div class="inner hvr-bounce-to-bottom">
        					<span>Printing</span>
        					<a href="project-details.html"><h3>Thick Paper Book</h3></a>
        				</div><!-- /.inner -->
        			</div><!-- /.text-box -->
        		</div><!-- /.single-recent-project -->
        	</div><!-- /.col-md-4 -->
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<div class="single-recent-project">
        			<div class="img-box">
        				<img src="{{asset('public/frontend')}}/img/project-1-2.jpg" alt="Awesome Image"/>
        			</div><!-- /.img-box -->
        			<div class="text-box">
        				<a href="project-details.html" class="more"><i class="fas fa-plus"></i></a>
        				<div class="inner hvr-bounce-to-bottom">
        					<span>Copying</span>
        					<a href="project-details.html"><h3>Ninety Nine You</h3></a>
        				</div><!-- /.inner -->
        			</div><!-- /.text-box -->
        		</div><!-- /.single-recent-project -->
        	</div><!-- /.col-md-4 -->
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<div class="single-recent-project">
        			<div class="img-box">
        				<img src="{{asset('public/frontend')}}/img/project-1-3.jpg" alt="Awesome Image"/>
        			</div><!-- /.img-box -->
        			<div class="text-box">
        				<a href="project-details.html" class="more"><i class="fas fa-plus"></i></a>
        				<div class="inner hvr-bounce-to-bottom">
        					<span>Printing</span>
        					<a href="project-details.html"><h3>Colorful Photo Print</h3></a>
        				</div><!-- /.inner -->
        			</div><!-- /.text-box -->
        		</div><!-- /.single-recent-project -->
        	</div><!-- /.col-md-4 -->
        </div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.recent-projects -->


<section class="service-style-two about-page">
    <div class="overlay"></div><!-- /.overlay -->
    <img src="{{asset('public/frontend')}}/img/what-we-do-2-1.jpg" class="background-right" alt="Awesome Image"/>
    <div class="thm-container">
        <div class="row">
            <div class="col-md-5">
                <div class="service-content">
                    <span>What we do</span>
                    <h2>You’ll get a <br />perfect fit   business.</h2>
                    <p>Handing out a business card is often the first impression people take of your business, so you need to get it right. Using your own photography or artwork to create custom business cards can help, and PRINTIFY makes the process easy with our simple online tools and templates.</p>
                </div><!-- /.service-content -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-7">
                <div class="price-feature-box">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="price-feature">
                                <div class="circle-box">
                                    <div class="circle" data-size="195" data-value="0.95" data-color="#2983C4"></div><!-- /.circle -->
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="content">
                                                <p>95%</p>
                                            </div><!-- /.content -->
                                        </div><!-- /.inner -->
                                    </div><!-- /.text-box -->
                                </div><!-- /.circle-box -->
                                <a href="service-details.html"><h3>Successful <br /> Project</h3></a>
                            </div><!-- /.unique-feature -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-4 text-center">
                            <div class="price-feature">
                                <div class="circle-box">
                                    <div class="circle" data-size="195" data-value="0.82" data-color="#2983C4"></div><!-- /.circle -->
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="content">
                                                <p>82 %</p>
                                            </div><!-- /.content -->
                                        </div><!-- /.inner -->
                                    </div><!-- /.text-box -->
                                </div><!-- /.circle-box -->
                                <a href="service-details.html"><h3>Fast <br /> Delivery</h3></a>
                            </div><!-- /.unique-feature -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-4 text-center">
                            <div class="price-feature">
                                <div class="circle-box">
                                    <div class="circle" data-size="195" data-value="0.90" data-color="#2983C4"></div><!-- /.circle -->
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="content">
                                                <p>90%</p>
                                            </div><!-- /.content -->
                                        </div><!-- /.inner -->
                                    </div><!-- /.text-box -->
                                </div><!-- /.circle-box -->
                                <a href="service-details.html"><h3>Happy <br /> Clients</h3></a>
                            </div><!-- /.unique-feature -->
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                </div><!-- /.price-feature-box -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.service-style-two -->



<section class="blog-style-one sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
            <span>Blog posts</span>
            <h3>Latest News</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br />the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-md-6">
                <div class="single-blog-post">
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="blog-details.html"><h3>What final touches can i add</h3></a>
                        <p>We offer Letterpress, Spot Gloss, Raised Spot Gloss or Gold Foil. There are many people variation of passages of lorem Ipsum available in the majority alteration in some.</p>
                    </div><!-- /.text-box -->
                    <div class="img-box">
                        <img src="{{asset('public/frontend')}}/img/blog-1-1.jpg" alt="Awesome Image"/>
                        <div class="meta-info">
                            <a href="#"><i class="fas fa-user"></i> by admin</a><!--
                            --><a href="#"><i class="fas fa-calendar"></i> 20 March, 2018</a><!--
                            --><a href="#"><i class="fas fa-comments"></i> 3 comments</a>
                        </div><!-- /.meta-info -->
                        <a href="blog-details.html" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.img-box -->
                </div><!-- /.single-blog-post -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-blog-post">
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="blog-details.html"><h3>How to brand a tattoo studio</h3></a>
                        <p>We offer Letterpress, Spot Gloss, Raised Spot Gloss or Gold Foil. There are many people variation of passages of lorem Ipsum available in the majority alteration in some.</p>
                    </div><!-- /.text-box -->
                    <div class="img-box">
                        <img src="{{asset('public/frontend')}}/img/blog-1-2.jpg" alt="Awesome Image"/>
                        <div class="meta-info">
                            <a href="#"><i class="fas fa-user"></i> by admin</a><!--
                            --><a href="#"><i class="fas fa-calendar"></i> 20 March, 2018</a><!--
                            --><a href="#"><i class="fas fa-comments"></i> 3 comments</a>
                        </div><!-- /.meta-info -->
                        <a href="blog-details.html" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.img-box -->
                </div><!-- /.single-blog-post -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-style-one -->



@include('frontend.layouts.brands')
@endsection