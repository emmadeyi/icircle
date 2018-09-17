@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-file"></i> | New Permission
      <small>| add new permission for system access control</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/permissions/')}}">Permissions</a></li>
      <li><a href="{{url('dashboard/permission/create/')}}">New</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
            <h4>Enter Permission Details <small>all fields are required</small>          
            <a href="{{url('dashboard/permissions/')}}" class="btn btn-sm btn-info pull-right" title="Add New Permission">
                <i class="fa fa-user-secret"></i> Permissions
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
                  <label for="permission">Permission</label>
                  <input type="text" class="form-control" name="title" id="title-slug" placeholder="Enter permission title">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter permission slug e.g (add-user)">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Enter permission description">
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



