function sidebar_open() {
  		document.getElementById("mySidebar").style.width = "100%";
  		document.getElementById("mySidebar").style.display = "flex";
}

console.log(window.screen.width);

function sidebar_close() {
  if(window.screen.width >= 1366){
  		document.getElementById("mySidebar").style.display = "visible";
  }else{
  		document.getElementById("mySidebar").style.display = "none";
  }
}