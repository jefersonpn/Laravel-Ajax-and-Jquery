@extends('layouts.app')

@section('content')


{{-- Add Student Modal --}} 
<div class="modal fade" id="AddStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="AddStudentModalLabel">Add Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <ul id="saveForm_errList"></ul>

          <div class="form-group mb-3">
              <label for="">Name</label>
              <input type="text" class="name form-control">
          </div>
          <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="text" class="email form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Phone</label>
            <input type="text" class="phone form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Course</label>
            <input type="text" class="course form-control">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_student">save</button>
        </div>
      </div>
    </div>
  </div>
{{-- End- Add Student Modal --}}

{{-- Edit Student Modal --}} 
<div class="modal fade" id="EditStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddStudentModalLabel">Edit & Update Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <ul id="updateForm_errList"></ul>
        <input type="hidden" id="edit_stud_id"></input>
        <div class="form-group mb-3">
            <label for="">Name</label>
            <input type="text" id="edit_name" class="name form-control">
        </div>
        <div class="form-group mb-3">
          <label for="">Email</label>
          <input type="text" id="edit_email" class="email form-control">
      </div>
      <div class="form-group mb-3">
          <label for="">Phone</label>
          <input type="text" id="edit_phone" class="phone form-control">
      </div>
      <div class="form-group mb-3">
          <label for="">Course</label>
          <input type="text" id="edit_course" class="course form-control">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_student">Update</button>
      </div>
    </div>
  </div>
</div>
{{-- End- Edit Student Modal --}}

{{-- Delete Student Modal --}} 
<div class="modal fade" id="DeleteStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddStudentModalLabel">Delete Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <input type="hidden" id="delete_stud_id">
        <h4>Are you sure ? wnat to delete this student ?</h4>
        <input readonly id="delete_name" class="name form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondar1" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_student_btn">Yes Delete</button>
      </div>
    </div>
  </div>
