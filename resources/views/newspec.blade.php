<html>
<head> 
<link rel="stylesheet" href="/css/style.css">
<script type="text/javascript" src="/js/jquery.validation.js"></script>
</head>
<body>
  <center><h1>Doctor Information</h1></center>
<div class="container">
<form action="{{ url("/insertspec") }}" method="post" onsubmit="return validation()" >
{{ csrf_field() }}
    <label>Field</label>
    <input type="text" name="name"  required>
    
  <label>Desc</label>
  <input type="text" name="desc" required>
 
<input type="submit" name="submit" value="Submit" >
<input type="reset" name="reset" value="Reset">

 
 </form>
 <input type="submit" value="Cancel" onclick="location.href='speciality'";/>
</div>

 </body>
 </html>
 