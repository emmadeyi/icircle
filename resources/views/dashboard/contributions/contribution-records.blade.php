@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-bank"></i> | Contribution Records
      <small>| contribution records for all users</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/contributions/')}}">Contributions</a></li>
      <li><a href="{{url('dashboard/contribution/contribution-records')}}">Contribution records</a></li>
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
            <h4>Current Cooperative Capital | <strong>N50,000</strong>  
              <button href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#make-payment" title="Make Payment">
                <i class="fa fa-credit-card"></i> Make Payment
            </button>
              <button href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#beneficiary-contribution" title="Beneficiary Contribution">
                <i class="fa fa-share"></i> Beneficiary Contribution
            </button>
              </h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Account</th>
                <th>Total Cont.</th>
                <th>Curr. Capital</th>
                <th>Pending App.</th>
                <th>Last Updated</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>08180150101502</td>
                <td>N40000.00</td>
                <td>N40000.00</td>
                <td>2</td>
                <td><i>2 weeks ago</i></td>
                <td class="content-end">
                  <a href="{{url('dashboard/contribution/contribution-history')}}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#view-contribution" title="View Scheme">
                      <i class="fa fa-eye"></i> Open
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

<div class="modal fade" id="make-payment">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa-credit-card"></i> | Make Payment</h4>
      </div>
      <div class="modal-body">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="role">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
              </div>
              <div class="form-group">
                <label>Payment For:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
              </div>
              <div class="form-group">
                <label for="role">Payment Details <i>(Optional)</i></label>
                <textarea class="form-control" id="details" name="details" placeholder="Enter payment details if any"></textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
          </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="beneficiary-contribution">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa-credit-card"></i> | Make Payment</h4>
      </div>
      <div class="modal-body">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="role">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
              </div>
              <div class="form-group">
                <label>Beneficiary</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>John Max</option>
                  <option>Allen Smith</option>
                  <option>Sarah Olen</option>
                </select>
              </div>
              <div class="form-group">
                <label>Payment For:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="reservation">
                </div>
              </div>
              <div class="form-group">
                <label for="role">Payment Details <i>(Optional)</i></label>
                <textarea class="form-control" id="details" name="details" placeholder="Enter payment details if any"></textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
          </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection

