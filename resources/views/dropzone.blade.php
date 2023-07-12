<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        
    </style>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dropzone Laravel 10</h1>
    
            <form action="{{ route('dropzone.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" id ="firstname" name ="firstname" />
                <input type="text" id ="lastname" name ="lastname" />
                <div class="dropzone" id="myDropzone"></div>
                <button type="submit" id="submit-all"> upload </button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script type="text/javascript">
  
  Dropzone.options.myDropzone= {
    url: '{{ route('dropzone.store') }}',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("firstname", jQuery("#firstname").val());
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}
</script>
    
</body>
</html>