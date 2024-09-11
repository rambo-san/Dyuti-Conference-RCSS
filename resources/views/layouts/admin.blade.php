<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }} | @yield('page_title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- v4.0.0 -->
    <link rel="stylesheet" href="{{asset('themes/admin/bootstrap/css/bootstrap.min.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('themes/admin/img/favicon-16x16.png')}}">

    <!-- Google Font -->
    <link href="https:/fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('themes/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('themes/admin/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/admin/css/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" href="{{asset('themes/admin/css/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('themes/admin/css/simple-lineicon/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('themes/admin/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('themes/admin/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/admin/css/overlay.css') }}">


    <!-- jsgrid Tables -->
    <link rel="stylesheet" href="{{asset('themes/admin/plugins/datatables/css/dataTables.bootstrap.min.css')}}">

    @yield('style')

</head> 

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header"> 
            <!-- Logo --> 
            <a href="{{route('admin.dashboard')}}" class="logo blue-bg"> 
                <!-- mini logo for sidebar mini 50x50 pixels --> 
                <span class="logo-mini"><img src="{{asset('themes/admin/img/logo.png')}}" alt=""></span> 
                <!-- logo for regular state and mobile devices --> 
                <span class="logo-lg"><img src="{{asset('themes/admin/img/logo.png')}}" alt="" width="150px"></span> </a> 
                <!-- Header Navbar -->
                <nav class="navbar blue-bg navbar-static-top"> 
                    <!-- Sidebar toggle button-->
                    <ul class="nav navbar-nav pull-left">
                        <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                    </ul>
                    <div class="pull-left search-box">
                        
                            <!-- search form --> </div>
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">


                                    <!-- User Account  -->
                                    <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{asset('themes/admin/img/img1.jpg')}}" class="user-image" alt="User Image"> <span class="hidden-xs">{{Auth::user()->name}}</span> </a>
                                        <ul class="dropdown-menu">
                                            <li class="user-header">
                                                <div class="pull-left user-img"><img src="{{asset('themes/admin/img/img1.jpg')}}" class="img-responsive img-circle" alt="User"></div>
                                                <p class="text-left">{{Auth::user()->name}} <small>{{Auth::user()->email}}</small> </p>
                                            </li>
                                            <li><a href="{{route('myprofile.index')}}"><i class="icon-profile-male"></i> My Profile</a></li>

                                            <li><a href="javascript:" onclick="document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="main-sidebar"> 
                        <!-- sidebar -->
                        <div class="sidebar"> 
                            <!-- Sidebar user panel -->
                           <!--  <div class="user-panel">
                                
                                <div class="info">
                                   
                                   </div>
                                </div> -->

                                <!-- sidebar menu -->

                                  @include('layouts.menu.admin')
                               
                            </div>
                    </aside>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>



<div class="content-wrapper"> 
    @yield("breadcrumb")

    @yield('content')

 </div>

<footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
Copyright © {{date('Y')}} {{ config('app.name', 'QS') }}. All rights reserved.</footer>
</div>




<div class="loading" id="loaderModal">Loading&#8230;</div>

