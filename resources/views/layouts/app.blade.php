

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ config('app.name', 'QS') }}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{asset('themes/admin/bootstrap/css/bootstrap.min.css')}}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('themes/admin/css/style.css')}}">
<link rel="stylesheet" href="{{asset('themes/admin/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('themes/admin/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('themes/admin/css/themify-icons/themify-icons.css')}}">




</head>
<body class="hold-transition login-page">
      @yield('content')



<!-- jQuery 3 --> 
<script src="{{asset('themes/admin/js/jquery.min.js')}}"></script> 
      <script src="{{ asset('themes/admin/js/jquery.validate.min.js')}}"></script>


<!-- v4.0.0-alpha.6 --> 
<script src="{{asset('themes/admin/bootstrap/js/bootstrap.min.js')}}"></script> 

<!-- template --> 
<script src="{{asset('themes/admin/js/niche.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function (e) {
            $("#form").validate({
                /* @validation  states + elements
                 ------------------------------------------- */
                errorClass: "v-error text-danger",
                validClass: "v-success text-success",
                errorElement: "div",
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-control').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-control').removeClass(errorClass).addClass(validClass);
                },
                errorPlacement: function (error, element) {
                    if (element.is(":radio") || element.is(":checkbox")) {
                        element.closest('.option-group').after(error);
                    }
                    else {
                        error.insertAfter(element.parent());
                    }
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
        function textEditor(id) {
            tinymce.init({
                selector: "#" + id,
                plugins: "print preview paste importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons",
                menubar: "file edit view insert format tools table help",
                toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview print | insertfile image media link anchor codesample | ltr rtl",
                toolbar_sticky: true,
                image_advtab: true,
                content_css: "//www.tiny.cloud/css/codepen.min.css",
                importcss_append: true,
                height: 400,
                image_caption: false,
                quickbars_selection_toolbar: "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
                noneditable_noneditable_class: "mceNonEditable",
                toolbar_mode: "sliding",
                contextmenu: "link image imagetools table",
                images_upload_url: "{{route('save.image')}}",
                setup: function(editor) {
                    editor.on("change", function() {
                        editor.save();
                    });
                },
                file_picker_types: "image",
                convert_urls: false,
            });
        }
</script>


</body>
</html>