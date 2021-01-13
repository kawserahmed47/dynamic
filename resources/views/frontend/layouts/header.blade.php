

<header class="header home-page-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('public/frontend')}}/img/dynamic/416x-105-03.jpg" alt="Awesome Image"/>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                
                <ul class="nav navbar-nav navigation-box">
                    <li class="current"> 
                        <a href="{{route('index')}}">Home</a> 
                    </li>
                    <li><a href="{{route('about')}}">About us</a></li>
                    <li> 
                        <a href="{{route('products')}}">Products</a> 
                    </li>
                    <li> 
                        <a href="{{route('services')}}">Services</a> 
                    </li>
                    <li> 
                        <a href="{{route('projects')}}">Projects</a> 
                    </li>
                    <li> 
                        <a href="{{route('blogs')}}">Blogs</a> 
                    </li>
                    <li> <a href="{{route('contact')}}">Contact us</a> </li>
                   
                </ul>                
            </div><!-- /.navbar-collapse -->
         
        </div><!-- /.container -->
    </nav>   
</header><!-- /.header -->

