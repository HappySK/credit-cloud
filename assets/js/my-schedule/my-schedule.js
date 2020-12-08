
 $('#date-range-picker').datepicker({
	rtl: KTUtil.isRTL(),
	todayHighlight: true,
 });

// Agenda Tasks datatable
$('#agenda-tasks-table').DataTable({
	info: false,
	searching: false,
	paging: false,
	ajax: 'assets/datatables/my-schedule/tasks-datatable.php',
	columns: [
		{data : 'client_name'},
		{data : 'actions'}
	]
});

// Bulk edit tasks datatable
bulk_edit_task_datatable = $('#bulk-edit-task-table').DataTable({
	info: false,
	responsive: true,
	// searching: false,
	processing: false,
	serverSide: false,
	order: [],		
	ajax: 'assets/datatables/my-schedule/bulk-edit-datatable.php',
	columns: [
		{data : 'status'},
		{data : 'task_type'},
		{data : 'subject'},
		{data : 'due_date_and_time'},
		{data : 'client_name'},
		{data : 'team_member'}
	]
});

// Rendering client-name through ajax calls
$.get('server-side/class/add-client-data.php',{action : 'get_client_data'},function(client_data){
	$.each(client_data,function(index,client_data){
		$('#client-name').append('<option value="'+client_data.client_name+'">'+client_data.client_name+'</option>');
		$('#agenda-client-name').append('<option value="'+client_data.client_name+'">'+client_data.client_name+'</option>');
	})
},'JSON')

// Rendering team-member-name through ajax calls
$.get('server-side/class/my-company/team-member.php',{action : 'get_team_members'},function(team_member,status){
	$.each(team_member,function(index,member){
		$('#agenda-team-member').append('<option value="'+member.team_member_name+'">'+member.team_member_name+'</option>');
		$('#team-member').append('<option value="'+member.team_member_name+'">'+member.team_member_name+'</option>');
		$('#dynamic-field-team-member').append('<option value="'+member.team_member_name+'">'+member.team_member_name+'</option>');
	})
},'JSON')

//Datetime picker
$('#due-date-time').datetimepicker({
	format : 'YYYY-MM-DD hh:mm a'
});

// Opening new task
$('#create-new-task-btn').click(function(){
	sessionStorage.removeItem('task_id');
	$('#create-task-form')[0].reset();
})

//Submission of task creation
$('#create-task-form').submit(function(e){
	e.preventDefault();
	task_data = {
		action : 'add_task',
		task_id : sessionStorage.getItem('task-id'),
		task_type : $('#task-type option:selected').text(),
		subject : $('#subject').val(),
		due_date_time : $('#due-date-time-value').val(),
		client_name : $('#agenda-client-name option:selected').text(),
		team_member_name : $('#agenda-team-member option:selected').text(),
		notes : $('#notes').val()
	}
	// console.log(task_data)
	$.post('server-side/class/my-schedule/task-manager.php',task_data,function(result,status){
		// console.log(result)
		Swal.fire("Assigned", "The Task has been assigned", "success").then(
			function () {
				reload_datatables();
			}
		);
	})
})

//Editing the task details
$(document).on('click','.agenda-tasks-edit-btn',function(){
	sessionStorage.setItem('task-id',$(this).attr('task_id'))
	$.get('server-side/class/my-schedule/task-manager',{action : 'get_task_details', task_id : $(this).attr('task_id')},function(data,status){
		// console.log(data)
		$('#task-type [value="'+data.task_type+'"]').attr('selected','selected')
		$('#subject').val(data.subject)
		$('#due-date-time-value').val(data.due_date_and_time)
		$('#agenda-client-name [value="'+data.client_name+'"]').attr('selected','selected')
		$('#agenda-team-member [value="'+data.team_member+'"]').attr('selected','selected')
		$('#notes').val(data.notes)
	},'JSON')
})

// Deleting tasks from the agenda tasks datatable
$(document).on('click','.agenda-task-delete-btn', function(){
	$.post('server-side/class/my-schedule/task-manager.php',{action : 'delete_task', task_id : $(this).attr('task_id')},function(data,status){
		// console.log(data)
		Swal.fire("Deleted!", "The Task has been removed", "info").then(
			function () {
				reload_datatables();
			}
		);
	})
})
			
