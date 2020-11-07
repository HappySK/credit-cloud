google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		["Available Credit Limit", "Current Balance"],
		["Available Credit Limit", 99],
		["Current Balance", 1],
	]);

	var options = {
		title: "Good Ratio",
		pieHole: 0.5,
		backgroundColor: "#F8F8F8",
	};

	var chart = new google.visualization.PieChart(
		document.getElementById("donutchart")
	);
	chart.draw(data, options);
}
$(document).ready(function () {
	$("#submit_button").click(function () {
		var expenses = [];
		for (let i = 0; i < 13; i++) {
			expenses.push({
				desc: document.getElementById("daily-expenses-" + i).value,
				amount: document.getElementById("amount-" + i).value,
			});
		}
		$.ajax({
			url: "server-side/class/daily-expenses",
			type: "POST",
			data: {
				date: document.getElementById("daily-expenses-date").value,
				daily_expenses: JSON.stringify(expenses),
				total: document.getElementById("total-amount").value,
			},
			success: function (response) {
				console.log(response);
			},
		}).then(
			Swal.fire(
				"Success !",
				"The Daily Expenses for the month is saved",
				"success"
			)
		);
	});
	$(".sum").change(function () {
		total = 0;
		for (let i = 0; i < 13; i++) {
			total += parseInt(document.getElementById("amount-" + i).value);
		}
		document.getElementById("total-amount").value = total;
	});

	$("#daily-expenses-date").change(function () {
		$.ajax({
			url: "server-side/class/daily-expenses.php",
			type: "GET",
			dataType: "JSON",
			data: {
				date: document.getElementById("daily-expenses-date").value,
			},
			success: function (response) {
				var daily_expenses = JSON.parse(response.daily_expenses);
				for (let i = 0; i < 13; i++) {
					document.getElementById("daily-expenses-" + i).value =
						daily_expenses[i].desc;
					document.getElementById("amount-" + i).value =
						daily_expenses[i].amount;
				}
				document.getElementById("total-amount").value = response.total;
			},
		});
	});

	$("#save-button").click(function () {
		var month = document.getElementById("monthly-expenses-month");
		var year = document.getElementById("monthly-expenses-year");
		var monthly_expenses = {
			auto_fuel: document.getElementById("auto-fuel").value,
			auto_insurance: document.getElementById("auto-insurance").value,
			auto_maintainence_repairs: document.getElementById(
				"auto-maintainence-repairs"
			).value,
			auto_payment: document.getElementById("auto-payment").value,
			cable_satellite: document.getElementById("cable-satellite").value,
			cell_phone: document.getElementById("cell-phone").value,
			child_support_animoly: document.getElementById("child-support-animoly")
				.value,
			child_care: document.getElementById("child-care").value,
			cigarettes_alcohol: document.getElementById("cigarettes-alcohol").value,
			clothing: document.getElementById("clothing").value,
			credit_card_charge_card: document.getElementById(
				"credit-card-charge-card"
			).value,
			dining: document.getElementById("dining").value,
			doctor_prescriptions: document.getElementById("doctor-prescriptions")
				.value,
			education_expenses: document.getElementById("education-expenses").value,
			electric_bill: document.getElementById("electric-bill").value,
			entertainment: document.getElementById("entertainment").value,
			gas_bill: document.getElementById("gas-bill").value,
			gifts: document.getElementById("gifts").value,
			groceries_suppliers: document.getElementById("groceries-suppliers").value,
			hobbies_clubs_sports: document.getElementById("hobbies-clubs-sports")
				.value,
			home_maintainence: document.getElementById("home-maintainence").value,
			insurance: document.getElementById("insurance").value,
			internet_service: document.getElementById("internet-service").value,
			local_payment: document.getElementById("local-payment").value,
			newspapers_magazines: document.getElementById("newspapers-magazines")
				.value,
			rent_mortgages_payment: document.getElementById("rent-mortgages-payment")
				.value,
			taxes: document.getElementById("taxes").value,
			telephone: document.getElementById("telephone").value,
			work_expenses: document.getElementById("work-expenses").value,
			total: document.getElementById("monthly-expenses-total").value,
		};

		$.ajax({
			url: "server-side/class/monthly-expenses.php",
			type: "POST",
			data: {
				monthly_ex: monthly_expenses,
				month: month.options[month.selectedIndex].value,
				year: year.options[year.selectedIndex].value,
			},
			success: function (response) {
				console.log(response);
			},
		}).then(
			Swal.fire(
				"Success !",
				"The Monthly Expenses for the month is saved",
				"success"
			)
		);
	});
	$(".monthly-expenses-fields").keyup(function () {
		var monthly_expenses_total = 0;
		monthly_expenses_total =
			parseInt(document.getElementById("auto-fuel").value) +
			parseInt(document.getElementById("auto-insurance").value) +
			parseInt(document.getElementById("auto-maintainence-repairs").value) +
			parseInt(document.getElementById("auto-payment").value) +
			parseInt(document.getElementById("cable-satellite").value) +
			parseInt(document.getElementById("cell-phone").value) +
			parseInt(document.getElementById("child-support-animoly").value) +
			parseInt(document.getElementById("child-care").value) +
			parseInt(document.getElementById("cigarettes-alcohol").value) +
			parseInt(document.getElementById("clothing").value) +
			parseInt(document.getElementById("credit-card-charge-card").value) +
			parseInt(document.getElementById("dining").value) +
			parseInt(document.getElementById("doctor-prescriptions").value) +
			parseInt(document.getElementById("education-expenses").value) +
			parseInt(document.getElementById("electric-bill").value) +
			parseInt(document.getElementById("entertainment").value) +
			parseInt(document.getElementById("gas-bill").value) +
			parseInt(document.getElementById("gifts").value) +
			parseInt(document.getElementById("groceries-suppliers").value) +
			parseInt(document.getElementById("hobbies-clubs-sports").value) +
			parseInt(document.getElementById("home-maintainence").value) +
			parseInt(document.getElementById("insurance").value) +
			parseInt(document.getElementById("internet-service").value) +
			parseInt(document.getElementById("local-payment").value) +
			parseInt(document.getElementById("newspapers-magazines").value) +
			parseInt(document.getElementById("rent-mortgages-payment").value) +
			parseInt(document.getElementById("taxes").value) +
			parseInt(document.getElementById("telephone").value) +
			parseInt(document.getElementById("work-expenses").value);
		document.getElementById(
			"monthly-expenses-total"
		).value = monthly_expenses_total;
	});

	$("#month-year-submit").click(function () {
		var month = document.getElementById("monthly-expenses-month");
		var year = document.getElementById("monthly-expenses-year");
		$.ajax({
			url: "server-side/class/monthly-expenses.php",
			type: "GET",
			dataType: "JSON",
			data: {
				month: month.options[month.selectedIndex].value,
				year: year.options[year.selectedIndex].value,
			},
			success: function (response) {
				document.getElementById("auto-fuel").value = response.auto_fuel;
				document.getElementById("auto-insurance").value =
					response.auto_insurance;
				document.getElementById("auto-maintainence-repairs").value =
					response.auto_maintainence_repairs;
				document.getElementById("auto-payment").value = response.auto_payment;
				document.getElementById("cable-satellite").value =
					response.cable_satellite;
				document.getElementById("cell-phone").value = response.cell_phone;
				document.getElementById("child-support-animoly").value =
					response.child_support_animoly;
				document.getElementById("child-care").value = response.child_care;
				document.getElementById("cigarettes-alcohol").value =
					response.cigarettes_alcohol;
				document.getElementById("clothing").value = response.clothing;
				document.getElementById("credit-card-charge-card").value =
					response.credit_card_charge_card;
				document.getElementById("dining").value = response.dining;
				document.getElementById("doctor-prescriptions").value =
					response.doctor_prescriptions;
				document.getElementById("education-expenses").value =
					response.education_expenses;
				document.getElementById("electric-bill").value = response.electric_bill;
				document.getElementById("entertainment").value = response.entertainment;
				document.getElementById("gas-bill").value = response.gas_bill;
				document.getElementById("gifts").value = response.gifts;
				document.getElementById("groceries-suppliers").value =
					response.groceries_suppliers;
				document.getElementById("hobbies-clubs-sports").value =
					response.hobbies_clubs_sports;
				document.getElementById("home-maintainence").value =
					response.home_maintainence;
				document.getElementById("insurance").value = response.insurance;
				document.getElementById("internet-service").value =
					response.internet_services;
				document.getElementById("local-payment").value = response.local_payment;
				document.getElementById("newspapers-magazines").value =
					response.newspapers_magazines;
				document.getElementById("rent-mortgages-payment").value =
					response.rent_mortgages_payments;
				document.getElementById("taxes").value = response.taxes;
				document.getElementById("telephone").value = response.telephone;
				document.getElementById("work-expenses").value = response.work_expenses;
				document.getElementById("monthly-expenses-total").value =
					response.total;
			},
		});
	});

	for (let i = 0; i < 15; i++) {
		$("#limit-" + i + ",#balance-" + i).keyup(function () {
			$("#ratio-" + i).val(
				($("#limit-" + i).val() / $("#balance-" + i).val()) * 100
			);
		});
	}

	$(".credit-accounts-sum").keyup(function () {
		var total_limit = 0;
		var total_balance = 0;
		var total_ratio = 0;
		for (let i = 0; i < 15; i++) {
			total_limit += parseInt(document.getElementById("limit-" + i).value);
			total_balance += parseInt(document.getElementById("balance-" + i).value);
			total_ratio += parseInt(document.getElementById("ratio-" + i).value);
		}
		document.getElementById("limit-last").value = total_limit;
		document.getElementById("balance-last").value = total_balance;
		document.getElementById("ratio-last").value =
			(total_limit / total_balance) * 100;
	});

	$("#button-save").click(function () {
		credit_accounts = [];
		for (let i = 0; i < 15; i++) {
			credit_accounts.push({
				account_or_card: document.getElementById("account-or-card-" + i).value,
				apr: document.getElementById("apr-" + i).value,
				limit: document.getElementById("limit-" + i).value,
				balance: document.getElementById("balance-" + i).value,
				ratio: document.getElementById("ratio-" + i).value,
			});
		}
		var month = document.getElementById("month");
		var year = document.getElementById("year");
		$.ajax({
			url: "server-side/class/my-clients/educate/add-client-debts.php",
			type: "POST",
			data: {
				credit_ac: credit_accounts,
				month: month.options[month.selectedIndex].value,
				year: year.options[year.selectedIndex].value,
				total_limit: document.getElementById("limit-last").value,
				total_balance: document.getElementById("balance-last").value,
				total_ratio: document.getElementById("ratio-last").value,
			},
			success: function (response) {
				console.log(response);
			},
		}).then(
			Swal.fire("Success !", "The Credit Accounts have been saved", "success")
		);
	});
});
