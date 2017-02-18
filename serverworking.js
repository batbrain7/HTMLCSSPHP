function placerequest(ordernumber) {

	console.log("Checking to place a simple request");

	cookndeliver(function() {
		console.log("The request " + ordernumber + " has been processed.");
	});

}

function cookndeliver(callback) {
	setTimeout(callback,5000);
}

placerequest(1);
placerequest(2);
placerequest(3);
placerequest(4);
placerequest(5);
