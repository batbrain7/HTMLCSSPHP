var person = {
	firstname : "mohit",
	lastname : "kumar",
	age : "28"
};

function addnum(a,b) {
	return a+b;
}

function worthless(){

}

var printcon = function() {
	console.log("This is real shit going on");
};

printcon();
//setTimeout(printcon,5000);
var mohit  = person;
person.firstname = "Gaurav";
console.log(person.firstname);

var needed = require('./provider');
needed.printSome();
needed.printAnother();
console.log(needed.firstname);