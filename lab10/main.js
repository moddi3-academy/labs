var mas = ["Petya", "Vasya", "Kolya" ];


function masWriter(arr, br, str, size) {

  for (var i = 0; i < arr.length; i++) {
    if (arr[i].length <= size) {
      if (arr[i].substring(0, str.length) == str) {
        document.write("<strong>" + arr[i] + "</strong>" + br)
      }
    } else {
      document.write("Idi v jopu<br>" );
    }
  }
}

masWriter(mas, "<br>!wefqeefwewf  kfjh^&*()<br>", "Vas", 4);

function fixName(){
  var s ='';
  for (j=0; j < fixName.arguments.length; ++j){
    s+= fixName.arguments[j].charAt(0).toUpperCase() + fixName.arguments[j].substr(1).toLowerCase() + ' ';
  }
  return s.substr(0, s.length-1);
}

document.write(fixName("ivanov"));

document.write('<br>');
var fixName2 = function(){
  var s ='';
  for (j=0; j < arguments.length; ++j){
    s+= arguments[j].charAt(0).toUpperCase() + arguments[j].substr(1).toLowerCase() + ' ';
  }
  return s.substr(0, s.length-1);
}

document.write(fixName2("iVanov"));
