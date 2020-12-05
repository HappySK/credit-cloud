<?php
  require '../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  session_start();
  class roles_permissions_manager extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function is_user_permissions_exist($role_id)
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__permissions` WHERE `user_id` = ? AND `role_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$role_id]);
        return ($stmt->rowCount() == 1) ? true : false;
      } 
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function add_permissions($permissions)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__permissions`(`user_id`,`role_id`, `all_clients_and_leads`, `assigned_clients_and_leads`, `delete_clients_and_leads`, `add_new_clients_and_leads`, `creditor_furnisher_add_edit_view`, `creditor_furnisher_delete`, `creditor_furnisher_view_only`, `library_add_edit_view`, `library_delete`, `library_view_only`, `my_schedule_add_edit-view`, `my_schedule_delete`, `my_schedule_view_only`, `client_agreement_add_edit_view`, `client_agreement_delete`, `client_agreement_view_only`, `team_members_add_edit_view`, `team_members_delete`, `team_member_view_only`, `roles_and_permissions_add_edit_view`, `roles_and_permissions_delete`, `roles_and_permissions_view_only`, `business_dashboard_view_only`, `affiliate_comission_payment_add_edit_view`, `everything_progress_activity`, `everything_pending_list`, `everything_todos`, `everything_files_activity`, `everything_communication`, `chargebee_edit`, `invoice_add_edit_view`, `invoice_delete`, `invoice_view`, `company_profile_edit`, `tasks_edit`, `tasks_bulk_edit`, `simple_audit_add_edit_view`, `simple_audit_delete`, `simple_audit_view_only`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$permissions['role_id'], $permissions['all-clients-and-leads'],$permissions['assigned-clients-and-leads'],$permissions['delete-clients-and-leads'],$permissions['add-new-clients-and-leads'],$permissions['creditor-furnisher-add-edit-view'],$permissions['creditor-furnisher-delete'],$permissions['creditor-furnisher-view-only'],$permissions['library-add-edit-view'],$permissions['library-delete'],$permissions['library-view-only'],$permissions['my-schedule-add-edit-view'],$permissions['my-schedule-delete'],$permissions['my-schedule-view-only'],$permissions['client-agreement-add-edit-view'],$permissions['client-agreement-delete'],$permissions['client-agreement-view-only'],$permissions['team-members-add-edit-view'],$permissions['team-members-delete'],$permissions['team-members-view-only'],$permissions['roles-and-permissions-add-edit-view'],$permissions['roles-and-permissions-delete'],$permissions['roles-and-permissions-view-only'],$permissions['business-dashboard-view-only'],$permissions['affiliate-commission-payment-add-edit-view'],$permissions['everything-progress-activity'],$permissions['everything-pending-list'],$permissions['everything-todos'],$permissions['everything-files-activity'],$permissions['everything-communication'],$permissions['chargebee-edit'],$permissions['invoice-add-edit-view'],$permissions['invoice-delete'],$permissions['invoice-view'],$permissions['company-profile-edit'],$permissions['tasks-edit'],$permissions['tasks-bulk-edit'],$permissions['simple-audit-add-edit-view'],$permissions['simple-audit-delete'],$permissions['simple-audit-view-only']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_permissions($permissions)
    {
      try
      {
        $sql = "UPDATE `mycompany__permissions` SET `all_clients_and_leads` = ?,`assigned_clients_and_leads`= ?,`delete_clients_and_leads` = ?,`add_new_clients_and_leads` = ?,`creditor_furnisher_add_edit_view` = ?,`creditor_furnisher_delete` = ?,`creditor_furnisher_view_only` = ?,`library_add_edit_view` = ?,`library_delete` = ?,`library_view_only` = ?,`my_schedule_add_edit-view` = ?,`my_schedule_delete` = ?,`my_schedule_view_only` = ?,`client_agreement_add_edit_view` = ?,`client_agreement_delete` = ?,`client_agreement_view_only` = ?,`team_members_add_edit_view` = ?,`team_members_delete` = ?,`team_member_view_only` = ?,`roles_and_permissions_add_edit_view` = ?,`roles_and_permissions_delete` = ?,`roles_and_permissions_view_only` = ?,`business_dashboard_view_only` = ?,`affiliate_comission_payment_add_edit_view` = ?,`everything_progress_activity` = ?,`everything_pending_list` = ?,`everything_todos` = ?,`everything_files_activity` = ?,`everything_communication` = ?,`chargebee_edit` = ? ,`invoice_add_edit_view` = ?,`invoice_delete` = ?,`invoice_view` = ?,`company_profile_edit` = ?,`tasks_edit` = ?,`tasks_bulk_edit` = ?,`simple_audit_add_edit_view` = ?,`simple_audit_delete` = ? ,`simple_audit_view_only` = ?  WHERE `user_id` = ? AND `role_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$permissions['all-clients-and-leads'],$permissions['assigned-clients-and-leads'],$permissions['delete-clients-and-leads'],$permissions['add-new-clients-and-leads'],$permissions['creditor-furnisher-add-edit-view'],$permissions['creditor-furnisher-delete'],$permissions['creditor-furnisher-view-only'],$permissions['library-add-edit-view'],$permissions['library-delete'],$permissions['library-view-only'],$permissions['my-schedule-add-edit-view'],$permissions['my-schedule-delete'],$permissions['my-schedule-view-only'],$permissions['client-agreement-add-edit-view'],$permissions['client-agreement-delete'],$permissions['client-agreement-view-only'],$permissions['team-members-add-edit-view'],$permissions['team-members-delete'],$permissions['team-members-view-only'],$permissions['roles-and-permissions-add-edit-view'],$permissions['roles-and-permissions-delete'],$permissions['roles-and-permissions-view-only'],$permissions['business-dashboard-view-only'],$permissions['affiliate-commission-payment-add-edit-view'],$permissions['everything-progress-activity'],$permissions['everything-pending-list'],$permissions['everything-todos'],$permissions['everything-files-activity'],$permissions['everything-communication'],$permissions['chargebee-edit'],$permissions['invoice-add-edit-view'],$permissions['invoice-delete'],$permissions['invoice-view'],$permissions['company-profile-edit'],$permissions['tasks-edit'],$permissions['tasks-bulk-edit'],$permissions['simple-audit-add-edit-view'],$permissions['simple-audit-delete'],$permissions['simple-audit-view-only'],$_SESSION['user_id'],$permissions['role_id']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_permissions($role_id)
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__permissions` WHERE `user_id` = ? AND `role_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$role_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $roles_permissions = new roles_permissions_manager($config->DB_CREDENTIALS);
  if(isset($_POST['role_id']))
  {
    $permissions = array(
      'all-clients-and-leads' => isset($_POST['all-clients-and-leads']) ? 'true' : 'false',
      'assigned-clients-and-leads' => isset($_POST['assigned-clients-and-leads']) ? 'true' : 'false',
      'delete-clients-and-leads' => isset($_POST['delete-clients-and-leads']) ? 'true' : 'false',
      'add-new-clients-and-leads' => isset($_POST['add-new-clients-and-leads']) ? 'true' : 'false',
      'creditor-furnisher-add-edit-view' => isset($_POST['creditor-furnisher-add-edit-view']) ? 'true' : 'false',
      'creditor-furnisher-delete' => isset($_POST['creditor-furnisher-delete']) ? 'true' : 'false',
      'creditor-furnisher-view-only' => isset($_POST['creditor-furnisher-view-only']) ? 'true' : 'false',
      'library-add-edit-view' => isset($_POST['library-add-edit-view']) ? 'true' : 'false',
      'library-delete' => isset($_POST['library-delete']) ? 'true' : 'false',
      'library-view-only' => isset($_POST['library-view-only']) ? 'true' : 'false',
      'my-schedule-add-edit-view' => isset($_POST['my-schedule-add-edit-view']) ? 'true' : 'false',
      'my-schedule-delete' => isset($_POST['my-schedule-delete']) ? 'true' : 'false',
      'my-schedule-view-only' => isset($_POST['my-schedule-view-only']) ? 'true' : 'false',
      'client-agreement-add-edit-view' => isset($_POST['client-agreement-add-edit-view']) ? 'true' : 'false',
      'client-agreement-delete' => isset($_POST['client-agreement-delete']) ? 'true' : 'false',
      'client-agreement-view-only' => isset($_POST['client-agreement-view-only']) ? 'true' : 'false',
      'team-members-add-edit-view' => isset($_POST['team-members-add-edit-view']) ? 'true' : 'false',
      'team-members-delete' => isset($_POST['team-members-delete']) ? 'true' : 'false',
      'team-members-view-only' => isset($_POST['team-members-view-only']) ? 'true' : 'false',
      'roles-and-permissions-add-edit-view' => isset($_POST['roles-and-permissions-add-edit-view']) ? 'true' : 'false',
      'roles-and-permissions-delete' => isset($_POST['roles-and-permissions-delete']) ? 'true' : 'false',
      'roles-and-permissions-view-only' => isset($_POST['roles-and-permissions-view-only']) ? 'true' : 'false',
      'business-dashboard-view-only' => isset($_POST['business-dashboard-view-only']) ? 'true' : 'false',
      'affiliate-commission-payment-add-edit-view' => isset($_POST['affiliate-commission-payment-add-edit-view']) ? 'true' : 'false',
      'everything-progress-activity' => isset($_POST['everything-progress-activity']) ? 'true' : 'false',
      'everything-pending-list' => isset($_POST['everything-pending-list']) ? 'true' : 'false',
      'everything-todos' => isset($_POST['everything-todos']) ? 'true' : 'false',
      'everything-files-activity' => isset($_POST['everything-files-activity']) ? 'true' : 'false',
      'everything-communication' => isset($_POST['everything-communication']) ? 'true' : 'false',
      'chargebee-edit' => isset($_POST['chargebee-edit']) ? 'true' : 'false',
      'invoice-add-edit-view' => isset($_POST['invoice-add-edit-view']) ? 'true' : 'false',
      'invoice-delete' => isset($_POST['invoice-delete']) ? 'true' : 'false',
      'invoice-view' => isset($_POST['invoice-view']) ? 'true' : 'false',
      'company-profile-edit' => isset($_POST['company-profile-edit']) ? 'true' : 'false',
      'tasks-edit' => isset($_POST['tasks-edit']) ? 'true' : 'false',
      'tasks-bulk-edit' => isset($_POST['tasks-bulk-edit']) ? 'true' : 'false',
      'simple-audit-add-edit-view' => isset($_POST['simple-audit-add-edit-view']) ? 'true' : 'false',
      'simple-audit-delete' => isset($_POST['simple-audit-delete']) ? 'true' : 'false',
      'simple-audit-view-only' => isset($_POST['simple-audit-view-only']) ? 'true' : 'false',
      'role_id' =>$_POST['role_id'] 
    );

    // echo '<pre>';
    // print_r($permissions);
    // echo '</pre>';
    
    if($roles_permissions->is_user_permissions_exist($permissions['role_id']))
    {
      $roles_permissions->update_permissions($permissions);
    }
    else
    {
      $roles_permissions->add_permissions($permissions);            
    }
    header('Location:../../../my-company/roles-permissions');
  }

  if(isset($_GET['roleid']))  
  {
    echo json_encode($roles_permissions->get_permissions($_GET['roleid']));
  }
  else
  {
    echo "Inside False Statement";
  }
?>