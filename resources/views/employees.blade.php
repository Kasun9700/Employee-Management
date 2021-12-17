<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
   
   
   <script type="text/javascript" src="{{ URL::asset('js/employee.js') }}"></script>



    <style type="text/css">

body { padding: 40px; }
body
{
    font-family: Arial;
    font-size: 10pt;
}

#txtDate
{
    position: relative;
    top: -7px;
    margin-right: 5px;
}
</style>

</head>
<body>

<div class="container">  
        <div class="row">  
        <div class="col-md-12">
        <h1> Employee Information Form</h1><br>


        @foreach($errors-> all() as $error)

<div class="alert alert-denger" role="alert">
    {{$error}}
</div>
@endforeach

              <form id="formEmployee" action="/saveEmployee"  method="post">
              {{csrf_field()}}
                <div class="form-group">
                 <label for="eid">Employee ID:</label>
                   <input  type="text" class="form-control" name="eid" placeholder="Enter Your Employee ID ">
                </div>

                <div class="form-group">
                 <label for="name">Employee Name:</label>
                   <input  type="text" class="form-control" name="name" placeholder="Enter Your Name ">
                </div>

                <div class="form-group">
                 <label for="address">Employee Address:</label>
                   <input  type="text" class="form-control" name="address" placeholder="Enter Your Address ">
                </div>

                <div class="form-group">
                 <label for="dob">Employee Birthday:</label>
                   <input  type="date" class="form-control" name="dob" placeholder="Enter Your Birthday ">
                </div>

                <div class="form-group">
                 <label for="email">Employee Email:</label>
                   <input  type="text" class="form-control" name="email" placeholder="Enter Your Email ">
                </div>

                <div class="form-group">
                 <label for="depid">Employee Depertment ID:</label>
                   <input  type="text" class="form-control" name="depid" placeholder="Enter Your Department ID ">
                </div>

                <div class="form-group">
                 <label for="desid">Employee Designation ID:</label>
                   <input  type="text" class="form-control" name="desid" placeholder="Enter Your Designation ID ">
                </div>
                    </br>
                    
                    <input id="btnAdd" type="submit" class="btn btn-success" value="Save">
                    <input type="button" class="btn btn-primary" value="Clear">
                   </form><br><br>
                
                
                   <table class="table table-dark">
                        <th>ID</th>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Birthday</th>
                        <th>Email</th>
                        <th>Department ID</th>
                        <th>Designation ID</th>
                        <th>Action</th>

                        <tbody id="tbodyEmployee">
                        <!-- @foreach($employees as $employee)

                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->eid}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->dob}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->depid}}</td>
                            <td>{{$employee->desid}}</td>                        
                        <td>                   
                            <a href="/deleteemployee/{{$employee->id}}" class="btn btn-warning">Delete</a>
                            <a href="/updateemployee/{{$employee->id}}" class="btn btn-success">Update</a>
                        </td>
                        </tr>
                        @endforeach -->
                        </tbody>
                    </table>
               </div>
         </div>
</div>
        
</div>    
</div>
</body>
</html>