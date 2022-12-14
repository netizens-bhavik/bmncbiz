
@php

@endphp

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="addClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Subscriber</h5>
                <button type="button" class="close-modal btn btn-primary btn-rounded btn-icon" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addClient_form" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{$view_data['user_id']??''}}" id="frm_user_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Enter Name" required value="{{$view_data['user_name']??''}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Enter Email" required value="{{$view_data['user_email']??''}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary sbt_btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        bind_frm_events();
    });

    function bind_frm_events() {
        $(document).on('click', '.close-modal', function () {
            $('#addClient_form').trigger("reset");
            $('#addClient').modal('hide');
        });

        $(document).on('.sbt_btn','click', function (e) {
            e.preventDefault();
            bind_frm_validate();
        });

        $('#addClient_form').on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                bind_frm_validate();
            }
        });

        $('.sbt_btn').click(function () {
            bind_frm_validate();
        });
    }

    function bind_frm_validate() {
        $('#addClient_form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 3,
                    maxlength: 50
                }
            },
            messages: {
                name: {
                    required: "Please enter name",
                    minlength: "Name must be at least 3 characters long",
                    maxlength: "Name must be less than 50 characters long"
                },
                email: {
                    required: "Please enter email",
                    email: "Please enter valid email",
                    minlength: "Email must be at least 3 characters long",
                    maxlength: "Email must be less than 50 characters long"
                }
            },
            submitHandler: function (form) {
                bind_frm_submit();
            }
        });


    }

    function bind_frm_submit() {
        var form = $('#addClient_form');
        var formData = new FormData(form[0]);

        $.ajax({
            url: "{{ route('management.submit-subscriber') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data.status == 'success') {
                    toastr.success(data.message);
                    $('#addClient').modal('hide');
                    $('#addClient_form').trigger("reset");
                    $('#subscribers-table').DataTable().ajax.reload();
                } else {
                    toastr.error(data.message);
                }
            },
            error: function (data) {
                toastr.error(data.message);
            }
        });

    }

    function bind_frm_reset() {
        $('#addClient_form').trigger("reset");
    }

</script>
