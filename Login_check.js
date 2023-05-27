document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault(); 
    
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  
  if (username === "admin" && password === "password") {
    window.location.href = "http://localhost:3000/phps/index.php";
  }else if(username === "student" && password === "password"){
    window.location.href = "http://localhost:3000/phps/studentpage.php";
  }else{
    alert("Invalid username or password. Please try again.");
  }
  });
