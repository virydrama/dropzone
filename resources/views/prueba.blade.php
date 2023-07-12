<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</title>
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
    
            <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="fileupload" class="dropzone">
                @csrf
            </form>

        </div>
    </div>
</div>
    
<script type="text/javascript">
  
        /*Dropzone.autoDiscover = false;
  
        var dropzone = new Dropzone('#image-upload', {
              headers:{
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
              },
              thumbnailWidth: 200,
              maxFilesize: 1,
              acceptedFiles: ".jpeg,.jpg,.pdf,.wav", 
              dictDefaultMessage: "Arrastre archivos al recuadro"
            });*/
        
        Dropzone.autoDiscover = false;
        
        var dropzone = new Dropzone('#fileupload', {
            headers:{
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            thumbnailWidth: 200,
            dictDefaultMessage: "Arrastre los archivos aquí",
            addRemoveLinks: true,
            dictRemoveFile: "Eliminar"
        });    
  
</script>
    
</body>
</html>