<style>
/*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/
.hero {
  padding: 6.25rem 0px !important;
  margin: 0px !important;
}
.cardbox {
  border-radius: 3px;
  margin-bottom: 20px;
  padding: 0px !important;
}

/* ------------------------------- */
/* Cardbox Heading
---------------------------------- */
.cardbox .cardbox-heading {
  padding: 16px;
  margin: 0;
}
.cardbox .btn-flat.btn-flat-icon {
 border-radius: 50%;
 font-size: 24px;
 height: 32px;
 width: 32px;
 padding: 0;
 overflow: hidden;
 color: #fff !important;
 background: #b5b6b6;
 
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.cardbox .float-right .dropdown-menu{
  position: relative;
  left: 13px !important;  
}
.cardbox .float-right a:hover{
  background: #f4f4f4 !important;	
}
.cardbox .float-right a.dropdown-item {
  display: block;
  width: 100%;
  padding: 4px 0px 4px 10px;
  clear: both;
  font-weight: 400;
  font-family: 'Abhaya Libre', serif;
  font-size: 14px !important;
  color: #848484;
  text-align: inherit;
  white-space: nowrap;
  background: 0 0;
  border: 0;
}

/* ------------------------------- */
/* Media Section
---------------------------------- */
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.media .mr-3{
  margin-right: 1rem !important;
}
.media img{
  width: 48px !important;
  height: 48px !important;
  padding: 2px;
  border: 2px solid #f4f4f4;
} 
.media-body {
  -ms-flex: 1;
  flex: 1;
  padding: .4rem !important;
}
.media-body p{
  font-family: 'Rokkitt', serif;	
  font-weight: 500 !important;
  font-size: 14px;
  color: #88898a;
}
.media-body small span{
  font-family: 'Rokkitt', serif;	
  font-size: 12px;
  color: #aaa;
  margin-right: 10px;
}


/* ------------------------------- */
/* Cardbox Item
---------------------------------- */
.cardbox .cardbox-item {
    position: relative;
    display: block;
}
.cardbox .cardbox-item img{
}
.img-responsive{
    display: block;
    max-width: 100%;
    height: auto;
}	
.fw {
    width: 100% !important;
	height: auto;
}


/* ------------------------------- */
/* Cardbox Base
---------------------------------- */
.cardbox-base{
 border-bottom: 2px solid #f4f4f4;
}	
.cardbox-base ul{
 margin: 10px 0px 10px 15px!important; 
 padding: 10px !important;
 font-size: 0px;	
  display: inline-block;
}
.cardbox-base li {
  list-style: none;
  margin: 0px 0px 0px -8px !important;
  padding: 0px 0px 0px 0px !important;
  display: inline-block;
}

.cardbox-base li a{
  margin: 0px !important;
  padding: 0px !important;
}
.cardbox-base li a i{
 position: relative;
 top: 4px; 
 font-size: 16px;
 color: #8d8d8d;
 margin-right: 15px;
}
.cardbox-base li a span{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 margin-left: 20px;
 position: relative;
 top: 5px; 
}
.cardbox-base li a em{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 position: relative;
 top: 3px; 
}
.cardbox-base li a img{
  width: 25px;
  height: 25px;
  margin: 0px !important;
  border: 2px solid #fff;
}

.cardbox-comments{
  padding: 10px  !important;
}


</style>
<div class="modal fade" id="viewPostRequirementModal" tabindex="-1" role="dialog"
    aria-labelledby="viewPostRequirementModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post on ({{ date('d/m/Y', strtotime($postReq['post_date'])) }})</h5>
                <button type="button" class="close-modal btn btn-primary btn-rounded btn-icon" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  
            <div class="modal-body">
                <div class="">
                    <ul class="nav nav-tabs" id="postTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="req-tab" data-toggle="tab" href="#req">
                                <span class="nav-text">Requirement</span>
                            </a>
                        </li>
                        @if(!empty($post)) 
                            <li class="nav-item">
                                <a class="nav-link" id="post-tab" data-toggle="tab" href="#post" aria-controls="post">
                                    <span class="nav-text">Post</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade active show" id="req" role="tabpanel" aria-labelledby="req-tab">
                            <div class="flex-grow-1">
                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">{{ $postReq['post_title'] }}</h3>
                            </div>
                            <div class="flex-grow-1">
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Requirement</span>
                                <div class="d-inline">
                                    @if (!empty($postReq['requirement']))
                                        <p class="text-dark-75 font-size-lg font-weight-normal pt-2">{{ $postReq['requirement'] }}</p>
                                    @endif
                                    <p class="text-dark-75 font-size-lg font-weight-normal pt-2"><b>Type :</b>
                                        @switch($postReq['post_type'])
                                            @case(1)
                                                Single image 
                                                @break
                                            @case(2)
                                                Multiple image
                                                @break
                                            @case(3)
                                                Video
                                                @break
                                            @case(4)
                                                Text
                                                @break
                                            @default
                                        @endswitch
                                    </p>
                                    @if (!empty($postReq['caption']))
                                        <p class="text-dark-75 font-size-lg font-weight-normal pt-2"><b>Caption : </b>{{ $postReq['caption'] }}</p>
                                    @endif
                                    @if (!empty($postReq['tags']))
                                        <div class="d-flex">
                                            <p class="text-dark-75 font-size-lg font-weight-normal mr-2 pt-2"><b>Tags : </b>
                                            @php
                                              $tags = explode(',', $postReq['tags']);   
                                            @endphp
                                            @foreach ($tags as $tag)
                                                <div class="bg-light rounded h-30px d-flex flex-center flex-column mr-2 p-2">
                                                    <span class="font-size-sm font-weight-bolder text-dark-75">{{ $tag }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    @if (!empty($postReq['reference_link']))
                                        <p class="text-dark-75 font-size-lg font-weight-normal pt-2"><b>Reference Link : </b>
                                        <a href="{{ $postReq['reference_link'] }}">{{ $postReq['reference_link'] }}</a></p>
                                    @endif
                                    @if (!empty($postReq['refImages']))
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
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if(!empty($post)) 
                            <div class="tab-pane fade" id="post" role="tabpanel" aria-labelledby="post-tab">
                                <div class="cardbox shadow-lg bg-white col-md-6 offset-md-3">
                                    <div class="cardbox-heading">
                                        <div class="media m-0">
                                            <div class="media-body">
                                                <p class="m-0"><b>{{ $post['user']['name'] }}</b></p>
                                                <small><span><i class="icon ion-md-pin"></i> {{ date('d/m/Y', strtotime($post['post_date'])) }}</span></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardbox-item">
                                        @switch($post['post_type'])
                                            @case(1)
                                                @if(isset($post['images'][0]['image_path'])) 
                                                    <img class="img-fluid"
                                                        src="{{ env('APP_URL') . 'public/post_files/' . $post['user_id'] . '/' . rawurldecode($post['images'][0]['image_path']) }}" alt="Image">
                                                @endif
                                                @break
                                            @case(2)
                                            <div id="mixed-widget-slider-1" class="carousel slide" data-ride="carousel" data-interval="8000">
                                                <!--begin::Top-->
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <!--begin::Label-->
                                                    <span class=""></span>
                                                    <!--end::Label-->
                                                    <!--begin::Action-->
                                                    <div class="">
                                                        <a href="#mixed-widget-slider-1" class="btn btn-icon btn-light btn-sm mr-1" role="button" data-slide="prev">
                                                            <span class="svg-icon svg-icon-md">
                                                                <!--begin::Svg Icon | path:/keen-v2/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-left.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                        <a href="#mixed-widget-slider-1" class="btn btn-icon btn-light btn-sm" role="button" data-slide="next">
                                                            <span class="svg-icon svg-icon-md">
                                                                <!--begin::Svg Icon | path:/keen-v2/theme/demo7/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Top-->
                                                <!--begin::Carousel-->
                                                <div class="carousel-inner pt-9">
                                                    @foreach ($post['images'] as $key => $img)
                                                        <div class="carousel-item {{ ($key == 0) ? 'active' :'' }}">
                                                            <img class="img-fluid" src="{{ env('APP_URL') . 'public/post_files/' . $post['user_id'] . '/' . rawurldecode($img['image_path']) }}" alt="Image">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!--end::Carousel-->
                                            </div>
                                                @break
                                            @case(3)
                                                <video width="100%" controls>
                                                    <source src="{{ env('APP_URL') . 'public/post_files/' . $post['user_id'] . '/' . rawurldecode($post['images'][0]['image_path']) }}" type="video/mp4">
                                                </video>
                                                @break
                                            @case(4)
                                                <p class="pl-5 pr-5">{{ $post['message'] }}</p>
                                                @break
                                            @default
                                        @endswitch
                                    </div>
                                    
                                    <div class="cardbox-comments">
                                        @if (!empty($post['caption']))
                                            <p class="text-dark-75 font-size-lg font-weight-normal pt-2">{{ $post['caption'] }}</p>
                                        @endif
                                        @if (!empty($post['tags']))
                                            <div class="d-flex">
                                                <p class="text-dark-75 font-size-lg font-weight-normal mr-2 pt-2"><b>Tags: </b>
                                                @php
                                                $tags = explode(',', $post['tags']);   
                                                @endphp
                                                @foreach ($tags as $tag)
                                                    <div class="bg-light rounded h-30px d-flex flex-center flex-column mr-2 p-2">
                                                        <span class="font-size-sm font-weight-bolder text-dark-75">{{ $tag }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>                
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>