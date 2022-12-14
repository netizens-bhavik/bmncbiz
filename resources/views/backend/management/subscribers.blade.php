@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
    <div class="card" style="">
        <div class="card-body">
            <h5 class="card-title mb-5">Manage Subscribers</h5>
            <h6 class="card-subtitle mb-8 text-muted"> Here you can Manage All Subscribers</h6>
            <span class="btn btn-primary btn-sm float-right add-subscriber">Add</span>
            <div class="content-wrapper">
                <div>
                    {{-- @php
                        echo '<pre>';
                        print_r($subscribers);
                        echo '</pre>';
                    @endphp --}}

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
        $(document).ready(function () {


        });

        $(document).on('click', '.close-modal', function () {
            //reset form data
            $('#addClient_form').trigger("reset");
            $('#addClient').modal('hide');
        });

        $(document).on('click', '.add-subscriber', function () {
            bind_modal_call();
        });

        $(document).on('click', '.edit-subscriber', function () {
            var user_id = $(this).attr('data-id');
            bind_modal_call(user_id);
        });

        $(document).on('click', '.delete-subscriber', function () {
            var user_id = $(this).attr('data-id');

            Swal.fire({
                title: 'Do you want to Delete this Subscriber?',
                showDenyButton: true,
                confirmButtonText: 'Delete',
                denyButtonText: `Don't Delete`,
            }).then((result) => {

                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{route('management.delete-subscriber')}}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "user_id": user_id
                        },
                        success: function (data) {
                            if (data.status == 'success') {
                                toastr.success(data.message);
                                $('#subscribers-table').DataTable().ajax.reload();
                            } else {
                                toastr.error(data.message);
                            }
                        }
                    });
                } else if (result.isDenied) {
                    toastr.error('Subscriber Not Deleted');
                }
            })

        });




        function bind_modal_call(user_id=null){
            $.ajax({
                url: "{{route('management.manage-subscriber')}}",
                type: "post",
                data: {
                    '_token': "{{csrf_token()}}",
                    'user_id': user_id
                },
                datatype: 'json',
                beforeSend: function () {
                    $('#modal_container').html('');
                    Swal.fire({
                        title: 'Loading...',
                        icon: 'info',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                        backdrop:'swal2-backdrop-show',
                        showConfirmButton: false,
                    });
                },
                success: function (data) {
                    Swal.close();
                    if (data.status == 'success') {
                        $('#modal_container').html(data.view);
                        $('#addClient').modal('show');
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                },
                errors: function (data) {
                    // console.log(data);
                },
                complete: function () {
                    // console.log('complete');
                },

            });

        }
    </script>
@endsection
