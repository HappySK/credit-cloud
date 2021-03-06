<?php 
  session_start(); 
  require '../config/config.php';
  require CLASS_PATH.'/user.php';
  if(isset($_SESSION['id']))
  {
    $user_details = $user->get_data($_SESSION['id']);     
  }
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="../">
  <meta charset="utf-8" />
  <title>
    <?= TITLE ?> | My Clients
  </title>
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
  <link href="assets/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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
  <link rel="shortcut icon" href="../assets/dist/assets/media/logos/favicon.ico" />
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
          <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
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
      <!--begin::Aside-->
      <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        <!--begin::Brand-->
        <div class="brand flex-column-auto" id="kt_brand">
          <!--begin::Logo-->
          <a href="index" class="brand-logo">
            <img alt="Logo"
              src="https://app.creditrepaircloud.com/application/images/creditrepaircloud_logo-small.png" />
          </a>
          <!--end::Logo-->
          <!--begin::Toggle-->
          <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
              <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <path
                    d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                    fill="#000000" fill-rule="nonzero"
                    transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                  <path
                    d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                    transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </button>
          <!--end::Toolbar-->
        </div>
        <!--end::Brand-->
        <!--begin::Aside Menu-->
        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
          <!--begin::Menu Container-->
          <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
              <li class="menu-item " aria-haspopup="true">
                <a href="index" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                          fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">Home</span>
                </a>
              </li>
              <li class="menu-item menu-item-active" aria-haspopup="true">
                <a href="my-clients/clients-list" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                          d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                          fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path
                          d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                          fill="#000000" fill-rule="nonzero" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">My Clients</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icong--><svg xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                      version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z"
                          fill="#000000" />
                        <path
                          d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z"
                          fill="#000000" opacity="0.3" />
                        <path
                          d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
                          fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">My Schedule</span>
                </a>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M16.0322024,5.68722152 L5.75790403,15.945742 C5.12139076,16.5812778 5.12059836,17.6124773 5.75613416,18.2489906 C5.75642891,18.2492858 5.75672377,18.2495809 5.75701875,18.2498759 L5.75701875,18.2498759 C6.39304347,18.8859006 7.42424328,18.8859006 8.060268,18.2498759 C8.06056298,18.2495809 8.06085784,18.2492858 8.0611526,18.2489906 L18.3196731,7.9746922 C18.9505124,7.34288268 18.9501191,6.31942463 18.3187946,5.68810005 L18.3187946,5.68810005 C17.68747,5.05677547 16.6640119,5.05638225 16.0322024,5.68722152 Z"
                          fill="#000000" fill-rule="nonzero" />
                        <path
                          d="M9.85714286,6.92857143 C9.85714286,8.54730513 8.5469533,9.85714286 6.93006028,9.85714286 C5.31316726,9.85714286 4,8.54730513 4,6.92857143 C4,5.30983773 5.31316726,4 6.93006028,4 C8.5469533,4 9.85714286,5.30983773 9.85714286,6.92857143 Z M20,17.0714286 C20,18.6901623 18.6898104,20 17.0729174,20 C15.4560244,20 14.1428571,18.6901623 14.1428571,17.0714286 C14.1428571,15.4497247 15.4560244,14.1428571 17.0729174,14.1428571 C18.6898104,14.1428571 20,15.4497247 20,17.0714286 Z"
                          fill="#000000" opacity="0.3" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">My Company</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z"
                                fill="#000000" opacity="0.3" />
                              <path
                                d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">My Company Profile</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon.svg--><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                            version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">My Team Members(Users)</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Iconr.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <polygon fill="#000000" opacity="0.3" points="6 4 18 4 20 6.5 4 6.5" />
                              <path
                                d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L20.999994,17.0000172 C20.999994,18.1045834 20.1045662,19.0000112 19,19.0000112 C17.4805018,19.0000037 16.4805051,19 16,19 C15,19 14.5,17 12,17 C9.5,17 9.5,19 8,19 C7.31386312,19 6.31387037,19.0000034 5.00002173,19.0000102 L5.00002173,19.0000216 C3.89544593,19.0000273 3.00000569,18.1045963 3,17.0000205 C3,17.000017 3,17.0000136 3,17.0000102 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M8,14 C9.1045695,14 10,13.1045695 10,12 C10,10.8954305 9.1045695,10 8,10 C6.8954305,10 6,10.8954305 6,12 C6,13.1045695 6.8954305,14 8,14 Z M16,14 C17.1045695,14 18,13.1045695 18,12 C18,10.8954305 17.1045695,10 16,10 C14.8954305,10 14,10.8954305 14,12 C14,13.1045695 14.8954305,14 16,14 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Roles and Permissions</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5" />
                              <rect fill="#000000" opacity="0.3"
                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                x="3" y="3" width="18" height="7" rx="1" />
                              <path
                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Credit Monitoring Service</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                        <span class="menu-text">Client Affiliate Portal</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icong-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              <path
                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                fill="#000000" fill-rule="nonzero" />
                              <rect fill="#000000" opacity="0.3" x="9" y="10.5" width="4" height="1" rx="0.5" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Website Tools</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <rect fill="#000000" opacity="0.3" x="7" y="4" width="10" height="4" />
                              <path
                                d="M7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,20 C19,21.1045695 18.1045695,22 17,22 L7,22 C5.8954305,22 5,21.1045695 5,20 L5,4 C5,2.8954305 5.8954305,2 7,2 Z M8,12 C8.55228475,12 9,11.5522847 9,11 C9,10.4477153 8.55228475,10 8,10 C7.44771525,10 7,10.4477153 7,11 C7,11.5522847 7.44771525,12 8,12 Z M8,16 C8.55228475,16 9,15.5522847 9,15 C9,14.4477153 8.55228475,14 8,14 C7.44771525,14 7,14.4477153 7,15 C7,15.5522847 7.44771525,16 8,16 Z M12,12 C12.5522847,12 13,11.5522847 13,11 C13,10.4477153 12.5522847,10 12,10 C11.4477153,10 11,10.4477153 11,11 C11,11.5522847 11.4477153,12 12,12 Z M12,16 C12.5522847,16 13,15.5522847 13,15 C13,14.4477153 12.5522847,14 12,14 C11.4477153,14 11,14.4477153 11,15 C11,15.5522847 11.4477153,16 12,16 Z M16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 C15.4477153,10 15,10.4477153 15,11 C15,11.5522847 15.4477153,12 16,12 Z M16,16 C16.5522847,16 17,15.5522847 17,15 C17,14.4477153 16.5522847,14 16,14 C15.4477153,14 15,14.4477153 15,15 C15,15.5522847 15.4477153,16 16,16 Z M16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 C15.4477153,18 15,18.4477153 15,19 C15,19.5522847 15.4477153,20 16,20 Z M8,18 C7.44771525,18 7,18.4477153 7,19 C7,19.5522847 7.44771525,20 8,20 L12,20 C12.5522847,20 13,19.5522847 13,19 C13,18.4477153 12.5522847,18 12,18 L8,18 Z M7,4 L7,8 L17,8 L17,4 L7,4 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Simple Audit</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <polygon fill="#000000" points="11 7 9 13 11 13 11 18 6 18 6 13 8 7" />
                              <polygon fill="#000000" opacity="0.3" points="19 7 17 13 19 13 19 18 14 18 14 13 16 7" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Client Agreement</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M3.5,3 L9.5,3 C10.3284271,3 11,3.67157288 11,4.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L3.5,20 C2.67157288,20 2,19.3284271 2,18.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z M9,9 C8.44771525,9 8,9.44771525 8,10 L8,12 C8,12.5522847 8.44771525,13 9,13 C9.55228475,13 10,12.5522847 10,12 L10,10 C10,9.44771525 9.55228475,9 9,9 Z"
                                fill="#000000" opacity="0.3" />
                              <path
                                d="M14.5,3 L20.5,3 C21.3284271,3 22,3.67157288 22,4.5 L22,18.5 C22,19.3284271 21.3284271,20 20.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,4.5 C13,3.67157288 13.6715729,3 14.5,3 Z M20,9 C19.4477153,9 19,9.44771525 19,10 L19,12 C19,12.5522847 19.4477153,13 20,13 C20.5522847,13 21,12.5522847 21,12 L21,10 C21,9.44771525 20.5522847,9 20,9 Z"
                                fill="#000000"
                                transform="translate(17.500000, 11.500000) scale(-1, 1) translate(-17.500000, -11.500000) " />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Digital Signature Records</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <path
                                d="M18,6 L11,6 C10.3333333,5.88561808 10,5.55228475 10,5 C10,4.44771525 10.3333333,4.11438192 11,4 L20,4 L20,13 C20,13.6666667 19.6666667,14 19,14 C18.3333333,14 18,13.6666667 18,13 L18,6 Z M6,18 L13,18 C13.6666667,18.1143819 14,18.4477153 14,19 C14,19.5522847 13.6666667,19.8856181 13,20 L4,20 L4,11 C4,10.3333333 4.33333333,10 5,10 C5.66666667,10 6,10.3333333 6,11 L6,18 Z"
                                fill="#000000" fill-rule="nonzero" />
                              <rect fill="#000000" opacity="0.3"
                                transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) "
                                x="7" y="11" width="10" height="2" rx="1" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Dispute Options</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Iconing-mail.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
                                fill="#000000" />
                              <path
                                d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"
                                transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) " />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Automated Notifications</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon.svg--><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                            version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Client Status Types</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icong-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 Z"
                                fill="#000000" opacity="0.3" />
                              <path
                                d="M18.5,11 L5.5,11 C4.67157288,11 4,11.6715729 4,12.5 L4,13 L8.58578644,13 C8.85100293,13 9.10535684,13.1053568 9.29289322,13.2928932 L10.2928932,14.2928932 C10.7456461,14.7456461 11.3597108,15 12,15 C12.6402892,15 13.2543539,14.7456461 13.7071068,14.2928932 L14.7071068,13.2928932 C14.8946432,13.1053568 15.1489971,13 15.4142136,13 L20,13 L20,12.5 C20,11.6715729 19.3284271,11 18.5,11 Z"
                                fill="#000000" />
                              <path
                                d="M5.5,6 C4.67157288,6 4,6.67157288 4,7.5 L4,8 L20,8 L20,7.5 C20,6.67157288 19.3284271,6 18.5,6 L5.5,6 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Invoice Options</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
                              <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
                              <path
                                d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Affiliate Payments</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Iconattachment.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z"
                                fill="#000000" opacity="0.3" />
                              <path
                                d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z"
                                fill="#000000" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Mailchimp Integration</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M14,16 L12,16 L12,12.5 C12,11.6715729 11.3284271,11 10.5,11 C9.67157288,11 9,11.6715729 9,12.5 L9,17.5 C9,19.4329966 10.5670034,21 12.5,21 C14.4329966,21 16,19.4329966 16,17.5 L16,7.5 C16,5.56700338 14.4329966,4 12.5,4 L12,4 C10.3431458,4 9,5.34314575 9,7 L7,7 C7,4.23857625 9.23857625,2 12,2 L12.5,2 C15.5375661,2 18,4.46243388 18,7.5 L18,17.5 C18,20.5375661 15.5375661,23 12.5,23 C9.46243388,23 7,20.5375661 7,17.5 L7,12.5 C7,10.5670034 8.56700338,9 10.5,9 C12.4329966,9 14,10.5670034 14,12.5 L14,16 Z"
                                fill="#000000" fill-rule="nonzero"
                                transform="translate(12.500000, 12.500000) rotate(-315.000000) translate(-12.500000, -12.500000) " />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Chargebee Integration</span>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                          <!--begin::Svg Icon.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path
                                d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                fill="#000000" opacity="0.3"
                                transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                              <path
                                d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                fill="#000000"
                                transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                              <path
                                d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                fill="#000000" opacity="0.3"
                                transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                              <path
                                d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                fill="#000000" opacity="0.3"
                                transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">API & Automations</span>
                        <i class="menu-arrow"></i>
                      </a>
                      <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                          <li class="menu-item" aria-haspopup="true">
                            <a href="custom/pages/error/error-1.html" class="menu-link">
                              <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                              </i>
                              <span class="menu-text">Overview</span>
                            </a>
                          </li>
                          <li class="menu-item" aria-haspopup="true">
                            <a href="custom/pages/error/error-2.html" class="menu-link">
                              <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                              </i>
                              <span class="menu-text">API Credentials</span>
                            </a>
                          </li>
                          <li class="menu-item" aria-haspopup="true">
                            <a href="custom/pages/error/error-3.html" class="menu-link">
                              <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                              </i>
                              <span class="menu-text">API Methods</span>
                            </a>
                          </li>
                          <li class="menu-item" aria-haspopup="true">
                            <a href="custom/pages/error/error-4.html" class="menu-link">
                              <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                              </i>
                              <span class="menu-text">Error Methods</span>
                            </a>
                          </li>
                          <li class="menu-item" aria-haspopup="true">
                            <a href="custom/pages/error/error-5.html" class="menu-link">
                              <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                              </i>
                              <span class="menu-text">Examples</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M4,7 L20,7 L20,19.5 C20,20.3284271 19.3284271,21 18.5,21 L5.5,21 C4.67157288,21 4,20.3284271 4,19.5 L4,7 Z M10,10 C9.44771525,10 9,10.4477153 9,11 C9,11.5522847 9.44771525,12 10,12 L14,12 C14.5522847,12 15,11.5522847 15,11 C15,10.4477153 14.5522847,10 14,10 L10,10 Z"
                          fill="#000000" />
                        <rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="4" rx="1" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">My Invoices</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z"
                          fill="#000000" opacity="0.3" />
                        <path
                          d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z"
                          fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">My Library</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
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
                  <span class="menu-text">My Affiliates</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect fill="#000000" opacity="0.3" x="2" y="4" width="20" height="5" rx="1" />
                        <path
                          d="M5,7 L8,7 L8,21 L7,21 C5.8954305,21 5,20.1045695 5,19 L5,7 Z M19,7 L19,19 C19,20.1045695 18.1045695,21 17,21 L11,21 L11,7 L19,7 Z"
                          fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">Creditors / Furnishers</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                      height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z"
                          fill="#000000" opacity="0.3" />
                        <path
                          d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z"
                          fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">Everything</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon.svg-->
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                      version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                          d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                          fill="#000000" fill-rule="nonzero" />
                        <path
                          d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                          fill="#000000" opacity="0.3" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">Dashboard</span>
                </a>
              </li>
            </ul>
            <!--end::Menu Nav-->
          </div>
          <!--end::Menu Container-->
        </div>
        <!--end::Aside Menu-->
      </div>
      <!--end::Aside-->
      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header header-fixed">
          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
              <!--begin::Header Menu-->
              <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                  <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                    <!-- Button trigger modal-->
                    <a href="#" data-toggle="modal" class="menu-link menu-toggle" data-target="#newLeads">
                      <span class="svg-icon svg-icon-primary svg-icon-2x p-4">
                        <!--begin::Svg Icon-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                          height="24px" viewBox="0 0 24 24" version="1.1">
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
                        <span class="d-lg-none">New Leads</span>
                      </span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript: void(0)" data-toggle="modal" class="menu-link menu-toggle"
                      data-target="#messagesModal">
                      <!-- Button trigger modal-->
                      <span class="svg-icon svg-icon-primary svg-icon-2x p-4">
                        <!--begin::Svg Icon-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                          height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
                            <path
                              d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z"
                              fill="#000000" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                        <span class="d-lg-none">Messages</span>
                      </span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript: void(0);" class="menu-link menu-toggle" data-toggle="modal"
                      data-target="#tasksModal">
                      <span class="svg-icon svg-icon-primary svg-icon-2x p-4">
                        <!--begin::Svg Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                          height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                              d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z"
                              fill="#000000" />
                            <path
                              d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z"
                              fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                        <span class="d-lg-none">Task and Events</span>
                      </span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                      <span class="svg-icon svg-icon-primary svg-icon-2x p-4">
                        <!--begin::Svg Icon-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                          height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                              d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z"
                              fill="#000000" />
                            <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                        <span class="d-lg-none">Batchprint</span>
                      </span>
                    </a>
                  </li>
                </ul>
                <!--end::Header Nav-->
              </div>
              <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <?php require '../config/top-bar.php'?>
            <!--end::Topbar-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->
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
                  <h5 class="text-dark font-weight-bold my-1 mr-5">Home</h5>
                  <!--end::Page Title-->
                  <!--begin::Breadcrumb-->
                  <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                      <a href="my-clients/clients-list" class="text-muted">My Clients</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="my-clients/clients-list" class="text-muted">Clients List</a>
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
              <!--begin::Entry-->
              <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                  <div class="card card-custom mt-5">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5>Search My Clients</h5>
                        <div class="d-flex">
                          <a href="#" class="btn btn-sm btn-outline-primary mr-2">
                            <i class="fa fa-play" aria-hidden="true"></i>
                            Watch Quick Video
                          </a>
                          <a href="my-clients/add-client" class="btn btn-sm btn-outline-success">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Add Client
                          </a>
                        </div>
                      </div>
                      <div class="row no-gutters">
                        <div class="col-lg-10">
                          <div class="collapse multi-collapse show" id="basicSearch">
                            <form>
                              <div class="d-flex justify-content-around align-items-center m-4">
                                <label>Search By Name or Email </label>
                                <input type="text" class="form-control datatable-input w-50 mr-2"
                                  placeholder="E.g: Jessica Davis" data-col-index="1" />
                                <button class="btn btn-sm btn-primary btn-primary--icon" id="kt_search">
                                  <span>
                                    <i class="la la-search"></i>
                                    <span>Search</span>
                                  </span>
                                </button>
                              </div>
                            </form>
                          </div>
                          <div class="collapse multi-collapse" id="advancedSearch">
                            <div class="card card-body m-3">
                              <!--begin: Search Form-->
                              <form class="mb-15">
                                <div class="row mb-6">
                                  <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Search By Name or Email:</label>
                                    <input type="text" class="form-control datatable-input"
                                      placeholder="E.g: Jessica Davis" data-col-index="1" />
                                  </div>
                                  <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Start Date:</label>
                                    <input type="date" class="form-control datatable-input"
                                      placeholder="E.g: MM/DD/YYYY" data-col-index="5" />
                                  </div>
                                  <div class="col-lg-6 mb-lg-0 mb-6">
                                    <label>Added From:</label>
                                    <div class="input-daterange input-group" id="kt_datepicker">
                                      <input type="date" class="form-control datatable-input" name="start"
                                        placeholder="From" data-col-index="4" />
                                      <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="la la-ellipsis-h"></i>
                                        </span>
                                      </div>
                                      <input type="date" class="form-control datatable-input" name="end"
                                        placeholder="To" data-col-index="4" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row mb-8">
                                  <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Status:</label>
                                    <select class="form-control datatable-input" data-col-index="7">
                                      <option value="All">Select Status</option>
                                      <option value="All">All</option>
                                      <option value="Lead">Lead</option>
                                      <option value="Prospect">Prospect</option>
                                      <option value="Lead / Inactive">Lead / Inactive</option>
                                      <option value="Client">Client</option>
                                      <option value="Inactive">Inactive</option>
                                      <option value="Suspended">Suspended</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Reffered By:</label>
                                    <select class="form-control datatable-input" data-col-index="3">
                                      <option value="All">Refferred By</option>
                                      <option value="All">Walter White</option>
                                      <option value="Lead">Veronica Lodge</option>
                                      <option value="Prospect">Hank</option>
                                      <option value="Lead / Inactive">Marie</option>
                                      <option value="Client">Alfred Solomons</option>
                                      <option value="Inactive">Thomas Shelby</option>
                                      <option value="Suspended">Hannah Baker</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Assigned To:</label>
                                    <select class="form-control datatable-input" data-col-index="2">
                                      <option value="All">Assigned To</option>
                                      <option value="All">Walter White</option>
                                      <option value="Lead">Veronica Lodge</option>
                                      <option value="Prospect">Hank</option>
                                      <option value="Lead / Inactive">Marie</option>
                                      <option value="Client">Alfred Solomons</option>
                                      <option value="Inactive">Thomas Shelby</option>
                                      <option value="Suspended">Hannah Baker</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-3 mb-lg-0 mb-6">
                                    <label>Chargebee Status:</label>
                                    <select class="form-control datatable-input" data-col-index="2">
                                      <option value="All">Select Chargebee Status</option>
                                      <option value="Lead">Active</option>
                                      <option value="Prospect">Waiting For First Letter Created</option>
                                      <option value="Prospect">Cancelled</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row mt-8">
                                  <div class="col-lg-12">
                                    <button class="btn btn-primary btn-primary--icon" id="kt_search">
                                      <span>
                                        <i class="la la-search"></i>
                                        <span>Search</span>
                                      </span>
                                    </button>&#160;&#160;
                                    <button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
                                      <span>
                                        <i class="la la-close"></i>
                                        <span>Reset</span>
                                      </span>
                                    </button>
                                  </div>
                                </div>
                              </form>
                              <!-- end : search form -->
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="m-4">
                            <button class="btn btn-sm btn-primary" type="button" data-toggle="collapse"
                              data-target=".multi-collapse" aria-expanded="false"
                              aria-controls="basicSearch advancedSearch" id="search-toggle">
                              Advanced Search
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--begin::Notice-->
                  <div class="alert alert-custom alert-white alert-shadow gutter-b m-3" role="alert">
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
                      This page lists your <a href="#">clients</a>, <a href="#">prospects</a> and <a href="#">leads</a>.
                      Use <a href="#">Advanced Search</a> above to sort by affiliate or team member. Use Quick Filter to
                      sort by status
                      (for follow-up). Click a client’s name to access records, the pencil icon to edit a profile or
                      click a status to
                      change it. If you enable portal access or set an agreement in a new client profile, icons of
                      envelopes or
                      checkmarks will appear below. Mouse-over the icons below to see more details. To learn the system,
                      use your <a href="#">Sample Client</a>.
                    </div>
                  </div>
                  <!--end::Notice-->
                  <!--begin::Card-->
                  <div class="card card-custom">
                    <div class="card-header">
                      <div class="card-title">
                        <span class="card-icon">
                          <i class="flaticon2-delivery-package text-primary"></i>
                        </span>
                        <h3 class="card-label">Search My Clients</h3>
                      </div>
                      <div class="card-toolbar">
                      </div>
                    </div>
                    <div class="card-body">
                      <!--begin: Datatable-->
                      <div class="table-responsive">
                        <div class="d-flex justify-content-around align-items-center">
                          <div>
                            Learn How To Find Clients Faster
                            <a href="#">Click Here</a>
                          </div>
                        </div>
                        <table class="table table-bordered table-hover" id="clients-list-datatable">
                          <thead>
                            <tr>
                              <th>Record ID</th>
                              <th>Name</th>
                              <th>Assigned To</th>
                              <th>Referred By</th>
                              <th>Added</th>
                              <th>Start Date</th>
                              <th>Last Login</th>
                              <th>Status</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                      <!--end: Datatable-->
                    </div>
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Container-->
              </div>
              <!--end::Entry-->
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
  <?php require '../config/user-panel.php'?>
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
  <script src="assets/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
  <script src="assets/js/my-clients/clients-list.js"></script>
</body>
<!--end::Body-->
<?php include '../config/modals.php'?>

</html>