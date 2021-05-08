function Get(url){
  var HTTPreq = new XMLHttpRequest();
  HTTPreq.open("GET",url,false);
  HTTPreq.send(null);
  return HTTPreq.responseText;
}

//imports
localStorage.setItem('plot_data_actual',Get('timeseries.json'))

function update_scale(min_,max_,legend,key_){
  document.getElementById('label1').innerHTML = min_
  document.getElementById('label2').innerHTML = max_
  document.getElementById('legend').innerHTML = legend
  if (~key_){
    document.getElementById('state_gradient').innerHTML = '<stop class="stop1" id="stop1" offset="0%"></stop><stop class="stop2" id="stop2" offset="100%"></stop>'
  }
  if (key_){
    document.getElementById('state_gradient').innerHTML = '<stop class="stop1" id="stop1" offset="0%"></stop><stop class="stop3" id="stop2" offset="100%"></stop>'
  }
}

function color_states(index){

	var items = document.getElementsByClassName('state')
	for (var i=0; i<items.length; ++i){
		items[i].style.fill = "rgb(255,255,255)";
	}


	var mapping = ['Recovered','Deceased','Confirmed','R0']
	var names = ['Recovered','Deceased','Confirmed']
	var plot_data_actual = JSON.parse(localStorage.getItem('plot_data_actual'));

	if (index!=3){
		var keys = plot_data_actual

		var max_ = -100
		var min_ = 1000
		for (var k in keys){
			var item = plot_data_actual[k]
			if (null!=item || k=='India'){
				var end = item[mapping[index]].length-1
				max_ = Math.max(max_,plot_data_actual[k][mapping[index]][end])
				min_ = Math.min(min_,plot_data_actual[k][mapping[index]][end])
			}
		}
		for (var k in keys){
			var item = plot_data_actual[k]
			if (null!=item){
				var end = item[mapping[index]].length-1
				var val = item[mapping[index]][end]
				if (index==0){
					item = document.getElementById(k)
					if (item!=null){
						item.style.fill = yellow_green_scale(val,min_,max_)
					} else {
					}
				}
				if (index!=0){
					item = document.getElementById(k)
					if (item!=null){
						item.style.fill = yellow_red_scale(val,min_,max_)
					} else {
					}
				}
			}
		}
		update_scale("","",names[index],index==0)
	}

	if (index==3){
		var R0 = JSON.parse(Get('states_R0.json'))
		var max_ = -100
		var min_ = 1000
		for (var k in R0){
			var val = R0[k]
			min_ = Math.min(min_,val)
			max_ = Math.max(max_,val)
		}

		for (var k in R0){
			var val = R0[k]
			if (k!='Total'){
				document.getElementById(k).style.fill = yellow_red_scale(val,min_,max_)
			}
		}
		update_scale(min_.toFixed(2),max_.toFixed(2),'R\u2080')
	}



}
