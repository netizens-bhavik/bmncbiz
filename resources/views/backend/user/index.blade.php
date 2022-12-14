@extends('backend.user.dashboard_layouts')


@section('dashboard_content')

    <div id="project_report">
        
    </div>


@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var project_id='all_projects';
            $.ajax({
                    url: "{{ url('/user/project') }}/"+project_id,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        project_id: project_id
                    },
                    success: function(data) {
                        $('#project_report').html('');
                        $('#project_report').html(data);
                    }
                });

            $('#project_select').on('change', function() {
                var project_id = $(this).val();
                $.ajax({
                    url: "{{ url('/user/project') }}/"+project_id,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        project_id: project_id
                    },
                    success: function(data) {
                        $('#project_report').html('');
                        $('#project_report').html(data);
                    }
                });
            });
        });
    </script>

@endsection
