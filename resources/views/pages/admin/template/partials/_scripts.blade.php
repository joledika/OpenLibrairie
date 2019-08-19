<script src="{{asset('js/Jquery.js')}}"></script>
<script src="{{asset('dist/semantic.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $(".ui.toggle.button").click(function() {
      $(".mobile.only.grid .ui.vertical.menu").toggle(100);
    });
    $(".ui.dropdown").dropdown();
  });
</script>
