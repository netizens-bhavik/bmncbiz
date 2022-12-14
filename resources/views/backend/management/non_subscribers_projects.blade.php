@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
    <div class="card" style="">

        <div class="card-body" style="padding-left: 10px; padding-right: 10px; overflow: hidden;">
            <div class="card-header border-0 py-5 no-gutters px-5 px-lg-10"
                 style="padding-left: 0px; padding-right: 0px;">
                <h3 class="card-title align-items-start flex-column"
                    style="display: inline-block; margin-bottom: 0px !important;">
                            <span
                                class="card-label font-weight-bold font-size-h3 text-dark-75">{{ $user_details->name }}'s
                                Projects</span>
                    <br>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                </h3>
                <div class="card-toolbar float-right " style=" display:inline-block;">
                    <a href="#" class="btn btn-primary font-weight-bolder font-size-sm create_project"
                       data-user_id="{{ $user_details->id }}">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path
                                                d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>New Project</a>
                </div>
            </div>
            <div class="content-wrapper px-5 py-5">
                <div>
                    <table class="table" id="project-list">
                        <thead>
                        <tr>
                            <th class="col-md-2 color-primary">#</th>
                            <th class="col-md-2 color-primary">Project Name(#URL)</th>
                            <th class="col-md-2 color-primary">Project Type</th>
                            <th class="col-md-2 color-primary">Project Status</th>
                            <th class="col-md-2 color-primary">Project Mail Status</th>
                            <th class="col-md-2 color-primary">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($non_subscriberProjects as $project)
                            @php
                                $project_type = $project->project_type;
                                $project_status = $project->project_status;
                                $project_mail_status = $project->mail_status;
                                if ($project_type == 1) {
                                    $project_type = 'Website';
                                } else {
                                    $project_type = 'Marketing';
                                }

                                if ($project_status == 1) {
                                    $project_status = '<span class="label label-lg label-light-warning label-inline">Pending</span>';
                                } elseif ($project_status == 2) {
                                    $project_status = '<span class="label label-lg label-light-info label-inline">Under Review</span>';
                                } elseif ($project_status == 3) {
                                    $project_status = '<span class="label label-lg label-light-success label-inline">Completed</span>';
                                } else {
                                    $project_status = '<span class="label label-lg label-light-danger label-inline">Cancelled</span>';
                                }

                                if ($project_mail_status == 1) {
                                    $project_mail_status = '<span class="label label-lg label-light-success label-inline">Sent</span>';
                                } else {
                                    $project_mail_status = '<span class="label label-lg label-light-warning label-inline">Pending</span>';
                                }

                            @endphp
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project_type }}</td>
                                <td><?php echo $project_status; ?></td>
                                <td><?php echo $project_mail_status; ?></td>
                                <td>
                                                <span>
                                                    <a href="javascript:;"
                                                       class="btn btn-sm btn-clean btn-icon mr-2 view_report"
                                                       title="Report details" id="{{ $project->id }}"
                                                       data-user_id="{{ $project->user_id }}"
                                                       data-project_name="{{$project->project_name}}">
                                                        <span class="svg-icon svg-icon-primary svg-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Shopping/Chart-bar1.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                          height="24"/>
                                                                    <rect fill="#000000" opacity="0.3" x="12"
                                                                          y="4" width="3" height="13"
                                                                          rx="1.5"/>
                                                                    <rect fill="#000000" opacity="0.3" x="7"
                                                                          y="9" width="3" height="8"
                                                                          rx="1.5"/>
                                                                    <path
                                                                        d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                                        fill="#000000" fill-rule="nonzero"/>
                                                                    <rect fill="#000000" opacity="0.3" x="17"
                                                                          y="11" width="3" height="6"
                                                                          rx="1.5"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>


                                                    <a href="javascript:;"
                                                       class="btn btn-sm btn-clean btn-icon mr-2 view_project"
                                                       title="View Project details" id="{{ $project->id }}"
                                                       data-user_id="{{ $project->user_id }}">
                                                        <span class="svg-icon svg-icon-primary svg-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/General/Expand-arrows.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                    <path
                                                                        d="M10.5857864,12 L5.46446609,6.87867966 C5.0739418,6.48815536 5.0739418,5.85499039 5.46446609,5.46446609 C5.85499039,5.0739418 6.48815536,5.0739418 6.87867966,5.46446609 L12,10.5857864 L18.1923882,4.39339828 C18.5829124,4.00287399 19.2160774,4.00287399 19.6066017,4.39339828 C19.997126,4.78392257 19.997126,5.41708755 19.6066017,5.80761184 L13.4142136,12 L19.6066017,18.1923882 C19.997126,18.5829124 19.997126,19.2160774 19.6066017,19.6066017 C19.2160774,19.997126 18.5829124,19.997126 18.1923882,19.6066017 L12,13.4142136 L6.87867966,18.5355339 C6.48815536,18.9260582 5.85499039,18.9260582 5.46446609,18.5355339 C5.0739418,18.1450096 5.0739418,17.5118446 5.46446609,17.1213203 L10.5857864,12 Z"
                                                                        fill="#000000" opacity="0.3"
                                                                        transform="translate(12.535534, 12.000000) rotate(-360.000000) translate(-12.535534, -12.000000) "/>
                                                                    <path
                                                                        d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                                        fill="#000000" fill-rule="nonzero"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>

                                                    <a href="javascript:;"
                                                       class="btn btn-sm btn-clean btn-icon mr-2 edit_project"
                                                       title="Edit details" id="{{ $project->id }}"
                                                       data-user_id="{{ $project->user_id }}">
                                                        <span class="svg-icon svg-icon-primary svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                          height="24"/>
                                                                    <path
                                                                        d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                                    <rect fill="#000000" opacity="0.3" x="5"
                                                                          y="20" width="15" height="2"
                                                                          rx="1"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>

                                                    <a href="javascript:;"
                                                       class="btn btn-sm btn-clean btn-icon mr-2 delete_project"
                                                       title="Delete Project" id="{{ $project->id }}"
                                                       data-user_id="{{ $project->user_id }}">
                                                        <span class="svg-icon svg-icon-primary svg-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                          height="24"/>
                                                                    <path
                                                                        d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                        fill="#000000" fill-rule="nonzero"/>
                                                                    <path
                                                                        d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>

                                                    <a href="javascript:;"
                                                       class="btn btn-sm btn-clean btn-icon mr-2 mail_project"
                                                       title="Send Mail" id="{{ $project->id }}"
                                                       data-user_id="{{ $project->user_id }}">
                                                        <span class="svg-icon svg-icon-primary svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Communication/Outgoing-mail.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                          height="24"/>
                                                                    <path
                                                                        d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
                                                                        fill="#000000"/>
                                                                    <path
                                                                        d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                        transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>

                                                    <a href="javascript:;"
                                                       class="btn btn-sm btn-clean btn-icon mr-2 upload_project_files"
                                                       title="Edit details" id="{{ $project->id }}"
                                                       data-user_id="{{ $project->user_id }}">
                                                        <span class="svg-icon svg-icon-primary svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Communication/Outgoing-box.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                          height="24"/>
                                                                    <path
                                                                        d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z"
                                                                        fill="#000000"/>
                                                                    <path
                                                                        d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z"
                                                                        fill="#000000" opacity="0.3"/>
                                                                    <path
                                                                        d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="col-md-2 color-primary">#</th>
                            <th class="col-md-2 color-primary">Project Name</th>
                            <th class="col-md-2 color-primary">Project Type</th>
                            <th class="col-md-2 color-primary">Project Status</th>
                            <th class="col-md-2 color-primary">Project Mail Status</th>
                            <th class="col-md-2 color-primary">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create_project_modal" tabindex="-1" role="dialog"
         aria-labelledby="create_project_modalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Project</h5>
                    <button type="button" class="close-modal btn btn-gradient-primary btn-rounded btn-icon"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="create_project_modal_form" id="create_project_modal_from" method="POST">
                        <input type="hidden" name="client_id" value="" id="create_client_id"/>
                        <div class="form-group row">
                            <label for="create_client_name-label" class="col-sm-3 col-form-label">Client
                                Name</label>
                            <div class="col-sm-9">
                                <label id="create_client_name_label" placeholder="Client Name"
                                       class="col-sm-12 col-form-label"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create_client_email-label" class="col-sm-3 col-form-label">Client
                                Email</label>
                            <div class="col-sm-9">
                                <label id="create_client_email_label" class="col-sm-12 col-form-label"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create_client_project_name-label" class="col-sm-3 col-form-label">Website
                                URL</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="create_client_project_name"
                                       placeholder="Website" name="project_name" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create_client_project_type-label" class="col-sm-3 col-form-label">Project
                                Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="create_client_project_type" name="project_type"
                                        value="" required>
                                    <option value="1" selected>Website</option>
                                    <option value="2">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create_client_project_status-label"
                                   class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                {{-- <input type="text" class="form-control" id="view_client_project_status"
                        placeholder="Project Status" name="project_status" value=""> --}}
                                <select class="form-control" id="create_client_project_status"
                                        name="project_status" value="" required>
                                    <option value="1" selected>Pending</option>
                                    <option value="2">Under Review</option>
                                    <option value="3">Completed</option>
                                    <option value="4">Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create_client_project_comment-label"
                                   class="col-sm-3 col-form-label">Comment</label>
                            <div class="col-sm-9">
                                        <textarea class="form-control" id="create_client_project_comment"
                                                  placeholder="Project Comment"
                                                  name="project_comment" value="" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal"
                                    data-dismiss="modal">Close
                            </button>
                            <button type="Submit" class="btn btn-primary" id="create_project_modal_submit">Save
                                changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="view_project_modal" tabindex="-1" role="dialog"
         aria-labelledby="view_project_modalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Project Details</h5>
                    <button type="button" class="close-modal btn btn-gradient-primary btn-rounded btn-icon"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="view_project_modal_form" id="view_project_modal_from">
                        <div class="form-group row">
                            <label for="view_client_name-label" class="col-sm-3 col-form-label">Client
                                Name</label>
                            <div class="col-sm-9">
                                <label id="view_client_name" placeholder="Client Name" name="client_name"
                                       class="col-sm-12 col-form-label"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_email-label" class="col-sm-3 col-form-label">Client
                                Email</label>
                            <div class="col-sm-9">
                                <label id="view_client_email" placeholder="Client Email" name="client_email"
                                       class="col-sm-12 col-form-label"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_project_name-label" class="col-sm-3 col-form-label">Project
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="view_client_project_name"
                                       placeholder="Project Name" name="project_name" value="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_project_type-label" class="col-sm-3 col-form-label">Project
                                Type</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="view_client_project_type"
                                       placeholder="Project Type" name="project_type" value="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_project_status-label"
                                   class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="view_client_project_status"
                                       placeholder="Project Status" name="project_status" value="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_project_mail_status-label"
                                   class="col-sm-3 col-form-label">Mail
                                Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="view_client_project_mail_status"
                                       placeholder="Project Mail Status" name="project_mail_status" value=""
                                       readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_project_comment-label"
                                   class="col-sm-3 col-form-label">Comment</label>
                            <div class="col-sm-9">
                                        <textarea class="form-control" id="view_client_project_comment"
                                                  placeholder="Project Comment" name="project_comment"
                                                  value="" readonly rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal"
                                    data-dismiss="modal">Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_project_modal" tabindex="-1" role="dialog"
         aria-labelledby="edit_project_modalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Project Details</h5>
                    <button type="button" class="close-modal btn btn-gradient-primary btn-rounded btn-icon"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="edit_project_modal_form" id="edit_project_modal_from" method="POST">
                        <input type="hidden" name="client_id" value="" id="edit_client_id"/>
                        <input type="hidden" name="client_project_id" value=""
                               id="edit_client_project_id"/>
                        <div class="form-group row">
                            <label for="edit_client_name-label" class="col-sm-3 col-form-label">Client
                                Name</label>
                            <div class="col-sm-9">
                                <label id="edit_client_name_label" placeholder="Client Name"
                                       class="col-sm-12 col-form-label"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_client_email-label" class="col-sm-3 col-form-label">Client
                                Email</label>
                            <div class="col-sm-9">
                                <label id="edit_client_email_label" class="col-sm-12 col-form-label"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_client_project_name-label" class="col-sm-3 col-form-label">Project
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_client_project_name"
                                       placeholder="Project Name" name="project_name" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_client_project_type-label" class="col-sm-3 col-form-label">Project
                                Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="edit_client_project_type" name="project_type"
                                        value="" required>
                                    <option value="1" selected>Website</option>
                                    <option value="2">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_client_project_status-label"
                                   class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                {{-- <input type="text" class="form-control" id="view_client_project_status"
                        placeholder="Project Status" name="project_status" value=""> --}}
                                <select class="form-control" id="edit_client_project_status"
                                        name="project_status" value="" required>
                                    <option value="1" selected>Pending</option>
                                    <option value="2">Under Review</option>
                                    <option value="3">Completed</option>
                                    <option value="4">Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_client_project_comment-label"
                                   class="col-sm-3 col-form-label">Comment</label>
                            <div class="col-sm-9">
                                        <textarea class="form-control" id="edit_client_project_comment"
                                                  placeholder="Project Comment" name="project_comment"
                                                  value="" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal"
                                    data-dismiss="modal">Close
                            </button>
                            <button type="Submit" class="btn btn-primary" id="edit_project_modal_submit">Save
                                changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mail_project_modal" tabindex="-1" role="dialog"
         aria-labelledby="mail_project_modalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Send Mail Details</h5>
                    <button type="button" class="close-modal btn btn-gradient-primary btn-rounded btn-icon"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="mail_project_modal_form" id="mail_project_modal_from" method="POST">
                        <input type="hidden" name="client_id" value="" id="mail_client_id"/>
                        <input type="hidden" name="client_project_id" value=""
                               id="mail_client_project_id"/>
                        <div class="form-group row">
                            <label for="mail_client_name-label" class="col-sm-3 col-form-label">Client
                                Name</label>
                            <div class="col-sm-9">
                                <label id="mail_client_name_label" placeholder="Client Name"
                                       class="col-sm-12 col-form-label"></label>
                                <input id="mail_client_name" type="hidden" name="client_name" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mail_client_email-label" class="col-sm-3 col-form-label">Client
                                Email</label>
                            <div class="col-sm-9">
                                <label id="mail_client_email_label" class="col-sm-12 col-form-label"></label>
                                <input id="mail_client_email" type="hidden" name="client_email" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mail_client_project_name-label" class="col-sm-3 col-form-label">Project
                                Name</label>
                            <div class="col-sm-9">
                                <label id="mail_client_project_name_label"
                                       class="col-sm-12 col-form-label"></label>
                                <input id="mail_client_project_name" type="hidden" name="project_name"
                                       value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mail_client_project_mail_subject-label"
                                   class="col-sm-3 col-form-label">Subject</label>
                            <div class="col-sm-9">
                                <input id="mail_client_project_mail_subject" type="text" name="subject"
                                       placeholder="Subject" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mail_client_project_mail_cc-label"
                                   class="col-sm-3 col-form-label">CC</label>
                            <div class="col-sm-9">
                                <input id="mail_client_project_mail_cc" type="email" name="cc"
                                       class="form-control" placeholder="CC" value="">
                                <span style="font-size: 12px">Separate multiple emails with comma</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mail_client_project_mail_bcc-label"
                                   class="col-sm-3 col-form-label">BCC</label>
                            <div class="col-sm-9">
                                <input id="mail_client_project_mail_bcc" class="form-control" type="email"
                                       name="bcc" placeholder="BCC" value="">
                                <span style="font-size: 12px">Separate multiple emails with comma</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mail_client_project_mail_body-label">Report Image</label>
                            <input type="file" class="form-control" id="mail_client_project_mail_email_image"
                                   name="email_img" placeholder="files" value=""
                                   accept=".jpg,.png,.gif,.jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="mail_client_project_mail_body-label" class="col-sm-3 col-form-label">Mail
                                Body</label>
                            <div class="col-sm-9">
                                        <textarea id="mail_client_project_mail_body" class="form-control" type="text"
                                                  name="body"
                                                  placeholder="Mail Body" rows="5" value=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mail_client_project_mail_body_label">Attachment</label>
                            <input type="file" class="form-control" id="mail_client_project_mail_attachment"
                                   name="attachments[]" placeholder="files" value="" multiple="multiple"
                                   accept=".jpg,.png,.gif,.jpeg,.pdf,.docs,.docx,.mp4,.mp3,.wav,.xls,.xlsx,.pptx">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal"
                                    data-dismiss="modal">Close
                            </button>
                            <button type="Submit" class="btn btn-primary" id="edit_project_modal_submit">Save
                                changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="manage_project_files_modal" tabindex="-1" role="dialog"
         aria-labelledby="manage_project_files_ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manage_project_files_modal_label">Manage project Files</h5>
                    <button type="button" class="btn btn-gradient-primary btn-rounded btn-icon close-modal emc"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="upload_project_files_form" enctype="multipart/form-data"
                          id="upload_project_files_form" onsubmit="return false">
                        <input type="hidden" id="client_id" value="" name="client_id">
                        <input type="hidden" id="client_name" value="" name="client_name">
                        <input type="hidden" id="client_email" value="" name="client_email">
                        <input type="hidden" id="project_id" value="" name="project_id">
                        <input type="hidden" id="project_name" value="" name="project_name">

                        <div class="form-group">
                            <label for="lable_send_project_email_image">Email Image</label>
                            <input type="file" class="form-control" id="upload_project_email_image"
                                   name="email_img" placeholder="Email Image" value=""
                                   accept=".jpg,.png,.gif,.jpeg">
                        </div>
                        <div class="form-group">
                            <label for="lable_send_subscriber_attachment">Attachment</label>
                            <input type="file" class="form-control" id="upload_project_email_attachment"
                                   name="attachments[]" placeholder="files" value="" multiple="multiple"
                                   accept=".jpg,.png,.gif,.jpeg,.pdf,.docs,.docx,.mp4,.mp3,.wav,.xls,.xlsx,.pptx">
                        </div>
                        <div class="form-group" id="filesData">

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-modal"
                            data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary submit_project_files">Upload Files</button>
                </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#project-list').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "columnDefs": [{
                    "targets": [0],
                    // "orderable": false
                }],
                "responsive": true,
                "autoWidth": true,

            });
        });

        $(document).on('click', '.close-modal', function () {
            //reset form data
            $('#create_project_modal_from').trigger("reset");
            $('#create_project_modal').modal('hide');
            $('#mail_project_modal_from')[0].reset();
            $('#view_project_modal').modal('hide');
            $('#edit_project_modal_from').trigger("reset");
            $('#edit_project_modal').modal('hide');
            $('#mail_project_modal').modal('hide');
            $('#upload_project_files_form').trigger('reset');
            $('#manage_project_files_modal').modal('hide');
        });

        $(document).on('click', '.view_report', function () {
            var project_id = $(this).attr('id');
            var user_id = $(this).data('user_id');
            var project_name = $(this).data('project_name');
            $.ajax({
                type: "POST",
                url: "{{ url('management/view_report') }}",
                data: {
                    project_id: project_id,
                    user_id: user_id,
                    project_name: project_name,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {

                }
            });
        });

        $(document).on('click', '.create_project', function () {
            var user_id = $(this).data('user_id');
            $.ajax({
                type: "POST",
                url: "{{ url('management/add_project') }}",
                data: {
                    user_id: user_id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    $('#create_project_modal_from').trigger("reset");
                    $('#create_client_id').val(response.client_id);
                    $('#create_client_name_label').html('');
                    $('#create_client_name_label').append(response.client_name);
                    $('#create_client_email_label').html('');
                    $('#create_client_email_label').append(response.client_email);
                    $('#create_project_modal').modal('show');
                }
            });
        });

        $('#create_project_modal_from').submit(function (e) {
            e.preventDefault();
            var client_id = $('#create_client_id').val();
            var project_name = $('#create_client_project_name').val();
            var project_type = $('#create_client_project_type').val();
            var project_status = $('#create_client_project_status').val();
            var project_comment = $('#create_client_project_comment').val();
            $.ajax({
                url: "{{ url('management/create_project') }}",
                type: "POST",
                data: {
                    client_id: client_id,
                    project_name: project_name,
                    project_status: project_status,
                    project_type: project_type,
                    project_comment: project_comment,
                    _token: "{{ csrf_token() }}"
                },
                datatype: "json",
                success: function (data) {
                    console.log(data);
                    if (data.status == 'success') {
                        swal({
                            title: "Success",
                            text: "Project created successfully",
                            icon: "success",
                            button: "OK",
                        }).then(function () {
                            $('#create_project_modal').modal('hide');
                            location.reload();
                        });

                    } else {
                        swal("Error", data.message, "error");
                    }
                }
            });

        });

        $(document).on('click', '.view_project', function () {
            var id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');
            $.ajax({
                url: "{{ url('management/view_project') }}",
                type: "POST",
                data: {
                    id: id,
                    user_id: user_id,
                    _token: "{{ csrf_token() }}"
                },
                datatype: "json",
                success: function (data) {
                    $('#view_client_name').html('');
                    $('#view_client_name').append(data.name);
                    $('#view_client_email').html('');
                    $('#view_client_email').append(data.email);
                    $('#view_client_project_name').val(data.project_name);
                    if (data.project_type == 1) {
                        $('#view_client_project_type').val('Website');
                    } else {
                        $('#view_client_project_type').val('Marketing');
                    }
                    if (data.project_status == 1) {
                        $('#view_client_project_status').val('Pending');
                    } else if (data.project_status == 2) {
                        $('#view_client_project_status').val('Under Review');
                    } else if (data.project_status == 3) {
                        $('#view_client_project_status').val('Completed');
                    } else {
                        $('#view_client_project_status').val('Cancelled');
                    }
                    if (data.mail_status == 1) {
                        $('#view_client_project_mail_status').val('Sent');
                    } else {
                        $('#view_client_project_mail_status').val('Not Sent');
                    }
                    $('#view_client_project_comment').val(data.project_comment);
                    $('#view_project_modal').modal('show');
                }
            });
        });

        $(document).on('click', '.edit_project', function () {
            var id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');
            $.ajax({
                url: "{{ url('management/edit_project') }}",
                type: "POST",
                data: {
                    id: id,
                    user_id: user_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                    console.log(data);
                    $('#edit_client_id').val(data.user_id);
                    $('#edit_client_project_id').val(data.id);
                    $('#edit_client_name_label').html('');
                    $('#edit_client_name_label').append(data.name);
                    $('#edit_client_email_label').html('');
                    $('#edit_client_email_label').append(data.email);
                    $('#edit_client_project_name').val(data.project_name);
                    if (data.project_type == 1) {
                        $("select#edit_client_project_type").val('1');
                    } else {
                        $("select#edit_client_project_type").val('2');
                    }
                    if (data.project_status == 1) {
                        $("select#edit_client_project_status").val('1');
                    } else if (data.project_status == 2) {
                        $("select#edit_client_project_status").val('2');
                    } else if (data.project_status == 3) {
                        $("select#edit_client_project_status").val('3');
                    } else {
                        $("select#edit_client_project_status").val('4');
                    }
                    if (data.mail_status == 1) {
                        $('#edit_client_project_mail_status').val('Sent');
                    } else {
                        $('#edit_client_project_mail_status').val('Not Sent');
                    }
                    $('#edit_client_project_comment').val(data.project_comment);
                    $('#edit_project_modal').modal('show');
                }
            });
        });

        $('#edit_project_modal_from').submit(function (e) {
            e.preventDefault();

            var client_id = $('#edit_client_id').val();
            var project_id = $('#edit_client_project_id').val();
            var project_name = $('#edit_client_project_name').val();
            var project_status = $('#edit_client_project_status').val();
            var project_comment = $('#edit_client_project_comment').val();
            var project_type = $('#edit_client_project_type').val();

            $.ajax({
                url: "{{ url('management/update_project') }}",
                type: "POST",
                data: {
                    client_id: client_id,
                    project_id: project_id,
                    project_name: project_name,
                    project_status: project_status,
                    project_comment: project_comment,
                    project_type: project_type,
                    _token: "{{ csrf_token() }}"
                },
                datatype: "json",
                success: function (data) {
                    console.log(data);
                    if (data.status == 'success') {
                        swal({
                            title: "Success",
                            text: "Project Updated Successfully",
                            icon: "success",
                            button: "OK",
                        }).then(function () {
                            $('#edit_project_modal').modal('hide');
                            location.reload();
                        });

                    } else {
                        swal("Error", data.message, "error");
                    }
                }
            });
        });

        $(document).on('click', '.delete_project', function () {
            var id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover!",
                icon: "warning",
                buttons: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ url('management/delete_project') }}",
                            type: "POST",
                            data: {
                                id: id,
                                user_id: user_id,
                                _token: "{{ csrf_token() }}"
                            },
                            datatype: "json",
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    swal({
                                        title: "Success",
                                        text: "Project Deleted Successfully",
                                        icon: "success",
                                        button: "OK",
                                    }).then(function () {
                                        location.reload();
                                    });

                                } else {
                                    swal("Error", data.message, "error");
                                }
                            }
                        });
                    } else {
                        swal("Cancelled", "Deletion Cancelled :)", "error");
                    }
                });
        });

        $(document).on('click', '.mail_project', function () {
            var id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');
            $.ajax({
                url: "{{ url('management/mail_project') }}",
                type: "POST",
                data: {
                    id: id,
                    user_id: user_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                    console.log(data);
                    $('#mail_client_id').val(data.user_id);
                    $('#mail_client_project_id').val(data.id);
                    $('#mail_client_name_label').html('');
                    $('#mail_client_name_label').append(data.name);
                    $('#mail_client_name').val(data.name);
                    $('#mail_client_email_label').html('');
                    $('#mail_client_email_label').append(data.email);
                    $('#mail_client_email').val(data.email);
                    $('#mail_client_project_name_label').html('');
                    $('#mail_client_project_name_label').append(data.project_name);
                    $('#mail_client_project_name').val(data.project_name);
                    $('#mail_project_modal').modal('show');
                }
            });
        });

        $('#mail_project_modal_from').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ url('management/send_mail') }}",
                type: "POST",
                data: formData,
                datatype: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status == 'success') {
                        swal({
                            title: "Success",
                            text: "Mail Sent Successfully",
                            icon: "success",
                            button: "OK",
                        }).then(function () {
                            $('#mail_project_modal').modal('hide');
                            location.reload();
                        });

                    } else {
                        swal("Error", data.message, "error");
                    }
                }
            });
        });

        $(document).on('click', '.upload_project_files', function () {
            var id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');
            $.ajax({
                url: "{{ url('management/upload_project_files') }}",
                type: "POST",
                data: {
                    id: id,
                    user_id: user_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                    $('#client_id').val(data.client_id);
                    $('#project_id').val(data.project_id);
                    $('#project_name').val(data.project_name);
                    $('#client_name').val(data.client_name);
                    $('#client_email').val(data.client_email);
                    $('#filesData').html('');
                    $('#filesData').html(data.content);
                    $('#manage_project_files_modal').modal('show');
                }
            });
        });

        $('#upload_project_files_form').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ url('management/submit_project_files') }}",
                type: "POST",
                data: formData,
                datatype: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data.status == 'success') {
                        swal({
                            title: "Success",
                            text: "Files Uploaded Successfully",
                            icon: "success",
                            button: "OK",
                        }).then(function () {
                            $('#filesData').html('');
                            $('#filesData').html(data.content);
                            //$('#manage_project_files_modal').modal('hide');
                            //location.reload();
                        });

                    } else {
                        swal("Error", data.message, "error");
                    }
                }
            });
        });
    </script>
@endsection
