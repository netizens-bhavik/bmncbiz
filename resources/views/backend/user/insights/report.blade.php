{{-- @php
echo '<pre>';
print_r($insights_data['desktop']);
echo '</pre>';
exit;
@endphp --}}

<div class="row" id="project_insights_header">
    <div class="col-xl-12">
        <div class="gutter-b card-stretch">
            <div class=" card-header border-0 pt-6 card shadow p-3 mb-5 bg-white rounded ">
                <span class="card-title align-items-start flex-column container">
                    <span
                        class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ $insights_data['desktop']['title'] }}</span>
                    <span class="text-muted font-weight-bold font-size-lg float-right">
                        <a href="{{ url('user/') }}">
                            <span class="btn btn-primary font-weight-bolder font-size-sm back_to_all">
                                Back to All Projects
                            </span>
                        </a>
                    </span>
                    <br />
                    <span class="text-muted mt-3 font-weight-bold font-size-lg">Overall Statistics</span>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <!--begin::Body-->
        <div class="card-body pt-6" style="padding: 0">
            <!--begin::Nav-->
            <ul class="nav nav-pills nav-fill flex-nowrap">
                <!--begin::Nav Item-->
                <li class="nav-item card w-90px">
                    <a class="nav-link d-flex flex-column shadow-sm h-80px active" data-toggle="tab"
                        href="#desktop_insights">
                        <span class="nav-icon">
                            <span class="svg-icon">
                                <span class="svg-icon svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Devices/Display3.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7" />
                                            <path
                                                d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </span>
                        <span class="nav-text pt-3 font-weight-bold">Desktop</span>
                    </a>
                </li>
                <!--begin::Nav Item-->
                <!--end::Nav Item-->
                <li class="nav-item card w-90px ml-5">
                    <a class="nav-link d-flex flex-column shadow-sm h-80px" data-toggle="tab" href="#mobile_insights">
                        <span class="nav-icon">
                            <span class="svg-icon">
                                <span class="svg-icon svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Devices/iPhone-X.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </span>
                        <span class="nav-text pt-3 font-weight-bold">Mobile</span>
                    </a>
                </li>
                <!--begin::Nav Item-->
            </ul>
            <!--end::Nav-->

        </div>

        <div class="tab-content mt-9" id="myTabMixed2">
            <!--begin::Tab Pane-->
            <div class="tab-pane fade active show" id="desktop_insights" role="tabpanel"
                aria-labelledby="desktop_insights" style="padding: 0">

                @include('backend.user.insights.desktop')

            </div>
            <!--end::Tab Pane-->
            <!--begin::Tab Pane-->
            <div class="tab-pane fade" id="mobile_insights" role="tabpanel" aria-labelledby="mobile_insights"
                style="padding: 0">

                @include('backend.user.insights.mobile')
            </div>
            <!--end::Tab Pane-->
        </div>
        <!--end::Body-->
    </div>
</div>

<script>
    //add chart data to the chart
    var ctx = document.getElementById('desktop_insights_chart').getContext('2d');
    var desktop_score = $('#desktop_cart_score').val();
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',
        // The data for our dataset
        data: {
            labels: ['Overall Score', 'Needs to be Improve'],
            datasets: [{
                backgroundColor: ['#112D4E', '#FD5428'],
                borderColor: '#fff',
                data: [desktop_score, 100 - desktop_score],
                borderWidth: 2
            }]
        },
        // Configuration options go here
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 80,
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][
                            tooltipItem['index']
                        ] + '%';
                    }
                }
            }
        }
    });
</script>

<script>
    //add chart data to the chart
    var ctx = document.getElementById('mobile_insights_chart').getContext('2d');
    var mobile_score = $('#mobile_cart_score').val();
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',
        // The data for our dataset
        data: {
            labels: ['Overall Score', 'Needs to be Improve'],
            datasets: [{
                backgroundColor: ['#112D4E', '#FD5428'],
                borderColor: '#fff',
                data: [mobile_score, 100 - mobile_score],
                borderWidth: 2
            }]
        },
        // Configuration options go here
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 80,
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][
                            tooltipItem['index']
                        ] + '%';
                    }
                }
            }
        }
    });
</script>
