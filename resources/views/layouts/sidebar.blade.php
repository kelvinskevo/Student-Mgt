 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <p>Alexander Pierce</p>
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
             </div>
         </div>
         <!-- search form -->
         <form action="#" method="get" class="sidebar-form">
             <div class="input-group">
                 <input type="text" name="q" class="form-control" placeholder="Search...">
                 <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                             class="fa fa-search"></i>
                     </button>
                 </span>
             </div>
         </form>
         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">
             <li class="header">MAIN NAVIGATION</li>
             <li class="nav-link active">
                 <a href="{{ route('admin.dashboard') }}">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                 </a>
             </li>

             <li class="treeview">
                 <a href="#">
                     <i class="fa fa-graduation-cap"></i> <span>Students</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ url('/students') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ url('/students/create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Update</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="/teachers">
                     <i class="fa fa-user"></i> <span>Teachers</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ url('teachers') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ url('/teachers/create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="#"><i class="fa fa-circle-o"></i> Edit</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="/batches">
                     <i class="fa fa-object-group"></i> <span>Batches</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ url('batches') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ url('batches/create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="/courses">
                     <i class="fa fa-object-group"></i> <span>Class</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ route('courses.index') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ route('courses.create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                 </ul>
             </li>
             <li class="treeview">
                 <a href="/subjects">
                     <i class="fa fa-object-group"></i> <span>Subjects</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ route('subjects.index') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ route('subjects.create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="/enrollments">
                     <i class="fa fa-user-plus"></i> <span>Enrollment</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ route('enrollments.index') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ route('enrollments.create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="/payments">
                     <i class="fa fa-credit-card"></i> <span>Payments</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ route('payments.index') }}"><i class="fa fa-circle-o"></i> View</a>
                     </li>
                     <li><a href="{{ route('payments.create') }}"><i class="fa fa-circle-o"></i> Register
                         </a></li>
                     <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>
                 </ul>
             </li>

             <li class="nav-link">
                 <a href="/reports">
                     <i class="fa fa-book"></i> <span>Reports</span>
                 </a>
             </li>






         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
