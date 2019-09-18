<!DOCTYPE html>
<html>
<head>
<style>
#docs {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#docs td, #docs th {
    border: 1px solid #ddd;
    padding: 8px;
}

#docs tr:nth-child(even){background-color: #f2f2f2;}

#docs tr:hover {background-color: #ddd;}

#docs th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<center>
  <br/>
  <br/>
<body>

<!-- <form action="/create" method="get">
</form> -->
<table id="docs">
  <input type="button" class="button button1" value="Add New" onclick="location.href='newdoc';" ><BR></BR>
<h2><center><strong>Doctors</center></strong></h2>

  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>speciality</th>
  </tr>
  
@if(count($docs) > 0)
    @foreach($docs->all() as $doc)
  <tr>
    <td>{{$doc->name}}</td>
    <td>{{$doc->age}}</td>
    <td>{{$doc->specialization}}</td>    
    <td action = "{{ url('/edit',array($doc->id)) }}"><a href = {{ url('/update',array($doc->id)) }}>Update</a></td>
    <td action = "{{ url('/delete',array($doc->id)) }}"><a href = {{ url('/delete',array($doc->id)) }}>Delete</a></td>
  </tr>
  </tr>
    @endforeach
  @endif

</table>
</center>
 </br>
 </br>
  </br>
 </br>
  </br>
 </br>
  </br>
 </br>
 </form>
 </body>
</html>