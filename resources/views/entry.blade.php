<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form id="studententry" method="POST">
                @csrf

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Student Entry</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    <span class="text-danger error_text name_error"></span>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                        name="email">
                        <span class="text-danger error_text email_error"></span>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Adderss:</label>
                    <textarea class="form-control"  name="address" id="address" ></textarea>
                    <span class="text-danger error_text address_error"></span>
                </div>
            </div>

            <!-- Modal footer -->
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </form>

        </div>
    </div>
</div>
