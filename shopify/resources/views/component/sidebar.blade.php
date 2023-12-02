 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#e5e5e5da">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
     
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link" style="color:black">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color:black" >
              <i class="nav-icon fas fa-p"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::tokenRoute('collection.index')}}" class="nav-link" style="color:black">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Collection List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::tokenRoute('product.index')}}" class="nav-link" style="color:black">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
             
            </ul>
          </li>
         
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>