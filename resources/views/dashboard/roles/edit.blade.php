@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit"></i> | Update Role
      <small>| update role details for system access control</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/roles/')}}">Roles</a></li>
      <li><a href="{{url('dashboard/role/edit/')}}">Update</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <h4>Enter Role Details <small>all fields are required</small>            
            <a href="{{url('dashboard/roles/')}}" class="btn btn-sm btn-info pull-right" title="Add New Role">
                <i class="fa fa-sign-in"></i> Roles
            </a></h4>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="role">Role</label>
                  <input type="text" class="form-control" id="title-slug" name="title" placeholder="Enter role title">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter role slug e.g (super-administrator)">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Enter role description">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Activate
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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

