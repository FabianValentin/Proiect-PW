function myFunction() {
    var x = document.getElementById("SignUp");
	var y = document.getElementById("LogIn");
    if (x.style.display === "none") {
        x.style.display = "block";
		y.style.display = "none";
    } else {
        x.style.display = "none";
		y.style.display = "block";
	}
}