</div>
{{-- End- Delete Student Modal --}}

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div id="success_message"></div>
            <div class="card">
                <div class="card-header">
                    <h4>Student Data
                    <a href="#" data-bs-toggle="modal" data-bs-target="#AddStudentModal" class="btn btn-primary float-end btn-sm">Add Student</a>
                    </h4>
                </div>
{{-- Header Student Table --}}
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
{{-- End- Header Student Table --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>

  $(document).ready(function () {

    fetchStudent(); //Calling the function to display data.

/* Display the data table from the database */
    function fetchStudent()
    {
      $.ajax({
        type: "GET",
        url: "/fetch-students",
        dataType: "json",
        success: function (response) {
        // console.log(response.students);
        $('tbody').html("");
        $.each(response.students, function (key, item) { 
          $('tbody').append(
            '<tr>\
                        <td>'+item.id+'</td>\
                        <td>'+item.name+'</td>\
                        <td>'+item.email+'</td>\
                        <td>'+item.phone+'</td>\
                        <td>'+item.course+'</td>\
                        <td><button type="button" value="'+item.id+'" class="edit_student btn btn-warning btn-sm">Edit</button></td>\
                        <td><button type="button" value="'+item.id+'" class="delete_student btn btn-danger btn-sm">Delete</button></td>\
                      </tr>'
          );
        });
        }
      });
    }
/* End- Display data */

/* Delete Student */
    $(document).on('click', '.delete_student', function (e) {
      e.preventDefault();
      var stud_id = $(this).val();
      //console.log(stud_id);
      $('#delete_stud_id').val(stud_id);
      $('#DeleteStudentModal').modal('show');
      //Getting the name of the student that will be deleted
      $.ajax({
        type: "GET",
        url: "/edit-student/"+stud_id,
        success: function (response) {
        //console.log(response);
        if(response.status == 404)
        {
          $('#success_message').html("");
          $('#success_message').addClass('alert alert-danger');
          $('#success_message').text(response.message);
        }
        else
        {
          $('#delete_name').val(response.student.name);         
        }
        }


      });
      //End  Getting the name of the student that will be deleted
      $(document).on('click', '.delete_student_btn', function (e) {
        e.preventDefault();
        $(this).text("Deleting");
        var stud_id = $('#delete_stud_id').val();

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "DELETE",
          url: "/delete-student/"+stud_id,
          success: function (response) {
            //console.log(response);
            $('#success_message').addClass('alert alert-success');
            $('#success_message').text(response.message);
            $('#DeleteStudentModal').modal('hide');
            $('.delete_student_btn').text("Yes Delete");
            fetchStudent();
          }
        });
      });

    });
/* End- Delete Student */

/* Edit Student */
    $(document).on('click', '.edit_student', function (e) {
      e.preventDefault(); //this prevent the page reload
      var stud_id = $(this).val(); // get the id from the value button edit click
      /*console.log(stud_id);*/
      $('#EditStudentModal').modal('show');
      $.ajax({
        type: "GET",
        url: "/edit-student/"+stud_id,
        success: function (response) {
        //console.log(response);
        if(response.status == 404)
        {
          $('#success_message').html("");
          $('#success_message').addClass('alert alert-danger');
          $('#success_message').text(response.message);
        }
        else
        {
          $('#edit_name').val(response.student.name);
          $('#edit_email').val(response.student.email);
          $('#edit_phone').val(response.student.phone);
          $('#edit_course').val(response.student.course);
          $('#edit_stud_id').val(stud_id);          
        }
        }
      });

    });
/* End- Edit Student */

/* Update Student */
    $(document).on('click', '.update_student', function (e) {
      e.preventDefault();

      $(this).text("Updating");

      var stud_id = $('#edit_stud_id').val();
      var data = {
        'name' : $('#edit_name').val(),
        'email' : $('#edit_email').val(),
        'phone' : $('#edit_phone').val(),
        'course' : $('#edit_course').val(),
      }

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
        type: "PUT",
        url: "/update-student/"+stud_id,
        data: data,
        dataType: "json",
        success: function (response) {
          //console.log(response);
          if (response.status == 400) {
            $('#updateForm_errList').html("");
            $('#updateForm_errList').addClass('alert alert-danger');
            $.each(response.errors, function (key, err_values) { 
              $('#updateForm_errList').append('<li class="ms-2">'+err_values+'</li>');
            });
            $('.update_student').text("Update");

          }else if (response.status == 404) {
            $('#updateForm_errList').html("");
            $('#success_message').addClass('alert alert-success')
            $('#success_message').text(response.message)
            $('.update_student').text("Update");

          }else{
            $('#updateForm_errList').html("");
            $('#success_message').html("");
            $('#success_message').addClass('alert alert-success')
            $('#success_message').text(response.message)   
            
            $('#EditStudentModal').modal('hide');
            $('.update_student').text("Update");

            fetchStudent();
          }
        }
      });

    });
/* End- Update Student */

/* Insert Student */
    $(document).on('click', '.add_student', function (e) {
      e.preventDefault();
      $(this).text("Saving");
     /*  console.log("hello"); */
      var data = {
        'name': $('.name').val(),
        'email': $('.email').val(),
        'phone': $('.phone').val(),
        'course': $('.course').val(),
      }
      /* console.log(data); */
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
        type: "POST",
        url: "/students",
        data: data,
        dataType: "json",
        success: function (response) {
          //console.log(response);
          if(response.status == 400)
          {
            $('#saveForm_errList').html("");
            $('#saveForm_errList').addClass('alert alert-danger');
            $.each(response.errors, function (key, err_values) { 
              $('#saveForm_errList').append('<li class="ms-2">'+err_values+'</li>');
            });
          }
          else
          {
            $('#saveForm_errList').html("");
            $('#success_message').addClass('alert alert-success')
            $('#success_message').text(response.message)
            $('#AddStudentModal').modal('hide');
            $('#AddStudentModal').find('input').val("");
            $('.add_student').text("Save");
            fetchStudent();
          }
        }
      });

    });
/* End- Insert Student */

  });
</script>

@endsection