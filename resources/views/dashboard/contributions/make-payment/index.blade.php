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
  
  <?php
    $total_contribution = 0;
    $count = 0;
    $pending = 0;
    $declined = 0;
    if(count($payments) > 0){
      foreach ($payments as $payment){
        $total_contribution = $payment->amount + $total_contribution;
      }
      $count = count($payments);
      $p = $payments->where('status', 0);
      $d = $payments->where('status', 3);
      $pending = count($p);
      $declined = count($d);
    }
  ?>

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
              <span class="info-box-number"><b><s>N</s>{{number_format($total_contribution)}}</b></span>
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
              <span class="info-box-number"><b>{{number_format($count)}}</b></span>
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
              <span class="info-box-number"><b>{{number_format($pending)}}</b></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-ban"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Declined</h4></span>
              <span class="info-box-number"><b>{{number_format($declined)}}</b></span>
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
            <h4>Current Capital | <strong><s>N</s>{{number_format($total_contribution + $bonus)}}</strong>  
              <a href="{{route('make-payment.create')}}" class="btn btn-sm btn-success" title="Make Payment">
                <i class="fa fa-credit-card"></i> Make Payment
              </a>
              <a href="{{route('beneficiary-payment.create')}}" class="btn btn-sm btn-info" title="Beneficiary Contribution">
                <i class="fa fa-share"></i> Beneficiary Contribution
              </a>
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
              @if (count($payments) > 0)
                <?php $sn = 0; ?>
                  @foreach($payments as $contribution)
                  <?php $cryptId = Crypt::encrypt($contribution->id); ?>
                    <tr>
                    <td>{{$sn + 1}}</td>
                      <td><s>N</s>{{number_format($contribution->amount)}}</td>
                      <td>{{$contribution->details}}</td>
                      <td><i>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($contribution->updated_at))->toFormattedDateString() }}</i></td>
                      <td>
                        @if ($contribution->status === 1)
                          <i>Approved</i>
                        @else
                          <i>Pending</i>  
                        @endif
                      </td>
                      <td class="content-end">                         
                        @if ($contribution->pop != null)  
                          <?php                          
                          $pf = Storage::url('uploads/contributions/'.$contribution->pop);
                          ?>                                                
                          <a href="{{$pf}}" class="btn btn-sm btn-info" data-fancybox="gallery""> <i class="fa fa-image"></i> </a>
                        @endif
                        @if ($contribution->status === 0)                      
                          <form action="{{route('make-payment.destroy', $cryptId)}}" method="POST" id="delete-scheme-{{$cryptId}}" style="display:none">
                          {{ csrf_field() }}
                          {{ method_field('DELETE')}}
                          </form>
                            <a href="#" onclick="if(confirm('Are you sure you want to delete this contribution?')){event.preventDefault(); document.getElementById('delete-scheme-{{$cryptId}}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-danger " title="Delete contribution">
                                <i class="fa fa-trash"></i>
                            </a>
                            </td>
                        @endif
                      </td>
                    </tr> 
                    <?php $sn++ ?>    
                  @endforeach
              @else
                <p class="text-primary">No contribution records found.</p>  
              @endif
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

@section('custom-scripts')
<script>
  $(function(){
    
  });
</script>    
@endsection

