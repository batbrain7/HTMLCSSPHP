function User() {
	this.life = 100;
	this.name = "";
	this.givelife = function givelife(target){
		target.life +=1;
		console.log("The life of the target is " + target.life);
	} 


};

User.prototype.hurtpeople = function hurtpeople(target) {
	if(target.life <=2)
		console.log("Have mercy , barely alive....."); 
	else {
		target.life -=3;
		console.log("The life of the target is " + target.life);
	}
};

User.prototype.magic = "This is a shit storm";

var mohit = new User();
mohit.name = "Mohit";
var sheena = new User();
sheena.name = "Sheena";
//mohit.givelife(sheena);
for(x=0;x<34;x++)
	mohit.hurtpeople(sheena);

console.log(mohit.life);
console.log(sheena.life);
console.log(mohit.magic);
console.log(sheena.magic);
