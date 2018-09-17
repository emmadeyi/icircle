@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-bank"></i> | Contribute
      <small>| make contribution</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/contributions/')}}">Contributions</a></li>
      <li><a href="{{url('dashboard/contribution/make-payment')}}">make-payment</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <!-- =========================================================== -->

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Total Amount</h4></span>
              <span class="info-box-number"><b>41,410</b></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Count</h4></span>
              <span class="info-box-number"><b>12</b></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Pending</h4></span>
              <span class="info-box-number"><b>2</b></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Declined</h4></span>
              <span class="info-box-number"><b>0</b></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
        <!-- /.row -->
      </div>
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
            <h4>Current Capital | <strong>N50,000</strong>  
              <button href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#make-payment" title="Make Payment">
                <i class="fa fa-print"></i> Print Record
            </button>
              </h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>For</th>
                <th>Last Updated</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>N3000.00</td>
                <td>July, 2018</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Approved</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#view-contribution" title="View Scheme">
                      <i class="fa fa-eye"></i>
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
<div class="modal fade" id="view-contribution">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa-credit-card"></i> | Contribution Details</h4>
      </div>
      <div class="modal-body">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="role">Amount</label>
                N3,000.00
              </div>
              <div class="form-group">
                <label>For</label>
                <span>July, 2018</span>
              </div>
              <div class="form-group">
                <label>Status</label>
                <span>Approved</span>
              </div>
              <div class="form-group">
                <label>Last Updated</label>
                <span>One week ago</span>
              </div>
            </div>
            <!-- /.box-body -->
          </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
    <!-- /.modal -->

@endsection

