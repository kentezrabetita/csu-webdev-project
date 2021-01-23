$(document).ready(function(){
    var user = 1;
    var Note = {
        add: function(name, description){
            var new_note = {
                name: name,
                description: description
            };
            $.ajax({
                url: "php/note.php",
                type: "POST",
                data: { data: new_note, action: "add_note"},
                success : function(data){
                    Note.get(user);
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
                        $(".notes_list").append(
                            "<li class=\"note\">"
                                +"<div class=\"card\">"
                                    +"<div class=\"card-header\">"+ value.name +"\</div>"
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
                        Note.get(user);
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
                        Note.get(user);
                        $("#editNoteModal").modal("hide");
                        $("#note-name").val("");
                        $("#note-description").val("");
                    }
                })
            }
        }
    };

    Note.get(user);

    $("#add_note").click(function(){
        Note.add(
            $("#note-name").val(),
            $("#note-description").val()
        );
    });

    $("#edit_note").click(function(){
        Note.save_changes();
    });

    $(".notes_list").on('click', '.delete_note', function(e){
        Note.delete(this.dataset.note_id);
    });

    $(".notes_list").on('click', '.edit_note', function(e){
        Note.currently_editing = this.dataset.note_id;
        Note.edit_trigger(Note.list.find(obj => obj.id === this.dataset.note_id));
    });
});