<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


            
<div class="container">
	<table border="1" class="table table-bordered">
<tr> <th>name</th>

<th>rollno</th>
<th>age</th>
<th>email</th>

</tr>
@foreach ($crud as $crud)
<tr id="row_{{$crud->id}}">
<td>{{$crud->name}}</td>

<td>{{$crud->rollno}}</td>
<td>{{$crud->age}}</td>
<td>{{$crud->email}}</td>

<td>

<a href="/update/{{$crud->id}}">edit</a>

<button class="deleteRecord" data-id="{{ $crud->id }}" data-token="{{csrf_token()}}" >Delete Record</button>

 <img src="images/{{$crud->filename}}">

</td>
</tr>

@endforeach

</table>
	

</table>
<script type="text/javascript">

$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $(this).data("token");
   
    $.ajax(
    {
        url: "/info/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
            $("#row_"+id).hide();
         }
    });
   
});
</script>


</form>
</body>
</html>