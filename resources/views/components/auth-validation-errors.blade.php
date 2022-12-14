@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        {{-- <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div> --}}

        <ul class="p-0" style="list-style-type: none;">
            @foreach ($errors->all() as $error)
                <li>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error! : </strong> {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif


