<!DOCTYPE html>
<html>
<head>
<style>
#specs {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#specs td, #specs th {
    border: 1px solid #ddd;
    padding: 8px;
}

#specs tr:nth-child(even){background-color: #f2f2f2;}

#specs tr:hover {background-color: #ddd;}

#specs th {
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


  <input type="button" class="button button1" value="Add New" onclick="location.href='newspec';" ><BR></BR>
<table id="specs">
<h2><center><strong>Specailty</center></strong></h2>

  <tr>
    <th>name</th>
    <th>Desc</th>
  </tr>
  @if(count($specs) > 0)
    @foreach($specs->all() as $spec)
  <tr>
    <td>{{$spec->field}}</td>
    <td>{{$spec->desciption}}</td>
  
        <td action = "{{ url('/edits',array($spec->id)) }}"><a href = {{ url('/updates',array($spec->id)) }}>Update</a></td>
    <td action = "{{ url('/deletes',array($spec->id)) }}"><a href = {{ url('/deletes',array($spec->id)) }}>Delete</a></td>
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