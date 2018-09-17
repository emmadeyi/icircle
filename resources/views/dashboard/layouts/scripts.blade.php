<script src="{{asset('customs/dashboard/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('customs/dashboard/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('customs/dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- InputMask -->
<script src="{{asset('customs/dashboard/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('customs/dashboard/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('customs/dashboard/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<!-- date-range-picker -->
<script src="{{asset('customs/dashboard/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('customs/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('customs/dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('customs/dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js')}}" defer></script>
<script src="{{asset('customs/dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}" defer></script>
<!-- Morris.js charts -->
<script src="{{asset('customs/dashboard/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('customs/dashboard/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('customs/dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('customs/dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('customs/dashboard/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('customs/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('customs/dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('customs/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('customs/dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- CK Editor -->
<script src="{{asset('customs/dashboard/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('customs/dashboard/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('customs/dashboard/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('customs/dashboard/dist/js/adminlte.min.js')}}"></script>
<!--FancyBox -->
<script src="{{ asset('js/jquery.fancybox.min.js') }}" type="text/javascript"></script>

<script defer>

  $(function () {
		'use strict';
		$('#example1').DataTable();
		$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
		//Initialize Select2 Elements
    $('.select2').select2()
		
		function composeLink() {
			var slug = $('#title-slug').val();
			slug = slug.toLowerCase().replace(/  /g, ' ').replace(/ /g, '-').replace(/&/g, 'and');
			$('#slug').val(slug);
		}
		
		composeLink();
		
		$('#title-slug').on('keyup', function () {
			composeLink();
		}).on('focusout', function () {
			composeLink();
		});
		
		//Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
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

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    
		

	});
</script>