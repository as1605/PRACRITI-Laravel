function Get(url){
  var HTTPreq = new XMLHttpRequest();
  HTTPreq.open("GET",url,false);
  HTTPreq.send(null);
  return HTTPreq.responseText;
}


//imports
localStorage.setItem('plot_data_actual',Get('/js/legacy/timeseries.json'))



//functions
Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}

function getDates(startDate, stopDate) {
    var dateArray = new Array();
    var currentDate = startDate;
    while (currentDate <= stopDate) {
        dateArray.push(new Date (currentDate));
        currentDate = currentDate.addDays(1);
    }
    return dateArray;
}

function plot_data(name, key_){

var all_states = document.getElementsByClassName('state')
var draw_all = false
for(var k=0;k<all_states.length;++k){
    if(name == all_states[k].id){draw_all = true;}
}

var plot_data_actual = JSON.parse(localStorage.getItem('plot_data_actual'));

var date1 = new Date("2020-03-14");
var date2 = new Date();
var Difference_In_Time = date2.getTime() - date1.getTime();
var days = Math.trunc(Difference_In_Time / (1000 * 3600 * 24)) + 1

var data_ = {
"Confirmed": [],
"Recovered" : [],
"Deceased" : [],
"Active": [],
}

dict_key = ["Confirmed", "Recovered", "Deceased", "Active"]

var start = 1

for(var dist_key in plot_data_actual){
    if(dist_key.toLowerCase() === name.toLowerCase()){
     var dist = plot_data_actual[dist_key]
     for(var i=0; i<dict_key.length;++i){
         var dist_data = dist[dict_key[i]]
         if (dist_data!=null){
             for(var j =start;j<start+days;++j){
                 var required = dist_data[j]
                 data_[dict_key[i]].push(required)
             }
         }
     }
    }
}

var x = []

var d = new Date("2020-03-14");
var x = getDates(d, d.addDays(days));

document.getElementById('tester').setAttribute("data-title", name);

var subtitle = ['','','','','','']
// var subtitle = ['District Borders Level 0 Lockdown', 'District Borders Level 1 Lockdown', 'District Borders Level 2 Lockdown', 'Within District Level 0 Lockdown',  'Within District Level 1 Lockdown',  'Within District Level 2 Lockdown']

filenames = ['/js/legacy/c01_r0.json']

localStorage.setItem('plot_data',Get(filenames[key_]))
var plot_data = JSON.parse(localStorage.getItem('plot_data'));

var x_predicted = []

var d2 = new Date("2021-04-21");
var x_predicted = getDates(d2, d2.addDays(40));

var y_predicted = []

if(name === 'India'){

for(var k=0;k<all_states.length;++k){
for(var dist_key in plot_data){
    if(dist_key.toLowerCase() === all_states[k].id.toLowerCase()){
     for(var j = 0; j<plot_data[dist_key].length;++j){
         if(y_predicted.length < 39){
             y_predicted.push(plot_data[dist_key][j])
          }
          else{
             y_predicted[j] = y_predicted[j] +  plot_data[dist_key][j]
            }
     }
    }
}
}
}

else{
for(var dist_key in plot_data){
    if(dist_key.toLowerCase() === name.toLowerCase()){
     var y_predicted = plot_data[dist_key]
    }
}
}

var trace0 = {
      x: x,
      y: data_['Confirmed'],
      name: 'Confirmed',
      mode: 'lines+markers',
          marker: {
        color: "rgb(245,119,110)",},
     };

var trace1 = {
      x: x,
      y: data_['Active'],
      name: 'Active',
      mode: 'lines+markers',
          marker: {
        color: "rgb(246,204,105)",},
     };

var trace2 = {
      x: x,
      y: data_['Recovered'],
      name: 'Recovered',
      mode: 'lines+markers',
          marker: {
        color: "rgb(159,233,155)",},
     };

var trace3 = {
      x: x,
      y: data_['Deceased'],
      name: 'Deceased',
      mode: 'lines+markers',
          marker: {
        color: "rgb(168,205,252)",},
     };

     var trace4 = {
      x: x_predicted,
      y: y_predicted,
      name: 'Predicted (Active)',
      mode: 'lines+markers',
          marker: {
        color: 'black',},
     };

     var trace5 = {
      x: x_predicted,
      y: y_predicted,
      name: 'Predicted (Confirmed)',
      mode: 'lines+markers',
          marker: {
        color: 'black',},
     };

     var data = []
     var log_axis = ''
    if ((draw_all || name==='India')){
    data = [trace0, trace1, trace4];
    log_axis='log'}

     else{
     data = [trace0, trace5];
     log_axis='log'}

     var layout = {
      xaxis: {range: [d, d2.addDays(38)]},
      yaxis: {type:log_axis, title: 'Number of cases'},
      title: name[0].toUpperCase() + name.slice(1) ,
       font : {family:'Cambria',
                size: 17,
                weight: 'bold'},
        titlefont: {
    size: 36
  },
  annotations: [{
    text: subtitle[key_],
      font: {
      size: 24,
    },
    showarrow: false,
    align: 'center',
    x: 0.5,
    y: 1.13,
    xref: 'paper',
    yref: 'paper',
  }],
      legend: {
"orientation": "h",
xanchor: "center",
y: -0.4,
x: 0.5
},
    };

    Plotly.newPlot('tester', data, layout);

    var end = data_['Confirmed'].length-1
    for (var i =end;i>-1;i--){
        if(Number.isNaN(data_['Confirmed'][i]) || data_['Confirmed'][i]==null){;}
        else{break;}
    }

    var confirmed = data_['Confirmed'][i]
    var recovered = data_['Recovered'][i]
    var deceased = data_['Deceased'][i]
    var active = confirmed - recovered - deceased
    if (confirmed == null || Number.isNaN(confirmed) || confirmed === 0){confirmed = 'N/A';}
    if (recovered == null || Number.isNaN(recovered) || recovered === 0){recovered = 'N/A';}
    if (deceased == null || Number.isNaN(deceased) || deceased === 0){deceased = 'N/A';}
    if (active == null || Number.isNaN(active) || active === 0){active = 'N/A';}

    document.getElementById('confirmedN').innerText = confirmed.toLocaleString();
    document.getElementById('recoveredN').innerText = recovered.toLocaleString();
    document.getElementById('deceasedN').innerText = deceased.toLocaleString();
    document.getElementById('activeN').innerText = active.toLocaleString();

}
