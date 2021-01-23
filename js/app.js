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
                }
            })
        },
        get: function(user_id){
            $.ajax({
                url: "php/note.php",
                type: "POST",
                data: { user_id: user_id, action: "get_notes"},
                success : function(data){
                    notes = jQuery.parseJSON(data);
                    $(".notes_list").empty();
                    $.each(notes, function(index, value){
                        $(".notes_list").append(
                            "<li class=\"note\">"
                                +"<div class=\"card\">"
                                    +"<div class=\"card-header\">"+ value.name +"\<div>"
                                    +"<div class=\"card-body clearfix\">"
                                        +"<p class=\"card-text\">"+ value.description +"\<p>"
                                        +"<button class=\"pull-right btn btn-primary m-1\"><i class=\"fa fa-edit\"></i></button>"
                                        +"<button class=\"pull-right btn btn-primary m-1\"><i class=\"fa fa-trash\"></i></button>"
                                    +"</div>"
                                +"</div>"
                            +"</li>"
                        );
                    });
                }
            })
        }
    };

    Note.get(user);

    $("#add_note").click(function(){
        Note.add(
            $("#note-name").val(),
            $("#note-description").val()
        );
    });
});