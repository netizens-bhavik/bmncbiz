@php
     // echo "<pre>";
     //print_r($data); 
@endphp
<div class="modal fade" id="managePostModal" tabindex="-1" role="dialog"
    aria-labelledby="managePostModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ isset($data['post_id']) && !empty($data['post_id']) ? 'Edit':'Add' }} Post 
                    ({{ isset($data['post_date']) ? date('d/m/Y', strtotime($data['post_date'])) : date('d/m/Y', strtotime($data['post_date'])) }})</h5>
                <button type="button" class="close-modal btn btn-primary btn-rounded btn-icon" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="postForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $data['post_id'] ?? '' }}">
                    <input type="hidden" name="post_req_id" value="{{ $data['post_requirement_id'] ?? '' }}">
                    <input type="hidden" name="post_date" value="{{ $data['post_date'] ?? '' }}">
                    <div class="form-group">
                        <label for="type">Post Title</label>
                        <input type="text" class="form-control" id="post_title" name="post_title"
                            placeholder="Post Title" value="{{ $data['post_title'] ?? ($data['post_title'] ?? '')  }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Post Type</label>
                        <select class="form-control" id="post_type_select" name="post_type">
                            <option value="1"
                                {{ isset($data['post_type']) && $data['post_type'] == 1 ? 'selected' : '' }}>
                                Single image</option>
                            <option value="2"
                                {{ isset($data['post_type']) && $data['post_type'] == 2 ? 'selected' : '' }}>
                                Multiple image</option>
                            <option value="3"
                                {{ isset($data['post_type']) && $data['post_type'] == 3 ? 'selected' : '' }}>Video
                            </option>
                            <option value="4"
                                {{ isset($data['post_type']) && $data['post_type'] == 4 ? 'selected' : '' }}>Text
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select class="form-control" id="tag_select" multiple name="tags[]">
                            <option value=""></option>
                            @if(isset($data['tags']) && !empty($data['tags']))
                                @php
                                    $tags = explode(',', $data['tags']);
                                @endphp
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="captions">Caption</label>
                        <textarea class="form-control" name="caption">{{ $data['caption'] ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Location Tag</label>
                        <input type="text" class="form-control" id="location_tag" name="location_tag"
                            placeholder="Location Tag" value="{{ $data['location_tag'] ?? '' }}">
                    </div>
                    <div class="form-group text_post" style="display:{{ isset($data['post_type']) && $data['post_type'] == 4 ? 'block' : 'none' }}">
                        <label for="type">Text Message</label>
                        <textarea class="form-control" name="message" id="message">{{ $data['message'] ?? '' }}</textarea>
                    </div>

                    <div class="form-group file_post" style="display:{{ isset($data['post_type']) && $data['post_type'] != 4 ? 'block' : 'none' }}">
                        <label for="post_file">Post File </label>
                        <input type="file" id="post_file" name="post_file[]" 
                            @switch($data['post_type'])
                                @case(1)
                                    accept=".png,.bmp,.gif,.jpg,.jpeg,.tiff"
                                    @break
                                @case(2)                                
                                    accept=".png,.bmp,.gif,.jpg,.jpeg,.tiff" multiple
                                    @break
                                @case(3)                                
                                    accept="3g2, .3gp, .3gpp, .asf, .avi, .dat, .divx, .dv, .f4v, .flv, .gif, .m2ts, .m4v, .mkv, .mod, .mov, .mp4, .mpe, .mpeg, .mpeg4, .mpg, .mts, .nsv, .ogm, .ogv, .qt, .tod, .ts, .vob, .wmv"
                                    @break
                                @case(4)                                
                                    accept=""
                                    @break
                                @default
                                    
                            @endswitch
                        />
                        {{-- <div></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="reference_file" name="reference_file"/>
                            <label class="custom-file-label" for="reference_file">Choose file</label>
                        </div> --}}
                    </div>
                    <div class="form-group file_post">
                        @isset($data['postFiles'])
                            @foreach ($data['postFiles'] as $key => $img)
                                <div class="image-input image-input-outline post_image m-3 text-center" >
                                    @if(pathinfo($img['image_path'], PATHINFO_EXTENSION) == 'png' || pathinfo($img['image_path'], PATHINFO_EXTENSION) == 'jpg')
                                    <div class="image-input-wrapper"
                                        style="background-image: url('{{ env('APP_URL') . 'public/post_files/' . Auth::user()->id . '/' . rawurldecode($img['image_path']) }}')">
                                        <a href="{{ env('APP_URL') . 'public/post_files/' . Auth::user()->id . '/' . rawurldecode($img['image_path']) }}" target="_blank"><i class="fa fa-file fa-3x"></i><br>{{ pathinfo($img['image_path'], PATHINFO_EXTENSION) }} File</a>
                                    </div>
                                    @else
                                    <div class="image-input-wrapper">
                                        <a href="{{ env('APP_URL') . 'public/post_files/' . Auth::user()->id . '/' . rawurldecode($img['image_path']) }}" target="_blank"><i class="fa fa-file fa-3x"></i><br>{{ pathinfo($img['image_path'], PATHINFO_EXTENSION) }} File</a>
                                    </div>
                                    @endif
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow remove_post_file"
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
                <button type="submit" class="btn btn-primary" id="savePost">Save</button>
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

        bindPostValidationEvent();
        bindRemovePostImageEvent();
       
        $("#post_type_select").on('change', function(e) {
            var value = $(e.target).val();
            switch (value) {
                case '1':
                    $(".file_post").show();
                    $(".text_post").hide();
                    $("#message").val('');
                    $("#post_file").prop('multiple', false);
                    $('#post_file').attr("accept", ".png,.bmp,.gif,.jpg,.jpeg,.tiff");
                    break;
                case '2':
                    $(".file_post").show();
                    $(".text_post").hide();
                    $("#message").val('');
                    $("#post_file").prop('multiple', true);
                    $('#post_file').attr("accept", ".png,.bmp,.gif,.jpg,.jpeg,.tiff");
                    break;
                case '3':
                    $(".file_post").show();
                    $(".text_post").hide();
                    $("#message").val('');
                    $("#post_file").prop('multiple', false);
                    $('#post_file').attr("accept", "3g2, .3gp, .3gpp, .asf, .avi, .dat, .divx, .dv, .f4v, .flv, .gif, .m2ts, .m4v, .mkv, .mod, .mov, .mp4, .mpe, .mpeg, .mpeg4, .mpg, .mts, .nsv, .ogm, .ogv, .qt, .tod, .ts, .vob, .wmv");
                    break;
                case '4':
                    $(".text_post").show();
                    $(".file_post").hide();
                    $("#post_file").val('');
                    break;
                default:
                    break;
            }
        });
    });

    $("#postForm").validate({
        rules: {
            post_title: {
                required: true,
                minlength: 2
            },
            post_type: {
                required: true
            },
            message: {
                required: function() {
                    if ($("#post_type_select").val() == 4 && $("#message").val() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            },
            'post_file[]': {
                required: function() {
                    var mode = "{{ isset($data['post_id']) && !empty($data['post_id']) ? '1':'0' }}";
                    if ($("#post_type_select").val() != 4 && $("input[name='post_file[]']").val() == '' && mode == 0) {
                        return true;
                    } else {
                        return false;
                    }
                }
            },
        },
        messages: {
            post_title: {
                required: "Post title is required",
                minlength: " Your post title must consist of at least 2 characters"
            },
            post_type: {
                required: "Select post type",
            },
            message: {
                required: "Post message is required",
            },
            'post_file[]': {
                required: "Post file is required",
            }
        }
    });

    function bindPostValidationEvent() {
        $("#savePost").on('click', function(e) {
            if ($("#postForm").valid()) {
                savePost();
            }
        });
    }

    function savePost() {
        var form_data = new FormData($("#postForm")[0]);

        $.ajax({
            type: 'POST',
            url: "{{ url('management/save_post') }}",
            dataType: 'JSON',
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                /* swal({
                    title: "info",
                    text: "Please Wait, Your Request has been processed!",
                    icon: "info",
                    button: false,
                    closeOnClickOutside: false,
                    closeOnEsc: false
                }); */
            },
            success: function(data) {
                if (data.status == true) {
                    $("#managePostModal").modal('hide');
                    swal({
                        title: "Success",
                        text: data.message,
                        icon: "success",
                        timer: 3000
                    });
                    $('#postReqTable').DataTable().ajax.reload();
                } else {
                    if(data.message) {
                        const wrapper = document.createElement('div');
                        wrapper.innerHTML = data.message;
                        swal({
                            title: "Error", 
                            //text: data.message,  
                            icon: "error", 
                            html:true,
                            content: wrapper
                        });
                        //swal("Error", data.message, "error");
                    } else if(data.errors) {
                        var error = '';
                        $.each(data.errors, function (key, value) {
                            error += value
                        });
                        swal("Error", error, "error");
                    } else {
                        swal("Error", "Something went wrong.Try again after sometime!", "error");
                    }
                }
                //$(".modal-backdrop").remove();
            },
            complete: function() {

            },
            error: function() {}
        });
    }

    function bindRemovePostImageEvent() {
        $(".remove_post_file").on('click', function(e) {
            $.ajax({
                type: 'POST',
                url: "{{ url('management/remove_post_file') }}",
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
                        $(e.target).closest('.post_image').remove();
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
