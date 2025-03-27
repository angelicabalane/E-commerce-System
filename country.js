function country_code() {
		var val = document.getElementById("country").value;
		
		if(val === "select country") {
			document.getElementById("contactnumber").value = "";
		}
		else if(val === "ph") {
			document.getElementById("contactnumber").value = "63";
		}
		else if(val === "bn") {
			document.getElementById("contactnumber").value = "673";
		}
		else if(val === "kh") {
			document.getElementById("contactnumber").value = "855";
		}
		else if(val === "tl") {
			document.getElementById("contactnumber").value = "670";
		}
		else if(val === "id") {
			document.getElementById("contactnumber").value = "62";
		}
		else if(val === "la") {
			document.getElementById("contactnumber").value = "856";
		}
		else if(val === "my") {
			document.getElementById("contactnumber").value = "60";
		}
		else if(val === "mm") {
			document.getElementById("contactnumber").value = "95";
		}
		else if(val === "sg") {
			document.getElementById("contactnumber").value = "65";
		}
		else if(val === "th") {
			document.getElementById("contactnumber").value = "66";
		}
		else if(val === "vn") {
			document.getElementById("contactnumber").value = "84";
		}
	}