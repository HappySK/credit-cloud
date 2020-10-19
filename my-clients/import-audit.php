<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="import-credit-report-tab" data-toggle="tab" href="#import-credit-report" role="tab"
      aria-controls="import-credit-report" aria-selected="true">
      Import Credit Report
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="simple-audit-tab" data-toggle="tab" href="#simple-audit" role="tab"
      aria-controls="simple-audit" aria-selected="false">
      Simple Audit (Credit Analysis)
    </a>
  </li>
</ul>
<div class="tab-content mt-5" id="myTabContent">
  <div class="tab-pane fade show active" id="import-credit-report" role="tabpanel"
    aria-labelledby="import-credit-report-tab">
    <div class="row m-2">
      <div class="col-lg-6 col-sm-12">
        <div class="card bg-primary h-100">
          <div class="card-header bg-primary text-white text-center">
            <h5>Credit Report</h5>
            <p>Last Imported 7 Hours Ago</p>
          </div>
          <div class="card-body text-center">
            <i class="fa fa-7x fa-check text-white" aria-hidden="true"></i>
            <p><a href="#" class="btn btn-sm btn-outline-success text-white">Reimport Credit Report</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="card bg-primary text-white">
          <div class="card-body">
            <h5>Import Log</h5>
            <table class="table table-responsive w-100 text-white">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date Imported</th>
                  <th>Team Member</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>October 12 2020</td>
                  <td>Jessica</td>
                </tr>
              </tbody>
            </table>
            <div class="table-responsive">
              <h5>Pending Report</h5>
              <table class="table text-white p-3">
                <thead>
                  <tr>
                    <th>
                      Date Saved as Pending
                    </th>
                    <th>
                      Team Member
                    </th>
                    <th>
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Oct 12 2020</td>
                    <td>Jessica Davis</td>
                    <td class="d-flex align-items-center justify-content-around">
                      <a href="#" class="btn btn-sm btn-info mr-3">Click Here to Preview</a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash-o p-1" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-2">
      <div class="accordion col-lg-12 col-sm-12" id="importing-help-accordion">
        <div class="card">
          <div class="card-header w-100" id="importing-help">
            <h5 class="p-3 mb-0">
              <span>
                Having Trouble With Importing ?
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#importing-help-content"
                  aria-expanded="true" aria-controls="importing-help-content">
                  View Importing Help
                </button>
              </span>
            </h5>
          </div>
          <div id="importing-help-content" class="collapse" aria-labelledby="importing-help"
            data-parent="#importing-help-accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
              Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
              shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
              proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
              aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-2">
      <div class="col-lg-6 col-sm-12">
        <div class="card bg-primary text-white m-0">
          <div class="card-header bg-primary d-flex justify-content-between align-items-center">
            <h5>Client's Credit Report Access Details</h5>
            <button class="btn btn-sm btn-outline-light" data-toggle="collapse" data-target=".multi-collapse"
              aria-expanded="false" aria-controls="static-data form-data" id="search-toggle-form">Edit Details</button>
          </div>
          <div class="card-body">
            <div class="collapse multi-collapse show">
              <table class="w-100" id="static-data">
                <tr>
                  <td>Report Provider</td>
                  <td>Smart Credit</td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>plov003@avol.com</td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>FixmyC001</td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td>1245856966</td>
                </tr>
                <tr>
                  <td>Secret Word</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Notes</td>
                </tr>
              </table>
            </div>
            <div class="collapse multi-collapse hide">
              <div class="form-group align-items-center" id="form-data">
                <div class="row align-items-center m-2">
                  <div class="col-lg-5">
                    <label class="text-white">Report Provider</label>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="Enter Report Provider" />
                  </div>
                </div>
                <div class="row align-items-center m-2">
                  <div class="col-lg-5">
                    <label class="text-white">Username</label>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="Enter Username" />
                  </div>
                </div>
                <div class="row align-items-center m-2">
                  <div class="col-lg-5">
                    <label class="text-white">Password</label>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="Enter Password" />
                  </div>
                </div>
                <div class="row align-items-center m-2">
                  <div class="col-lg-5">
                    <label class="text-white">Phone Number</label>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="Enter Phone Number" />
                  </div>
                </div>
                <div class="row align-items-center m-2">
                  <div class="col-lg-5">
                    <label class="text-white">Security Word</label>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="Enter Security Word" />
                  </div>
                </div>
                <div class="row align-items-center m-2">
                  <div class="col-lg-5">
                    <label class="text-white">Notes</label>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="Enter Notes" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="simple-audit" role="tabpanel" aria-labelledby="simple-audit-tab">
    <div class="card">
      <div class="card-body">
        <!--begin::Notice-->
        <div class="bg-light alert alert-custom alert-white alert-shadow gutter-b m-3" role="alert">
          <div class="alert-icon">
            <span class="svg-icon svg-icon-primary svg-icon-xl">
              <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                    fill="#000000" opacity="0.3" />
                  <path
                    d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                    fill="#000000" fill-rule="nonzero" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </div>
          <div class="alert-text">
            Simple Audit is the ultimate sales tool for a potential client considering your services. With 1 click it
            creates an in-depth credit analysis report for your client, showing items affecting the score and next
            steps. Our default template will automatically fill in each client's name and your company information with
            no editing needed. You can modify it or add your own templates, but we recommend not making any changes at
            all.
            <a href="#" class="btn btn-sm btn-outline-primary">
              <i class="fa fa-play" aria-hidden="true"></i>
              Watch the Quick Video
            </a>
          </div>
        </div>
        <!--end::Notice-->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3>Generate Simple Audit Now</h3>
            <p>
              Using data from SmartCredit imported report
              (last imported 18 hours ago)
              using template
            </p>
            <select name="select-simple-audit-template" id="simple-audit-template" class="custom-select w-50 m-3">
              <option value=" ">Select Simple Audit Templates</option>
              <option value="simple-audit(default)">Simple Audit (Default)</option>
            </select>
            <a href="#" class="btn btn-sm btn-outline-primary">Generate Simple Audit</a>
            <table class="table w-100">
              <thead>
                <tr>
                  <th>Audit Name</th>
                  <th>Date Created</th>
                  <th>Team Member</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Daphne Pinchon Credit Analysis</td>
                  <td>Oct 15 2020 05:57 PM</td>
                  <td>Jessica</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="audit-actions"
                        data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                      </button>
                      <div class="dropdown-menu" aria-labelledby="audit-actions">
                        <a class="dropdown-item" href="#">Actions</a>
                        <a class="dropdown-item" href="#">View</a>
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>