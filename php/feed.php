<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Notes App</title>
        <link rel="stylesheet" href="../css/style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" 
        ntegrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="../js/app.js"></script>

    </head>
    <body>
        <h1 class="heading"> My Notes </h1> 
        <div class="container">
            <div class="row">
                <button class="col-1 offset-10 btn btn-primary" data-toggle="modal" data-target="#addNoteModal">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <div class="notes">
                <ul class="notes_list">
                
                </ul>
            </div>
        </div>
        <!-- add note modal -->
        <div class="modal fade" id="addNoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="note-name" class="col-form-label">Note Name:</label>
                        <input type="text" class="form-control" id="note-name">
                    </div>
                    <div class="form-group">
                        <label for="note-description" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="note-description"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add_note">Add Note</button>
                </div>
                </div>
            </div>
        </div>
        <!-- edit note modal -->
        <div class="modal fade" id="editNoteModal" tabindex="-1" role="dialog" aria-labelledby="editNodeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="editnote-name" class="col-form-label">Note Name:</label>
                        <input type="text" class="form-control" id="editnote-name">
                    </div>
                    <div class="form-group">
                        <label for="editnote-description" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="editnote-description"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="edit_note">Save Changes</button>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>