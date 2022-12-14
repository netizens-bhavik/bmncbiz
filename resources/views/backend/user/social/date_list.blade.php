<table class="table table-vertical-center">
    <thead class="thead-light">
        <tr>
            <th style="width:150px">Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= $data['totalDays']; $i++)
            <tr>
                <td>{{ date("d/m/Y", strtotime($i . "-" . $data['month'] . "-" . $data['year'])) }}</td>
                <td>
                    @php 
                        $date = date("Y-m-d", strtotime($i . "-" . $data['month'] . "-" . $data['year']));
                        $dateArr = array_column($data['posts'], 'post_date');
                    @endphp
                    
                    <table class="table table-borderless table-vertical-center m-0" style="display: block">
                        @foreach ($dateArr as $key => $value) 
                            @if($value == $date) 
                                <tr>
                                    <td><b>Post Name: </b>{{ $data['posts'][$key]['post_title'] }}</td>
                                    <td>
                                        @if (empty($data['posts'][$key]['post']['id']))
                                            <a data-id="{{ $data['posts'][$key]['id'] }}" href="javascript:void(0);" class="edit_post_requirement btn btn-sm btn-clean btn-icon" data-toggle="tooltip" data-theme="dark" data-original-title="Edit"><i class="fa fa-edit"></i></a>

                                            <a data-id="{{ $data['posts'][$key]['id'] }}" href="javascript:void(0);" class="delete_post_requirement btn btn-sm btn-clean btn-icon" data-toggle="tooltip" data-theme="dark" data-original-title="Delete"><i class="fa fa-trash-alt"></i></a>
                                        @endif
                                        <a data-id="{{ $data['posts'][$key]['id'] }}" href="javascript:void(0);" class="view_post_requirement btn btn-sm btn-clean btn-icon" data-toggle="tooltip" data-theme="dark" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endif 
                        @endforeach
                    </table>
                        
                    <a href="javascript:void(0);" class="add_post_requirement btn btn-sm btn-clean btn-icon" data-toggle="tooltip" data-theme="dark" title="" data-original-title="Add" data-date="{{ $date }}"><i class="fa fa-plus"></i></a>
                </td>
            </tr>
        @endfor
    </tbody>
</table>
<div id="managePostRequirement"></div>

<script>
    $(document).ready(function() {
        bindManagePostReqEvent();
        bindEditPostReqEvent();
        bindDeletePostReqEvent();
        bindViewPostReqEvent();
        $('[data-toggle="tooltip"]').tooltip();
    });

    function bindManagePostReqEvent() {
        $(".add_post_requirement").on("click", function(e) {
            $.ajax({
                type: "POST",
                url: "{{ url('user/manage_post_requirement') }}",
                data: {
                    date: $(e.target).closest('a').attr('data-date'),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#managePostRequirement").html(response);
                    $("#managePostRequirementModal").modal('show');
                }
            });
        });
    }

    function bindEditPostReqEvent() {
        $(".edit_post_requirement").on("click", function(e) {
            $.ajax({
                type: "POST",
                url: "{{ url('user/manage_post_requirement') }}",
                data: {
                    id: $(e.target).closest('a').attr('data-id'),
                    date: $(e.target).data('date'),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#managePostRequirement").html(response);
                    $("#managePostRequirementModal").modal('show');
                }
            });
        });
    }

    function bindViewPostReqEvent() {
        $(".view_post_requirement").on('click', function(e) {
            $.ajax({
                type: "POST",
                url: "{{ url('user/view_post_requirement') }}",
                data: {
                    id: $(e.target).closest('a').attr('data-id'),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#managePostRequirement").html(response);
                    $("#viewPostRequirementModal").modal('show');
                }
            });
        });
    }

    function bindDeletePostReqEvent() { 
        $('.delete_post_requirement').on('click', function(e) {
            swal({
                title: "Delete Post Requirement?",
                text: "Once deleted, you will not be able to recover this record!",
                icon: "warning",
                buttons: ['No', 'Yes'],
                confirmButtonText: 'Yes',
                denyButtonText: 'No',
            }).then((confirmed) => {
                if (confirmed) {
                    $.ajax({
                        url: "{{ url('user/delete_post_requirement') }}",
                        method: 'POST',
                        dataType: 'JSON',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id: $(e.target).closest('a').attr('data-id'),
                        },
                        beforeSend: function() {
                            swal({
                                title: "info",
                                text: "Please Wait, Your Request has been processed!",
                                icon: "info",
                                button: false,
                                closeOnClickOutside: false,
                                closeOnEsc: false
                            });
                        },
                        success: function(data) {
                            if (data.status == true) {
                                swal({
                                    title: "Success",
                                    text: data.message,
                                    icon: "success",
                                    timer: 3000
                                });
                                $("#psubmitBtn").click();
                            } else {
                                swal("Error", data.message, "error");
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                } 
            });
        });
    }
</script>