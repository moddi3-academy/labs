let names =['Ivanov', 'Petrov', 'Ivanov1', 'Petrov1', 'Ivanov2', 'Petrov2']
// write mas
document.write("1: " + names.join(', '))
document.write("<br>")
console.log("########");

// push elem in mas
names.push("Kuzmich");

document.write("2: " + names.join(', '));
document.write("<br>")
// delete first elem in mas
names.shift();
document.write("3: " + names);
// splice in  mas
names.splice(3,0, "VSTAVLENO1", "VSTAVLENO2");
document.write("<br>" + "4: " + names);

// reverse sort mas
document.write("<br>")
document.write("5: " + names.reverse());
// sort mas
document.write("<br>")
document.write("6: " + names.sort());


document.write("<br>")
document.write("7: " + names.sort().reverse());

document.write("<br><hr>")
names.sort()
names.forEach(function(val, key){
  document.write(key + ' - ' + val+ "<br>");
});

function write(mas) {
  for (var i = 0; i < mas.length; i++) {
    document.write(mas[i] + " ")
  }
}
let rand = [25, 15 , 65];

write(rand);
rand.sort(function (a,b) {
  return a -b;
});
document.write("<br>");
write(rand);
rand.reverse()
document.write("<br>");
write(rand);


let capitals = []

capitals["Ukraine"] = "Kiyv";
capitals["USA"] = "Vashington";
capitals["China"] = "Pekin";

document.write("<br>");
for (var el in capitals) {
  document.write(el + "-" + capitals[el]) ;
}

function r() {
  var d = Math.floor(Math.random()*50)
  return d;
}

//
document.write("<br>");
values=[];
for (x=0; x<8; x++){
 values.push([
  r(),
  r(),
  r(),
  r(),
  r(),
  r(),
  r(),
  r()
 ])
};
for (var i = 0; i < values.length; i++) {
  document.write(values[i] + "<br>")
}
document.write("<br>");
var mas = [];
for (var i = 0; i < 8; i++){
  mas[i] = [];
  for (var j = 0; j < 8; j++) {
    mas[i][j] = r();
  }
}
console.table(mas)
