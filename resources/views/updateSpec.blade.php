<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/style.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enter the Speciality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>

<div class="container">
<h1>Doctor Description</h1>
<form method = "POST" action = "{{ url('/edits',array($specs->id)) }}">
{{ csrf_field() }}
<label>Filed</label>
  <input type="text" name="name" value ="<?php echo $specs->field; ?>" required/>
  <label>Desc</label>
    <input type="text" name="desc" value ="<?php echo $specs->description; ?>"/>


  <input type="submit" name="submit" value="Update">
<input type="reset" value="Reset"/>
<input type="submit" value="Cancel" onclick="location.href='specilaity'";/>
 
 </form>
</div>
 </body>
</html>