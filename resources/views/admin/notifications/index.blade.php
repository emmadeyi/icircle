@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-users"></i> | Notifications
      <small>| create, update, suspend and delete notifications</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/notifications/')}}">Notifications</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header">            
            <a href="{{url('dashboard/notification/create')}}" class="btn btn-sm btn-info pull-right" title="Create New Account">
                <i class="fa fa-plus"></i> New Notification
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Title</th>
                <th>Created By</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>    
              <tr>
                <td>Meeting Notification</td>
                <td>John Smith </td>
                <td><i>next week</i></td>
                <td>active</td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#view-notification" " title="View Notification">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info " title="Edit Notification">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Notification">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Notification">
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

<div class="modal fade" id="view-notification">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa-envelope"></i> | Notification Title</h4>
      </div>
      <div class="modal-body">
        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit non, aliquid deserunt cum, doloribus veniam cumque placeat magnam temporibus dolorum fuga quisquam, qui eveniet dignissimos nostrum cupiditate. Labore, pariatur unde. &hellip;</p>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
  <!-- /.modal -->
@endsection

