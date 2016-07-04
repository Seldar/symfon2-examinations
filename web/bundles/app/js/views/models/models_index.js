App.Views.ModelsIndex = Backbone.View.extend({
    template: _.template($('#entries-index').html()),
    events: {
        'submit #new_entry' : 'createEntry',
        'click .removeButton': 'removeEntry'
    },
    initialize: function() {
        this.collection.on('reset', this.render, this);
        this.collection.on('add', this.appendEntry, this);

        $('.alert .close').on("click", function(e) {
            $(this).parent().hide();
        });
    },

    render: function() {
        $(this.el).html(this.template());
        this.collection.each(function (model){
            this.appendEntry(model);
        },this);
        return this;
    },
    appendEntry: function(model) {
        view = new App.Views.Model({'model' : model});
        $('#entries').append(view.render().el);
    },
    removeEntry: function(e) {
        e.preventDefault();
        var id = e.target.id.replace("Entry","");
        this.collection.get(id).destroy();
        this.render();
    },
    createEntry: function(e) {
        e.preventDefault();
        var that =this;
        this.collection.create({ 'doctor' : $('#new_entry_doctor :selected').text(), 'patient' : $('#new_entry_patient :selected').text(), 'doctor_id' : $('#new_entry_doctor').val(),'patient_id' : $('#new_entry_patient').val(),'symptoms' : $('#new_entry_symptoms').val(),'treatment' : $('#new_entry_treatment').val(),'examinationDate' : $('#new_entry_examination_date').val() + " " + $('#new_entry_examination_time').val() + ":00",'examination_date' : $('#new_entry_examination_date').val(),'examination_time' : $('#new_entry_examination_time').val() },{
            wait: true,
            succes: function( entry, response){
                $('#new_entry')[0].reset();
            },
            error: function(entry, response){
                that.handleError(entry, response);
            }
        });
    },
    handleError: function(entry, response){
        if (response.status == 422)
        {
            var errors = $.parseJSON(response.responseText).errors;
            _.each(errors, function(error, attribute){
                $(".alert .message").text(error);
                $(".alert").show();
            });
        }
    }
});
