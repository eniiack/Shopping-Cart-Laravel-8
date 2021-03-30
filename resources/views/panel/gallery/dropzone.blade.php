<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload in Laravel using Dropzone</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
</head>

<body>
    <div class="container-fluid">
        <br />
        <h3 align="center">Image Upload in Laravel using Dropzone</h3>
        <br />

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Select Image</h3>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="first-name-vertical">انتخاب محصول</label>
                    <select class="form-control file_input" name="product">
                        <option selected disabled>انتخاب محصول</option>
                        @foreach (\App\Models\Product::all() as $product)
                            <option value="{{ $product->id }}">{{ $product->title }}</option>
                        @endforeach
                    </select>
                    @error('count')
                        <span class="alert m-t4 text-danger">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="panel-body">
                <form id="dropzoneForm" class="dropzone" action="{{ route('admin.dropzone.upload') }}">
                    @csrf
                    <input type="hidden" id="idProduct" name="title">
                </form>
                <div align="center">
                    <button type="button" class="btn btn-info" id="submit-all">Upload</button>
                </div>
            </div>
        </div>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Uploaded Image</h3>
            </div>
            <div class="panel-body" id="uploaded_image">

            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    $("body").on('change', '.file_input', function() {
        var value = $(this).val().replace(/^.*\\/, "");
        $("#idProduct").attr('value', value);
    });
    Dropzone.options.dropzoneForm = {
        autoProcessQueue: false,
        acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",

        init: function() {
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;
            this.on("sending", function(file, xhr, formData) {
                    formData.append("product_id", document.getElementById('idProduct').value);
                }),
                submitButton.addEventListener('click', function() {
                    myDropzone.processQueue();
                });

            this.on("complete", function(file, xhr) {
                // alert(file.xhr.response);
                if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                    var _this = this;
                    _this.removeAllFiles();
                }
                load_images();
            });

        }

    };

    load_images();

    function load_images() {
        $.ajax({
            url: "{{ route('admin.dropzone.fetch') }}",
            success: function(data) {
                $('#uploaded_image').html(data);
            }
        })
    }

    $(document).on('click', '.remove_image', function() {
        var name = $(this).attr('id');
        $.ajax({
            url: "{{ route('admin.dropzone.delete') }}",
            data: {
                name: name
            },
            success: function(data) {
                load_images();
            }
        })
    });

</script>