<div class="modal fade pt-5 " id="action" tabindex="-1" role="dialog" aria-labelledby="action" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="addNew_popup ml-4 mr-4 py-5 text-center">
              <p class=" mt-3 mb-5"  id="actionMessage"></p>

              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

              <a href="#" id="actionURL" class="btn btn-info">Yes</a>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="modal fade" id="actionDelete" tabindex="-1" role="dialog" aria-labelledby="actionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="actionLabelDelete"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <div class="modal-body">
                <p id="actionMessageDelete"></p>
            </div>
            <div class="modal-footer">
                <form action="#" method="POST" id="deleteForm">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}

                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('themes/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('themes/admin/plugins/popper/popper.min.js')}}"></script>
<script src="{{asset('themes/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/admin/js/adminkit.js')}}"></script>
<script src="{{asset('themes/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('themes/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script> 
<script src="{{asset('themes/admin/plugins/table-expo/filesaver.min.js')}}"></script>
<script src="{{asset('themes/admin/plugins/table-expo/xls.core.min.js')}}"></script>
<script src="{{asset('themes/admin/plugins/table-expo/tableexport.js')}}"></script>
<script src="{{asset('themes/admin/js/select2.min.js')}}"></script>
<script src="{{ asset('themes/admin/toastr/toastr.js') }}" type="text/javascript"></script>
<script src="{{ asset('themes/admin/js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('themes/admin/js/jquery.validate.min.js')}}"></script>
      
<script src="{{ asset('themes/admin/js/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{ asset('themes/admin/js/jquery-ui.js')}}"></script>

 <script src="https://cdn.tiny.cloud/1/6svp97a9nwulg4d08k0x5kbim7ozi6dbbseuhzdpdsm5d3ux/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

 <script src="{{asset('js/custom.js')}}"></script>

@yield('script')

<script>


  @if(Session::has('success'))
  displaySuccessMsg("{!!Session::get('success')!!}");

  @endif

  @if(Session::has('error'))
  displayFailMsg("{!!Session::get('error')!!}");

  @endif

  @if(Session::has('success_with_error'))
  displayFailWithSuccessMsg("{!!Session::get('success_with_error')!!}");

  @endif

  @if($errors->any())
  displayFailMsg("{!! implode('',$errors->all('<li>:message</li>')); !!}");

  @endif


  function displayInfoMsg(msg) {

    toastr.clear();
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "timeOut": "10000",
      "extendedTimeOut": "10000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  toastr.warning(msg, 'Info');
}

function displaySuccessMsg(msg) {

    toastr.clear();
    toastr.options = {
      "closeButton": "true",
      "progressBar": "false",
      "debug": "false",
      "positionClass": "toast-top-right",
      "showDuration": "330",
      "hideDuration": "330",
      "timeOut":  "10000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "swing",
      "showMethod": "slideDown",
      "hideMethod": "slideUp",
      "onclick": null
  }
  toastr.success(msg, 'Success');
}

function displayFailMsg(msg) {

    toastr.clear();
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "timeOut": "10000",
      "extendedTimeOut": "10000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  toastr.error(msg, 'Error');
}



$(document).ready(function (e) {
    $(".bootstrap-tagsinput input").addClass('form-control');

    $(".form-validate").validate({
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

   

    // $('.datepicker').datetimepicker({
    //     format: 'DD-MM-YYYY',
    //     sideBySide: true,
    //     icons: {
    //         up: "fa fa-chevron-circle-up",
    //         down: "fa fa-chevron-circle-down",
    //         next: 'fa fa-chevron-circle-right',
    //         previous: 'fa fa-chevron-circle-left'
    //     }

    // });
    $('.selectbox2').select2({
      placeholder: 'Select an option'
  });






});

  //  textEditor("description");
     // Tiny MCE
    function textEditor(id) {
      tinymce.init({
        selector: "#" + id,
        plugins:
        "print preview paste importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons",
        menubar: "file edit view insert format tools table help",
        toolbar:
        "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview print | insertfile image media link anchor codesample | ltr rtl",
        toolbar_sticky: true,
        image_advtab: true,
        content_css: "//www.tiny.cloud/css/codepen.min.css",
        importcss_append: true,
        height: 400,
        image_caption: false,
        quickbars_selection_toolbar:
        "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: "sliding",
        contextmenu: "link image imagetools table",
        images_upload_url: "{{route('save.image')}}",
        setup: function (editor) {
          editor.on("change", function () {
            editor.save();
          });
        },
        file_picker_types: "image",
        convert_urls: false,
      });
    }

    function textEditorSetContent(id, value) {
      if (value == null) {
        return false;
      }

      tinymce.get(id).setContent(value);
    }

</script>
</body>
</html>