// Filtering the data in bulk edit table
$('#filter').change(function(){
	switch($("#filter option:selected").val())
	{
		case 'completed/incompleted': $('#filter-options').html('<div class="form-group row align-items-center" id="filter-status">'+
																	'<label for="dynamic-field-status" class="col-lg-2">'+
																	'<strong>Status</strong></label>'+
																	'<select name="dynamic-field-status" id="dynamic-field-status"'+
																	'class="custom-select col-lg-4">'+
																	'<option value="">Select Status</option>'+
																	'<option value="completed">Completed</option>'+
																	'<option value="incompleted">Incompleted</option>'+
																	'</select></div>')																	
																	break;
		case 'task-type': $('#filter-options').html('<div class="form-group row align-items-center" id="filter-task-type">'+
											'<label id="dynamic-field-task-type" class="col-lg-2">' +
												'<strong>Task Type</strong>'+
											'</label>'+
											'<select name="dynamic-field-task-type" id="dynamic-field-task-type" '+
												'class="custom-select col-lg-4">'+
												'<option value="">Select Task Type</option>'+
												'<option value="general">General</option>'+
												'<option value="billing">Billing</option>'+
												'<option value="send invoice">Send Invoice</option>'+
												'<option value="follow-up">Follow Up</option>'+
												'<option value="appointment">Appointment</option>'+
												'<option value="other">Other</option>'+
											'</select>'+
										'</div>')
											break;
		case 'task-due-date': $('#filter-options').html('<div class="form-group row" id="filter-date">'+
													'<label class="col-form-label text-right col-lg-3 col-sm-12">'+
														'<strong>From / To Date</strong>'+
													'</label>'+
													'<div class="col-lg-4 col-md-9 col-sm-12">'+
														'<div class="input-daterange input-group" id="date-range-picker"'+
															'data-flip="false">'+
															'<input type="text" class="form-control" name="start" id="date-start" />'+
															'<div class="input-group-append">'+
																'<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>'+
															'</div>'+
															'<input type="text" class="form-control" name="end" id="date-end" />'+
														'</div>'+
														'<span class="form-text text-muted">Linked pickers for date range'+
															'selection</span>'+
													'</div>'+
												'</div>')
													break;
		case 'client': $('#filter-options').html('<div class="form-group row align-items-center" id="filter-client-name">'+
										'<label class="col-lg-2 col-sm-12"><strong>Client Name</strong></label>'+
										'<input type="text" name="dynamic-field-client-name" id="dynamic-field-client-name" '+
											'class="form-control col-lg-3 w-50" />'+
										'<button type="button" '+
											'class="btn btn-sm btn-outline-primary offset-lg-1 col-lg-1 col-sm-12">Submit</button>'+
										'</div>')
										break;
		case 'assigned-team-member':$.get('server-side/class/my-company/team-member.php',{action : 'get_team_members'},function(team_member,status){
																	$.each(team_member,function(index,member){
																		$('#dynamic-field-team-member').append('<option value="'+member.team_member_name+'">'+member.team_member_name+'</option>');
																	})
																},'JSON') 
																$('#filter-options').html('<div class="form-group row align-items-center" id="filter-team-member">'+
																	'<label class="col-lg-2 col-sm-12"><strong>Assigned Team Member</strong></label>'+
																	'<select name="dynamic-field-team-member" id="dynamic-field-team-member" '+
																		'class="custom-select col-lg-4 col-sm-12">' +
																					'<option value="">Select Team Member</option> '+
																	'</select>'+
																	'</div>')
																	break;
		default : $('#filter-options').html(null);
	}
})

//Selecting all tasks in bulk-edit-datatable
$('#select-all-checkbox').change(function(){
	$('.status-checkbox').prop('checked',$(this).prop('checked'))
})

