@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit"></i> | Update Scheme
      <small>| update contribution scheme parameters</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route('contribution-scheme.index')}}">Contributions</a></li>
      <li><a href="#">Update</a></li>
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
              <h4>Enter Contribution Paramemters <small>all fields are required</small>            
            <a href="{{route('contribution-scheme.index')}}" class="btn btn-sm btn-info pull-right" title="Add New Role">
                <i class="fa fa-cogs"></i> Contribution Schemes
            </a></h4>            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <form role="form" action="{{route('contribution-scheme.update', $scheme->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="box-body">
              <div class="form-group">
                <label for="amount">Minimum Amount</label>
                <input type="number" step=0.01 min=0 class="form-control" id="amount" name="amount" placeholder="Enter minimum amount" autocomplete="off" value="{{$scheme->minimum_amount}}" >
              </div>
              <div class="form-group">
                <label>Frequency</label>
                <select class="form-control select2" name="frequency" style="width: 100%;">
                  <option @if ($scheme->frequency === "Weekly") selected="selected" @endif >Weekly</option>
                  <option @if ($scheme->frequency === "Monthly") selected="selected" @endif>Monthly</option>
                  <option @if ($scheme->frequency === "Yearly") selected="selected" @endif>Yearly</option>
                </select>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-block btn-primary"> <i class="fa fa-check-square"></i> Update</button>
            </div>
          </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>      
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection

@section('custom-scripts')
<script>
  $(function(){
    
  });
</script>    
@endsection