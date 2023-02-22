@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color:white;">.</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$data_[0]->title1}}</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class=" team-section clearfix">
        <div class="container">


            <div class="row">
                <div class="col-8">
                    <div class="event-details">
                        <span class="indent">
                            <label>headline</label>
                            <h1 contenteditable="true" dir="ltr" class="deletable">Making things</h1>
                            <label>sub head</label>
                            <h2 contenteditable="true" class="deletable">Come make things with
                                us
                            </h2>
                            <label>location</label>
                            <h3 contenteditable="true" class="deletable">Medford Public Library</h3>
                            <label>date</label>
                            <h3 contenteditable="true" class="deletable">Wednesday, December 28,
                                2016
                            </h3>
                            <label>time</label>
                            <h3 contenteditable="true" class="deletable">6:30PM-8:00PM</h3>
                        </span>

                    </div>
                </div>
                <div class="col-2">
                    2 of 3 (wider)
                </div>
            </div>


            <!-- row -->
            <div class="switch">
                <span id="event" class="selected">Event</span> | <span id="class">Class</span>
            </div>
            <div class="reg-details">
                <p contenteditable="true" class="age">Ages 16+</p>
                <p contenteditable="true" class="class-detail">registration required</p>
                <p contenteditable="true" class="event-detail">no registration required</p>
            </div>

            <div class="instructions">
                Instructions
                <p>1) <strong>Your work will not be saved</strong>. Once you close this
                    window you will need to start over. This template currently works best
                    in the Chrome browser.<br><br>
                    2) Choose Event or Class at the top of the page to populate the
                    correct default information.<br><br>
                    3) Edit the text to reflect the details of your event. If you create
                    an image that contains most of the necessary information, delete the
                    text fields where appropriate.<br><br>
                    4) Print the page and choose "save as pdf" from the dialog box. If it
                    appears to flow to two pages, adjust the print margins. Boom. you have
                    a flyer.
            </div>
            <div class="event-details">
                <span class="indent">
                    <label>headline</label>
                    <h1 contenteditable="true" dir="ltr" class="deletable">Making things</h1>
                    <label>sub head</label>
                    <h2 contenteditable="true" class="deletable">Come make things with
                        us
                    </h2>
                    <label>location</label>
                    <h3 contenteditable="true" class="deletable">Medford Public Library</h3>
                    <label>date</label>
                    <h3 contenteditable="true" class="deletable">Wednesday, December 28,
                        2016
                    </h3>
                    <label>time</label>
                    <h3 contenteditable="true" class="deletable">6:30PM-8:00PM</h3>
                </span>
                <input type="file" id="fileElem" multiple accept="image/*" style="display:none"
                    onchange="handleFiles(this.files)">
                <div id="fileList">
                    <ul>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/152171/thumbs_up.jpg" </img>
                        </li>
                    </ul>
                </div>
                <a href="#" id="fileSelect" class="helper center">Change image (must
                    have file type extension such as .jpg, .png, .gif)</a>
                <label>description</label>
                <p id="description" contenteditable="true" class="deletable">Event
                    Description Vivamus consectetur turpis nec lacus pellentesque varius.
                    Proin ornare, leo eget ultrices rutrum, urna nibh ornare velit, eget
                    lacinia purus arcu eu mauris. Donec malesuada erat luctus iaculis
                    efficitur. Integer malesuada malesuada risus non dignissim.
                </p>
            </div>
            <span class="bottom">
                <div class="standard-messaging">
                    <p contenteditable="true" class="class-detail">Space is limited and
                        registration is required.
                    </p>
                    <p contenteditable="true">To <span class="class-detail">register or</span>
                        ask questions, email medford@minlib.net or call 781-395-7950
                    </p>
                    <p>Learn more about us at <span class="makerspace">MysticMakerspace.org</span></p>
                </div>
                <div class="logos">
                    <p>This program was generously sponsored in part by a Grant from the
                        Medford Arts Council, a local agency which is supported by the
                        Massachusetts Cultural Council, a state agency.
                    </p>
                    <br>

                </div>
            </span>
        </div>
    </section>
</div>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/plantilla.css') }}" />
@endsection
@push('scripts')
<script>
window.URL = window.URL || window.webkitURL;

var fileSelect = document.getElementById("fileSelect"),
    fileElem = document.getElementById("fileElem"),
    fileList = document.getElementById("fileList");

fileSelect.addEventListener("click", function(e) {
    if (fileElem) {
        fileElem.click();
    }
    e.preventDefault(); // prevent navigation to "#"
}, false);

function handleFiles(files) {
    if (!files.length) {
        fileList.innerHTML = "<p>No files selected!</p>";
    } else {
        fileList.innerHTML = "";
        var list = document.createElement("ul");
        fileList.appendChild(list);
        for (var i = 0; i < files.length; i++) {
            var li = document.createElement("li");
            list.appendChild(li);

            var img = document.createElement("img");
            img.src = window.URL.createObjectURL(files[i]);
            img.onload = function() {
                window.URL.revokeObjectURL(this.src);
            }
            li.appendChild(img);
            var info = document.createElement("span");

        }
    }
}

var toggles = "label";

var remove = '<span class="delete"> (delete)</span> <span class="add hide"> (add)</span>';
var add = '<span class="add"> (add)</span>';
$('label').append(remove);


$('.delete, .add').on("click", function() {
    $(this).toggleClass("hide");
    $(this).siblings().toggleClass("hide");
    $(this).parent().next('.deletable').toggleClass('hide');
});

$('.switch span').on("click", function() {
    if ($(this).hasClass("selected")) {

    } else {
        var id = $(this).attr('id');
        document.getElementById("body").className = id;
        $(this).toggleClass("selected");
        $(this).siblings().toggleClass("selected");
    }
});

// $('[contenteditable]').on('blur keyup paste', function() {
//     $(this).html($(this).text());
// });































$('#saveService').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('admin_productos_naturales_update',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        console.log(response);
        setTimeout(() => {
            if (response.status == 200) {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
            }
        }, 500);

    }).catch(function() {
        console.log('FAILURE!!');
    });

});
</script>
@endpush