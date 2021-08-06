<html>
<head>
<link rel="stylesheet" href="style.css">
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","read.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<div class="heading"><h2>Hi ADMIN welcome back<h2></div>

<div class="total">
  <div class="option">
    <form>
      <select name="users" onchange="showUser(this.value)">
         <option value="">view report</option>
         <option value="Name1" name="emp">Name1</option>
         <option value="Name2">Name2</option>
         <option value="Name3">Name3</option>
         <option value="Name4">Name4</option>
      </select>
    </form>
  </div>
<div classs="but">
<input type="button" value="Add user" name="add">
<input type="button" value="Remove" name="remove">
</div>
</div>
<div class ="grap"></div>


<br>
<div id="txtHint"><b></b></div>

</body>
</html>