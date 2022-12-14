@php
$performances = array();
if (isset($insights_data['desktop']['cls_score'])) {
    if ($insights_data['desktop']['cls_score'] < 50) {
        $performances['cls_score'] = '<span class="text-danger"> Poor </span>';
        $performances['cls_score_data'] = '<span class="text-danger"> '. $insights_data['desktop']['cls'] .'</span>';
    } elseif ($insights_data['desktop']['cls_score'] <= 89) {
        $performances['cls_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['cls_score_data'] = '<span class="text-warning"> '. $insights_data['desktop']['cls'] .'</span>';
    } elseif ($insights_data['desktop']['cls_score'] <= 100) {
        $performances['cls_score'] = '<span class="text-success"> Good </span>';
        $performances['cls_score_data'] = '<span class="text-success"> '. $insights_data['desktop']['cls'] .'</span>';
    }
} else {
    $performances['cls_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['cls_score_data'] = '<span class="text-secondary"> '. $insights_data['desktop']['cls'] .'</span>';
}

if (isset($insights_data['desktop']['fcp_score'])) {
    if ($insights_data['desktop']['fcp_score'] < 50) {
        $performances['fcp_score'] = '<span class="text-danger"> Poor </span>';
        $performances['fcp_time'] = '<span class="text-danger"> ' . $insights_data['desktop']['fcp_time'] . ' </span>';
    } elseif ($insights_data['desktop']['fcp_score'] <= 89) {
        $performances['fcp_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['fcp_time'] = '<span class="text-warning"> ' . $insights_data['desktop']['fcp_time'] . ' </span>';
    } elseif ($insights_data['desktop']['fcp_score'] <= 100) {
        $performances['fcp_score'] = '<span class="text-success"> Good </span>';
        $performances['fcp_time'] = '<span class="text-success"> ' . $insights_data['desktop']['fcp_time'] . ' </span>';
    }
} else {
    $performances['fcp_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['fcp_time'] = '<span class="text-secondary"> ' . $insights_data['desktop']['fcp_time'] . ' </span>';
}

if (isset($insights_data['desktop']['si_score'])) {
    if ($insights_data['desktop']['si_score'] < 50) {
        $performances['si_score'] = '<span class="text-danger"> Poor </span>';
        $performances['si_time'] = '<span class="text-danger"> ' . $insights_data['desktop']['si_time'] . ' </span>';
    } elseif ($insights_data['desktop']['si_score'] <= 89) {
        $performances['si_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['si_time'] = '<span class="text-warning"> ' . $insights_data['desktop']['si_time'] . ' </span>';
    } elseif ($insights_data['desktop']['si_score'] <= 100) {
        $performances['si_score'] = '<span class="text-success"> Good </span>';
        $performances['si_time'] = '<span class="text-success"> ' . $insights_data['desktop']['si_time'] . ' </span>';
    }
} else {
    $performances['si_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['si_time'] = '<span class="text-secondary"> ' . $insights_data['desktop']['si_time'] . ' </span>';
}

if (isset($insights_data['desktop']['tti_score'])) {
    if ($insights_data['desktop']['tti_score'] < 50) {
        $performances['tti_score'] = '<span class="text-danger"> Poor </span>';
        $performances['tti_time'] = '<span class="text-danger"> ' . $insights_data['desktop']['tti_time'] . ' </span>';
    } elseif ($insights_data['desktop']['tti_score'] <= 89) {
        $performances['tti_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['tti_time'] = '<span class="text-warning"> ' . $insights_data['desktop']['tti_time'] . ' </span>';
    } elseif ($insights_data['desktop']['tti_score'] <= 100) {
        $performances['tti_score'] = '<span class="text-success"> Good </span>';
        $performances['tti_time'] = '<span class="text-success"> ' . $insights_data['desktop']['tti_time'] . ' </span>';
    }
} else {
    $performances['tti_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['tti_time'] = '<span class="text-secondary"> ' . $insights_data['desktop']['tti_time'] . ' </span>';
}

if (isset($insights_data['desktop']['fmp_score'])) {
    if ($insights_data['desktop']['fmp_score'] < 50) {
        $performances['fmp_score'] = '<span class="text-danger"> Poor </span>';
        $performances['fmp_time'] = '<span class="text-danger"> ' . $insights_data['desktop']['fmp_time'] . ' </span>';
    } elseif ($insights_data['desktop']['fmp_score'] <= 89) {
        $performances['fmp_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['fmp_time'] = '<span class="text-warning"> ' . $insights_data['desktop']['fmp_time'] . ' </span>';
    } elseif ($insights_data['desktop']['fmp_score'] <= 100) {
        $performances['fmp_score'] = '<span class="text-success"> Good </span>';
        $performances['fmp_time'] = '<span class="text-success"> ' . $insights_data['desktop']['fmp_time'] . ' </span>';
    }
} else {
    $performances['fmp_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['fmp_time'] = '<span class="text-secondary"> ' . $insights_data['desktop']['fmp_time'] . ' </span>';
}

if (isset($insights_data['desktop']['lcp_score'])) {
    if ($insights_data['desktop']['lcp_score'] < 50) {
        $performances['lcp_score'] = '<span class="text-danger"> Poor </span>';
        $performances['lcp_time'] = '<span class="text-danger"> ' . $insights_data['desktop']['lcp_time'] . ' </span>';
    } elseif ($insights_data['desktop']['lcp_score'] <= 89) {
        $performances['lcp_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['lcp_time'] = '<span class="text-warning"> ' . $insights_data['desktop']['lcp_time'] . ' </span>';
    } elseif ($insights_data['desktop']['lcp_score'] <= 100) {
        $performances['lcp_score'] = '<span class="text-success"> Good </span>';
        $performances['lcp_time'] = '<span class="text-success"> ' . $insights_data['desktop']['lcp_time'] . ' </span>';
    }
} else {
    $performances['lcp_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['lcp_time'] = '<span class="text-secondary"> ' . $insights_data['desktop']['lcp_time'] . ' </span>';
}

if (isset($insights_data['desktop']['tbt_score'])) {
    if ($insights_data['desktop']['tbt_score'] < 50) {
        $performances['tbt_score'] = '<span class="text-danger"> Poor </span>';
        $performances['tbt_time'] = '<span class="text-danger"> ' . $insights_data['desktop']['tbt_time'] . ' </span>';
    } elseif ($insights_data['desktop']['tbt_score'] <= 89) {
        $performances['tbt_score'] = '<span class="text-warning"> Needs improvement </span>';
        $performances['tbt_time'] = '<span class="text-warning"> ' . $insights_data['desktop']['tbt_time'] . ' </span>';
    } elseif ($insights_data['desktop']['tbt_score'] <= 100) {
        $performances['tbt_score'] = '<span class="text-success"> Good </span>';
        $performances['tbt_time'] = '<span class="text-success"> ' . $insights_data['desktop']['tbt_time'] . ' </span>';
    }
} else {
    $performances['tbt_score'] = '<span class="text-secondary"> N/A </span>';
    $performances['tbt_time'] = '<span class="text-secondary"> ' . $insights_data['desktop']['tbt_time'] . ' </span>';
}
@endphp

<div class="row" style="padding: 0%;margin-left:0px !important; margin-right:0px !important;">
    <div class="col-xl-4 d-flex align-items-stretch">
        <div class="row" style="width: 100%">
            <div class="col-xl-12 card shadow p-3 mb-5 bg-white rounded">
                <!--begin::List Widget 1-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Core
                                Web Vital</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-lg">Avarage
                                +47%</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Design/Image.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">First
                                        Contentful Paint</a>
                                    <span class="text-muted font-weight-bold">{!! $performances['fcp_score'] !!}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{!! $performances['fcp_time'] !!}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Layout/Layout-grid.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="4"
                                                width="4" height="4" rx="1" />
                                            <path
                                                d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Largest
                                        Contentful Paint</a>
                                    <span class="text-muted font-weight-bold"> {!! $performances['lcp_score'] !!} </span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{!! $performances['lcp_time'] !!}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Design/Substract.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L10.1818182,16 C8.76751186,16 8,15.2324881 8,13.8181818 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Cumulative
                                        Layout Shift</a>
                                    <span class="text-muted font-weight-bold">{!! $performances['cls_score'] !!}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{!! $performances['cls_score_data'] !!}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Files/Cloud-download.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M5.74714567,13.0425758 C4.09410362,11.9740356 3,10.1147886 3,8 C3,4.6862915 5.6862915,2 9,2 C11.7957591,2 14.1449096,3.91215918 14.8109738,6.5 L17.25,6.5 C19.3210678,6.5 21,8.17893219 21,10.25 C21,12.3210678 19.3210678,14 17.25,14 L8.25,14 C7.28817895,14 6.41093178,13.6378962 5.74714567,13.0425758 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M11.1288761,15.7336977 L11.1288761,17.6901712 L9.12120481,17.6901712 C8.84506244,17.6901712 8.62120481,17.9140288 8.62120481,18.1901712 L8.62120481,19.2134699 C8.62120481,19.4896123 8.84506244,19.7134699 9.12120481,19.7134699 L11.1288761,19.7134699 L11.1288761,21.6699434 C11.1288761,21.9460858 11.3527337,22.1699434 11.6288761,22.1699434 C11.7471877,22.1699434 11.8616664,22.1279896 11.951961,22.0515402 L15.4576222,19.0834174 C15.6683723,18.9049825 15.6945689,18.5894857 15.5161341,18.3787356 C15.4982803,18.3576485 15.4787093,18.3380775 15.4576222,18.3202237 L11.951961,15.3521009 C11.7412109,15.173666 11.4257142,15.1998627 11.2472793,15.4106128 C11.1708299,15.5009075 11.1288761,15.6153861 11.1288761,15.7336977 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(11.959697, 18.661508) rotate(-270.000000) translate(-11.959697, -18.661508) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Total
                                        Blocking Time</a>
                                    <span class="text-muted font-weight-bold">{!! $performances['tbt_score'] !!}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{!! $performances['tbt_time'] !!}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Code/Loading.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g>
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                            </g>
                                            <path
                                                d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Speed
                                        Index</a>
                                    <span class="text-muted font-weight-bold">{!! $performances['si_score'] !!}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{!! $performances['si_time'] !!}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Code/Time-schedule.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z"
                                                fill="#000000" />
                                            <path
                                                d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Time
                                        to Interact </a>
                                    <span class="text-muted font-weight-bold">{!! $performances['tti_score'] !!}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{!! $performances['tti_time'] !!}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/General/Attachment1.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12.4644661,14.5355339 L9.46446609,14.5355339 C8.91218134,14.5355339 8.46446609,14.9832492 8.46446609,15.5355339 C8.46446609,16.0878187 8.91218134,16.5355339 9.46446609,16.5355339 L12.4644661,16.5355339 L12.4644661,17.5355339 C12.4644661,18.6401034 11.5690356,19.5355339 10.4644661,19.5355339 L6.46446609,19.5355339 C5.35989659,19.5355339 4.46446609,18.6401034 4.46446609,17.5355339 L4.46446609,13.5355339 C4.46446609,12.4309644 5.35989659,11.5355339 6.46446609,11.5355339 L10.4644661,11.5355339 C11.5690356,11.5355339 12.4644661,12.4309644 12.4644661,13.5355339 L12.4644661,14.5355339 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(8.464466, 15.535534) rotate(-45.000000) translate(-8.464466, -15.535534) " />
                                            <path
                                                d="M11.5355339,9.46446609 L14.5355339,9.46446609 C15.0878187,9.46446609 15.5355339,9.01675084 15.5355339,8.46446609 C15.5355339,7.91218134 15.0878187,7.46446609 14.5355339,7.46446609 L11.5355339,7.46446609 L11.5355339,6.46446609 C11.5355339,5.35989659 12.4309644,4.46446609 13.5355339,4.46446609 L17.5355339,4.46446609 C18.6401034,4.46446609 19.5355339,5.35989659 19.5355339,6.46446609 L19.5355339,10.4644661 C19.5355339,11.5690356 18.6401034,12.4644661 17.5355339,12.4644661 L13.5355339,12.4644661 C12.4309644,12.4644661 11.5355339,11.5690356 11.5355339,10.4644661 L11.5355339,9.46446609 Z"
                                                fill="#000000"
                                                transform="translate(15.535534, 8.464466) rotate(-45.000000) translate(-15.535534, -8.464466) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap flex-row-fluid">
                                <!--begin::Text-->
                                <div class="d-flex flex-column pr-5 flex-grow-1">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">
                                        Sitemap </a>
                                    <span class="text-muted font-weight-bold"> <a
                                            href="{{ $insights_data['desktop']['sitemap'] }}" target="_blank"> Check
                                            Now </a> </span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center py-2">
                                    <!--begin::Label-->
                                    @php
                                        
                                        if ($insights_data['desktop']['sitemap'] == null) {
                                            $sitemap = 'Not Available';
                                        } else {
                                            $sitemap = 'Available';
                                        }
                                        
                                    @endphp
                                    <span
                                        class="text-success font-weight-bolder font-size-sm pr-6">{{ $sitemap }}</span>
                                    <!--end::Label-->
                                    <!--begin::Btn-->
                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                            <!--begin::Svg Icon | path:/keen/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24">
                                                    </polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 1-->
            </div>
        </div>
    </div>
    <div class="col-xl-4 d-flex align-items-stretch">
        <div class="row" style="width: 100%">
            <div class="col-xl-12 card shadow p-3 mb-5 bg-white rounded">
                <!--begin::Stats Widget 2-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-6">
                        <h3 class="card-title">
                            <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Performance
                                Graph</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap"
                        style="width: -webkit-fill-available;">
                        <!--begin::Visuals-->
                        <div class="d-flex align-items-center justify-content-between"
                            style="width: -webkit-fill-available;">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center position-relative" style="width: -webkit-fill-available;">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <input type="hidden" id="desktop_cart_score"
                                    data-chartscrore="{{ $insights_data['desktop']['speed_score'] }}" name="score"
                                    value="{{ $insights_data['desktop']['speed_score'] }}" />
                                <div class="font-weight-bolder font-size-h5 text-muted position-absolute">
                                    <span
                                        class="text-dark-75 display-3 font-weight-bolder">{{ $insights_data['desktop']['speed_score'] }}/100</span>
                                </div>
                                <canvas id="desktop_insights_chart"
                                    style="height: 220px; width: 220px; display: block;" width="110"
                                    height="110" class="chartjs-render-monitor"></canvas>
                            </div>
                            <!--end::Chart-->

                        </div>
                        <!--end::Visuals-->
                        <!--begin::Label-->
                        <div class="d-flex align-items-center">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px mr-5"></span>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <span class="fw-bold text-gray-600 fs-6" style="font-size: 14px">Need Improvements</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex align-items-center">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px mr-5"></span>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <span class="fw-bold text-gray-600 fs-6" style="font-size: 14px">OverAll Score</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 2-->
            </div>
        </div>
    </div>
    <div class="col-xl-4 d-flex align-items-stretch">
        <div class="row" style="width: 100%">
            <div class="col-xl-12 card shadow p-3 mb-5 bg-white rounded">

                <div class="card card-custom wave wave-animate-fast wave-primary m-3" style="border: 1px solid #eee">
                    
                    <div class="card-body" style="padding: 0%">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/General/Shield-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    SSL
                                </a>
                                <div class="text-dark-75 h3">
                                    {{ $insights_data['desktop']['ssl'] }} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom wave wave-animate-fast wave-primary m-3" style="border: 1px solid #eee">
                    
                    <div class="card-body" style="padding: 0%">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Design/ZoomPlus.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
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
                                                <path
                                                    d="M10.5,10.5 L10.5,9.5 C10.5,9.22385763 10.7238576,9 11,9 C11.2761424,9 11.5,9.22385763 11.5,9.5 L11.5,10.5 L12.5,10.5 C12.7761424,10.5 13,10.7238576 13,11 C13,11.2761424 12.7761424,11.5 12.5,11.5 L11.5,11.5 L11.5,12.5 C11.5,12.7761424 11.2761424,13 11,13 C10.7238576,13 10.5,12.7761424 10.5,12.5 L10.5,11.5 L9.5,11.5 C9.22385763,11.5 9,11.2761424 9,11 C9,10.7238576 9.22385763,10.5 9.5,10.5 L10.5,10.5 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    Domain Authority
                                </a>
                                <div class="text-dark-75 h3">
                                    {{ $insights_data['desktop']['da_score'] }} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="card card-custom wave wave-animate-fast wave-danger m-3" style="border: 1px solid #eee">
                    <div class="card-body" style="padding: 0%">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Files/File-done.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    Page Authority
                                </a>
                                <div class="text-dark-75 h3">
                                    {{ $insights_data['desktop']['pa_score'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom wave wave-animate-fast wave-warning m-3" style="border: 1px solid #eee">
                    <div class="card-body" style="padding: 0%">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Design/Join-1.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M9,10 L9,19 L5,19 L5,10 L5,6 L18,6 L18,10 L9,10 Z"
                                                    fill="#000000"
                                                    transform="translate(11.500000, 12.500000) scale(-1, 1) translate(-11.500000, -12.500000) " />
                                                <circle fill="#000000" opacity="0.3" cx="8" cy="16"
                                                    r="2" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    Total Backlinks
                                </a>
                                <div class="text-dark-75 h3">
                                    {{ $insights_data['desktop']['total_backlinks'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom wave wave-animate-fast wave-warning m-3" style="border: 1px solid #eee">
                    <div class="card-body" style="padding: 0%">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Communication/Spam.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z M10.5857864,14 L9.17157288,15.4142136 C8.78104858,15.8047379 8.78104858,16.4379028 9.17157288,16.8284271 C9.56209717,17.2189514 10.1952621,17.2189514 10.5857864,16.8284271 L12,15.4142136 L13.4142136,16.8284271 C13.8047379,17.2189514 14.4379028,17.2189514 14.8284271,16.8284271 C15.2189514,16.4379028 15.2189514,15.8047379 14.8284271,15.4142136 L13.4142136,14 L14.8284271,12.5857864 C15.2189514,12.1952621 15.2189514,11.5620972 14.8284271,11.1715729 C14.4379028,10.7810486 13.8047379,10.7810486 13.4142136,11.1715729 L12,12.5857864 L10.5857864,11.1715729 C10.1952621,10.7810486 9.56209717,10.7810486 9.17157288,11.1715729 C8.78104858,11.5620972 8.78104858,12.1952621 9.17157288,12.5857864 L10.5857864,14 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    Spam Score
                                </a>
                                <div class="text-dark-75 h3">
                                    {{ $insights_data['desktop']['spam_score'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <!--begin::Tables Widget 1-->
        <div class="card shadow p-3 mb-5 bg-white rounded card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-7">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Improve Your Website</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-lg">Here's the all Todos</span>
                </h3>
                <div class="card-toolbar">
                    <ul class="nav nav-pills nav-pills-sm nav-dark">
                        <li class="nav-item ml-0">
                            <a class="nav-link py-2 px-4 font-weight-bolder font-size-sm active" data-toggle="tab"
                                href="#desktop_opportunities">Opportunities</a>
                        </li>
                        <li class="nav-item ml-0">
                            <a class="nav-link py-2 px-4 font-weight-bolder font-size-sm " data-toggle="tab"
                                href="#desktop_alerts">Alerts</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-1 pb-4">
                <div class="tab-content mt-5" id="myTabTable1">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade active show" id="desktop_opportunities" role="tabpanel"
                        aria-labelledby="opportunities">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center">
                                <thead>
                                    <tr>
                                        <th>Opportunity</th>
                                        <th>Discription</th>
                                        <th>Potential</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($insights_data['desktop']['opportunities'] as $opportunity)
                                    @if ($opportunity['score'] > 50)
                                        <tr>
                                            <td>{{ $opportunity['title'] }}</td>
                                            <td>
                                                <span class="svg-icon svg-icon-info svg-icon-2x" data-trigger="hover"
                                                    data-toggle="popover" title="Know More" data-html="true"
                                                    data-content="{{ $opportunity['description'] }}">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Code/Info-circle.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" opacity="0.3" cx="12"
                                                                cy="12" r="10" />
                                                            <rect fill="#000000" x="11" y="10"
                                                                width="2" height="7" rx="1" />
                                                            <rect fill="#000000" x="11" y="7"
                                                                width="2" height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </td>
                                            <td>{{ $opportunity['potential'] }}</td>
                                            <td class="font-weight-bolder" >{{ $opportunity['score'] }}</td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Tablet-->
                    </div>
                    <!--end::Tap pane-->

                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="desktop_alerts" role="tabpanel"
                        aria-labelledby="alerts">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center">
                                <thead>
                                    <tr>
                                        <th>alerts</th>
                                        <th>Discription</th>
                                        <th>Potential</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($insights_data['desktop']['opportunities'] as $opportunity)

                                    @if ($opportunity['score'] <= 50)
                                        <tr>
                                            <td>{{ $opportunity['title'] }}</td>
                                            <td>
                                                <span class="svg-icon svg-icon-info svg-icon-2x" data-trigger="hover"
                                                    data-toggle="popover" title="Know More" data-html="true"
                                                    data-content="{{ $opportunity['description'] }}">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Code/Info-circle.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" opacity="0.3" cx="12"
                                                                cy="12" r="10" />
                                                            <rect fill="#000000" x="11" y="10"
                                                                width="2" height="7" rx="1" />
                                                            <rect fill="#000000" x="11" y="7"
                                                                width="2" height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </td>
                                            <td>{{ $opportunity['potential'] }}</td>
                                            <td class="font-weight-bolder" >{{ $opportunity['score'] }}</td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Tablet-->
                    </div>
                    <!--end::Tap pane-->

                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 1-->
    </div>
</div>

<script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
</script>
