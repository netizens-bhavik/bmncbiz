<div id="kt_header" class="header">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1 mt-5 mt-lg-0">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h4 class="text-dark font-weight-bold my-1 mr-5">{{ auth()->user()->name }}'s Dashboard
                    <small class="text-muted ml-2">updates and statistics</small>
                </h4>
                <!--end::Page Title-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Search-->
            <!--begin::Search-->
            {{-- <div class="topbar-item mr-2">
                <div class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle"
                    id="kt_quick_search_toggle">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                            viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div> --}}
            <!--end::Search-->
            <!--end::Search-->
            <!--begin::Quick Actions-->
            {{-- <div class="topbar-item mr-2">
                <div class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle btn-dropdown"
                    id="kt_quick_actions_toggle">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                            viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" opacity="0.3" x="13" y="4"
                                    width="3" height="16" rx="1.5" />
                                <rect fill="#000000" x="8" y="9" width="3"
                                    height="11" rx="1.5" />
                                <rect fill="#000000" x="18" y="11" width="3"
                                    height="9" rx="1.5" />
                                <rect fill="#000000" x="3" y="13" width="3"
                                    height="7" rx="1.5" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div> --}}
            <!--end::Quick Actions-->
            <!--begin::Quick panel-->
            {{-- <div class="topbar-item mr-2">
                <div class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle"
                    id="kt_quick_panel_toggle">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                            viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" x="4" y="4" width="7"
                                    height="7" rx="1.5" />
                                <path
                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div> --}}
            <!--end::Quick panel-->
            <!--begin::Chat-->
            {{-- <div class="topbar-item mr-2">
                <div class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle"
                    data-toggle="modal" data-target="#kt_chat_modal">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat6.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                            viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z"
                                    fill="black" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div> --}}
            <!--end::Chat-->
            <!--begin::Languages-->
            {{-- <div class="dropdown mr-2">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div
                        class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle btn-dropdown">
                        <img class="h-20px w-20px rounded-circle"
                            src="{{ asset('public/assets/media/svg/flags/226-united-states.svg') }}"
                            alt="" />
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div
                    class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('public/assets/media/svg/flags/226-united-states.svg') }}"
                                        alt="" />
                                </span>
                                <span class="navi-text">English</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item active">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('public/assets/media/svg/flags/128-spain.svg') }}"
                                        alt="" />
                                </span>
                                <span class="navi-text">Spanish</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('public/assets/media/svg/flags/162-germany.svg') }}"
                                        alt="" />
                                </span>
                                <span class="navi-text">German</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('public/assets/media/svg/flags/063-japan.svg') }}"
                                        alt="" />
                                </span>
                                <span class="navi-text">Japanese</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('public/assets/media/svg/flags/195-france.svg') }}"
                                        alt="" />
                                </span>
                                <span class="navi-text">French</span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div> --}}
            <!--end::Languages-->
            <!--begin::User-->

            {{-- <div class="topbar-item mr-5">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 2px solid #000;">

                        <span style="font-weight: bolder; font-size: 12px">
                            Select Your Projects
                        </span>

                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:100%;overflow:hidden;">
                        @foreach($projects as $project)
                        <a class="dropdown-item d-flex" href="#" >{{ $project->project_name }}</a>
                        @endforeach

                    </div>
                </div>
            </div> --}}

            {{-- @isset($projects) --}}
            @if(Session::get('projects'))
            <div class="topbar-item mr-5">
                <select class="form-control" id="project_select" name="project_select" style="border: 2px solid #000;">
                    <option value="all_projects">OverAll Dashboard</option>
                    @foreach(Session::get('projects') as $project)
                    <option value="{{ $project->id }}" {{ (Session::get('projectId') && Session::get('projectId') == $project->id)?'selected':''  }}>{{ $project->project_name }}</option>
                    @endforeach
                </select>
            </div>
            @endisset

            <div class="topbar-item mr-3">
                <div class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle align-items-center overflow-hidden"
                    id="kt_quick_user_toggle">
                    <img alt="Logo"
                        src="{{ asset('public/assets/media/svg/avatars/001-boy.svg') }}"
                        class="h-75 align-self-end" />
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
</div>

