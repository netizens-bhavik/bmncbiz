<div class="row">
    <div class="col-md-12">
        <div id="main_report_body">
            <div class="card">
                <div class="card-body" id="report_body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <p class="bolder" style="text-align: center;font-weight: bold;">* IT TAKES FEW MINUTES AS
                                    PER
                                    YOUR WEBSITE'S CONTENT</p>
                                <h4 class="alert-heading bolder display4" style="text-align: center;">Keep Calm While
                                    We're
                                    <button type="button" class="btn btn-primary spinner spinner-white spinner-right"
                                        style="font-size: 14px; font-weight: bold;">
                                        Generating Your Report !
                                    </button>
                                </h4>
                                <p class="bolder" style="text-align: center;font-size:18px;">Something Great Is
                                    Coming...Can
                                    You
                                    Feel It?</p>
                                <img src="{{ asset('public/assets/media/svg/illustrations/data-points.svg') }}"
                                    width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var project_id = {{ $id }};
    $.ajax({
        type: "POST",
        url: "{{ url('/user/insight_report') }}/" + project_id,
        data: {
            _token: '{{ csrf_token() }}',
            project_id: project_id
        },
        dataType: "json",
        success: function(response) {
            if (response.status == 'success') {
                swal({
                    title: "Success!",
                    text: response.message,
                    type: "success",
                    button: "View Report",
                }).then(function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ url('/user/project') }}/" + project_id,
                        data: {
                            _token: '{{ csrf_token() }}',
                            project_id: project_id
                        },
                        // dataType: "json",
                        success: function(data) {
                            $('#main_report_body').html('');
                            $('#main_report_body').html(data);
                        }
                    });

                });
            }
        }
    });
</script>
