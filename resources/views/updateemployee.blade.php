<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Employees</title>
</head>
<body>
    

<div class="container">  
        <div class="row">  
        <div class="col-md-12">
        <h1> Employee Information Form</h1><br>

       <form action="/updateemployees" method="post">
             {{csrf_field()}}
                 <div class="form-group">
                 <label for="eid">Employee ID:</label>
                   <input  type="text" class="form-control" name="eid" value="{{$employeedata->eid}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/>
                </div>

                <div class="form-group">
                 <label for="name">Employee Name:</label>
                   <input  type="text" class="form-control" name="name" value="{{$employeedata->name}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/>
                </div>

                <div class="form-group">
                 <label for="address">Employee Address:</label>
                   <input  type="text" class="form-control" name="address" value="{{$employeedata->address}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/>
                </div>

                <div class="form-group">
                 <label for="dob">Employee Birthday:</label>
                   <input  type="date" class="form-control" name="dob" value="{{$employeedata->dob}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/>
                </div>

                <div class="form-group">
                 <label for="email">Employee Email:</label>
                   <input  type="text" class="form-control" name="email" value="{{$employeedata->email}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/>
                </div>

                <div class="form-group">
                 <label for="depid">Employee Depertment ID:</label>
                   <input  type="text" class="form-control" name="depid" value="{{$employeedata->depid}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/>
                </div>

                <div class="form-group">
                 <label for="desid">Employee Designation ID:</label>
                   <input  type="text" class="form-control" name="desid" value="{{$employeedata->desid}}"/>
                   <input type="hidden" name="id" value="{{$employeedata->id}}"/> <br>
                </div><br>
           
           <input type="submit" class="btn btn-warning" value="Update"/>  
           &nbsp;&nbsp;
           <input type="button" class="btn btn-danger" value="Cancel"/>
       </form>



   </div>
</body>
</html>