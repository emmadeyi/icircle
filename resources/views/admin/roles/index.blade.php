@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-sign-in"></i> | Manage Roles
      <small>| create, edit and delete roles for system access control</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/roles/')}}">Roles</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header">            
            <a href="{{url('dashboard/role/create')}}" class="btn btn-sm btn-info pull-right" title="Add New Role">
                <i class="fa fa-plus"></i> Add New Role
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Role</th>
                <th>Slug</th>
                <th>Last Updated</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Administrator</td>
                <td>administrator</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Suspended</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-primary " title="View Role">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Role">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Role">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Role">
                      <i class="fa fa-times"></i>
                  </a>
                  </td>
              </tr>     
              <tr>
                <td>Super Administrator</td>
                <td>super-administrator</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Active</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-primary " title="View Role">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Role">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Role">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Role">
                      <i class="fa fa-times"></i>
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

