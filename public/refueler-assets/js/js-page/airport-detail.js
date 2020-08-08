function randomScalingFactor(){
	return Math.floor( Math.random()*100 );
}

window.chartColors = { red: "rgb(255, 99, 132)", orange: "rgb(255, 159, 64)", yellow: "rgb(255, 205, 86)", green: "rgb(75, 192, 192)", blue: "rgb(54, 162, 235)", purple: "rgb(153, 102, 255)", grey: "rgb(201, 203, 207)" };


var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var config = {
	type: 'line',
	data: {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
			label: 'My First dataset',
			backgroundColor: window.chartColors.red,
			borderColor: window.chartColors.red,
			data: [
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor()
			],
			fill: false,
		}, {
			label: 'My Second dataset',
			fill: false,
			backgroundColor: window.chartColors.blue,
			borderColor: window.chartColors.blue,
			data: [
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor()
			],
		}]
	},
	options: {
		responsive: true,
		aspectRatio:3,
		title: {
			display: true,
			text: 'Chart sample'
		},
		tooltips: {
			mode: 'index',
			intersect: false,
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Month'
				}
			}],
			yAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Value'
				}
			}]
		},
		legend: {
			display: true
		}
	}
};

a = [
 {
   "Name": "Jua-01",
   "Status": "off",
   "Interlock Status": "off",
   "Total Transaction": 24,
   "Total Volume(L)": 234526
 },
 {
   "Name": "Jua-02",
   "Status": "on",
   "Interlock Status": "on",
   "Total Transaction": 63,
   "Total Volume(L)": 253462
 },
 {
   "Name": "Jua-03",
   "Status": "on",
   "Interlock Status": "on",
   "Total Transaction": 12,
   "Total Volume(L)": 483238
 },
 {
   "Name": "Jua-04",
   "Status": "off",
   "Interlock Status": "on",
   "Total Transaction": 23,
   "Total Volume(L)": 21665
 },
 {
   "Name": "Jua-05",
   "Status": "on",
   "Interlock Status": "on",
   "Total Transaction": 81,
   "Total Volume(L)": 956323
 }
];


window.onload = function() {
	var ctx1 = document.getElementById('canvas1').getContext('2d');
	window.myLine1 = new Chart(ctx1, config);

	config.options.aspectRatio = 1;
	config.options.legend.display = false;
	var ctx2 = document.getElementById('canvas2').getContext('2d');
	window.myLine2 = new Chart(ctx2, config);
	var ctx3 = document.getElementById('canvas3').getContext('2d');
	window.myLine3 = new Chart(ctx3, config);
	var ctx4 = document.getElementById('canvas4').getContext('2d');
	window.myLine4 = new Chart(ctx4, config);	

	setTimeout(function(){
		createTable(a,"table1"); 
	},1000);
	
	setTimeout(function(){
		$('tbody').click(function(){
			window.location.href="unit-log.html";
		})
	},1000);
};
