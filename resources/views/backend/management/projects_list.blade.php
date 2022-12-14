@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
    <div class="container">
        {{-- @php
         echo '<pre>';
         print_r($projects);
         echo '</pre>';
        @endphp --}}
    </div>
@endsection

@section('script')
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#project-list').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });
    </script> --}}
@endsection
