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
