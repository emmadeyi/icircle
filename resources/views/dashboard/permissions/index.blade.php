@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-user-secret"></i> | Manage Permissions
      <small>| create, edit and delete permissions for system access control</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/permissions/')}}">Permissions</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header">            
            <a href="{{url('dashboard/permission/create')}}" class="btn btn-sm btn-info pull-right" title="Add New Permission">
                <i class="fa fa-plus"></i> Add New Permission
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Permission</th>
                <th>Slug</th>
                <th>Last Updated</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Create User</td>
                <td>create-user</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Pending</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-primary " title="View Permission">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Permission">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Permission">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Permission">
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

