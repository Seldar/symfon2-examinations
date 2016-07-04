window.App = {
  Models: {},
  Collections: {},
  Views: {},
  Routers: {},
  init: function() {
    new App.Routers.Models();
    Backbone.history.start();
    //alert('Hello from Backbone!');
  }
};

$(document).ready(function(){
  App.init();
});
