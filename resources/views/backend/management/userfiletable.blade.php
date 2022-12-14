<label for="lable_send_subscriber_attachment">List Of Files</label>
<table id="file_user_files_list" class="table table-striped">
    <thead>
        <tr>
            <th>File Name</th>
            <th>Status</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="file_user_files">

        @php
            // echo '<pre>';
            // print_r($file_names);
            // echo '</pre>';
        @endphp


        @if (isset($file_names) && count($file_names) > 0)
            @foreach ($file_names as $file)
                @php
                    if ($file['status'] == '1') {
                        $status = '<span class="badge badge-success">Sent</span>';
                    } else {
                        $status = '<span class="badge badge-danger">Pending</span>';
                    }
                @endphp
                @php
                    if ($file['type'] == '1') {
                        $filetype = 'Email Img';
                        $file_path = 'email_img';
                    } else {
                        $filetype = 'Attachment';
                        $file_path = 'attachments';
                    }
                @endphp
                <tr>
                    <td style="word-break: break-all !important;">{{ $file['name'] }}</td>
                    <td>
                        @php
                            echo $status;
                        @endphp
                    </td>
                    <td>{{ $filetype }}</td>
                    <td>
                        <a href="{{ url('/') }}/public/emails_files/{{ $file['user_id'] }}/{{ $file['project_id'] }}/cron/{{ $file_path }}/{{ $file['name'] }}"
                            target="_blank" style="text-decoration: none">
                            <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                <i class="far fa-eye"></i>
                            </button>
                        </a>

                        <a href="{{ url('/') }}/public/emails_files/{{ $file['user_id'] }}/{{ $file['project_id'] }}/cron/{{ $file_path }}/{{ $file['name'] }}"
                            style="text-decoration: none" download>
                            <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                <i class="fas fa-file-download"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<script>
    $(document).ready(function() {
       // $('#file_user_files_list').DataTable();
        $('#file_user_files_list').DataTable({
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
</script>