// Applying required action
$('#apply-action-btn').click(function(){
	bulk_edit_task_id = $('.status-checkbox:checked').map(function(){
												return $(this).attr('task_id')										
											}).get().join(' ');
	switch($('#action-required option:selected').val())
	{
		case 'delete' : $.post('server-side/class/my-schedule/task-manager',{task_id : bulk_edit_task_id, action : 'mark_as_deleted'},function(data,status){
											// console.log(data)
											Swal.fire("Deleted", "The Marked tasks have been deleted", "info").then(
												function () {
													reload_datatables();
												}
											);
										})
										break;
		case 'mark-as-completed'	:	$.post('server-side/class/my-schedule/task-manager',{task_id : bulk_edit_task_id, action : 'mark_as_completed'},function(data,status){
																	// console.log(data)
																	Swal.fire("Marked as Completed", "The Task has been marked as completed", "success").then(
																		function () {
																			reload_datatables();
																		}
																	);
																})
																break;
		case 'mark-as-incompleted'	: $.post('server-side/class/my-schedule/task-manager',{task_id : bulk_edit_task_id, action : 'mark_as_incompleted'},function(data,status){
																		// console.log(data)
																		Swal.fire("Marked as Incompleted", "The Tasks have been marked as Incompleted", "success").then(
																			function () {
																				reload_datatables();
																			}
																		);
																	})
																	break;
		default 	:	console.log("Invalid Action");
	}
})

// Applying searching on status column
$(document).on('change','#dynamic-field-status',function(){
	bulk_edit_task_datatable.search('').columns().search('').draw();
	bulk_edit_task_datatable.column(0).search(this.value).draw();
})

// Applying filter on task-type
$(document).on('change','#dynamic-field-task-type',function(){
	bulk_edit_task_datatable.search('').columns().search('').draw();
	bulk_edit_task_datatable.column(1).search(this.value).draw();
})

// Applying filter on client-name
$(document).on('keyup','#dynamic-field-client-name',function(){
	bulk_edit_task_datatable.search('').columns().search('').draw();
	bulk_edit_task_datatable.column(4).search(this.value).draw();
})

// Applying filter on team-member-name
$(document).on('change','#dynamic-field-team-member',function(){
	bulk_edit_task_datatable.search('').columns().search('').draw();
	bulk_edit_task_datatable.column(5).search(this.value).draw();
})

"use strict";

