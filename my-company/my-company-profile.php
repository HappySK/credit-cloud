<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="../">
  <meta charset="utf-8" />
  <?php require '../config/constants.php'?>
  <title><?= TITLE ?> | My Company Profile</title>
  <meta name="description" content="Page with empty content" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="canonical" href="sravan.sowlab.com/credit" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Vendors Styles(used by this page)-->
  <link href="assets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
    type="text/css" />
  <!--end::Page Vendors Styles-->
  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="assets/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Theme Styles-->
  <!--begin::Layout Themes(used by all pages)-->
  <link href="assets/dist/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
  <link href="assets/dist/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
  <link href="assets/dist/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
  <link href="assets/dist/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
  <!--end::Layout Themes-->
  <link rel="shortcut icon" href="assets/dist/assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->
  <!--begin::Header Mobile-->
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="index.html">
      <img alt="Logo" src="assets/dist/assets/media/logos/logo-light.png" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
      <!--begin::Aside Mobile Toggle-->
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>
      <!--end::Aside Mobile Toggle-->
      <!--begin::Header Menu Mobile Toggle-->
      <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
        <span></span>
      </button>
      <!--end::Header Menu Mobile Toggle-->
      <!--begin::Topbar Mobile Toggle-->
      <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
        <span class="svg-icon svg-icon-xl">
          <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/General/User.svg-->
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
            viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24" />
              <path
                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                fill="#000000" fill-rule="nonzero" opacity="0.3" />
              <path
                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                fill="#000000" fill-rule="nonzero" />
            </g>
          </svg>
          <!--end::Svg Icon-->
        </span>
      </button>
      <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
  </div>
  <!--end::Header Mobile-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
      <?php include '../config/aside.php'?>
      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <?php include '../config/header.php'?>
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Subheader-->
          <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
              <!--begin::Info-->
              <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                  <!--begin::Page Title-->
                  <h5 class="text-dark font-weight-bold my-1 mr-5">My Company Profile</h5>
                  <!--end::Page Title-->
                  <!--begin::Breadcrumb-->
                  <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                      <a href="my-company/my-company-profile" class="text-muted">My Company</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="my-company/my-company-profile" class="text-muted">Company Profile</a>
                    </li>
                  </ul>
                  <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
              </div>
              <!--end::Info-->
              <!--begin::Toolbar-->
              <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                <!--end::Actions-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                  <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-success svg-icon-2x">
                      <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Files/File-plus.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path
                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path
                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                            fill="#000000" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover">
                      <li class="navi-header font-weight-bold py-4">
                        <span class="font-size-lg">Choose Label:</span>
                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right"
                          title="Click to learn more..."></i>
                      </li>
                      <li class="navi-separator mb-3 opacity-70"></li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-text">
                            <span class="label label-xl label-inline label-light-success">Customer</span>
                          </span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-text">
                            <span class="label label-xl label-inline label-light-danger">Partner</span>
                          </span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-text">
                            <span class="label label-xl label-inline label-light-warning">Suplier</span>
                          </span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-text">
                            <span class="label label-xl label-inline label-light-primary">Member</span>
                          </span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-text">
                            <span class="label label-xl label-inline label-light-dark">Staff</span>
                          </span>
                        </a>
                      </li>
                      <li class="navi-separator mt-3 opacity-70"></li>
                      <li class="navi-footer py-4">
                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                          <i class="ki ki-plus icon-sm"></i>Add new</a>
                      </li>
                    </ul>
                    <!--end::Navigation-->
                  </div>
                </div>
                <!--end::Dropdown-->
              </div>
              <!--end::Toolbar-->
            </div>
          </div>
          <!--end::Subheader-->
          <!--begin::Entry-->
          <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex justify-content-between">
                    <h5>My Company Profile</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary mr-2">
                      <i class="fa fa-play" aria-hidden="true"></i>
                      Watch Quick Video
                    </a>
                  </div>
                  <!--begin::Notice-->
                  <div class="alert alert-custom alert-white alert-shadow gutter-b m-3 bg-light" role="alert">
                    <div class="alert-icon">
                      <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Tools/Compass.svg-->
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
                      Please fill in all the details on this page, so the appropriate details will appear for your
                      clients and affiliates. Show <a href="#">guided tour</a> For account information or to make
                      changes to your account, visit <a href="#">My Account</a>
                    </div>
                  </div>
                  <!--end::Notice-->
                  <form action="" class="form-horizontal">
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-4">
                        <label for="company-name">Company Name</label>
                        <input type="text" name="company-name" id="company-name" class="form-control">
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="">Website URL</label>
                        <input type="text" name="website-url" id="website-url" class="form-control">
                      </div>
                      <div class="col-lg-4">
                        <button type="button" class="btn btn-sm btn-outline-primary" id="check-url-btn">Check
                          URL</button>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="form-group col-lg-12">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control h-100">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-4">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" value="Birmingham" class="form-control w-100">
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" value="Alabama" class="form-control w-100">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-4">
                        <label for="zip">Zip</label>
                        <input type="text" name="zip" id="zip" class="form-control">
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" value="United States"
                          class="form-control-plaintext">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-6">
                        <label for="time-zone">TimeZone</label>
                        <select name="time-zone" id="time-zone" class="custom-select">
                          <option value="">Select Time Zone</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-4">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="fax">Fax</label>
                        <input type="text" name="fax" id="fax" class="form-control">
                      </div>
                    </div>
                    <p>
                      By default, automated notifications are sent from the account holder's name and email address. Or
                      you may designate a different name (or a company name) and email for all automated notifications
                      sent.
                    </p>
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-4">
                        <label for="sender-name">Sender Name</label>
                        <input type="text" name="sender-name" id="sender-name" class="form-control">
                      </div>
                      <div class="form-group col-lg-4">
                        <label for="sender-email">Sender Email</label>
                        <input type="text" name="sender-email" id="sender-email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <div class="form-group col-lg-6">
                        <p>Name/company that your client invoices should be payable to </p>
                      </div>
                      <div class="form-group col-lg-4 align-middle">
                        <input type="text" name="web-url" id="web-url" value="800 CREDIT NOW"
                          class="form-control-plaintext">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--end::Container-->
          </div>
          <!--end::Entry-->
        </div>
        <!--end::Content-->
        <?php include '../config/footer.php'?>
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Main-->
  <!-- begin::User Panel-->
  <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
      <h3 class="font-weight-bold m-0">User Profile
        <small class="text-muted font-size-sm ml-2">12 messages</small>
      </h3>
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
        <i class="ki ki-close icon-xs text-muted"></i>
      </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
      <!--begin::Header-->
      <div class="d-flex align-items-center mt-5">
        <div class="symbol symbol-100 mr-5">
          <div class="symbol-label" style="background-image:url('assets/dist/assets/media/users/300_21.jpg')"></div>
          <i class="symbol-badge bg-success"></i>
        </div>
        <div class="d-flex flex-column">
          <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
          <div class="text-muted mt-1">Application Developer</div>
          <div class="navi mt-2">
            <a href="#" class="navi-item">
              <span class="navi-link p-0 pb-2">
                <span class="navi-icon mr-1">
                  <span class="svg-icon svg-icon-lg svg-icon-primary">
                    <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                          fill="#000000" />
                        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
              </span>
            </a>
            <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
          </div>
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Separator-->
      <div class="separator separator-dashed mt-8 mb-5"></div>
      <!--end::Separator-->
      <!--begin::Nav-->
      <div class="navi navi-spacer-x-0 p-0">
        <!--begin::Item-->
        <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
          <div class="navi-link">
            <div class="symbol symbol-40 bg-light mr-3">
              <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-success">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/General/Notification2.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                        fill="#000000" />
                      <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </div>
            </div>
            <div class="navi-text">
              <div class="font-weight-bold">My Profile</div>
              <div class="text-muted">Account settings and more
                <span class="label label-light-danger label-inline font-weight-bold">update</span>
              </div>
            </div>
          </div>
        </a>
        <!--end:Item-->
        <!--begin::Item-->
        <a href="custom/apps/user/profile-3.html" class="navi-item">
          <div class="navi-link">
            <div class="symbol symbol-40 bg-light mr-3">
              <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-warning">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
                      <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
                      <path
                        d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                        fill="#000000" fill-rule="nonzero" />
                      <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </div>
            </div>
            <div class="navi-text">
              <div class="font-weight-bold">My Messages</div>
              <div class="text-muted">Inbox and tasks</div>
            </div>
          </div>
        </a>
        <!--end:Item-->
        <!--begin::Item-->
        <a href="custom/apps/user/profile-2.html" class="navi-item">
          <div class="navi-link">
            <div class="symbol symbol-40 bg-light mr-3">
              <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-danger">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Files/Selected-file.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24" />
                      <path
                        d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                      <path
                        d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                        fill="#000000" fill-rule="nonzero" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </div>
            </div>
            <div class="navi-text">
              <div class="font-weight-bold">My Activities</div>
              <div class="text-muted">Logs and notifications</div>
            </div>
          </div>
        </a>
        <!--end:Item-->
        <!--begin::Item-->
        <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
          <div class="navi-link">
            <div class="symbol symbol-40 bg-light mr-3">
              <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-primary">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Mail-opened.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                        fill="#000000" opacity="0.3" />
                      <path
                        d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                        fill="#000000" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </div>
            </div>
            <div class="navi-text">
              <div class="font-weight-bold">My Tasks</div>
              <div class="text-muted">latest tasks and projects</div>
            </div>
          </div>
        </a>
        <!--end:Item-->
      </div>
      <!--end::Nav-->
      <!--begin::Separator-->
      <div class="separator separator-dashed my-7"></div>
      <!--end::Separator-->
      <!--begin::Notifications-->
      <div>
        <!--begin:Heading-->
        <h5 class="mb-5">Recent Notifications</h5>
        <!--end:Heading-->
        <!--begin::Item-->
        <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
          <span class="svg-icon svg-icon-warning mr-5">
            <span class="svg-icon svg-icon-lg">
              <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Home/Library.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                    fill="#000000" />
                  <rect fill="#000000" opacity="0.3"
                    transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                    x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </span>
          <div class="d-flex flex-column flex-grow-1 mr-2">
            <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose
              persuade</a>
            <span class="text-muted font-size-sm">Due in 2 Days</span>
          </div>
          <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
          <span class="svg-icon svg-icon-success mr-5">
            <span class="svg-icon svg-icon-lg">
              <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Write.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                    fill="#000000" fill-rule="nonzero"
                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                  <path
                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </span>
          <div class="d-flex flex-column flex-grow-1 mr-2">
            <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to
              people</a>
            <span class="text-muted font-size-sm">Due in 2 Days</span>
          </div>
          <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
          <span class="svg-icon svg-icon-danger mr-5">
            <span class="svg-icon svg-icon-lg">
              <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                    fill="#000000" />
                  <path
                    d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                    fill="#000000" opacity="0.3" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </span>
          <div class="d-flex flex-column flex-grow-1 mr-2">
            <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to
              persuade</a>
            <span class="text-muted font-size-sm">Due in 2 Days</span>
          </div>
          <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex align-items-center bg-light-info rounded p-5">
          <span class="svg-icon svg-icon-info mr-5">
            <span class="svg-icon svg-icon-lg">
              <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/General/Attachment2.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                    fill="#000000" opacity="0.3"
                    transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                  <path
                    d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                    fill="#000000"
                    transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                  <path
                    d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                    fill="#000000" opacity="0.3"
                    transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                  <path
                    d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                    fill="#000000" opacity="0.3"
                    transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </span>
          <div class="d-flex flex-column flex-grow-1 mr-2">
            <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best
              product</a>
            <span class="text-muted font-size-sm">Due in 2 Days</span>
          </div>
          <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
        </div>
        <!--end::Item-->
      </div>
      <!--end::Notifications-->
    </div>
    <!--end::Content-->
  </div>
  <!-- end::User Panel-->
  <!--begin::Quick Cart-->
  <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
      <h4 class="font-weight-bold m-0">Shopping Cart</h4>
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
        <i class="ki ki-close icon-xs text-muted"></i>
      </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
      <!--begin::Wrapper-->
      <div class="offcanvas-wrapper mb-5 scroll-pull">
        <!--begin::Item-->
        <div class="d-flex align-items-center justify-content-between py-8">
          <div class="d-flex flex-column mr-2">
            <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
            <span class="text-muted">The best kitchen gadget in 2020</span>
            <div class="d-flex align-items-center mt-2">
              <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
              <span class="text-muted mr-1">for</span>
              <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
              <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
              </a>
              <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
              </a>
            </div>
          </div>
          <a href="#" class="symbol symbol-70 flex-shrink-0">
            <img src="assets/dist/assets/media/stock-600x400/img-1.jpg" title="" alt="" />
          </a>
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-solid"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex align-items-center justify-content-between py-8">
          <div class="d-flex flex-column mr-2">
            <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
            <span class="text-muted">Smart tool for cooking</span>
            <div class="d-flex align-items-center mt-2">
              <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
              <span class="text-muted mr-1">for</span>
              <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
              <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
              </a>
              <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
              </a>
            </div>
          </div>
          <a href="#" class="symbol symbol-70 flex-shrink-0">
            <img src="assets/dist/assets/media/stock-600x400/img-2.jpg" title="" alt="" />
          </a>
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-solid"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex align-items-center justify-content-between py-8">
          <div class="d-flex flex-column mr-2">
            <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
            <span class="text-muted">Professional camera for edge cutting shots</span>
            <div class="d-flex align-items-center mt-2">
              <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
              <span class="text-muted mr-1">for</span>
              <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
              <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
              </a>
              <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
              </a>
            </div>
          </div>
          <a href="#" class="symbol symbol-70 flex-shrink-0">
            <img src="assets/dist/assets/media/stock-600x400/img-3.jpg" title="" alt="" />
          </a>
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-solid"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex align-items-center justify-content-between py-8">
          <div class="d-flex flex-column mr-2">
            <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
            <span class="text-muted">Manufactoring unique objects</span>
            <div class="d-flex align-items-center mt-2">
              <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
              <span class="text-muted mr-1">for</span>
              <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
              <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
              </a>
              <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
              </a>
            </div>
          </div>
          <a href="#" class="symbol symbol-70 flex-shrink-0">
            <img src="assets/dist/assets/media/stock-600x400/img-4.jpg" title="" alt="" />
          </a>
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-solid"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex align-items-center justify-content-between py-8">
          <div class="d-flex flex-column mr-2">
            <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
            <span class="text-muted">Perfect animation tool</span>
            <div class="d-flex align-items-center mt-2">
              <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
              <span class="text-muted mr-1">for</span>
              <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
              <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
              </a>
              <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
              </a>
            </div>
          </div>
          <a href="#" class="symbol symbol-70 flex-shrink-0">
            <img src="assets/dist/assets/media/stock-600x400/img-8.jpg" title="" alt="" />
          </a>
        </div>
        <!--end::Item-->
      </div>
      <!--end::Wrapper-->
      <!--begin::Purchase-->
      <div class="offcanvas-footer">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
          <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-7">
          <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
          <span class="font-weight-bolder text-primary text-right">$5640.00</span>
        </div>
        <div class="text-right">
          <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
        </div>
      </div>
      <!--end::Purchase-->
    </div>
    <!--end::Content-->
  </div>
  <!--end::Quick Cart-->
  <!--begin::Quick Panel-->
  <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
    <!--begin::Header-->
    <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
      <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
        role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
        </li>
      </ul>
      <div class="offcanvas-close mt-n1 pr-5">
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
          <i class="ki ki-close icon-xs text-muted"></i>
        </a>
      </div>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content px-10">
      <div class="tab-content">
        <!--begin::Tabpane-->
        <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
          <!--begin::Section-->
          <div class="mb-15">
            <h5 class="font-weight-bold mb-5">System Messages</h5>
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-wrap mb-5">
              <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                  <img src="assets/dist/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                </span>
              </div>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
              </div>
              <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-wrap mb-5">
              <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                  <img src="assets/dist/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                </span>
              </div>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                  Authors</a>
                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
              </div>
              <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-wrap mb-5">
              <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                  <img src="assets/dist/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                </span>
              </div>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
              </div>
              <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-wrap mb-5">
              <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                  <img src="assets/dist/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                </span>
              </div>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active
                  Customers</a>
                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
              </div>
              <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-wrap">
              <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                  <img src="assets/dist/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center"
                    alt="" />
                </span>
              </div>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                  Theme</a>
                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
              </div>
              <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
            </div>
            <!--end: Item-->
          </div>
          <!--end::Section-->
          <!--begin::Section-->
          <div class="mb-5">
            <h5 class="font-weight-bold mb-5">Notifications</h5>
            <!--begin: Item-->
            <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
              <span class="svg-icon svg-icon-warning mr-5">
                <span class="svg-icon svg-icon-lg">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Home/Library.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                        fill="#000000" />
                      <rect fill="#000000" opacity="0.3"
                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </span>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose
                  persuade</a>
                <span class="text-muted font-size-sm">Due in 2 Days</span>
              </div>
              <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
              <span class="svg-icon svg-icon-success mr-5">
                <span class="svg-icon svg-icon-lg">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Write.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                        fill="#000000" fill-rule="nonzero"
                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                      <path
                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </span>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to
                  people</a>
                <span class="text-muted font-size-sm">Due in 2 Days</span>
              </div>
              <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
              <span class="svg-icon svg-icon-danger mr-5">
                <span class="svg-icon svg-icon-lg">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                        fill="#000000" />
                      <path
                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                        fill="#000000" opacity="0.3" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </span>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would
                  be to persuade</a>
                <span class="text-muted font-size-sm">Due in 2 Days</span>
              </div>
              <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center bg-light-info rounded p-5">
              <span class="svg-icon svg-icon-info mr-5">
                <span class="svg-icon svg-icon-lg">
                  <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/General/Attachment2.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                        fill="#000000" opacity="0.3"
                        transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                      <path
                        d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                        fill="#000000"
                        transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                      <path
                        d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                        fill="#000000" opacity="0.3"
                        transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                      <path
                        d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                        fill="#000000" opacity="0.3"
                        transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </span>
              <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best
                  product</a>
                <span class="text-muted font-size-sm">Due in 2 Days</span>
              </div>
              <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
            </div>
            <!--end: Item-->
          </div>
          <!--end::Section-->
        </div>
        <!--end::Tabpane-->
        <!--begin::Tabpane-->
        <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
          <!--begin::Nav-->
          <div class="navi navi-icon-circle navi-spacer-x-0">
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-bell text-success icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                  <div class="text-muted">Reports based on sales</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon2-box text-danger icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">2 new items submited</div>
                  <div class="text-muted">by Grog John</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-psd text-primary icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                  <div class="text-muted">Reports based on sales</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon2-supermarket text-warning icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                  <div class="text-muted">Total 234 items</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                  <div class="text-muted">Fostest is Barry</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                  <div class="text-muted">40% less alerts thar last week</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-notepad text-primary icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                  <div class="text-muted">Most posted 12 time</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-users-1 text-warning icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                  <div class="text-muted">9 photodrapehrs, 7 designer</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon2-box text-info icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                  <div class="text-muted">by Grog John</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon2-download text-success icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                  <div class="text-muted">Mostly PSD end AL concepts</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon2-supermarket text-danger icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                  <div class="text-muted">Total 234 items</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-bell text-primary icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                  <div class="text-muted">Reports based on sales</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="#" class="navi-item">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                    <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                  <div class="text-muted">Fostest is Barry</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
          </div>
          <!--end::Nav-->
        </div>
        <!--end::Tabpane-->
        <!--begin::Tabpane-->
        <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
          <form class="form">
            <!--begin::Section-->
            <div>
              <h5 class="font-weight-bold mb-3">Customer Care</h5>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Notifications:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-success switch-sm">
                    <label>
                      <input type="checkbox" checked="checked" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-success switch-sm">
                    <label>
                      <input type="checkbox" name="quick_panel_notifications_2" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Support Portal:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-success switch-sm">
                    <label>
                      <input type="checkbox" checked="checked" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
            </div>
            <!--end::Section-->
            <div class="separator separator-dashed my-6"></div>
            <!--begin::Section-->
            <div class="pt-2">
              <h5 class="font-weight-bold mb-3">Reports</h5>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Generate Reports:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-sm switch-danger">
                    <label>
                      <input type="checkbox" checked="checked" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Report Export:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-sm switch-danger">
                    <label>
                      <input type="checkbox" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Allow Data Collection:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-sm switch-danger">
                    <label>
                      <input type="checkbox" checked="checked" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
            </div>
            <!--end::Section-->
            <div class="separator separator-dashed my-6"></div>
            <!--begin::Section-->
            <div class="pt-2">
              <h5 class="font-weight-bold mb-3">Memebers</h5>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Member singup:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-sm switch-primary">
                    <label>
                      <input type="checkbox" checked="checked" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-sm switch-primary">
                    <label>
                      <input type="checkbox" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                <div class="col-4 d-flex justify-content-end">
                  <span class="switch switch-sm switch-primary">
                    <label>
                      <input type="checkbox" checked="checked" name="select" />
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
            </div>
            <!--end::Section-->
          </form>
        </div>
        <!--end::Tabpane-->
      </div>
    </div>
    <!--end::Content-->
  </div>
  <!--end::Quick Panel-->
  <!--begin::Chat Panel-->
  <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!--begin::Card-->
        <div class="card card-custom">
          <!--begin::Header-->
          <div class="card-header align-items-center px-4 py-3">
            <div class="text-left flex-grow-1">
              <!--begin::Dropdown Menu-->
              <div class="dropdown dropdown-inline">
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                          d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                          fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path
                          d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                          fill="#000000" fill-rule="nonzero" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </button>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                  <!--begin::Navigation-->
                  <ul class="navi navi-hover py-5">
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-drop"></i>
                        </span>
                        <span class="navi-text">New Group</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-list-3"></i>
                        </span>
                        <span class="navi-text">Contacts</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-rocket-1"></i>
                        </span>
                        <span class="navi-text">Groups</span>
                        <span class="navi-link-badge">
                          <span class="label label-light-primary label-inline font-weight-bold">new</span>
                        </span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-bell-2"></i>
                        </span>
                        <span class="navi-text">Calls</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-gear"></i>
                        </span>
                        <span class="navi-text">Settings</span>
                      </a>
                    </li>
                    <li class="navi-separator my-3"></li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-magnifier-tool"></i>
                        </span>
                        <span class="navi-text">Help</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-bell-2"></i>
                        </span>
                        <span class="navi-text">Privacy</span>
                        <span class="navi-link-badge">
                          <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <!--end::Navigation-->
                </div>
              </div>
              <!--end::Dropdown Menu-->
            </div>
            <div class="text-center flex-grow-1">
              <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
              <div>
                <span class="label label-dot label-success"></span>
                <span class="font-weight-bold text-muted font-size-sm">Active</span>
              </div>
            </div>
            <div class="text-right flex-grow-1">
              <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                <i class="ki ki-close icon-1x"></i>
              </button>
            </div>
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="card-body">
            <!--begin::Scroll-->
            <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
              <!--begin::Messages-->
              <div class="messages">
                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_12.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">2 Hours</span>
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    How likely are you to recommend our company to your friends and family?</div>
                </div>
                <!--end::Message In-->
                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">3 minutes</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.
                  </div>
                </div>
                <!--end::Message Out-->
                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_21.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">40 seconds</span>
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    Ok, Understood!</div>
                </div>
                <!--end::Message In-->
                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">Just now</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    You’ll receive notifications for all issues, pull requests!</div>
                </div>
                <!--end::Message Out-->
                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_12.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">40 seconds</span>
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    You can unwatch this repository immediately by clicking here:
                    <a href="#">https://github.com</a>
                  </div>
                </div>
                <!--end::Message In-->
                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">Just now</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                </div>
                <!--end::Message Out-->
                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_12.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">40 seconds</span>
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    Most purchased Business courses during this sale!</div>
                </div>
                <!--end::Message In-->
                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">Just now</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/dist/assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div
                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                </div>
                <!--end::Message Out-->
              </div>
              <!--end::Messages-->
            </div>
            <!--end::Scroll-->
          </div>
          <!--end::Body-->
          <!--begin::Footer-->
          <div class="card-footer align-items-center">
            <!--begin::Compose-->
            <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
            <div class="d-flex align-items-center justify-content-between mt-5">
              <div class="mr-3">
                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                  <i class="flaticon2-photograph icon-lg"></i>
                </a>
                <a href="#" class="btn btn-clean btn-icon btn-md">
                  <i class="flaticon2-photo-camera icon-lg"></i>
                </a>
              </div>
              <div>
                <button type="button"
                  class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
              </div>
            </div>
            <!--begin::Compose-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Card-->
      </div>
    </div>
  </div>
  <!--end::Chat Panel-->
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
      <!--begin::Svg Icon | path:assets/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
        viewBox="0 0 24 24" version="1.1">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24" />
          <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
          <path
            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
            fill="#000000" fill-rule="nonzero" />
        </g>
      </svg>
      <!--end::Svg Icon-->
    </span>
  </div>
  <!--end::Scrolltop-->
  <!--begin::Demo Panel-->
  <script>
  var HOST_URL = "#";
  </script>
  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
  var KTAppSettings = {
    "breakpoints": {
      "sm": 576,
      "md": 768,
      "lg": 992,
      "xl": 1200,
      "xxl": 1400
    },
    "colors": {
      "theme": {
        "base": {
          "white": "#ffffff",
          "primary": "#3699FF",
          "secondary": "#E5EAEE",
          "success": "#1BC5BD",
          "info": "#8950FC",
          "warning": "#FFA800",
          "danger": "#F64E60",
          "light": "#E4E6EF",
          "dark": "#181C32"
        },
        "light": {
          "white": "#ffffff",
          "primary": "#E1F0FF",
          "secondary": "#EBEDF3",
          "success": "#C9F7F5",
          "info": "#EEE5FF",
          "warning": "#FFF4DE",
          "danger": "#FFE2E5",
          "light": "#F3F6F9",
          "dark": "#D6D6E0"
        },
        "inverse": {
          "white": "#ffffff",
          "primary": "#ffffff",
          "secondary": "#3F4254",
          "success": "#ffffff",
          "info": "#ffffff",
          "warning": "#ffffff",
          "danger": "#ffffff",
          "light": "#464E5F",
          "dark": "#ffffff"
        }
      },
      "gray": {
        "gray-100": "#F3F6F9",
        "gray-200": "#EBEDF3",
        "gray-300": "#E4E6EF",
        "gray-400": "#D1D3E0",
        "gray-500": "#B5B5C3",
        "gray-600": "#7E8299",
        "gray-700": "#5E6278",
        "gray-800": "#3F4254",
        "gray-900": "#181C32"
      }
    },
    "font-family": "Poppins"
  };
  </script>
  <!--end::Global Config-->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="assets/dist/assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
  <script src="assets/dist/assets/js/scripts.bundle.js"></script>
  <!--end::Global Theme Bundle-->
  <!--begin::Page Vendors(used by this page)-->
  <script src="assets/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
  <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
  <script src="assets/dist/assets/plugins/custom/gmaps/gmaps.js"></script>
  <!--end::Page Vendors-->
  <!--begin::Page Scripts(used by this page)-->
  <script src="assets/dist/assets/js/pages/widgets.js"></script>
  <!--end::Page Scripts-->
  <script src="assets/js/my-company/my-company-profile.js"></script>
