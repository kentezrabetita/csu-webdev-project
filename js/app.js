$(document).ready(function(){

  var Note = {
    add: function(name, description, id){
      var new_note = {
        name,
        description,
        id
      };
      $.ajax({
        url: "php/note.php",
        type: "POST",
        data: { data: new_note, action: "add_note"},
        success : function(data){
          console.log(data);
          Note.get(currentID);
          $("#addNoteModal").modal("hide");
          $("#note-name").val("");
          $("#note-description").val("");
        }
      })
    },
    get: function(user_id){
      $.ajax({
        url: "php/note.php",
        type: "POST",
        data: { user_id: user_id, action: "get_notes"},
        success : function(data){
          Note.list = jQuery.parseJSON(data);
          $(".notes_list").empty();
          $.each(Note.list, function(index, value){
            var date;
            if (value.status ==  1){
              date = value.created_at;
            }
            else {
              date = value.updated_at;
            }
            $(".notes_list").append(
              "<li class=\"note\">"
                +"<div class=\"card\">"
                  +"<div class=\"card-header font-weight-bold text-white text-uppercase bg-primary\">"
                    + "<nav class=\"navbar\">"
                      + value.name 
                      + "<ul class=\"navbar-nav\">"
                        + "<li class=\"nav-item\">" + date + "</li>"
                      + "</ul>"
                    + "</nav>"
                  + "</div>"
                  +"<div class=\"card-body clearfix\">"
                    +"<p class=\"card-text\">"+ value.description +"\</p>"
                    +"<button data-note_id=\""+value.id+"\"class=\"pull-right btn btn-primary m-1 edit_note\"><i class=\"fa fa-edit\"></i></button>"
                    +"<button data-note_id=\""+value.id+"\"class=\"pull-right btn btn-primary m-1 delete_note\"><i class=\"fa fa-trash\"></i></button>"
                  +"</div>"
                +"</div>"
              +"</li>"
            );
          });
        }
      })
    },
    delete: function(note_id){
      if(confirm("Are you sure? This action cannot be undone.")){
        $.ajax({
          type: "POST",
          data: { id: note_id, action: 'delete_note'},
          url: 'php/note.php',
          success: function(data){
              Note.get(currentID);
          }
        })
      }
    },
    edit_trigger: function(to_edit){
      $("#editnote-name").val(to_edit.name);
      $("#editnote-description").val(to_edit.description);
      $("#editNoteModal").modal("show");
    },
    save_changes: function(){
      if(confirm("Are you sure? This action cannot be undone.")){
        var edited_note = {
          id: Note.currently_editing,
          name: $("#editnote-name").val(),
          description: $("#editnote-description").val()
        }
        $.ajax({
          type: "POST",
          data: { data: edited_note, action: 'edit_note'},
          url: 'php/note.php',
          success: function(data){
            Note.get(currentID);
            $("#editNoteModal").modal("hide");
            $("#note-name").val("");
            $("#note-description").val("");
          }
        })
      }
    }
  };

  Note.get(currentID);

  $("#add_note").click(function(){
    Note.add(
        $("#note-name").val(),
        $("#note-description").val(),
        currentID
    );
  });

  $(".notes_list").on('click', '.delete_note', function(e){
    Note.delete(this.dataset.note_id);
  });

  $(".notes_list").on('click', '.edit_note', function(e){
    Note.currently_editing = this.dataset.note_id;
    Note.edit_trigger(Note.list.find(obj => obj.id === this.dataset.note_id));
  });

  $("#edit_note").click(function(){
    Note.save_changes();
  });

});