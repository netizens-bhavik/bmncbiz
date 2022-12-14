@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
<div class="card">
    <div class="card-header flex-wrap py-5">
        <div class="card-title m-0">
            <h4 class="card-label m-0">Post Requirement</h4>
        </div>
    </div>
    <div class="card-body">
        <form class="form" id="filterPostDateForm" onSubmit="return false;">
            @csrf
            <div class="form-group row">
                <div class="col-md-3">
                    <label>Select Date</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="filter_post_date" placeholder="Select date" id="filter_post_date" autocomplete="off"/>
                        <div class="input-group-append">
                         <span class="input-group-text">
                          <i class="la la-calendar-check-o"></i>
                         </span>
                        </div>
                    </div>               
                </div>
                <div class="col-md-3 mb-0 mt-auto">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary mr-2" id="filterSubmitBtn">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-separate table-head-custom table-checkable" id="postReqTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Post Date</th>
                    <th>User Name</th>
                    <th>Post Name</th>
                    <th>Post Type</th>
                    <th>Post Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <div id="managePost"></div>
    </div>
</div>
@endsection

@section('script')
<script type= text/javascript>
    $(document).ready(function() {
        initPostReqDatatable();
        bindFilterDateEvent();

        $('#filter_post_date').datepicker({
            format: "dd-mm-yyyy",
        });
    });

    var searchable = [];
    var selectable = []; 

    var initPostReqDatatable = function() {
            var postReqDatatable = $("#postReqTable").DataTable({
                order: [],
                responsive: true,
                serverSide: true,
                processing: true,
                ajax: {
                    url: 'get_post_req_list',
                    type: 'POST',
                    /* data: {
                        "_token": "{{ csrf_token() }}",
                        date: date
                    }, */
                    data: function(data) {
                        data.date = $("#filter_post_date").val();
                    },
                    dataSrc: function(res) {
                        return res.data;
                    }
                },
                columns: [
                    {data:'id',name: 'no',orderable: false, searchable: false},
                    {data:'post_date', name: 'post_date'},
                    {data:'username', name: 'username'},
                    {data:'post_title', name: 'post_title'},
                    {data:'post_type', name: 'post_type'},
                    {data:'post_status', name: 'post_status'},
                    {data:'action', name: 'action',orderable: false, searchable: false}
                ],
                fnRowCallback: function(nRow, aData, iDisplayIndex) {
                    var index = postReqDatatable.page.info().start + iDisplayIndex + 1;
                    $('td:eq(0)', nRow).html(index);
                    return nRow;
                },
                fnDrawCallback: function(index, rec) {
                    if (index.fnRecordsTotal().toString() == "0") {
                        return;
                    }
                    $('[data-toggle="tooltip"]').tooltip();
                    bindViewPostReqEvent();
                    bindAddPostEvent();
                    bindEditPostEvent();
                    bindDeletePostEvent();
                },
                initComplete: function () {
                    var api =  this.api();
                    api.columns(searchable).every(function () {
                        var column = this;
                        var input = document.createElement("input");
                        input.setAttribute('placeholder', $(column.header()).text());
                        input.setAttribute('style', 'width: 140px; height:25px; border:1px solid whitesmoke;');

                        $(input).appendTo($(column.header()).empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });

                        $('input', this.column(column).header()).on('click', function(e) {
                            e.stopPropagation();
                        });
                    });

                    /* api.columns(selectable).every( function (i, x) {
                        var column = this;

                        var select = $('<select style="width: 140px; height:25px; border:1px solid whitesmoke; font-size: 12px; font-weight:bold;"><option value="">'+$(column.header()).text()+'</option></select>')
                            .appendTo($(column.header()).empty())
                            .on('change', function(e){
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column.search(val ? '^'+val+'$' : '', true, false ).draw();
                                e.stopPropagation();
                            });

                        $.each(dropdownList[i], function(j, v) {
                            select.append('<option value="'+v+'">'+v+'</option>')
                        });
                    }); */
                }
            });   
        
    }

    function bindFilterDateEvent() {
        $("#filterSubmitBtn").on('click', function(e) {
            //initPostReqDatatable(date);
            jQuery('#postReqTable').DataTable().ajax.reload();
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
                    $("#managePost").html(response);
                    $("#viewPostRequirementModal").modal('show');
                }
            });
        });
    }

    function bindAddPostEvent() {
        $(".add_post").on('click', function(e) {
            $.ajax({
                type: "POST",
                url: "{{ url('management/manage_post') }}",
                data: {
                    id: $(e.target).closest('a').attr('data-id'),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#managePost").html(response);
                    $("#managePostModal").modal('show');
                }
            });
        });
    }

    function bindEditPostEvent() {
        $(".edit_post").on('click', function(e) {
            $.ajax({
                type: "POST",
                url: "{{ url('management/manage_post') }}",
                data: {
                    postId: $(e.target).closest('a').attr('data-id'),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#managePost").html(response);
                    $("#managePostModal").modal('show');
                }
            });
        });
    }

    function bindDeletePostEvent() {
        $(".delete_post").on('click', function(e) {
            swal({
                title: "Delete Post?",
                text: "Once deleted, you will not be able to recover this record!",
                icon: "warning",
                buttons: ['No', 'Yes'],
                confirmButtonText: 'Yes',
                denyButtonText: 'No',
            }).then((confirmed) => {
                if (confirmed) {
                    $.ajax({
                        url: "{{ url('management/delete_post') }}",
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
                                $('#postReqTable').DataTable().ajax.reload();
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
@endsection