</body>
<!--end::Body-->
<div class="modal fade" id="messagesModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-around">
        <h5 class="modal-title" id="exampleModalLabel">Messages</h5>
        <a href="#" class="btn btn-transparent-success font-weight-bold mr-2">Send a new message</a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body" style="height: 300px;">
        No Messages So Far
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-transparent-success font-weight-bold mr-2">See All Messages</a>
      </div>
    </div>
  </div>
</div>
<!-- end::Messages Modal -->
<!--begin::Messages Modal-->
<div class="modal fade" id="tasksModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-around">
        <h5 class="modal-title" id="exampleModalLabel">Tasks & Events</h5>
        <a href="#" class="btn btn-transparent-success font-weight-bold mr-2">Create a new Task</a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body" style="height: 300px;">
        No Tasks Available
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-transparent-success font-weight-bold mr-2">See All Messages</a>
      </div>
    </div>
  </div>
</div>
<!-- end::Messages Modal -->
</body>
<!--end::Body-->
<!-- begin::NewLeads Modal-->
<div class="modal fade" id="newLeads" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Leads</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <div data-scroll="true" data-height="300">
          <div class="d-flex flex-column justify-content-around">
            <div class="d-flex flex-row justify-content-around">
              <img src="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043260-avatar-male-man-portrait_113269.png"
                class="align-middle" alt="Avatar" width="50" height="50">
              <div>
                <h4>Archie Andrews</h4>
                <cite>Referred By Miachel</cite>
              </div>
              <a href="#" class="btn btn-text-success btn-hover-light-success font-weight-bold mr-2">Add Client</a>
              <a href="#" class="btn btn-text-danger btn-hover-light-danger font-weight-bold mr-2">Remove Client</a>
            </div>
            <div class="d-flex flex-row justify-content-around">
              <img src="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043260-avatar-male-man-portrait_113269.png"
                alt="Avatar" width="50" height="50">
              <div>
                <h4>Veronica Lodge</h4>
                <cite>Referred By Angelo</cite>
              </div>
              <a href="#" class="btn btn-text-success btn-hover-light-success font-weight-bold mr-2">Add Client</a>
              <a href="#" class="btn btn-text-danger btn-hover-light-danger font-weight-bold mr-2">Remove Client</a>
            </div>
          </div>
          <div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-transparent-success font-weight-bold mr-2">See All</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end::NewLeads Modal -->

</html>