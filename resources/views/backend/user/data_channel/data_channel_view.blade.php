@extends('backend.user.dashboard_layouts')

@section('dashboard_content')

    @php
        
        $analytics_properties = session('analytics_properties');
        //dd($analytics_properties);
    @endphp
    <div class="card">
        <div class="card-header flex-wrap py-5">
            <div class="card-title m-0">
                <h4 class="card-label m-0">Connect Data Channel</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="example-preview">
                        <ul class="nav nav-tabs nav-tabs-line mb-5">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#google_tab">
                                    <span class="nav-icon">
                                        <i class="flaticon-letter-g"></i>
                                    </span>
                                    <span class="nav-text">Google</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#facebook_tab">
                                    <span class="nav-icon">
                                        <i class="flaticon-facebook-letter-logo"></i>
                                    </span>
                                    <span class="nav-text">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#instagram_tab">
                                    <span class="nav-icon">
                                        <i class="flaticon-photo-camera"></i>
                                    </span>
                                    <span class="nav-text">Instagram</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#linkedin_tab">
                                    <span class="nav-icon">
                                        <i class="flaticon-linkedin-logo"></i>
                                    </span>
                                    <span class="nav-text">LinkedIn</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#twitter_tab">
                                    <span class="nav-icon">
                                        <i class="flaticon-twitter-logo"></i>
                                    </span>
                                    <span class="nav-text">Twitter</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="myTabContent">
                            <div class="tab-pane fade active show" id="google_tab" role="tabpanel"
                                aria-labelledby="google_tab">
                                @if (session('user_token'))
                                    <div class="row">
                                        <div class="col-4">
                                            <h6>Your Google Account is Connected</h6>
                                            <h4>Account Name: {{ session('auth_data')['user_name'] }}</h4>
                                        </div>
                                        <div class="col-8">
                                            <div class="property_select mw">
                                                <form action="">

                                                    <div class="form-group">
                                                        <label class="text-uppercase">Select Google Analytics
                                                            Account/Property</label>
                                                        <select class="form-control" name="google_analytics_accounts"
                                                            id="google_analytics_accounts">
                                                            <option value="">Select Account</option>
                                                            @isset($analytics_properties)
                                                                @foreach ($analytics_properties as $account)
                                                                    @if ($account['property_name'] != 'N/A')
                                                                        <option value="{{ $account['property_name'] }}">
                                                                            {{ $account['displayName'] }} -
                                                                            {{ $account['property_name'] }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            @endisset
                                                        </select>
                                                        <span class="form-text text-muted text-uppercase">*Only Supported For
                                                            Latest GA4 Properties</span>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>

                                        <div id="analyticsData" class="col-12">


                                        </div>
                                    </div>
                                @else
                                    <div class="mb-3">
                                        <a href="{{ url('google/redirect') }}" class="btn btn-primary mb-1 text-uppercase">
                                            <i class="fab fa-google"></i> Connect with Google Analytics(GA4)
                                        </a>
                                        <br>
                                        <span class="text-uppercase">*Only Supported For
                                            Latest GA4 Properties</span>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="facebook_tab" role="tabpanel" aria-labelledby="facebook_tab">
                                @if (!empty($userDataChannels))
                                    @foreach ($userDataChannels as $ch)
                                        @if ($ch['channel_type'] == 2)
                                            <p><b>Name</b> : {{ $ch['channel_username'] }}</p>
                                            <p><b>Email</b> : {{ $ch['channel_email'] }}</p>
                                            <h5>Facebook Pages</h5>
                                            @if (!empty($ch['facebookPages']))
                                                <ul>
                                                    @foreach ($ch['facebookPages'] as $key => $value)
                                                        <li>{{ $value['page_name'] }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                    <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                                                <div class="d-flex flex-column mr-5">
                                                    <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                                        Get In Touch
                                                    </a>
                                                    <p class="text-dark-50">
                                                        There are many variations of Lorem Ipsum available.
                                                    </p>
                                                </div>
                                                <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                                    <a href="{{ url('user/facebook') }}"
                                                        class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6">
                                                        Connect
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
    <script>
        $(document).ready(function() {
            $('#google_analytics_accounts').select2();

            $('#google_analytics_accounts').on('change', function() {
                var property_name = $(this).val();
                $.ajax({
                    url: "{{ url('user/google-analytics') }}",
                    type: "POST",
                    data: {
                        property_name: property_name,
                        _token: "{{ csrf_token() }}"
                    },
                    datatype: "json",
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

                        data = JSON.parse(data);
                        mainData = data.main_data;
                        console.table(mainData);
                        var html = '';
                        html += '<table id="reportData" class="table">';
                        html += '<thead>';
                        html += '<tr>';
                        html += '<th>index</th>';
                        html += '<th>activeUsers</th>';
                        html += '<th>bounceRate</th>';
                        html += '<th>eventCount</th>';
                        html += ' <th>newUsers</th>';
                        html += '<th>screenPageViews</th>';
                        html += '<th>sessions</th>';
                        html += '<th>totalUsers</th>';
                        html += '</tr>'
                        html += '</thead>';
                        html += '<tbody>';
                        $.each(mainData, function(index, value) {
                            html += '<tr>';
                            html += '<td>' + index + '</td>';
                            html += '<td>' + value.activeUsers + '</td>';
                            html += '<td>' + value.bounceRate + '</td>';
                            html += '<td>' + value.eventCount + '</td>';
                            html += '<td>' + value.newUsers + '</td>';
                            html += '<td>' + value.screenPageViews + '</td>';
                            html += '<td>' + value.sessions + '</td>';
                            html += '<td>' + value.totalUsers + '</td>';
                            html += '</tr>';
                        });
                        html += '</tbody>';
                        html += '</table>';

                        $('#analyticsData').html(html);

                        $('#reportData').DataTable({
                            "paging": true,
                            "lengthChange": true,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                        });

                        swal.close();

                    }
                });
            });
        });

        $(document).ready(function() {
            var alert = "{{ Session::has('message') ? 1 : 0 }}";
            if (alert == 1) {
                var alertStatus = "{{ Session::get('status') }}";
                if (alertStatus == true) {
                    swal({
                        title: "Success",
                        text: "{{ Session::get('message') }}",
                        icon: "success",
                    });
                } else {
                    swal("Error", "{{ Session::get('message') }}", "error");
                }
            }
        });
    </script>
@endsection
