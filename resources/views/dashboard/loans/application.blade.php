@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-file"></i> | Loan Application
      <small>| apply for loan scheme</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/loan/loan-history')}}">Loan</a></li>
      <li><a href="{{url('dashboard/loan/application')}}">Scheme</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <h4>Enter Loan Details <small>all fields are required</small>           
            
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
                  <label>Select Scheme</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">One Year</option>
                    <option>Two Years</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="role">Amount</label>
                  <input type="number" step=0.01 min=0 class="form-control" id="amount" name="title" placeholder="Enter amount e.g 1,000,000">
                </div>
                <div class="form-group">
                    <label for="description">Reason for Loan</label>
                    <textarea name="reason" id="reason" class="form-control" placeholder="State Reason for applying for this loan. "></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <h4>Applications
                  <a href="{{url('dashboard/loan/records')}}" class="btn btn-sm btn-info pull-right" title="Add New Role">
                    <i class="fa fa-archive"></i> Loan Records
                </a></h4>
              </h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>Account Number</th>
                <th>Name</th>
                <th>Scheme</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Paid</th>
                <th>Last Updated</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>00978575647583</td>
                <td>John Smith</td>
                <td>Loan Scheme two years</td>
                <td>800,000.00</td>
                <td>2nd July, 2019</td>
                <td>20,000.00</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Approved</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#update-scheme" title="Edit Scheme">
                      <i class="fa fa-line-chart"></i> Records
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

