{{-- @php
echo '<pre>';
print_r($stats);
echo '</pre>';
@endphp --}}

<div>
<div class="row my-5">
    <div class="col-md-4">
        <div class="card card-custom wave wave-animate-slow mb-8 mb-lg-0 pt-6 shadow p-3 mb-5 bg-white rounded ">
            <div class="card-body" style="padding: 0%">
                <div class="d-flex align-items-center p-5">
                    <div class="mr-6">
                        <a href="#" class="btn btn-icon btn-light-primary pulse pulse-primary mr-5"
                            style="font-size: 36px;">
                            <i class="icon-2x flaticon-squares" style="font-size: 32px !important;"></i>
                            <span class="pulse-ring"></span>
                        </a>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                            Total Projects
                        </a>
                        <div class="text-dark-75 display5">
                            {{ $stats['projectcount'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom wave wave-animate-slow mb-8 mb-lg-0 pt-6 shadow p-3 mb-5 bg-white rounded ">
            <div class="card-body" style="padding: 0%">
                <div class="d-flex align-items-center p-5">
                    <div class="mr-6">
                        <a href="#" class="btn btn-icon btn-light-primary pulse pulse-primary mr-5"
                            style="font-size: 36px;">
                            <i class="icon-2x flaticon-doc" style="font-size: 32px !important;"></i>
                            <span class="pulse-ring"></span>
                        </a>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                            Total Reports
                        </a>
                        <div class="text-dark-75 display5">
                            {{ $stats['insightscount'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom wave wave-animate-slow mb-8 mb-lg-0 pt-6 shadow p-3 mb-5 bg-white rounded ">
            <div class="card-body" style="padding: 0%">
                <div class="d-flex align-items-center p-5">
                    <div class="mr-6">
                        <a href="#" class="btn btn-icon btn-light-primary pulse pulse-primary mr-5"
                            style="font-size: 36px;">
                            <i class="icon-2x flaticon-squares" style="font-size: 32px !important;"></i>
                            <span class="pulse-ring"></span>
                        </a>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                            Total Projects
                        </a>
                        <div class="text-dark-75 display5">
                            {{ $stats['projectcount'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card gutter-b card-stretch pt-6 card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Projects</h3>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="user_projects_list">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Project Type</th>
                            <th>Domain Authority</th>
                            <th>Page Authority</th>
                            <th>Spam Score</th>
                            <th>Total Backlinks</th>
                            <th>Desktop Score</th>
                            <th>Mobile Score</th>
                            <th>SSl</th>
                            <th>Project Status</th>
                            <th>Mail Status</th>
                            <th>Added On</th>
                            <th class="all">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects_list as $key => $project)
                            <tr>
                                <td>{{ $project['id'] }}</td>
                                <td>{{ $project['name'] }}</td>
                                <td>{{ $project['type'] }}</td>

                                @if ($project['da_score'] != '')
                                    <td>{{ $project['da_score'] }}</td>
                                    <td>{{ $project['pa_score'] }}</td>
                                    <td>{{ $project['spam_score'] }}</td>
                                    <td>{{ $project['total_backlinks'] }}</td>
                                    <td>{{ $project['desktop_insights'] }}</td>
                                    <td>{{ $project['mobile_insights'] }}</td>
                                    <td>{{ $project['ssl'] }}</td>
                                @else
                                    <td> N/A </td>
                                    <td> N/A </td>
                                    <td> N/A </td>
                                    <td> N/A </td>
                                    <td> N/A </td>
                                    <td> N/A </td>
                                    <td> N/A </td>
                                @endif

                                <td>{{ $project['status'] }}</td>
                                <td>{{ $project['mail_status'] }}</td>
                                <td>{{ $project['added_on'] }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="view_project_report_data"
                                        data-project_id={{ $project['id'] }}>

                                        <span class="svg-icon svg-icon-primary svg-md">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Shopping/Chart-bar1.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <rect fill="#000000" opacity="0.3" x="12" y="4"
                                                        width="3" height="13" rx="1.5"></rect>
                                                    <rect fill="#000000" opacity="0.3" x="7" y="9"
                                                        width="3" height="8" rx="1.5"></rect>
                                                    <path
                                                        d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                    <rect fill="#000000" opacity="0.3" x="17" y="11"
                                                        width="3" height="6" rx="1.5"></rect>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row" id="project_insights_header">
    <div class="col-xl-12">
        <div class="gutter-b card-stretch">
            <div class=" card-header border-0 pt-6 card shadow p-3 mb-5 bg-white rounded ">
                <h3 class="card-title align-items-start flex-column container">
                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Add New Project</span>
                    <span class="text-muted font-weight-bold font-size-lg float-right">
                    </span>
                    <br />
                    <span class="text-muted mt-3 font-weight-bold font-size-lg px-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_name">Project Name(#URL domain only)</label>
                                    <input type="url" class="form-control" id="project_name"
                                        placeholder="Enter Website" pattern="http://.*">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="project_name">Project Type</label>
                                    <select class="form-control" id="project_type">
                                        <option value="1">Website</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="project_name"></label>
                                    <input type="button" style="width: 100%" class="btn btn-primary m-2"
                                        id="add_project" value="Add Project">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="text-danger">
                                    <strong id="project_error"></strong>
                                </span>
                            </div>
                        </div>
                    </span>
                </h3>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#user_projects_list').DataTable({
            "order": [
                [0, "desc"]
            ],
            "columnDefs": [{
                "targets": [0],
            }],
            "responsive": true,
            "autoWidth": true,
        });


        // var user_projects_list = $("#user_projects_list").DataTable({
        //     order: [],
        //     responsive: true,
        //     serverSide: true,
        //     processing: true,
        //     ajax: {
        //         url: "{{ url('/user/get_user_projects_list') }}",
        //         type: 'POST',
        //         /* data: {
        //             "_token": "{{ csrf_token() }}",
        //             date: date
        //         }, */
        //         data: function(data) {
        //             // data.date = $("#filter_post_date").val();
        //         },
        //         dataSrc: function(res) {
        //             return res.data;
        //         }
        //     },
        //     columns: [{
        //             data: 'id'
        //         },
        //         {
        //             data: 'name'
        //         },
        //         {
        //             data: 'type'
        //         },
        //         {
        //             data: 'da_score'
        //         },
        //         {
        //             data: 'pa_score'
        //         },
        //         {
        //             data: 'spam_score'
        //         },
        //         {
        //             data: 'total_backlinks'
        //         },
        //         {
        //             data: 'desktop_insights'
        //         },
        //         {
        //             data: 'mobile_insights'
        //         },
        //         {
        //             data: 'ssl'
        //         },
        //         {
        //             data: 'status'
        //         },
        //         {
        //             data: 'mail_status'
        //         },
        //         {
        //             data: 'added_on'
        //         },
        //         {
        //             data: 'action'
        //         },
        //     ],
        //     fnRowCallback: function(nRow, aData, iDisplayIndex) {
        //         var index = postReqDatatable.page.info().start + iDisplayIndex + 1;
        //         $('td:eq(0)', nRow).html(index);
        //         return nRow;
        //     },
        //     fnDrawCallback: function(index, rec) {
        //         if (index.fnRecordsTotal().toString() == "0") {
        //             return;
        //         }
        //         // $('[data-toggle="tooltip"]').tooltip();
        //         // bindViewPostReqEvent();
        //         // bindAddPostEvent();
        //         // bindEditPostEvent();
        //         // bindDeletePostEvent();
        //     },
        //     initComplete: function() {
        //         var api = this.api();
        //         api.columns(searchable).every(function() {
        //             var column = this;
        //             var input = document.createElement("input");
        //             input.setAttribute('placeholder', $(column.header()).text());
        //             input.setAttribute('style',
        //                 'width: 140px; height:25px; border:1px solid whitesmoke;');

        //             $(input).appendTo($(column.header()).empty())
        //                 .on('keyup', function() {
        //                     column.search($(this).val(), false, false, true).draw();
        //                 });

        //             $('input', this.column(column).header()).on('click', function(e) {
        //                 e.stopPropagation();
        //             });
        //         });

        //         /* api.columns(selectable).every( function (i, x) {
        //             var column = this;

        //             var select = $('<select style="width: 140px; height:25px; border:1px solid whitesmoke; font-size: 12px; font-weight:bold;"><option value="">'+$(column.header()).text()+'</option></select>')
        //                 .appendTo($(column.header()).empty())
        //                 .on('change', function(e){
        //                     var val = $.fn.dataTable.util.escapeRegex(
        //                         $(this).val()
        //                     );
        //                     column.search(val ? '^'+val+'$' : '', true, false ).draw();
        //                     e.stopPropagation();
        //                 });

        //             $.each(dropdownList[i], function(j, v) {
        //                 select.append('<option value="'+v+'">'+v+'</option>')
        //             });
        //         }); */
        //     }
        // });

    });

    $('#project_name').keyup(function(e) {
        if (e.keyCode == 13) {
            var project_name = $('#project_name').val();
            //alert(project_name);
            $('#add_project').click();
        }
    });

    $('#add_project').click(function() {
        var project_name = $('#project_name').val();
        var project_type = $('#project_type').val();
        var regex = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
        if (project_name == '') {
            $('#project_error').html('Please enter project name');
            return false;
        } else if (!regex.test(project_name)) {
            $('#project_error').html('Please enter valid url');
            return false;
        } else {
            $('#project_error').html('');
            $.ajax({
                url: "{{ url('/user/add_project') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "project_name": 'http://' + project_name,
                    "project_type": project_type
                },
                success: function(data) {
                    if (data.status == 'success') {
                        $('#project_name').val('');
                        $('#project_error').html('');
                        location.reload();
                    } else {
                        $('#project_error').html(data.message);
                    }
                }
            });

        }
    });

    $('.view_project_report_data').click(function() {
        var project_id = $(this).attr('data-project_id');
        $.ajax({
            url: "{{ url('/user/project') }}" + '/' + project_id,
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "project_id": project_id
            },
            success: function(data) {
                $('#project_report').html('');
                $('#project_report').html(data);
                $('#project_select').val(project_id);
            }
        });
    });
</script>
