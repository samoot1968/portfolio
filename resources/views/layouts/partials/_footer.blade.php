
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fittext.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.lettering.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.textillate.js')}}"type="text/javascript"></script>
    <script src="{{ asset('js/particles.js')}}"type="text/javascript"></script>
    <script src="{{ asset('js/jquery.barrating.min.js')}}"type="text/javascript"></script>
    <script type="text/javascript">

    var $item = document.getElementById('#myInfo');

       $(function() {
        $('#tlt').textillate({ loop: false, in: { effect: 'fadeInLeftBig' } });
      });

      $(function() {
       $('#tlts').textillate({ loop: false, in: { effect: 'fadeInLeftBig' } });
     });

       particlesJS.load('particles-js', 'particles.json', function() {
         console.log('callback - particles.js config loaded');
       });


 })
    </script>

</body>
</html>
