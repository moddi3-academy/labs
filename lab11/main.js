function verifyButton() {
  alert("Proste povidomlena");
  result = confirm("pereviremo yaku knopky");
  if (result) {
    document.write("<p>Vi nat knopku ok </p>");
  } else {
    document.write("<p>Vi nat knopku otmena s</p>");
  }
}

function validate() {
  var surname = document.getElementById("surname"),
    firstname = document.getElementById("firstname"),
    username = document.getElementById("username");

  if (surname.value == "") {
    surname.style.backgroundColor = "red";
  } else {
    surname.style.backgroundColor = "write";
  }

  if (firstname.value == "") {
    firstname.style.backgroundColor = "red";
  } else {
    firstname.style.backgroundColor = "write";
  }

  if (username.value == "") {
    username.style.backgroundColor = "red";
  } else {
    username.style.backgroundColor = "write";
  }
}


function Hello(){
  do{
    var name = prompt("Imya", '');
    if (name == ""){
      alert("Vi ne vveli");
    } else {
      var show = confirm("Vashe imya: " + name);
    }
  } while (!show)
  alert("hello " + name)
}

document.getElementById("refer").onmouseenter = function(){
  Hello();
};


function sumss() {
  var first = document.getElementById('first');
  var second = document.getElementById('second');
  var sum = document.getElementById('sum');

  sum.value = parseInt(first.value) + parseInt(second.value);
}
