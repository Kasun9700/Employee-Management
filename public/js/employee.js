var id =0 ;

$(document).ready(function() {
   


    // add new student
    $('#btnAdd').on('click' ,function(){
        $.ajax({
            type: 'POST',
            url: '/saveEmployee',
            data: $('#formEmployee'),
            success: function (response) {
                if(response){
                    window.alert(" added success ");
                }else{
                    window.alert(" added fail ");
                }

            },
            error: function (data) {
                console.log('An error occurred.');

            }
        });
    });


    // delete employee
    $("body").on("click", "#btnDelete", function () {
        var id = $(this).parents("tr").attr('data-id');
        alert(id);
        $.ajax({
            type: 'GET',
            url: '/deleteemployee/'+id,
            success: function (data) {
                getEmployeeTable();
            },
            error: function (data) {
                $('#msgFail').show();
            }
        });

    });


    
    // employee view table 
    function getEmployeeTable(){
        $.ajax({
            type: 'GET',
            url: '/getAllEmployee',
            success: function (response) {
                console.log(response);
                var html="";
                $.each(response, function( index, value ) {
                    html+="<tr data-id='"+value.id+"'>";
                    html+="<td>"+value.id+"</td>";
                    html+="<td>"+value.eid+"</td>";
                    html+="<td>"+value.name+"</td>";
                    html+="<td>"+value.address+"</td>";
                    html+="<td>"+value.dob+"</td>";
                    html+="<td>"+value.email+"</td>";
                    html+="<td>"+value.depid+"</td>";
                    html+="<td>"+value.desid+"</td>";

                    html+="<td> <a  id='btnDelete' class='btn btn-danger'>Delete</a></td>";
                    html+="<td> <a  id='formBtnUpdate'  class='btn btn-warning'>Update</a></td>";
                    html+="</tr>";
                  });

                  $('#tbodyEmployee').html(html);
                
            },
            error: function (data) {
                console.log('An error occurred.');
            }
        });
    }

    getEmployeeTable();

});
    



    // get employee update table 
    function updateemployeeview() {
            // get values
            var eid = $("#eid").val();
            var name = $("#name").val();
            var address = $("#address").val();
            var dob = $("#dob").val();
            var email = $("#email").val();
            var depid = $("#depid").val();
            var desid = $("#desid").val();
        
           
            $.ajax
                ({
                    url: '/updateemployee/'+id,
                    data: { "eid": eid, "name": name, "address": address, "dob": dob, "email": email, "depid": depid, "desid": desid },
                    type: 'get',
        
                
                success:   function (data, status) {
                    console.log (data); 
                      
                        $("#formEmployee").html(html);
                    }
                });
        }

 $(document).on("click", "#formBtnUpdate", function (event) {
        console.log("Update button clicked!");
    
        var id = $(this).closest('tr').find('#formBtnUpdate').val();
    
        updateemployeeview(id); 
    
    });


        // employee update table 


function updateemployee(id) {

    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.ajax
        ({
            url: '/updateemployees',
            data: { "id": id },
            type: 'post',

            success: function (data, status) {

                // PARSE json data
                var user = JSON.parse(data);
      
                $("#eid").val(user.eid);
                $("#name").val(user.name);
                $("#address").val(user.address);
                $("#dob").val(user.dob);
                $("#email").val(user.email);
                $("#depid").val(user.depid);
                $("#desid").val(user.desid);
                $("#btnAdd").html("btnUpdate");
    
            }
        }
        );

}


$("#btnUpdate").click(function () {
        console.log("Add button clicked!");
    
        updateemployees();
    
    });