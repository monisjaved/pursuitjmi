var SPEED = 10;
var TIMER = 15;

// main function to handle the mouse events //
function Menu(id,d){
  var h = document.getElementById(id );
  var c = document.getElementById(id + 'a');
  clearInterval(c.timer);
  if(d == 1){
    clearTimeout(h.timer);
    if(c.maxh && c.maxh <= c.offsetHeight){return}
    else if(!c.maxh){
      c.style.display = 'block';
      c.style.height = 'auto';
      c.maxh = c.offsetHeight;
      c.style.height = '0px';
    }
    c.timer = setInterval(function(){Slide(c,1)},TIMER);
  }else{
    h.timer = setTimeout(function(){Collapse(c)},50);
  }
}

// collapse the menu //
function Collapse(c){
  c.timer = setInterval(function(){Slide(c,-1)},TIMER);
}

// cancel the collapse if a user rolls over the dropdown //
function cancelHide(id){
  var h = document.getElementById(id);
  var c = document.getElementById(id + 'a');
  clearTimeout(h.timer);
  clearInterval(c.timer);
  if(c.offsetHeight < c.maxh){
    c.timer = setInterval(function(){Slide(c,1)},TIMER);
  }
}

// incrementally expand/contract the dropdown and change the opacity //
function Slide(c,d){
  var currh = c.offsetHeight;
  var dist;
  if(d == 1){
    dist = (Math.round((c.maxh - currh) / SPEED));
  }else{
    dist = (Math.round(currh / SPEED));
  }
  if(dist <= 1 && d == 1){
    dist = 1;
  }
  c.style.height = currh + (dist * d) + 'px';
  c.style.opacity = currh / c.maxh;
  c.style.filter = 'alpha(opacity=' + (currh * 100 / c.maxh) + ')';
  if((currh < 2 && d != 1) || (currh > (c.maxh - 2) && d == 1)){
    clearInterval(c.timer);
  }
}

