App.Routers.Models = Backbone.Router.extend({
    routes: {
        '': 'index',
        'entries/:id' : 'show'
    },
    initialize: function() {
        this.collection = new App.Collections.Models();
        this.collection.fetch();
    },
    index: function() {
        view =  new App.Views.ModelsIndex({'collection' : this.collection});
        $('#container').html(view.render().el);
    },
    show: function(id) {
        alert('entry id:' + id);
    }
});
