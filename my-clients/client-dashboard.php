<form class="form">
  <div class="card-body">
    <div class="form-group row">
      <div class="col-lg-5">
        <label>First Name:</label>
        <input type="text" class="form-control" placeholder="Enter firstname" />
      </div>
      <div class="col-lg-5">
        <label>Middle Name:</label>
        <input type="text" class="form-control" placeholder="Enter contact number" />
      </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-5">
        <label>Last Name:</label>
        <input type="text" class="form-control" placeholder="Enter Last name" />
      </div>
      <div class="col-lg-5">
        <label>Suffix</label>
        <input type="text" class="form-control" placeholder="Enter Suffix (Jr, Sr, Etc.,)" />
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Email :</label>
        <input type="email" class="form-control" placeholder="Enter Email" />
      </div>
      <div class="col-lg-5">
        <input type="checkbox" name="email-checkbox" id="email-checkbox">
        <label>Client Has No Email</label>
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Last 4 of SSN:</label>
        <input type="text" name="ssn" id="ssn" class="form-control" placeholder="Enter last 4 of SSN" />
      </div>
      <div class="col-lg-5">
        <label>DOB:</label>
        <input type="date" name="date-of-birth" id="date-of-birth" class="form-control"
          placeholder="Enter Suffix (Jr, Sr, Etc.,)" />
      </div>
      <div class="col-lg-2">
        <button class="btn btn-sm btn-outline-primary">Clear</button>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-5">
        <label>Phone (H):</label>
        <input type="text" class="form-control" placeholder="Enter Last name" />
      </div>
      <div class="col-lg-5">
        <label>Phone (W)</label>
        <input type="text" class="form-control" placeholder="Enter Suffix (Jr, Sr, Etc.,)" />
      </div>
      <div class="col-lg-2">
        <label>Ext</label>
        <input type="text" class="form-control" placeholder="Enter Suffix (Jr, Sr, Etc.,)" />
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Phone (M)</label>
        <input type="text" class="form-control" placeholder="Enter Phone Number" />
      </div>
      <div class="col-lg-5">
        <label>Fax :</label>
        <input type="text" class="form-control" placeholder="Enter the fax" name="fax" id="Enter the FAX">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-10">
        <label>Mailing Address:</label>
        <input type="text" class="form-control h-75" placeholder="Enter Location" />
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>City:</label>
        <input type="text" class="form-control" placeholder="Enter City" />
      </div>
      <div class="col-lg-5">
        <label>State:</label>
        <select class="custom-select">
          <option selected>Select State</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Zip Code:</label>
        <input type="text" class="form-control" placeholder="Enter Phone Number" />
      </div>
      <div class="col-lg-5">
        <label>Country</label>
        <input type="text" class="form-control" value="United States" name="country" placeholder="Enter the Country">
      </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="form-group row align-items-center">
      <div class="col-lg-10 mt-3">
        <input type="checkbox" class="align-middle" name="previous-mailing-address" id="previous-mailing-address">
        Previous Mailing Address (Only If at current mailing address for less than 2 years)
      </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Status</label>
        <select class="custom-select">
          <option selected>Select State</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-lg-5">
        <label>Date Of Start</label>
        <input type="date" class="form-control">
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Zip Code:</label>
        <input type="text" class="form-control" placeholder="Enter Phone Number" />
      </div>
      <div class="col-lg-5">
        <label>Country</label>
        <input type="text" class="form-control" value="United States" name="country" placeholder="Enter the Country">
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Assigned To :</label>
        <div style="height: 100px; padding:5px; overflow-y: scroll;" class="border border-rounded">
          <div>
            <input type="checkbox" class="align-middle">
            <span>Veronica Lodge</span>
          </div>
          <div>
            <input type="checkbox" class="align-middle">
            <span>Hermione Lodge</span>
          </div>
          <div>
            <input type="checkbox" class="align-middle">
            <span>Hiram Lodge</span>
          </div>
          <div>
            <input type="checkbox" class="align-middle">
            <span>Walter White</span>
          </div>
          <div>
            <input type="checkbox" class="align-middle">
            <span>Skyler White</span>
          </div>
          <div>
            <input type="checkbox" class="align-middle">
            <span>Jughead Jones</span>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <label>Referred By:</label>
        <select name="#" id="referred-by" class="custom-select">
          <option value="Herlin">Herlin</option>
          <option value="Hermione">Hermione</option>
          <option value="Jack">Jack</option>
          <option value="July">July</option>
        </select>
      </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="form-group row align-items-center mt-5">
      <div class="col-lg-5">
        <h5>Portal Access</h5>
      </div>
      <div class="col-lg-5">
        <div class="d-flex justify-content-around">
          <div>
            <input type="radio" name="portal-access" id="portal-access-on" class="align-self-center">
            On
          </div>
          <div>
            <input type="radio" name="portal-access" id="portal-access-off" class="align-self-center">
            Off
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown-divider"></div>
    <h5>Chargebee Payment</h5>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Plan</label>
        <select name="chargebee-payment" id="chargebee-payment" class="custom-select">
          <option value="">Select</option>
          <option value="21 Day Plan">21 Day Plan</option>
          <option value="45 - 60 Day Plan">45 - 60 Day Plan</option>
          <option value="Month 2 Month Plan">Month 2 Month Plan</option>
        </select>
      </div>
      <div class="col-lg-5">
        <label>Card Number:</label>
        <input type="text" class="form-control" name="fax" placeholder="Enter Card Number">
      </div>
      <div class="col-lg-2">
        <label>CVV</label>
        <input type="text" class="form-control" name="fax" placeholder="Enter CVV">
      </div>
    </div>
    <div class="form-group row align-items-center">
      <div class="col-lg-5">
        <label>Expires On</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-lg-5">
        <input type="checkbox" data-toggle="collapse" data-target="#billing-address" name="#" id="#">
        Add a Billing Address
      </div>
    </div>
    <div class="collapse" id="billing-address">
      <div class="form-group row align-items-center">
        <div class="col-lg-5">
          <label>Billing Name</label>
          <input type="text" class="form-control" placeholder="Enter Billing Name">
        </div>
        <div class="col-lg-5">
          <label>Billing City</label>
          <input type="text" class="form-control" placeholder="Enter Billing City">
        </div>
      </div>
      <div class="form-group row align-items-center">
        <div class="col-lg-5">
          <label>Billing State</label>
          <select name="billing-state" id="billing-state" class="custom-select">
            <option value=" ">Select State</option>
            <option value="XXX">XXX</option>
            <option value="YYY">YYY</option>
            <option value="ZZZ">ZZZ</option>
          </select>
        </div>
        <div class="col-lg-5">
          <label>Billing Zip</label>
          <input type="text" class="form-control" placeholder="Billing Zip">
        </div>
      </div>
      <div class="form-group row align-items-center">
        <div class="col-lg-10">
          <label>Billing Address</label>
          <input type="text" class="form-control" placeholder="Enter Billing Address">
        </div>
      </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-sm btn-primary">
  </div>
</form>