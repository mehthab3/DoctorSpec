<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/style.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enter the Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>

<div class="container">
<h1>Doctor Description</h1>
<form method = "POST" action = "{{ url('/edit',array($docs->id)) }}">
{{ csrf_field() }}
<label>name:</label>
  <input type="text" name="name" value ="<?php echo $docs->name; ?>" required/>
  <label>age:</label>
    <input type="text" name="age" value ="<?php echo $docs->age; ?>"/>
    <label>speciality:</label>
    <input type="text" name="speciality" value ="<?php echo $docs->specialization; ?>" required/>

  <input type="submit" name="submit" value="Update">
<input type="reset" value="Reset"/>
<input type="submit" value="Cancel" onclick="location.href='doctors'";/>
 
 </form>
</div>
 </body>
</html>