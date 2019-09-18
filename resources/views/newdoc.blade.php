<html>
<head> 
<link rel="stylesheet" href="/css/style.css">
<script type="text/javascript" src="/js/jquery.validation.js"></script>
</head>
<body>
  <center><h1>Doctor Information</h1></center>
<div class="container">
<form action="{{ url("/insertdoctor") }}" method="post" onsubmit="return validation()" >
{{ csrf_field() }}
    <label>Name</label>
    <input type="text" name="name"  required>
    
  <label>Age</label>
  <input type="text" name="age" required>

   <label>Specialty</label>
   <input type="text" name="speciality" required>

 
<input type="submit" name="submit" value="Submit" >
<input type="reset" name="reset" value="Reset">

 
 </form>
 <input type="submit" value="Cancel" onclick="location.href='doctors'";/>
</div>

 </body>
 </html>
 