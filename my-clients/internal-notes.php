<div class="card">
  <div class="card-body d-flex justify-content-between align-items-center">
    <h5>Internal Notes : Not Seen By Client (Daphne Phinchon)</h5>
    <button class="btn btn-sm btn-outline-success" id="add-internal-notes-btn" data-toggle="collapse"
      data-target=".add-internal-notes-collapse">
      <i class=" fa fa-user" aria-hidden="true"></i>
      Add Internal Notes
    </button>
  </div>
  <div class="collapse show add-internal-notes-collapse">
    <table class="table" id="internal-notes-table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Note</th>
          <th>Added By</th>
          <th>Attachement</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="collapse add-internal-notes-collapse">
    <h5>Add Internal Notes : Not Seen By Client(Client Name)</h5>
    <p class="d-flex">
    <h6>Note :</h6>
    Write any comment or keep record of all conversations and correspondance with Creditors and Credit Bureaus.
    </p>
    <form action="server-side/class/my-clients/add-internal-notes.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-2">
          <h6>
            Write a Note : <span class="text-danger">*</span>
          </h6>
        </div>
        <div class="col-lg-8">
          <textarea name="internal-notes-editor" id="internal-notes-editor" required>

        </textarea>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-lg-2">
          <h6>Attachment</h6>
        </div>
        <div class="col-lg-8">
          <input type="file" name="internal-notes-attachment">
        </div>
      </div>
      <div class=" row">
        <div class="col-lg-2">
          <input type="submit" class="btn btn-sm btn-outline-primary" id="save-note-btn" value="Save Note" />
        </div>
      </div>
    </form>
  </div>
</div>