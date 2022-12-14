<div class="modal fade" id="manage_project_modal" tabindex="-1" role="dialog" data-backdrop="true"
     aria-labelledby="create_project_modalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Manage Project</h5>
                <button type="button" class="close-modal btn btn-primary btn-rounded btn-icon"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="manage_project_modal_form" id="manage_project_modal_from" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$view_data['user_id']}}" id="user_id"/>
                    <input type="hidden" name="project_id" value="{{$view_data['project_id']??''}}" id="project_id"/>
                    <div class="form-group row">
                        <label for="user_name-label" class="col-sm-3 col-form-label">User's
                            Name</label>
                        <div class="col-sm-9">
                            <label id="user_name_label" placeholder="User Name"
                                   class="col-sm-12 col-form-label">{{$view_data['user_name']}}</label>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="user_email-label" class="col-sm-3 col-form-label">User's
                            Email</label>
                        <div class="col-sm-9">
                            <label id="user_email_label"
                                   class="col-sm-12 col-form-label">{{$view_data['user_email']}}</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="project_name-label" class="col-sm-3 col-form-label">Project Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="project_name"
                                   placeholder="Project Name" name="project_name" value="" required>
                        </div>
                        <div class="col-sm-12">
                            @error('project_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="project_type-label" class="col-sm-3 col-form-label">Project
                            Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="project_type" name="project_type"
                                    value="" required>
                                <option value="website" selected>Website</option>
                                <option value="marketing">Marketing</option>
                                <option value="application">Application</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            @error('project_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="project_website_url-label" class="col-sm-3 col-form-label">Website
                            URL </label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="project_website_url"
                                   placeholder="Website URL (with Http:// or Https://)" name="project_website_url"
                                   value="" required>
                        </div>
                        <div class="col-sm-12">
                            @error('project_website_url')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="project_work_type-label" class="col-sm-3 col-form-label">Work
                            Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="project_work_type" name="project_work_type"
                                    value="" required>
                                <option value="external" selected>External</option>
                                <option value="internal">Internal</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            @error('project_work_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="project_status-label"
                               class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="project_status"
                                    name="project_status" value="" required>
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            @error('project_status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="project_description-label"
                               class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                                        <textarea class="form-control" id="project_description"
                                                  placeholder="Project Description"
                                                  name="project_description" value="" rows="5"></textarea>
                        </div>
                        <div class="col-sm-12">
                            @error('project_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-modal"
                                data-dismiss="modal">Close
                        </button>
                        <button type="Submit" class="btn btn-primary sbt_btn" id="manage_project_modal_from_submit">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        bind_frm_events();
    });

    function bind_frm_events() {
        $(document).on('click', '.close-modal', function () {
            $('#manage_project_modal_from').trigger("reset");
            $('#manage_project_modal').modal('hide');
        });

        $(document).on('.sbt_btn', 'click', function (e) {
            e.preventDefault();
            bind_frm_validate();
        });

        $('#manage_project_modal_from').on('keyup keypress', function (e) {
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
        $('#manage_project_modal_from').validate({
            rules: {
                project_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                },
                project_website_url: {
                    required: function (){
                        return $('#project_type').val() == 'website';
                    },
                    minlength: 3,
                    maxlength: 255,
                    url: true
                },
                project_type: {
                    required: true,
                },
                project_work_type: {
                    required: true,
                },
                project_status: {
                    required: true,
                },
                project_description: {
                    // required: true,
                    minlength: 3,
                },
            },
            messages: {
                project_name: {
                    required: "Please enter project name",
                    minlength: "Project name must be at least 3 characters long",
                    maxlength: "Project name must be less than 50 characters long"
                },
                project_website_url: {
                    required: "Please enter project website url",
                    minlength: "Project website url must be at least 3 characters long",
                    maxlength: "Project website url must be less than 50 characters long",
                    url: "Please enter valid url"
                },
                project_type: {
                    required: "Please select project type",
                },
                project_work_type: {
                    required: "Please select project work type",
                },
                project_status: {
                    required: "Please select project status",
                },
                project_description: {
                    //   required: "Please enter project description",
                    minlength: "Project description must be at least 3 characters long",
                },
            },
            submitHandler: function (form) {
                bind_frm_submit();
            }
        });


    }

    function bind_frm_submit() {
        var form = $('#manage_project_modal_from');
        var formData = new FormData(form[0]);

        $.ajax({
            url: "{{ route('management.submit-project') }}",
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
