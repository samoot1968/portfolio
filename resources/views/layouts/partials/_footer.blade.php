
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fittext.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.lettering.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.textillate.js')}}"type="text/javascript"></script>
    <script src="{{ asset('js/particles.js')}}"type="text/javascript"></script>
    <script src="{{ asset('js/jquery.barrating.min.js')}}"type="text/javascript"></script>
    <script type="text/javascript">


       $(function() {
        $('#tlt').textillate({ loop: false, in: { effect: 'fadeInLeftBig' } });
      });

      $(function() {
       $('#tlts').textillate({ loop: false, in: { effect: 'fadeInLeftBig' } });
     });

       particlesJS.load('particles-js', 'particles.json', function() {
         console.log('callback - particles.js config loaded');
       });

       $("#button").click(function(e) {
         e.preventDefault();
        $('html, body').stop(true,false).animate({
            scrollTop: $("#myInfo").offset().top-50
        }, 1000);
      });

      $("#mailButton").click(function(e) {
        e.preventDefault();
       $('html, body').stop(true,false).animate({
           scrollTop: $("#contact").offset().top
       }, 1000);
     });

     $("#pbutton").click(function(e) {
       e.preventDefault();
      $('html, body').stop(true,false).animate({
          scrollTop: $("#myInfo").offset().top-50
      }, 1000);
    });

    @if (count($errors) > 0)
        $('#emailModal').modal('show');
    @endif


    $(document).on('click','.navbar-collapse.in',function(e) {
      if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
          $(this).collapse('hide');
      }
    });
    </script>

</body>
</html>
