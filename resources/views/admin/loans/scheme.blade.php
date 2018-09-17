@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-cogs"></i> | Loan Scheme
      <small>| configure loan parameters</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{url('dashboard/loan/loan-history')}}">Loan</a></li>
      <li><a href="{{url('dashboard/loan/scheme')}}">Scheme</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
              <h4>Enter Loan Paramemters <small>all fields are required</small>           
            
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
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter scheme title">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">Minimum Amount in %</label>
                      <input type="number" step=0.01 min=0 max=100 class="form-control" id="amount" name="title" placeholder="Enter minimum amount in % e.g 10">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">Elegibility Multiplication</label>
                      <input type="number" step=0.01 min=0 class="form-control" id="elegible_x" name="title" placeholder="Enter Elegibility Multiplication e.g 3">
                    </div>
                  </div>
                  <div class="col-md-6">                    
                    <div class="form-group">
                      <label for="role">Duration</label>
                      <input type="number" step=0.01 min=0 class="form-control" id="duration" name="title" placeholder="Enter scheme duration">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">Scheme %</label>
                      <input type="number" step=0.01 min=0 max=100 class="form-control" id="scheme_percentage" name="title" placeholder="Enter Scheme % of applied amount">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">Exceed Duration %</label>
                      <input type="number" step=0.01 min=0 max=100 class="form-control" id="duration_percentage" name="title" placeholder="Enter % increment for when duration is exceeded">
                    </div>
                  </div>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Activate
                  </label>
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
              <h4>Existing Scheme
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
                <th>Title</th>
                <th>Min. Amount %</th>
                <th>Mult.</th>
                <th>Duration</th>
                <th>Scheme %</th>
                <th>Exceed %</th>
                <th>Last Updated</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Loan Scheme two years</td>
                <td>4.2</td>
                <td>3</td>
                <td>2</td>
                <td>2.5</td>
                <td>0.5</td>
                <td><i>2 weeks ago</i></td>
                <td><i>Active</i></td>
                <td class="content-end">
                  <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#update-scheme" title="Edit Scheme">
                      <i class="fa fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-warning " title="Suspend Scheme">
                      <i class="fa fa-ban"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger " title="Delete Scheme">
                      <i class="fa fa-times"></i>
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
<div class="modal fade" id="update-scheme">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa-cogs"></i> | Update Scheme</h4>
      </div>
      <div class="modal-body">
          <form role="form">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="role">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter scheme title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="role">Minimum Amount in %</label>
                    <input type="number" step=0.01 min=0 max=100 class="form-control" id="amount" name="title" placeholder="Enter minimumamount in % e.g 10">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="role">Elegibility Multiplication</label>
                    <input type="number" step=0.01 min=0 class="form-control" id="elegible_x" name="title" placeholder="Enter ElegibilityMultiplication e.g 3">
                  </div>
                </div>
                <div class="col-md-6">                    
                  <div class="form-group">
                    <label for="role">Duration</label>
                    <input type="number" step=0.01 min=0 class="form-control" id="duration" name="title" placeholder="Enter schemeduration">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="role">Scheme %</label>
                    <input type="number" step=0.01 min=0 max=100 class="form-control" id="scheme_percentage" name="title"placeholder="Enter Scheme % of applied amount">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="role">Exceed Duration %</label>
                    <input type="number" step=0.01 min=0 max=100 class="form-control" id="duration_percentage" name="title"placeholder="Enter % increment for when duration is exceeded">
                  </div>
                </div>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Activate
                </label>
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
    <!-- /.modal -->
@endsection

