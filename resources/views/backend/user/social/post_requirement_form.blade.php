@php
    //echo "<pre>";
    //print_r($postReq);
@endphp
<div class="modal fade" id="managePostRequirementModal" tabindex="-1" role="dialog"
    aria-labelledby="managePostRequirementModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ isset($postReq['id']) && !empty($postReq['id']) ? 'Edit':'Add' }} Post Requirement</h5>
                <button type="button" class="close-modal btn btn-primary btn-rounded btn-icon" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="postRequirementForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="post_req_id" value="{{ $postReq['id'] ?? '' }}">
                    <input type="hidden" name="post_date" value="{{ $date }}">
                    <div class="form-group">
                        <label for="type">Post Title</label>
                        <input type="text" class="form-control" id="post_title" name="post_title"
                            placeholder="Post Title" value="{{ $postReq['post_title'] ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Post Type</label>
                        <select class="form-control" id="post_type_select" name="post_type">
                            <option value="1"
                                {{ isset($postReq['post_type']) && $postReq['post_type'] == 1 ? 'selected' : '' }}>
                                Single image</option>
                            <option value="2"
                                {{ isset($postReq['post_type']) && $postReq['post_type'] == 2 ? 'selected' : '' }}>
                                Multiple image</option>
                            <option value="3"
                                {{ isset($postReq['post_type']) && $postReq['post_type'] == 3 ? 'selected' : '' }}>Video
                            </option>
                            <option value="4"
                                {{ isset($postReq['post_type']) && $postReq['post_type'] == 4 ? 'selected' : '' }}>Text
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="requirement">Requirement</label>
                        <textarea class="form-control" name="requirement">{{ $postReq['requirement'] ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select class="form-control" id="tag_select" multiple name="tags[]">
                            <option value=""></option>
                            @isset($postReq['tags'])
                                @php
                                    $tags = explode(',', $postReq['tags']);
                                @endphp
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="captions">Caption</label>
                        <textarea class="form-control" name="caption">{{ $postReq['caption'] ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="reference_link">Reference Link</label>
                        <input type="text" class="form-control" id="reference_link" name="reference_link"
                            placeholder="Reference Link" value="{{ $postReq['reference_link'] ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="reference_link">Reference File </label>
                        <input type="file" id="reference_file" name="reference_file[]" multiple />
                        {{-- <div></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="reference_file" name="reference_file"/>
                            <label class="custom-file-label" for="reference_file">Choose file</label>
                        </div> --}}
                    </div>
                    <div class="form-group">
                        @isset($postReq['refImages'])
                            @foreach ($postReq['refImages'] as $key => $img)
                                <div class="image-input image-input-outline post_ref_image m-3 text-center" >
                                    @if(pathinfo($img['image_path'], PATHINFO_EXTENSION) == 'png' || pathinfo($img['image_path'], PATHINFO_EXTENSION) == 'jpg')
                                    <div class="image-input-wrapper"
                                        style="background-image: url('{{ env('APP_URL') . 'public/post_ref_files/' . Auth::user()->id . '/' . rawurldecode($img['image_path']) }}')">
                                        <a href="{{ env('APP_URL') . 'public/post_ref_files/' . Auth::user()->id . '/' . rawurldecode($img['image_path']) }}" target="_blank"><i class="fa fa-file fa-3x"></i><br>{{ pathinfo($img['image_path'], PATHINFO_EXTENSION) }} File</a>
                                    </div>
                                    @else
                                    <div class="image-input-wrapper">
                                        <a href="{{ env('APP_URL') . 'public/post_ref_files/' . Auth::user()->id . '/' . rawurldecode($img['image_path']) }}" target="_blank"><i class="fa fa-file fa-3x"></i><br>{{ pathinfo($img['image_path'], PATHINFO_EXTENSION) }} File</a>
                                    </div>
                                    @endif
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow remove_ref_image"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Remove Image"
                                        data-id="{{ $img['id'] }}">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </label>
                                </div>
                            @endforeach
                        @endisset
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="savePostReq">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#post_type_select").select2({
            width: '100%'
        });
        $('#tag_select').select2({
            placeholder: "Add a tag",
            tags: true,
            width: '100%'
        });

        bindPostReqValidationEvent();
        bindRemoveRefImageEvent();
       
    });

    $("#postRequirementForm").validate({
        rules: {
            post_title: {
                required: true,
                minlength: 2
            },
            post_type: {
                required: true
            },
            reference_link: {
                url: true
            }
        },
        messages: {
            post_title: {
                required: "Post title is required",
                minlength: " Your post title must consist of at least 2 characters"
            },
            post_type: {
                required: "Select post type",
            }
        }
    });

    function bindPostReqValidationEvent() {
        $("#savePostReq").on('click', function(e) {
            if ($("#postRequirementForm").valid()) {
                savePostRequirement();
            }
        });
    }

    function savePostRequirement() {
        var form_data = new FormData($("#postRequirementForm")[0]);

        $.ajax({
            type: 'POST',
            url: "{{ url('user/save_post_requirement') }}",
            dataType: 'JSON',
            data: form_data,
            processData: false,
            contentType: false,
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
                if (data.status == true) {
                    $("#managePostRequirementModal").modal('hide');
                    swal({
                        title: "Success",
                        text: data.message,
                        icon: "success",
                        timer: 3000
                    });
                    $("#psubmitBtn").click();
                } else {
                    swal.close();
                    var error = '';
                    $.each(data.errors, function(key, value) {
                        error += value
                    });
                    swal("Error", error, "error");
                }
                $(".modal-backdrop").remove();
            },
            complete: function() {

            },
            error: function() {}
        });
    }

    function bindRemoveRefImageEvent() {
        $(".remove_ref_image").on('click', function(e) {
            $.ajax({
                type: 'POST',
                url: "{{ url('user/remove_reference_image') }}",
                dataType: 'JSON',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: $(e.target).closest('label').attr('data-id'),
                },
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
                    if (data.status == true) {
                        swal({
                            title: "Success",
                            text: data.message,
                            icon: "success",
                            timer: 3000
                        });
                        $(e.target).closest('.post_ref_image').remove();
                    } else {
                        swal("Error", data.message, "error");
                    }
                },
                complete: function() {

                },
                error: function() {}
            });
        });
    }
</script>
