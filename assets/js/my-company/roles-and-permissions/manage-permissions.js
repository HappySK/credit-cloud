$(document).ready(function () {
	const urlParams = new URLSearchParams(location.search);
	for (const [key, value] of urlParams) {
		role_id = value;
  }
  
  // For getting the permissions from the database in server-side/class/my-company/permissions-manager.php
  $.get('server-side/class/my-company/permissions-manager.php',{roleid : role_id},function(permissions,status){
    document.getElementById('all-clients-and-leads').checked = convert(permissions.add_clients_and_leads);
    document.getElementById('assigned-clients-and-leads').checked = convert(permissions.assigned_clients_and_leads);
    document.getElementById('delete-clients-and-leads').checked = convert(permissions.delete_clients_and_leads);
    document.getElementById('add-new-clients-and-leads').checked = convert(permissions.add_new_clients_and_leads);
    document.getElementById('creditor-furnisher-add-edit-view').checked = convert(permissions.creditor_furnisher_add_edit_view);
    document.getElementById('creditor-furnisher-delete').checked = convert(permissions.creditor_furnisher_delete);
    document.getElementById('creditor-furnisher-view-only').checked = convert(permissions.creditor_furnisher_view_only);
    document.getElementById('library-add-edit-view').checked = convert(permissions.library_add_edit_view);
    document.getElementById('library-delete').checked = convert(permissions.library_delete);
    document.getElementById('library-view-only').checked = convert(permissions.library_view_only);
    document.getElementById('my-schedule-add-edit-view').checked = convert(permissions.my_schedule_add_edit_view);
    document.getElementById('my-schedule-delete').checked = convert(permissions.my_schedule_delete);
    document.getElementById('my-schedule-view-only').checked = convert(permissions.my_schedule_view_only);
    document.getElementById('client-agreement-add-edit-view').checked = convert(permissions.client_agreement_add_edit_view);
    document.getElementById('client-agreement-delete').checked = convert(permissions.client_agreement_delete);
    document.getElementById('client-agreement-view-only').checked = convert(permissions.client_agreement_view_only);
    document.getElementById('team-members-add-edit-view').checked = convert(permissions.team_members_add_edit_view);
    document.getElementById('team-members-delete').checked = convert(permissions.team_members_delete);
    document.getElementById('team-members-view-only').checked = convert(permissions.team_members_view_only);
    document.getElementById('roles-and-permissions-add-edit-view').checked = convert(permissions.roles_and_permissions_add_edit_view);
    document.getElementById('roles-and-permissions-delete').checked = convert(permissions.roles_and_permissions_delete);
    document.getElementById('roles-and-permissions-view-only').checked = convert(permissions.roles_and_permissions_view_only);
    document.getElementById('business-dashboard-view-only').checked = convert(permissions.business_dashboard_view_only);
    document.getElementById('affiliate-commission-payment-add-edit-view').checked = convert(permissions.affiliate_commission_payment_add_edit_view);
    document.getElementById('everything-progress-activity').checked = convert(permissions.everything_progress_activity);
    document.getElementById('everything-pending-list').checked = convert(permissions.everything_pending_list);
    document.getElementById('everything-todos').checked = convert(permissions.everything_todos);
    document.getElementById('everything-files-activity').checked = convert(permissions.everything_files_activity);
    document.getElementById('everything-communication').checked = convert(permissions.everything_communication);
    document.getElementById('chargebee-edit').checked = convert(permissions.chargebee_edit);
    document.getElementById('invoice-add-edit-view').checked = convert(permissions.invoice_add_edit_view);
    document.getElementById('invoice-delete').checked = convert(permissions.invoice_delete);
    document.getElementById('invoice-view').checked = convert(permissions.invoice_view);
    document.getElementById('company-profile-edit').checked = convert(permissions.company_profile_edit);
    document.getElementById('tasks-edit').checked = convert(permissions.tasks_edit);
    document.getElementById('tasks-bulk-edit').checked = convert(permissions.tasks_bulk_edit);
    document.getElementById('simple-audit-add-edit-view').checked = convert(permissions.simple_audit_add_edit_view);
    document.getElementById('simple-audit-delete').checked = convert(permissions.simple_audit_delete);
    document.getElementById('simple-audit-view-only').checked = convert(permissions.simple_audit_view_only);
  },'JSON')

  // For converting string to bool
  function convert(value)
  {
    return (value == 'true') ? true : false;
  }
});
