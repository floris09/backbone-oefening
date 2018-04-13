

<html>

  <head>

    <link rel="stylesheet" href="{{ URL::asset('css/lib/normalize.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/test.css') }}" />

    <script src="{{ URL::asset('js/lib/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/lib/underscore.js') }}"></script>
    <script src="{{ URL::asset('js/lib/backbone.js') }}"></script>
    <script src="{{ URL::asset('js/test.js') }}" ></script>


    <script>

      function aanMaken(){
        var Sidebar = Backbone.Model.extend({
          promptColor: function() {
            var cssColor = prompt("Please enter a CSS color:");
            this.set({color: cssColor});
          }
        });


        var object = new Sidebar();
        object.promptColor();
        console.log(object);
        showColor(object);
      }

      function showColor(object){
        console.log(object.attributes.color);
      }

    </script>

  </head>

  <body>
    <button onclick='aanMaken()'>Aanmaken</button>
    <button onclick='showColor()'>Show Color</button>
  </body>

</html>
