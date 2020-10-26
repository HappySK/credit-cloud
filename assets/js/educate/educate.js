google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		["Available Credit Limit", "Current Balance"],
		["Available Credit Limit", 99],
		["Current Balance", 1]
	]);

	var options = {
		title: "Good Ratio",
    pieHole: 0.5,
    backgroundColor:'#F8F8F8'
	};

	var chart = new google.visualization.PieChart(
		document.getElementById("donutchart")
	);
	chart.draw(data, options);
}
