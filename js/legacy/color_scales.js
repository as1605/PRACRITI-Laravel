function yellow_red_scale(val,min_,max_){

  if(min_ != max_){
    var v = (val-min_)/(max_-min_)
    }
  else{
  v=0.5
  }

  // 245,245,245
  // 165,42,42

  var v = (val-min_)/(max_-min_)
  var R = 255
  var G = 255*(1-v)
  var B = 0
  var color = "rgb("+R+","+G+","+B+")"
  return color
}


function yellow_green_scale(val,min_,max_){

  if(min_ != max_){
    var v = (val-min_)/(max_-min_)
    }
  else{
  v=0.5
  }

  var v = (val-min_)/(max_-min_)
  var R = (1-v)*255
  var G = 255
  var B = 0
  var color = "rgb("+R+","+G+","+B+")"
  return color
}

function green_yellow_red_scale(val,min_,max_) {
  if(min_ != max_) {
    var v = (val-min_)/(max_-min_)
  }
  else {
    v=0.5
  }
  if (val>1.0) {
    var v = (val-1.0)/(max_-1.0)
    var R = 255
    var G = 255*(1-v)
    var B = 0
    var color = "rgb("+R+","+G+","+B+")"
  }
  else {
    var v = (val-0.0)/(1.0-0.0)
    var R = 255*v
    var G = 255
    var B = 0
    var color = "rgb("+R+","+G+","+B+")"
  }
  return color
}