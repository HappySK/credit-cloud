<div class="card">
  <div class="card-body">
    <div class="card-title d-flex justify-content-between align-items-center">
      <h5>Invoice & Payments</h5>
      <div>
        <a href="#" class="btn btn-sm btn-outline-primary mr-2">
          <i class="fa fa-play" aria-hidden="true"></i>
          Watch Quick Video
        </a>
        <a href="#" class="btn btn-sm btn-outline-success">
          <i class="fa fa-id-card" aria-hidden="true"></i>
          Create Invoice
        </a>
      </div>
    </div>
    <!--begin::Notice-->
    <div class="bg-light alert alert-custom alert-white alert-shadow gutter-b m-3" role="alert">
      <div class="alert-icon">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
      </div>
      <div class="alert-text">
        Creating invoices is no longer necessary, now that we have integration with <a href="#">Chargebee</a>. Want to
        learn how to automate credit card payments from your clients? <a href="#">Click here for our FREE Guide To
          Getting Paid!</a>
      </div>
    </div>
    <!--end::Notice-->
    <div class="row">
      <div class="col-lg-4 col-sm-12 border-right">
        <div class="m-2">
          Client Name : Kenneth Johnshon
        </div>
        <div class="m-2">
          Phone : (229) 894-2044
        </div>
        <div class="m-2">
          Referred by :
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 border-right">
        <div class="m-2">
          Status : Client
        </div>
        <div class="m-2">
          Email: kennethdjohnson1@gmail.com
        </div>
        <div class="m-2">
          Assigned to: Kanita Dubose
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 border-right">
        <div class="m-2 text-warning">
          Total outstanding: $0
        </div>
        <div class="m-2 text-danger">
          Past due: $0
        </div>
        <div class="m-2 text-success">
          Paid in last 30 days: $0
        </div>
      </div>
    </div>
    <!--begin: Datatable-->
    <div class="table-responsive m-4">
      <div class="d-flex align-items-center">
        <div class="d-flex align-items-center">
          <label>Search</label>
          <input type="text" class="form-control datatable-input w-100 ml-2 mr-2 mb-2" placeholder="Search For Data"
            data-col-index="1" />
        </div>
      </div>
      <table class="table table-bordered table-hover table-checkable" id="kt_datatable">
        <thead>
          <tr>
            <th>Record ID</th>
            <th>Date</th>
            <th>Invoice No</th>
            <th>Type</th>
            <th>Due Date</th>
            <th>Balance</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
    <!--end: Datatable-->
  </div>
</div>