@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
    {{--    @php--}}
    {{--    echo '<pre>';--}}
    {{--    print_r($user_details);--}}
    {{--    echo '</pre>';--}}
    {{--    @endphp--}}
    <div class="card">
        <div class="card-body" style="padding-left: 10px; padding-right: 10px; overflow: hidden;">
            <div class="card-header border-0 py-5 no-gutters px-5 px-lg-10"
                 style="padding-left: 0px; padding-right: 0px;">
                <h3 class="card-title align-items-start flex-column"
                    style="display: inline-block; margin-bottom: 0px !important;">
                            <span
                                class="card-label font-weight-bold font-size-h3 text-dark-75">{{ $user_details['name'] ?? ''}}'s
                                Projects</span>
                    <br>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                </h3>
                <div class="card-toolbar float-right" style=" display:inline-block;">
                    <a href="#" class="btn btn-primary font-weight-bolder font-size-sm create_project"
                       data-user_id="{{ $user_details['id'] ?? '' }}">

                               Add</a>
                </div>
            </div>
            <div class="content-wrapper px-5 py-5">
                <div>
                    {{$dataTable->table()}}
                </div>
            </div>
        </div>
    </div>

    <div id="modal_container">

    </div>
@endsection

@section('script')
    {{ $dataTable->scripts() }}
    <script type="text/javascript">


        $(document).on('click', '.close-modal', function () {

        });

        $(document).on('click', '.view_report', function () {
            var project_id = $(this).attr('id');
            var user_id = $(this).data('user_id');

        });

        $(document).on('click', '.create_project', function () {
            var user_id = $(this).data('user_id');
            $.ajax({
                url: "{{ route('management.manage-project') }}",
                type: "POST",
                data: {
                    user_id: user_id,
                    _token: "{{ csrf_token() }}",
                },
                success: function (data) {
                    toastr.success(data.message);
                    $('#modal_container').html(data.view);
                    $('#manage_project_modal').modal('show');
                }
            });
        });

        $(document).on('click', '.view_project', function () {
            var project_id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');

        });

        $(document).on('click', '.edit_project', function () {
            var project_id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');

        });

        $(document).on('click', '.delete_project', function () {
            var id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');

        });

        $(document).on('click', '.mail_project', function () {
            var project_id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');

        });

        $(document).on('click', '.upload_project_files', function () {
            var project_id = $(this).attr('id');
            var user_id = $(this).attr('data-user_id');

        });
    </script>
@endsection
