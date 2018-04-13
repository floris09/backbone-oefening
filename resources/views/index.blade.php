

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
            var fles = prompt("enter fles status");
            this.set({color: cssColor, fles: fles});
          },
          defaults: {
            fiets:5000,
            fles:"leeg",
            bootlengte:2000000000
          }
        });


        var object = new Sidebar({bootlengte:34,fles:"vol"});
         object.promptColor();
        console.log(object);
        showColor(object);
      }

      function showColor(object){
        console.log(object.get("fles"));
        console.log(object.get("color"));
        console.log(object.get("bootlengte"));
      }
      function onOnderzoekTest(){
        var Sidebar = Backbone.Model.extend({
          promptColor: function() {
            var cssColor = prompt("Please enter a CSS color:");
            var fles = prompt("enter fles status");
            this.set({color: cssColor, fles: fles});
          },
          defaults: {
            fiets:5000,
            fles:"leeg",
            bootlengte:2000000000
          }
        });

        var pannenkoek = new Sidebar();
        pannenkoek.on(
          'alert', function(msg){
            alert('trigggert ' + msg);
          },
          'test', function(msg){
            alert('pannenkoekje ' + msg);
          }
        )
        pannenkoek.trigger("test", "jojo ik ben je brobro");

      }
      function bijnaTijd(){
        var Geert = Backbone.Model.extend({
          validate: function(attrs, options) {
            if (attrs.tijd < 16.30) {
              return "can't go home yet";
            }
          }
        });
        var geert = new Geert({
          tijd : 15.21
        });

        geert.on("invalid", function(model, error) {
          alert(model.get("tijd") + " " + error);
        });
        if(!geert.isValid()){
          alert('hoi');
        }
      }


      function url(){
        Backbone.sync = function(method, model) {
          // alert(method + ": " + JSON.stringify(model));
        };

        var Hangbuikzwijn = Backbone.Model.extend({urlRoot : '/hangbuikzwijn'});

        var henkie = new Hangbuikzwijn({naam: 'Henk'});

        henkie.save({
          error: function(){
            alert(response);
          },
          success: function(){
            alert(response);
          }
        });


      }



    </script>

  </head>

  <body>
    <button onclick='aanMaken()'>Aanmaken</button>
    <button onclick='showColor()'>Show Color</button>
    <button onclick='onOnderzoekTest()'>onOnderzoekTest</button>
    <button onclick='bijnaTijd()'>bijnaTijd</button>
    <button onclick='url()'>url</button>
  </body>

</html>
