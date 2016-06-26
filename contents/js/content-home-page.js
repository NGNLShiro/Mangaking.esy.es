function change1(){
		var a = document.getElementById("change1");
		var b = document.getElementById("change2");
		var c = document.getElementById("change3");
		var d = document.getElementById("column1-hot-manga")
		var e = document.getElementById("column1-latest-update-manga");
		var f = document.getElementById("column1-new-manga");
		a.classList.add("change-active");
		b.classList.remove("change-active");
		c.classList.remove("change-active");
		d.style.zIndex = "3";
		e.style.zIndex = "2";
		f.style.zIndex = "1";
	}
	
	function change2(){
		var a = document.getElementById("change1");
		var b = document.getElementById("change2");
		var c = document.getElementById("change3");
		var d = document.getElementById("column1-hot-manga")
		var e = document.getElementById("column1-latest-update-manga");
		var f = document.getElementById("column1-new-manga");
		a.classList.remove("change-active");
		a.classList.remove("always-active");
		b.classList.add("change-active");
		c.classList.remove("change-active");
		d.style.zIndex = "2";
		e.style.zIndex = "3";
		f.style.zIndex = "1";
	}
	
	function change3(){
		var a = document.getElementById("change1");
		var b = document.getElementById("change2");
		var c = document.getElementById("change3");
		var d = document.getElementById("column1-hot-manga")
		var e = document.getElementById("column1-latest-update-manga");
		var f = document.getElementById("column1-new-manga");
		a.classList.remove("change-active");
		a.classList.remove("always-active");
		b.classList.remove("change-active");
		c.classList.add("change-active");
		d.style.zIndex = "1";
		e.style.zIndex = "2";
		f.style.zIndex = "3";
	}