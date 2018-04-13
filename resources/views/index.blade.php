

<html>

  <head>

    <link rel="stylesheet" href="{{ URL::asset('css/lib/normalize.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/test.css') }}" />

    <script src="{{ URL::asset('js/lib/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/lib/underscore.js') }}"></script>
    <script src="{{ URL::asset('js/lib/backbone.js') }}"></script>
    <script src="{{ URL::asset('js/test.js') }}" ></script>


    <script>
      function hide(){
        dopost();
      }
    </script>

  </head>

  <body>
    <button onclick='hide()'></button>
    <div id='ja'>
      Hoi
    </div>
  </body>

</html>
