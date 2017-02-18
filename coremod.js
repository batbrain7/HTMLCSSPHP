var fs = require('fs');

fs.writeFileSync("me.txt","I am boy, And i am awesome");

console.log(fs.readFileSync("me.txt").toString());


setInterval(function() {

	console.log("Sex karenge");

},2000);
