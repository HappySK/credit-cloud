google.charts.load("current", {
	packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart_active_clients);

function drawChart_active_clients() {
	var data = google.visualization.arrayToDataTable([
		["Year", "Sales", "Expenses"],
		["2004", 1000, 400],
		["2005", 1170, 460],
		["2006", 660, 1120],
		["2007", 1030, 540],
	]);

	var options = {
		title: "Company Performance",
		curveType: "function",
		legend: {
			position: "bottom",
		},
	};

	var chart = new google.visualization.LineChart(
		document.getElementById("active_clients_chart")
	);

	chart.draw(data, options);
}

google.charts.load("current", {
	packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart_affiliates);

function drawChart_affiliates() {
	var data = google.visualization.arrayToDataTable([
		[
			"Element",
			"Density",
			{
				role: "style",
			},
		],
		["Copper", 8.94, "#b87333"],
		["Silver", 10.49, "silver"],
		["Gold", 19.3, "gold"],
		["Platinum", 21.45, "color: #e5e4e2"],
	]);

	var view = new google.visualization.DataView(data);
	view.setColumns([
		0,
		1,
		{
			calc: "stringify",
			sourceColumn: 1,
			type: "string",
			role: "annotation",
		},
		2,
	]);

	var options = {
		title: "Density of Precious Metals, in g/cm^3",
		bar: {
			groupWidth: "95%",
		},
		legend: {
			position: "none",
		},
	};
	var chart = new google.visualization.BarChart(
		document.getElementById("affiliates_chart")
	);
	chart.draw(view, options);
}

google.charts.load("current", {
	packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart_leads);

function drawChart_leads() {
	var data = google.visualization.arrayToDataTable([
		[
			"Element",
			"Density",
			{
				role: "style",
			},
		],
		["Copper", 8.94, "#b87333"],
		["Silver", 10.49, "silver"],
		["Gold", 19.3, "gold"],
		["Platinum", 21.45, "color: #e5e4e2"],
	]);

	var view = new google.visualization.DataView(data);
	view.setColumns([
		0,
		1,
		{
			calc: "stringify",
			sourceColumn: 1,
			type: "string",
			role: "annotation",
		},
		2,
	]);

	var options = {
		title: "Density of Precious Metals, in g/cm^3",
		width: 450,
		height: 300,
		bar: {
			groupWidth: "95%",
		},
		legend: {
			position: "none",
		},
	};
	var chart = new google.visualization.BarChart(
		document.getElementById("leads_chart")
	);
	chart.draw(view, options);
}

google.charts.load("current", {
	packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart_clients_success);

function drawChart_clients_success() {
	var data = google.visualization.arrayToDataTable([
		["Task", "Hours per Day"],
		["Work", 11],
		["Eat", 2],
		["Commute", 2],
		["Watch TV", 2],
		["Sleep", 7],
	]);

	var options = {
		title: "My Daily Activities",
		width: 450,
		height: 300,
	};

	var chart = new google.visualization.PieChart(
		document.getElementById("clients_success_chart")
	);

	chart.draw(data, options);
}
