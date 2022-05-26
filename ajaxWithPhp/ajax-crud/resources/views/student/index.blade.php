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
{{-- End Add Student Modal --}} 



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
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>

  $(document).ready(function () {

    $(document).on('click', '.add_student', function (e) {
      e.preventDefault();
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
          }
        }
      });

    });

  });
</script>
   
@endsection