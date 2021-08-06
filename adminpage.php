<html>
<head>

<link rel="stylesheet" href="login.css">
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
  <div class="container">
  <div class="heading"><h2>Hi Admin welcome back<h2></div>
  <div class="nam">
    <form>
      <select name="users"  onchange="showUser(this.value)">
       <option value="">view report</option>
        <option value="Name1">Name1</option>
        <option value="Name2">Name2</option>
        <option value="Name3">Name3</option>
       <option value="Name4">Name4</option>
     </select>
    </form>
    <div id="txtHint" class=""><b>Report will be generated here..</b></div>
    <br>
  </div>
  
<div class="but">

  <div><input type="button" value="Add user" class="butt" name="add"></div><br>
  <div><input type="button" value="Remove" class="butt" name="remove"></div><br>
  <div><input type="button" value="view progress" class="butt" name="view"></div>
</div>
<div class ="grap">
  </div>
</div>
<br>

</body>
</html>