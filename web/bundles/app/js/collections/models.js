App.Collections.Models = Backbone.Collection.extend({
  initialize: function () {
    this.bind('remove', this.onModelRemoved, this);
  },
  url: "../../../app_dev.php/en/examinations/api/models/",
  onModelRemoved: function (model, collection, options) {
    
  }
});
