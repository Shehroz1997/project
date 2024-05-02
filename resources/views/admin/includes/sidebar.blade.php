 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="" class="brand-link">
         <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">Project Alpha</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     {{--  <a href="{{ route('admin.blogs.index') }}" class="nav-link">  --}}
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                         Blogs
                         {{-- <span class="right badge badge-danger">New</span> --}}
                     </p>
                     {{--  </a>  --}}
                 </li>

                 {{-- @endif --}}

                 <li class="nav-item">
                     <a href="{{ route('dashboard') }}" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                             {{--  <span class="right badge badge-danger">New</span>  --}}
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('companies.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Companies
                             {{--  <span class="right badge badge-danger">New</span>  --}}
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('employees.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Employees
                             {{--  <span class="right badge badge-danger">New</span>  --}}
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     {{-- $user->isAbleTo('edit-user'); --}}
                     {{--  <a href="{{ route('admin.tests.index') }}" class="nav-link">  --}}
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                         Tests
                         {{-- <span class="right badge badge-danger">New</span> --}}
                     </p>
                     {{--  </a>  --}}
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
