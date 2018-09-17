@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-users"></i> | Manage Users
      <small>| create, update, suspend and delete users credentials</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/users/')}}">Users</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header">            
            <a href="#" class="btn btn-sm btn-info pull-right" title="Create New Account">
                <i class="fa fa-user-plus"></i> Create New Account
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Account Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Last Updated</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
                      <i class="fa fa-user-times"></i>
                  </a>
                  </td>
              </tr>              
              <tr>
                <td>08180150101502</td>
                <td>John Smith </td>
                <td>j.smith@gmail.com</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success " title="View Account">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Account">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Account">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Account">
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

