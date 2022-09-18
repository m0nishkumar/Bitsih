<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - The Dots vs The Bars</title>
  <link rel="stylesheet" href="./stylee.css">

</head>
<body onload="loader()">
<div class="dots-bars-5" id="loader"></div>
<div class="animate-bottom" id="content" style="display:none;">Welcome all!</div>

<script>
  function loader(){
    setTimeout(content,3000);
  }
  function content(){
    document.getElementById("loader").style.display="none";
    document.getElementById("content").style.display="block";
    document.body.style.backgroundColor = "white";
  }
</script>
</body>
</html>