var KTCalendarBackgroundEvents = (function () {
	return {
		//main function to initiate the module
		init: function () {
			var todayDate = moment().startOf("day");
			var YM = todayDate.format("YYYY-MM");
			var YESTERDAY = todayDate.clone().subtract(1, "day").format("YYYY-MM-DD");
			var TODAY = todayDate.format("YYYY-MM-DD");
			var TOMORROW = todayDate.clone().add(1, "day").format("YYYY-MM-DD");

			var calendarEl = document.getElementById("my-schedule");
			var calendar = new FullCalendar.Calendar(calendarEl, {
				plugins: ["interaction", "dayGrid", "timeGrid", "list"],

				isRTL: KTUtil.isRTL(),
				header: {
					left: "prev,next today",
					center: "title",
					right: "dayGridMonth,timeGridWeek,timeGridDay,agenda_tasks",
				},
		
				customButtons: {
					agenda_tasks: {
						text: 'Agenda/Tasks',
						click: function(data) {
							$('#agenda-tasks-modal').modal('show')
							}
					}
				},

				height: 800,
				contentHeight: 780,
				aspectRatio: 3, // see: https://fullcalendar.io/docs/aspectRatio

				nowIndicator: true,
				now: TODAY + "T09:25:00", // just for demo

				views: {
					dayGridMonth: { buttonText: "month" },
					timeGridWeek: { buttonText: "week" },
					timeGridDay: { buttonText: "day" },
				},

				defaultView: "dayGridMonth",
				defaultDate: TODAY,

				editable: true,
				eventLimit: true, // allow "more" link when too many events
				navLinks: true,
				businessHours: true, // display business hours
				events:
					"server-side/class/my-schedule/event-management?action=fetch_events",
				selectable: true,
				selectHelper: true,
				select: function (start, end, allDay) {
					$("#start-date").val(start.startStr);
					$("#end-date").val(start.endStr);
					$("#add-event-modal").modal("show");
				},

				eventDrop: function (info) {
					$("#start-date").val(convert_to_date(info.event.start));
					$("#end-date").val(convert_to_date(info.event.end));
					$.ajax({
						url: "server-side/class/my-schedule/event-management.php",
						type: "GET",
						data: {
							action: "fetch_event",
							event_id: info.event.id,
						},
						dataType: "JSON",
						success: function (response) {
							$(
								'#event-type option[value="' + response[0].event_type + '"]'
							).attr("selected", "selected");
							$("#event-subject").val(response[0].event_subject);
							$(
								'#client-name option[value="' + response[0].client_name + '"]'
							).attr("selected", "selected");
							$(
								'#team-member-name option[value="' +
									response[0].team_member_name +
									'"]'
							).attr("selected", "selected");
							$("#location").val(response[0].location);
							$("#remarks").val(response[0].remarks);
						},
					});
					var event_type = document.getElementById("event-type");
					var start_time = document.getElementById("start-time");
					var end_time = document.getElementById("end-time");
					var client_name = document.getElementById("client-name");
					var team_member_name = document.getElementById("team-member-name");
					$.ajax({
						url:
							"server-side/class/my-schedule/event-management?action=update_event",
						type: "POST",
						data: {
							action: "update_event",
							event_id: info.event.id,
							event_type: event_type.options[event_type.selectedIndex].value,
							event_subject: document.getElementById("event-subject").value,
							start_date_and_time: convert(info.event.start),
							end_date_and_time: convert(info.event.end),
							client_name: client_name.options[client_name.selectedIndex].value,
							team_member_name:
								team_member_name.options[team_member_name.selectedIndex].value,
							location: document.getElementById("location").value,
							remarks: document.getElementById("remarks").value,
						},
						success: function (response) {
							console.log(response);
						},
					}).then(location.reload());
				},

				eventClick: function (info) {
					$.ajax({
						url: "server-side/class/my-schedule/event-management.php",
						type: "GET",
						data: {
							action: "fetch_event",
							event_id: info.event.id,
						},
						dataType: "JSON",
						success: function (response) {
							console.log(response)
							$(
								'#event-type option[value="' + response[0].event_type + '"]'
							).attr("selected", "selected");
							$("#event-subject").val(response[0].event_subject);
							$(
								'#client-name option[value="' + response[0].client_name + '"]'
							).attr("selected", "selected");
							$(
								'#team-member-name option[value="' +
									response[0].team_member_name +
									'"]'
							).attr("selected", "selected");
							$("#location").val(response[0].location);
							$("#remarks").val(response[0].remarks);
						},
					});
					$("#add-event-modal").modal("show");
				},

				eventRender: function (info) {
					var element = $(info.el);

					if (
						info.event.extendedProps &&
						info.event.extendedProps.description
					) {
						if (element.hasClass("fc-day-grid-event")) {
							element.data("content", info.event.extendedProps.description);
							element.data("placement", "top");
							KTApp.initPopover(element);
						} else if (element.hasClass("fc-time-grid-event")) {
							element
								.find(".fc-title")
								.append(
									'<div class="fc-description">' +
										info.event.extendedProps.description +
										"</div>"
								);
						} else if (element.find(".fc-list-item-title").lenght !== 0) {
							element
								.find(".fc-list-item-title")
								.append(
									'<div class="fc-description">' +
										info.event.extendedProps.description +
										"</div>"
								);
						}
					}
				},
			});

			calendar.render();
		},
	};
})();

jQuery(document).ready(function () {
	KTCalendarBackgroundEvents.init();

	$("#save-button").click(function () {
		var event_type = document.getElementById("event-type");
		var start_time = document.getElementById("start-time");
		var end_time = document.getElementById("end-time");
		var client_name = document.getElementById("client-name");
		var team_member_name = document.getElementById("team-member-name");
		$.ajax({
			url: "server-side/class/my-schedule/event-management.php",
			type: "POST",
			data: {
				event_type: event_type.options[event_type.selectedIndex].value,
				event_subject: document.getElementById("event-subject").value,
				start_date_and_time:
					document.getElementById("start-date").value +
					"" +
					start_time.options[start_time.selectedIndex].value,
				end_date_and_time:
					document.getElementById("end-date").value +
					"" +
					end_time.options[end_time.selectedIndex].value,
				client_name: client_name.options[client_name.selectedIndex].value,
				team_member_name:
					team_member_name.options[team_member_name.selectedIndex].value,
				location: document.getElementById("location").value,
				remarks: document.getElementById("remarks").value,
				action: "insert_event",
			},
			success: function (response) {
				console.log(response);
			},
		}).then(location.reload());
	});
});

function convert_to_date(date) {
	var json_date = JSON.stringify(date);
	return json_date.slice(1, 11);
}

function convert(date) {
	var json_date = JSON.stringify(date);
	return json_date.slice(1, 20);
}

function reload_datatables()
{
	$("#agenda-tasks-table").DataTable().ajax.reload();
	$("#bulk-edit-task-table").DataTable().ajax.reload();
}