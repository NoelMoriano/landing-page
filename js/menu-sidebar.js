
if(window.screen.width <= 1366){
	document.getElementById("mySidebar").style.display = "none";
}else{
	document.getElementById("mySidebar").style.display = "flex";
}


 sidebar_close = () => {
  		document.getElementById("mySidebar").style.display = "none";
}

 sidebar_open = () => {
  		document.getElementById("mySidebar").style.width = "100%";
  		document.getElementById("mySidebar").style.display = "flex";
}