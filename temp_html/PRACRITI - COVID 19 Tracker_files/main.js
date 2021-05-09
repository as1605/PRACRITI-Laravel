
function Get(url){
  var HTTPreq = new XMLHttpRequest();
  HTTPreq.open("GET",url,false);
  HTTPreq.send(null);
  return HTTPreq.responseText;
}

//imports
localStorage.setItem('plot_data_actual',Get('timeseries.json'))

var getJSON = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status === 200) {
        callback(null, xhr.response);
      } else {
        callback(status, xhr.response);
      }
    };
    xhr.send();
};

getJSON('http://query.yahooapis.com/v1/public/yql?q=select%20%2a%20from%20yahoo.finance.quotes%20WHERE%20symbol%3D%27WRC%27&format=json&diagnostics=true&env=store://datatables.org/alltableswithkeys&callback',
function(err, data) {
  if (err !== null) {
    alert('Something went wrong: ' + err);
  } else {
    alert('Your query count: ' + data.query.count);
  }
});


// //functions


function plot_change(key_){
var a = document.getElementById('tester').getAttribute('data-title');
plot_data(a, key_)
}

function show_states() {
    document.getElementById("india_district_map").style.display = "none";
    document.getElementById("state_chart").style.display = "none";
    document.getElementById("india_state_map").style.display = "block";
    document.getElementById("select-button").style.display = "block";
    document.getElementById("select-button-district").style.display = "none";
    document.getElementById("select-button-statewise-district").style.display = "none";
    plot_data('India', 0)
}


function myFunction(evt, state){
plot_data(state.id, 0)
// if(state.id != 'Delhi'){
// show_state_districts(state.id)
// color_state_districts(state.id, 0)
// }
}

 
 

function showTooltip(evt, state) {

  let tooltip = document.getElementById("tooltip");
    var obj = JSON.parse(localStorage.getItem(state.id.toLowerCase().replace("_"," ")))
    if(obj != null){
    var r0 = obj[3]
if(r0 == undefined){r0='N/A';}
else{r0 = r0.toFixed(2)}

  tooltip.innerHTML = state.id[0].toUpperCase() + state.id.slice(1) + '\u000d' + '\u000d' + "Confirmed: "+obj[0] +  '\u000d' + "R<sub>0</sub>: "+r0
  }
  else{
      tooltip.innerHTML = state.id[0].toUpperCase() + state.id.slice(1)
    }
  tooltip.style.backgroundColor='white';
  tooltip.style.display = "block";
  tooltip.style.padding = "5px";
  tooltip.style.left = evt.pageX + 10 + 'px';
  tooltip.style.top = evt.pageY + 10 + 'px';

}

function hideTooltip() {
  var tooltip = document.getElementById("tooltip");
  tooltip.style.display = "none";
  tooltip.style.padding = 0;
}
 


function store_data(){
var plot_data_actual = JSON.parse(localStorage.getItem('plot_data_actual'));
dict_key = ["Confirmed", "Recovered", "Deceased"]

// var date1 = new Date("2020-03-14");
// var date2 = new Date();
// var Difference_In_Time = date2.getTime() - date1.getTime();
// var days = Math.trunc(Difference_In_Time / (1000 * 3600 * 24))
var R0 = JSON.parse(Get('states_R0.json'))

for(var item in plot_data_actual){
    var item_data = plot_data_actual[item]
    var y2 = []
    for(var i=0; i<dict_key.length;++i){
        var end = item_data[dict_key[i]].length-1
        y2.push(item_data[dict_key[i]][end]);
    }
		for (var k in R0){
		    if(item.toLowerCase() === k.toLowerCase()){
			y2.push(R0[k])
			}
		}
//     alert(y2)
    localStorage.setItem(item.toLowerCase(), JSON.stringify(y2))
}
}




//main
show_states()
store_data()
color_states(2)
