@extends('layouts.adminMaster')
@section('title' , 'Dashboard')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> {{trans('words.create_about_team')}}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('aboutTeam')}}">{{trans('words.all_about_team')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('aboutOurTeam_trashed')}}">  {{trans('words.about_team_trashed')}}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

                    </div>
                </div>
            </div>

            <div class="content-body">
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            @if(Session::has('success'))
                                                <div class="alert bg-success alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                                                    <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Well done!</strong> You  create  successfully
                                                </div>
                                            @elseif(Session::has('error'))
                                                <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                                                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>ERROR!</strong> plz check data and tray again
                                                </div>
                                            @endif
                                        </div>
                                        <form class="form" action="{{route('aboutOurTeam_store')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-info"></i> {{trans('words.about_team_info')}} </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{trans('words.team_name')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.team_name')}}"
                                                                   name="team_name">
                                                        </div>
                                                    </div>
                                                 {{-- <div class="col-md-6">
                                                        <label>{{trans('words.upload_team_img')}}</label> <br>
                                                        <label>Select Image <span>with height : 400px</span></label>
                                                        <label id="projectinput7" class="file center-block">
                                                            <input type="file" id="file" name="team_img" class="form-control">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>--}}
                                                </div>

      



<script src="https://code.jquery.com/jquery-3.x-git.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" rel="stylesheet">    

  
        <input id="upload_img"  type="file" accept="image/*" name="team_img">
        <i class="fa fa-photo"></i> 
     
    <div id="oldImg" style="display:none;"></div>
    
    <span id="crop_img" class="btn btn-info"><i class="fa fa-scissors"></i> crop</span>
    
    <div id="newImgInfo"></div>
    <div id="newImg" >
       
    </div>
    
<script>
var     width_crop = 200,
height_crop = 200, 
type_crop = "square", //circle
width_preview = 330, 
height_preview = 330, 
compress_ratio = 0.85, 
type_img = "jpeg", //jpeg png webp
oldImg = new Image(),
myCrop, 
file, 
oldImgDataUrl;


myCrop = $("#oldImg").croppie({
viewport: { 
    width: width_crop,
    height: height_crop,
    type: type_crop
},
boundary: { 
    width: width_preview,
    height: height_preview
}
});

$("#upload_img").on("change", function () {
$("#oldImg").show();
readFile(this);
});

function readFile(input) {
if (input.files && input.files[0]) {
    file = input.files[0];
} else {
    alert(" Chrome");
    return;
}

if (file.type.indexOf("image") == 0) {
    var reader = new FileReader();

    reader.onload = function (e) {
        oldImgDataUrl = e.target.result;
        oldImg.src = oldImgDataUrl; 
        myCrop.croppie("bind", {
            url: oldImgDataUrl
        });
    };

    reader.readAsDataURL(file);
} else {
    alert(" fdgdf");
}
}

oldImg.onload = function () {
var width = this.width,
    height = this.height,
    fileSize = Math.round(file.size / 1000),
    html = "";

html += "<p>max size " + width + "x" + height + "</p>";
html += "<p>file size " + fileSize + "k</p>";
$("#oldImg").before(html);
};

$("#crop_img").on("click", function () {
myCrop.croppie("result", {
    type: "canvas",
    format: type_img,
    quality: compress_ratio
}).then(function (src) {
    displayCropImg(src);
    displayNewImgInfo(src);
});
});

function displayNewImgInfo(src) {
var html = "",
    filesize = src.length * 0.75;

html += "<p>max size " + width_crop + "x" + height_crop + "</p>";
html += "<p>file size  " + Math.round(filesize / 1000) + "k</p>";
var html = $('input[name=team_img]').val();
$("#newImgInfo").html(html);
}

function displayCropImg(src) {
var html = "<img  src='" + src + "' />";
$("#newImg").html(html);
}
</script>                                          





                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{trans('words.team_position')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.team_position')}}"
                                                                   name="team_position">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{trans('words.team_description')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.team_description')}}"
                                                                   name="team_description">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-actions">
                                                   <button type="submit" class="btn btn-primary" id="type-success">
                                                    <i class="la la-check-square-o"></i> {{trans('words.Save')}}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>




            </div>

        </div>
    </div>

@endsection
