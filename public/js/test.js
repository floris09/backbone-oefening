function test(){

  var Dier = Backbone.Model.extend({
    initialize:function(){
      console.log('Nieuw dier aangemaakt');

    }

  });

  var kip = new Dier();
  console.log(kip);
}

function dopost(){
  var kip = {};
  kip.naam = 'Henk';

  var kipjson = JSON.stringify(kip);

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    document.getElementById('ja').innerHTML = this.responseText;
  };
  xhttp.open("POST","/postman", true);
  xhttp.send(kipjson);
}
