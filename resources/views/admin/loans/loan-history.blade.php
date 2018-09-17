@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-list-alt"></i> | Loan History
      <small>| History of loan payment</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/loan/loan-history')}}">Loan History</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-aqua">
          <span class="info-box-icon"><i class="fa fa-credit-card"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><h4>Loan Amount</h4></span>
            <span class="info-box-number"><b>800,000</b></span>
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
            <span class="info-box-text"><h4>Amount Paid</h4></span>
            <span class="info-box-number"><b>60,000</b></span>
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
            <span class="info-box-text"><h4>Due Date</h4></span>
            <span class="info-box-number"><b>2nd July, 2019</b></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-gray">
          <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><h4>Pending</h4></span>
            <span class="info-box-number"><b>1</b></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
        <!-- /.row -->     
    <div class="row"> 
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <a href="#" class="btn btn-sm btn-info pull-right" title="Add New Role">
                <i class="fa fa-print"></i> Print
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Account Number</th>
                <th>Scheme</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Paid</th>
                <th>Last Updated</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>00978575647583</td>
                <td>Loan Scheme two years</td>
                <td>800,000.00</td>
                <td>2nd July, 2019</td>
                <td>20,000.00</td>
                <td><i>2 months ago</i></td>
                <td><i>Approved</i></td>
              </tr>     
              <tr>
                <td>00978575647583</td>
                <td>Loan Scheme two years</td>
                <td>800,000.00</td>
                <td>2nd July, 2019</td>
                <td>40,000.00</td>
                <td><i>1 month ago</i></td>
                <td><i>Approved</i></td>
              </tr>     
              <tr>
                <td>00978575647583</td>
                <td>Loan Scheme two years</td>
                <td>800,000.00</td>
                <td>2nd July, 2019</td>
                <td>20,000.00</td>
                <td><i>3 days ago</i></td>
                <td><i>Pendding</i></td>
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

