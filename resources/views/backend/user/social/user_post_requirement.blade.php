@extends('backend.user.dashboard_layouts')

@section('dashboard_content')
<div class="card">
    <div class="card-header flex-wrap py-5">
        <div class="card-title m-0">
            <h4 class="card-label m-0">Post Requirement</h4>
        </div>
    </div>
    <div class="card-body">
        <form class="form" id="calendarForm" onSubmit="return false;">
            @csrf
            <div class="form-group row">
                <div class="col-md-3">
                    <label>Select Month-Year</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="post_month_year" placeholder="Select month-year" id="post_month_year" autocomplete="off"/>
                        <div class="input-group-append">
                         <span class="input-group-text">
                          <i class="la la-calendar-check-o"></i>
                         </span>
                        </div>
                    </div>     
                    <div id="messageBox">&nbsp;</div>          
                </div>
                
                {{-- <div class="col-lg-4">
                    <label>Select Month:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="date" placeholder="Select month" id="post_month"/>
                        <div class="input-group-append">
                         <span class="input-group-text">
                          <i class="la la-calendar-check-o"></i>
                         </span>
                        </div>
                    </div>      
                </div> --}}
                <div class="col-md-3 align-self-center">
                    <button type="submit" class="btn btn-primary mr-2" id="psubmitBtn">Submit</button>
                </div>
            </div>
        </form>
        <div id="dateListCalendar"></div>
    </div>
</div>

@section('script')
<script>
    $(document).ready(function() {  
        $('#post_month_year').datepicker({
            format: "M-yyyy",
            startView: "months", 
            minViewMode: "months",
            startDate: new Date(),
        });

        /* $('#post_month').datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        }); */

        bindViewCalenderDateListEvent();
    });

    $("#calendarForm").validate({
        rules: {
            post_month_year: {
                required: true,
            },
        },
        messages: {
            post_month_year: {
                required: "Select month-Year",
            },
        },
        errorPlacement: function (error, element) {
                error.appendTo("#messageBox");
                //error.insertAfter(element)
        },
    });
    
    function bindViewCalenderDateListEvent() {
        $("#psubmitBtn").on('click', function() {
            if ($("#calendarForm").valid()) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('user/get_date_list') }}",
                    data: $("#calendarForm").serialize(),
                    success: function(response) {
                        $("#dateListCalendar").html(response);
                    }
                });
            } 
        });
    }
</script>
@endsection
    
@endsection