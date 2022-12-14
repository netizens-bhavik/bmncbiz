@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
    <div class="card" style="">
        <div class="card-body">
            <h5 class="card-title mb-5">Manage Non Subscribers</h5>
            <h6 class="card-subtitle mb-8 text-muted"> Here you can Manage All Non Subscribers</h6>
            <span class="btn btn-primary btn-sm float-right add_client">Create</span>
            <div class="content-wrapper">
                <div>
                    {{-- @php
                        echo '<pre>';
                        print_r($subscribers);
                        echo '</pre>';
                    @endphp --}}

                    <table class="table" id="clientsList">
                        <thead>
                            <tr>
                                <th class="col-md-2 color-primary">#</th>
                                <th class="col-md-2 color-primary">Name</th>
                                <th class="col-md-2 color-primary">Email</th>
                                <th class="col-md-2 color-primary">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="col-md-2 color-primary">#</th>
                                <th class="col-md-2 color-primary">Name</th>
                                <th class="col-md-2 color-primary">Email</th>
                                <th class="col-md-2 color-primary">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                    <button type="button" class="close-modal btn btn-primary btn-rounded btn-icon" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addClient_form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Email" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#clientsList').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "columnDefs": [{
                    "targets": [0],
                }],
                "responsive": true,
                "autoWidth": true,
            });
        });

        $(document).on('click', '.close-modal', function() {
            //reset form data
            $('#addClient_form').trigger("reset");
            $('#addClient').modal('hide');
        });

        $(document).on('click', '.add_client', function() {
            $('#addClient').modal('show');
        });

        $('#addClient_form').submit(function(e) {
            e.preventDefault();
            var name = $(this).find('#name').val();
            var email = $(this).find('#email').val();

            $.ajax({
                url: "{{ url('management/add_user') }}",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    if (data.status == 'success') {
                        swal({
                            title: "Success",
                            text: data.message,
                            icon: "success",
                            button: "OK",
                        }).then(function() {
                            $('#addClient_form').trigger("reset");
                            $('#addClient').modal('hide');
                            location.reload();
                        });
                    } else {
                        swal({
                            title: "Error",
                            text: data.message,
                            icon: "error",
                            button: "OK",
                        });
                    }
                }
            });
        });
    </script>
@endsection
