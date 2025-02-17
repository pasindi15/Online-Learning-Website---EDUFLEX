function checkPassword() {
	var password = document.getElementById("pwd").value;
	var confirmPassword = document.getElementById("cpwd").value;
	
	if (password !== confirmPassword) {
		alert("Password Mismatched!");
		return false;
	} else {
		alert("Success");
		return true;
	}
}