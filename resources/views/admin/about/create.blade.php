@extends('layouts.adminMaster')
@section('title' , 'Dashboard')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{trans('words.create_about')}}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('about')}}"> {{trans('words.all_about')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('about_trashed')}}"> {{trans('words.about_trashed')}}</a>
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




                                        
            



                                      <form   class="form" action="{{route('about_store')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-info"></i>{{trans('words.about_info')}} </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{trans('words.about_details')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.about_details')}}"
                                                                   name="description">
                                                        </div>
                                                    </div>
                                                {{--<div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> {{trans('words.upload_about_img')}}</label> <br>
                                                            <label>Select File</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file" name="about_img" class="form-control">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>  --}}                                                   
                                                </div>


                    <style>
                        .modal-content{
                            overflow: scroll;
                            height: 90vh;
                        }
                    </style>
                
                    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
                
                    <style>
                        .preview-container {
                            /* display: flex;
                            flex-wrap: wrap;
                            gap: 10px;
                            margin-top: 20px; */
                            display: grid;
                            grid-template-columns: repeat(auto-fill, 170px);
                        }
                
                        .preview {
                            position: relative;
                            width: 150px;
                            height: 150px;
                            padding: 4px;
                            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
                            margin: 30px 0px;
                            border: 1px solid #ddd;
                        }
                
                        .preview img {
                            width: 100%;
                            height: auto;
                            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
                            border: 1px solid #ddd;
                            object-fit: cover;
                
                        }
                
                        .delete-btn {
                            position: absolute;
                            top: 156px;
                            right: 0px;
                            /*border: 2px solid #ddd;*/
                            border: none;
                            cursor: pointer;
                        }
                
                        .delete-btn {
                            background: transparent;
                            color: rgba(235, 32, 38, 0.97);
                        }
                
                        .crop-btn {
                            position: absolute;
                            top: 156px;
                            left: 0px;
                            /*border: 2px solid #ddd;*/
                            border: none;
                            cursor: pointer;
                            background: transparent;
                            color: #007bff;
                        }
                    </style>
                
                    <style>
                        .variants {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }
                
                        .variants>div {
                            margin-right: 5px;
                        }
                
                        .variants>div:last-of-type {
                            margin-right: 0;
                        }
                
                        .file {
                            position: relative;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }
                
                        .file>input[type='file'] {
                            display: none
                        }
                
                        .file>label {
                            font-size: 1rem;
                            font-weight: 300;
                            cursor: pointer;
                            outline: 0;
                            user-select: none;
                            border-color: rgb(216, 216, 216) rgb(209, 209, 209) rgb(186, 186, 186);
                            border-style: solid;
                            border-radius: 4px;
                            border-width: 1px;
                            background-color: hsl(0, 0%, 100%);
                            color: hsl(0, 0%, 29%);
                            padding-left: 16px;
                            padding-right: 16px;
                            padding-top: 16px;
                            padding-bottom: 16px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }
                
                        .file>label:hover {
                            border-color: hsl(0, 0%, 21%);
                        }
                
                        .file>label:active {
                            background-color: hsl(0, 0%, 96%);
                        }
                
                        .file>label>i {
                            padding-right: 5px;
                        }
                
                        .file--upload>label {
                            color: hsl(204, 86%, 53%);
                            border-color: hsl(204, 86%, 53%);
                        }
                
                        .file--upload>label:hover {
                            border-color: hsl(204, 86%, 53%);
                            background-color: hsl(204, 86%, 96%);
                        }
                
                        .file--upload>label:active {
                            background-color: hsl(204, 86%, 91%);
                        }
                
                        .file--uploading>label {
                            color: hsl(48, 100%, 67%);
                            border-color: hsl(48, 100%, 67%);
                        }
                
                        .file--uploading>label>i {
                            animation: pulse 5s infinite;
                        }
                
                        .file--uploading>label:hover {
                            border-color: hsl(48, 100%, 67%);
                            background-color: hsl(48, 100%, 96%);
                        }
                
                        .file--uploading>label:active {
                            background-color: hsl(48, 100%, 91%);
                        }
                
                        .file--success>label {
                            color: hsl(141, 71%, 48%);
                            border-color: hsl(141, 71%, 48%);
                        }
                
                        .file--success>label:hover {
                            border-color: hsl(141, 71%, 48%);
                            background-color: hsl(141, 71%, 96%);
                        }
                
                        .file--success>label:active {
                            background-color: hsl(141, 71%, 91%);
                        }
                
                        .file--danger>label {
                            color: hsl(348, 100%, 61%);
                            border-color: hsl(348, 100%, 61%);
                        }
                
                        .file--danger>label:hover {
                            border-color: hsl(348, 100%, 61%);
                            background-color: hsl(348, 100%, 96%);
                        }
                
                        .file--danger>label:active {
                            background-color: hsl(348, 100%, 91%);
                        }
                
                        .file--disabled {
                            cursor: not-allowed;
                        }
                
                        .file--disabled>label {
                            border-color: #e6e7ef;
                            color: #e6e7ef;
                            pointer-events: none;
                        }
                
                        @keyframes pulse {
                            0% {
                                color: hsl(48, 100%, 67%);
                            }
                
                            50% {
                                color: hsl(48, 100%, 38%);
                            }
                
                            100% {
                                color: hsl(48, 100%, 67%);
                            }
                        }
                    </style>

            
<div class="container mt-3">
    <div class="row mx-0" style="border: 1px solid #ddd;padding: 30px 0px;">
        <div class="col-12">
            <div class="mt-3">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="variants">
                            <div class='file file--upload w-100'>
                                <label for='file-input' class="w-100">
                                    <i class="fas fa-cloud-upload-alt"></i>Upload
                                </label>
                                <!-- <input  id="file-input" multiple type='file' /> -->
                                <input type="file" id="file-input" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 offset-1">
            <div class="preview-container"></div>
        </div>
    </div>
</div>

<div id="cropped_images"></div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="croppie-modal" style="display:none">
                                <div id="croppie-container"></div>
                                <button data-dismiss="modal" id="croppie-cancel-btn" type="button" class="btn btn-secondary"><i
                                        class="fas fa-times"></i></button>
                                <button id="croppie-submit-btn" type="button" class="btn btn-primary"><i
                                        class="fas fa-crop"></i></button>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>


<script>
  const fileInput = document.querySelector('#file-input');
    const previewContainer = document.querySelector('.preview-container');
    const croppieModal = document.querySelector('#croppie-modal');
    const croppieContainer = document.querySelector('#croppie-container');
    const croppieCancelBtn = document.querySelector('#croppie-cancel-btn');
    const croppieSubmitBtn = document.querySelector('#croppie-submit-btn');


    fileInput.addEventListener('change', () => {
        previewContainer.innerHTML = '';
        let files = Array.from(fileInput.files)

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.type.match('image.*')) {
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    const preview = document.createElement('div');
                    preview.classList.add('preview');
                    const img = document.createElement('img');
                    const actions = document.createElement('div');
                    actions.classList.add('action_div');
                    img.src = reader.result;
                    preview.appendChild(img);
                    preview.appendChild(actions);

                    const container = document.createElement('div');
                    const deleteBtn = document.createElement('span');
                    deleteBtn.classList.add('delete-btn');
                    deleteBtn.innerHTML = '<i style="font-size: 20px;" class="fas fa-trash"></i>';
                    deleteBtn.addEventListener('click', () => {
                    
                        if (window.confirm('Are you sure you want to delete this image?')) {
                            files.splice(file, 1)
                            preview.remove();
                            getImages()
                        }
                    });

                    preview.appendChild(deleteBtn);
                    const cropBtn = document.createElement('span');
                    cropBtn.setAttribute("data-toggle", "modal")
                    cropBtn.setAttribute("data-target", "#exampleModal")
                    cropBtn.classList.add('crop-btn');
                    cropBtn.innerHTML = '<i style="font-size: 20px;" class="fas fa-crop"></i>';
                    cropBtn.addEventListener('click', () => {
                      
                        setTimeout(() => {
                            launchCropTool(img);
                        }, 500);
                    });
                    preview.appendChild(cropBtn);
                    previewContainer.appendChild(preview);
                });
                reader.readAsDataURL(file);
            }
        }

        getImages()
    });
    function launchCropTool(img) {
        // Set up Croppie options
        const croppieOptions = {
            viewport: {
                width: 200,
                height: 200,
                type: 'square' // or 'square'
            },
            boundary: {
                width: 300,
                height: 300,
            },
            enableOrientation: true
        };

        // Create a new Croppie instance with the selected image and options
        const croppie = new Croppie(croppieContainer, croppieOptions);
        croppie.bind({
            url: img.src,
            orientation: 1,
        });

        // Show the Croppie modal
        croppieModal.style.display = 'block';

        // When the user clicks the "Cancel" button, hide the modal
        croppieCancelBtn.addEventListener('click', () => {
    
            croppieModal.style.display = 'none';
            $('#exampleModal').modal('hide');
            croppie.destroy();
        });

        // When the user clicks the "Crop" button, get the cropped image and replace the original image in the preview
        croppieSubmitBtn.addEventListener('click', () => {
        
            croppie.result('base64').then((croppedImg) => {
                img.src = croppedImg;
                croppieModal.style.display = 'none';
                $('#exampleModal').modal('hide');
                croppie.destroy();
                getImages()
            });
        });
    }
    function getImages() {
        setTimeout(() => {
            const container = document.querySelectorAll('.preview-container');
            let images = [];
            $("#cropped_images").empty();
            for (let i = 0; i < container[0].children.length; i++) {
                images.push(container[0].children[i].children[0].src)
                var newInput = $("<input>").attr("type", "hidden").attr("name", "about_img").val(container[0].children[i].children[0].src);
                $("#cropped_images").append(newInput);
            }
            return images
        }, 500);
    }

</script>





                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  {{trans('words.mission')}}</label>
                                                            <textarea id="issueinput8" rows="5" class="form-control" name="mission" placeholder="{{trans('words.mission')}}"
                                                                      data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="mission"
                                                                      data-original-title="" title="" style="height: 115px;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{trans('words.vision')}}</label>
                                                            <textarea id="issueinput8" rows="5" class="form-control" name="vision" placeholder="{{trans('words.vision')}}"
                                                                      data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="vision"
                                                                      data-original-title="" title="" style="height: 115px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{trans('words.our_value')}}</label>
                                                            <textarea id="issueinput8" rows="5" class="form-control" name="our_value" placeholder="{{trans('words.our_value')}}"
                                                                      data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="mission"
                                                                      data-original-title="" title="" style="height: 115px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary" id="type-success">
                                                    <i class="la la-check-square-o"></i>  {{trans('words.Save')}}
                                                </button>
                                            </div>

                                            <div id="cropped_images"></div>
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
