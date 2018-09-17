<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('customs/dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header text-center">MAIN NAVIGATION</li>
      <li>
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>General</span>
        </a>
      </li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-book-o"></i> <span>Manage Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('dashboard/users')}}"><i class="fa fa-users"></i> Users</a></li>
          <li><a href="{{url('dashboard/registration/')}}"><i class="fa fa-user-plus"></i>Registrations</a></li>
        </ul>
      </li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share-alt"></i> <span>Roles & Permissions</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('dashboard/roles/')}}"><i class="fa fa-sign-in"></i> Roles</a></li>
          <li><a href="{{url('dashboard/permissions/')}}"><i class="fa fa-user-secret"></i>Permissions</a></li>
        </ul>
      </li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bank"></i> <span>Contribution</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('dashboard/contribution/contribution-scheme')}}"><i class="fa fa-cogs"></i>Scheme</a></li>
          <li><a href="{{url('dashboard/contribution/make-payment')}}"><i class="fa fa-credit-card"></i>Make Payment</a></li>
          <li><a href="{{url('dashboard/contribution/contribution-records')}}"><i class="fa fa-archive"></i>Contribution Records</a></li>
          <li><a href="{{url('dashboard/contribution/contribution-history')}}"><i class="fa fa-list-alt"></i>History</a></li>
        </ul>
      </li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-percent"></i> <span>Laon</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('dashboard/loan/loan-scheme')}}"><i class="fa fa-cogs"></i>Scheme</a></li>
          <li><a href="{{url('dashboard/loan/application')}}"><i class="fa fa-file-o"></i>Applications</a></li>
          <li><a href="{{url('dashboard/loan/loan-records')}}"><i class="fa fa-archive"></i>Loan Records</a></li>
          <li><a href="{{url('dashboard/loan/loan-history')}}"><i class="fa fa-list-alt"></i>History</a></li>
        </ul>
      </li>      
      <li class="treeview">
        <a href="#">
            <i class="fa fa-money"></i> <span>Bonus & Withdrawal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.html"><i class="fa fa-send"></i>Dispatch Bonus</a></li>
          <li><a href="index2.html"><i class="fa fa-money"></i>My Bonus</a></li>
          <li><a href="index2.html"><i class="fa fa-usd"></i>Withdrawal</a></li>
        </ul>
      </li>      
      <li>
        <a href="#">
          <i class="fa fa-share"></i> <span>Referrals</span>
        </a>
      </li>
      <li>
        <a href="{{url('dashboard/notifications')}}">
          <i class="fa fa-envelope"></i> <span>Notifications</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>