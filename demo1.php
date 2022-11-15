<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sc</title>
	<style>
.err { background: #ffe6ee; border: 1px solid #b1395f; }
.emsg { color: #c12020; font-weight: bold; }
</style>
</head>
<body>

 
<!-- (B) HTML FORM -->
<form onsubmit="return check()" novalidate>

  <label for="fname">Name</label>
  <input type="text" name="fname" id="fname" required minlength="2" maxlength="8"/> 
	<div id="cname" class="emsg"></div> 
 



  <label for="fnumber">Number</label>
  <input type="number" name="fnumber" id="fnumber" required min="1" max="12"/> 
  <div id="cnumber" class="emsg"></div>
 




 
  <input type="submit" value="Go!"/>
</form>
 
<!-- (C) FORM CHECK -->
<script>
function check () {
  // (C1) INIT
  var valid = true, error = "", field = "";

  // (C2) NAME
  field = document.getElementById("fname");
  error = document.getElementById("cname");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "Name must be 2-4 characters\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  // (C3) NUMBER
  field = document.getElementById("fnumber");
  error = document.getElementById("cnumber");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "Num must be between 1-12\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  // (C4) RESULT
  return valid;
}
</script>

</body>
</html>