@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit"></i> | Update Notification
      <small>| update notification details</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/notifications/')}}">Notifications</a></li>
      <li><a href="{{url('dashboard/notification/edit/')}}">Update</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <h4>Enter Notification Details <small>all fields are required</small> 
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>              
            </div>
            <!-- /. tools -->
            @if (session('status'))
                <div class="callout callout-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="role">Title</label>
                  <input type="text" class="form-control" id="title-slug" name="title" placeholder="Enter notification title">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter notification slug e.g (monthly-meeting)">
                </div>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                  
                </textarea>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Activate
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Public
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-block btn-primary">Update</button>
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

@section('custom-scripts')
<script>
  $(function(){
    CKEDITOR.replace('editor1');
  });
</script>
    
@endsection