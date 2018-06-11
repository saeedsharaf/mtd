
var cxt = document.getElementById("line");
//global option

chart.defaults.global.defaultFontFamily = ,
chart.defaults.global.defaultFontSize = ,
chart.defaults.global.defaultFontColor = ,
 

var myLineChart = new Chart(ctx, {
    type: 'line', // here we can set the type of chart depends on you want 
    data: // here we writ our data in astring so 
	{
	labeles : ['ACC', 'Hold'], // this our labels 
	datasets: [{
	labele : 'mtd',	// this four the chart name 
	data : [
	5, // here the values of acw and hold
	6
	
	
	],
	// here you can play with styles charts
	backgroundColor: [
	
	],
	borderWidth:4, // here other setting we can set
	borderColor: ,
	hoverBorderWidth: ,
	hoverBordercolor: ,
	
	
	
	}]
	
	
	},
	
    options: options
	{
	maintainAspectRatio: false, // this to set the height with defined 
	title: { // here if you want to play the title 
	display: true, 
	text : '', // here we wright the text of title 
	fontSize: ,
	
	
	},
	legend:{ // if you want to play with legend 
	display : fales // if you want to hide legend
	position : ,
	labels:{ // if you want to styles it 
	color : ,
	
	}
	},
	
	layout : {
	padding : {
	left: ,
	right: ,
	
	}
	
	},
	
	tooltips:{
	enabled: true 
	
	},

	
	
	
});





//if you want the chart start with spsfic value under option we have proberty called 
scales:{
	yAxes:[{
		ticks:{
		beginAtZero: true,
		callback: funcation(value){ 
			return value + "%"
			}
		},
		scaleLabel: {
           display: true,
           labelString: "Percentage"
       }
		}]
},