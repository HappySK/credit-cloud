<div class="topbar">
  <!-- start::nav-link -->
  <ul class="nav topbar-item">
    <li class="nav-item">
      <a class="nav-link" href="#">My Account</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">New Features</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        Help & Support
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Support Center</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Watch Quick Videos</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Live Software Classes</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Tips and Tricks</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">New Feature Requests</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Resources</a>
      </div>
    </li>
  </ul>
  <!-- end::nav-link -->
  <div class="topbar-item">
    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
      id="kt_quick_user_toggle">
      <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
      <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
        <?php
        if(isset($user_details->first_name))
        {
          echo $user_details->first_name;
        }
        else
        {
        ?>
        Not Signed In ? Please <a href="user/sign-in">Sign In</a>
        <?php
        }
        ?>
      </span>
      <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
        <span class="symbol-label font-size-h5 font-weight-bold">
          <?php 
            if(isset($user_details->first_name)) 
            { 
              echo substr($user_details->first_name,0, 1);
            }
            else
            {
              echo 'X';
            }
          ?>
        </span>
      </span>
    </div>
    <?php 
      if(!isset($user_details->first_name)) 
      { 
        echo '<a href="user/sign-in" class="btn btn-sm btn-link">Sign In</a>';
      }
    ?>
  </div>
  <!--end::User-->
</div>