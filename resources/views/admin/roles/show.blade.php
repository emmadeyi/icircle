@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-sign-in"></i> | Super Administrator
      <small>| view role details below</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/roles/')}}">Roles</a></li>
      <li><a href="{{url('dashboard/role/show/')}}">super-administrator</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <h4>Role Details            
            <a href="{{url('dashboard/role/edit')}}" class="btn btn-sm btn-info pull-right" title="Add New Role">
                <i class="fa fa-edit"></i>Update Role
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
                <label for="role">Tile</label>
                Super Administrator
              </div>
              <div class="form-group">
                <label for="slug">Slug</label>
                super-administrator
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                description
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                Active
              </div>
              <hr>
              <h4>Assigned permissions</h4>

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

