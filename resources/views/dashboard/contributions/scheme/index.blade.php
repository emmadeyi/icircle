@extends('dashboard.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-cogs"></i> | Contribution Scheme
      <small>| configure contribution parameters</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('dashboard/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route('contribution-scheme.index')}}">Scheme</a></li>
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
            <a href="{{url('dashboard/contributions/records')}}" class="btn btn-sm btn-info pull-right" title="Add New Role">
                <i class="fa fa-archive"></i> Contribution Records
            </a></h4>            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <form role="form" action="{{route('contribution-scheme.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="amount">Minimum Amount</label>
                <input type="number" step=0.01 min=0 class="form-control" id="amount" name="amount" placeholder="Enter minimum amount" autocomplete="off" >
              </div>
              <div class="form-group">
                <label>Frequency</label>
                <select class="form-control select2" name="frequency" style="width: 100%;">
                  <option selected="selected">Weekly</option>
                  <option>Monthly</option>
                  <option>Yearly</option>
                </select>
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
            <h4>Existing Schemes | </h4>
          </div>  
          <div class="box-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Min. Amount</th>
                <th>Frequency</th>
                <th>Last Updated</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              @if (count($schemes) > 0)
                <?php $sn = 0;?>
                @foreach ($schemes as $scheme)                    
                  <tr>
                    <td>{{$sn + 1}}</td>
                    <td>{{$scheme->minimum_amount}}</td>
                    <td>{{$scheme->frequency}}</td>
                    <td><i>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($scheme->updated_at))->toFormattedDateString() }}</i></td>
                    <td>
                      @if ($scheme->status === 1)
                      <i>Active</i>
                      @else
                      <i>Inactive</i>  
                      @endif
                    </td>
                    <td class="content-end">
                    <a href="{{route('contribution-scheme.edit', $scheme->id)}}" class="btn btn-sm btn-info" title="Edit Scheme ">
                        <i class="fa fa-edit"></i>
                    </a>
                    @if ($scheme->status === 1)                        
                      <form action="{{route('contribution-scheme.activate', $scheme->id)}}" method="POST" id="suspend-scheme-{{$scheme->id}}" style="display:none">
                      {{ csrf_field() }}
                      </form>
                      <a href="#" onclick="if(confirm('Are you sure you want to suspend this scheme?')){event.preventDefault();document.getElementById('suspend-scheme-{{$scheme->id}}').submit();} else {event.preventDefault();}" class="btn btn-sm btn-warning " title="Suspend Scheme">
                          <i class="fa fa-ban"></i>
                      </a>
                    @else                        
                      <form action="{{route('contribution-scheme.activate', $scheme->id)}}" method="POST" id="activate-scheme-{{$scheme->id}}" style="display:none">
                      {{ csrf_field() }}
                      </form>
                      <a href="#" onclick="if(confirm('Are you sure you want to activate this scheme? Activating it will deactivate any active scheme and make this the default scheme')){event.preventDefault();document.getElementById('activate-scheme-{{$scheme->id}}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-success " title="Activate Scheme">
                          <i class="fa fa-check-square"></i>
                      </a>
                    @endif
                    @if ($scheme->status === 0)                      
                      <form action="{{route('contribution-scheme.destroy', $scheme->id)}}" method="POST" id="delete-scheme-{{$scheme->id}}" style="display:none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE')}}
                      </form>
                        <a href="#" onclick="if(confirm('Are you sure you want to delete this scheme?')){event.preventDefault(); document.getElementById('delete-scheme-{{$scheme->id}}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-danger " title="Delete Scheme">
                            <i class="fa fa-trash"></i>
                        </a>
                        </td>
                    @endif
                  </tr>   
                  <?php $sn++; ?>
                @endforeach
              @else
                <p class="text-info">
                  No Scheme Created Yet.
                </p>
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
@endsection

@section('custom-scripts')
<script>
  $(function(){
    
  });
</script>    
@endsection