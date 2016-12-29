function print(x,y) {
  let s = "";
  for (var i = x; i <= y; i++) {
    if(i == y && i%2!=0) {
      s+=i;break;
    };
    if (i%2!=0){
      s+=i + ', ';
    }
  }
  return s
}

document.write(print(5, 25));

var changeDisplayState = function(id){
  var d = document.getElementById('showhide'),
  e = document.getElementById(id);
  if (e.style.display === 'none' || e.style.display === ''){
    e.style.display='block';
    d.innerHTML = 'Hide paragraph';
  }
  else {
    e.style.display = 'none';
    d.innerHTML = 'Show paragraph';
  }
};
document.getElementById('showhide').onclick = function(){
  changeDisplayState('toggleMe');
  return false;
}
