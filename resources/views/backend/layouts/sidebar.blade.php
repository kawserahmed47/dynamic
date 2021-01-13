<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('public/frontend')}}/img/dynamic/416x-105-03.jpg" alt="AdminLTE Logo" class=""
           style="width:100%">
      
      {{-- <span class="brand-text font-weight-light">Dynamic Printing Solution</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          {{-- Slider --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/slider/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/slider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
          
            </ul>
          </li>

          {{-- About --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/about/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
          
            </ul>
          </li>

          {{-- Service --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/service/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
          
            </ul>
          </li>

          {{-- Product --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('product/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
          
            </ul>
          </li>

          {{-- Project --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Project
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/project/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/project')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
          
            </ul>
          </li>

             {{-- Blog --}}
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Blog
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/blog/create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('blog')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
              
                </ul>
            </li>


              {{-- Brand --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Clients
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/brand/create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/brand')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
              
                </ul>
            </li>

              {{-- Faq --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Faq
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('faq/create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('faq')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
              
                </ul>
            </li>

              {{-- Team --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Team
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('team/create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/team')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
              
                </ul>
            </li>

              {{-- Testimonial --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Testimonial
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('testimonial/create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/testimonial')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
              
                </ul>
            </li>
         
          {{-- Message --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Message
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/message')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/quotations')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quotation</p>
                </a>
              </li>
            </ul>
          </li>

            {{-- Message --}}
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p>
                    Admin
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin/create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/admin')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
                </ul>
              </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Log out</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            
              {{-- <p class="text">Log out</p> --}}
            </a>
          </li>
       
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>