@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-user-plus"></i> | Manage User Registration
      <small>| approve and decline users credentials and register new members</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/users/')}}">Users</a></li>
      <li><a href="{{url('dashboard/registration/')}}">Registration</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header">            
            <a href="#" class="btn btn-sm btn-info pull-right" title="Add New Member">
                <i class="fa fa-user-plus"></i> Add New Member
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Created Date</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>John Maxwell</td>
                <td>j.max@gmail.com</td>
                <td>08189746354</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Pending</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-primary " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="View Proof of Payment">
                      <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-success " title="Approve Account">
                      <i class="fa fa-check-square-o"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Decline Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>     
              </tbody>              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection

