
function activarInput() {
	var inputs = document.querySelectorAll("input[type='text']");
	document.getElementById("input").disabled = false;
	for (var i = 0; i < inputs.length; i++) {
		inputs[i].disabled = false;
  }
}









