@extends('frontend.master')

@section('content')

<section class="page-title">
    <div class="thm-container">
        <h3>Projects List</h3>        
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->

<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="index.html">Homepage</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>Projects List</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->





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

    
@endsection