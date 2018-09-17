@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-file"></i> | Create User
      <small>| view permission details below</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/permissions/')}}">Permissions</a></li>
      <li><a href="{{url('dashboard/permission/show/')}}">create-user</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
            <h4>Permission Details          
            <a href="{{url('dashboard/permission/edit')}}" class="btn btn-sm btn-info pull-right" title="Permissions">
                <i class="fa fa-edit"></i>Update Permission
            </a></h4> 
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="box-body">
              <div class="form-group">
                <label for="permission">Permission</label>
                Create User
              </div>
              <div class="form-group">
                <label for="slug">Slug</label>
                create-user
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                authorization to create new user for this system
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                Suspended
              </div>
            </div>
            <!-- /.box-body -->
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



