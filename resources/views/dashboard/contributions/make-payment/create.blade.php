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
      <li><a href="{{route('make-payment.index')}}">make-payment</a></li>
    </ol>
    <br>
    <div class="row">
        <div class="col-xs-12">
          @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
              <p class="callout callout-danger">{{$error}}</p>
            @endforeach            
          @endif
  
          @if (session('success'))
              <div class="callout callout-success" role="alert">
                  {{ session('success') }}
              </div>
          @elseif(session('error'))
            <p class="callout callout-danger">{{session('error')}}</p>
          @endif
        </div>
      </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">      
      <div class="col-xs-12">  
        <div class="box">
          <div class="box-header"> 
            <h4>Enter contribution details  
            </h4>
            <a href="{{route('make-payment.index')}}" class="btn btn-sm btn-info" title="Contributions">
              <i class="fa fa-credit-card"></i> Contributions
            </a>
            <a href="{{route('beneficiary-payment.create')}}" class="btn btn-sm btn-primary" title="Beneficiary Contribution">
              <i class="fa fa-share"></i> Beneficiary Contribution
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <form role="form" enctype="multipart/form-data" method="POST" action="{{route('make-payment.store')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="role">Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="role">Upload proof of payment</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                  <label>Payment For:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="for" class="form-control pull-right" id="reservation">
                  </div>
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
    //Date range picker
    $('#reservation').daterangepicker();
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    );
  });
</script>    
@endsection

