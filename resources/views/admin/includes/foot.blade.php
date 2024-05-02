</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/demo.js')}}"></script> -->

@yield('scripts')
<script>
    $(function() {
      @if(session('message'))
        @if(session('message_type') && session('message_type') == 'success')
         toastr.success('{{session('message')}}')
        @elseif(session('message_type') && session('message_type') == 'info')
          toastr.info('{{session('message')}}');
        @elseif(session('message_type') && session('message_type') == 'warning')
        toastr.warning('{{session('message')}}');
        @elseif(session('message_type') && session('message_type') == 'error')
        toastr.error('{{session('message')}}');
        @else
        toastr.info('{{session('message')}}');
        @endif
      @endif
      });
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
</body>
</html>
