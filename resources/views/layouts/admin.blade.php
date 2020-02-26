<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Control Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('resources/assets/back/images/logo.png') }}" />
        <link rel="stylesheet" href="{{ url('resources/assets/back/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ url('resources/assets/back/css/select2.min.css') }}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('resources/assets/back/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ url('resources/assets/back/css/jquery.dataTables.css') }}"/>
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{url('resources/assets/back/css/fileinput.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">

        @if (\App::isLocale('ar'))
          <link rel="stylesheet" href="{{ url('resources/assets/back/css/style-ar.css') }}" />
          <link rel="stylesheet" href="{{url('resources/assets/back/css/media-queries-ar.css') }}" />
        @else
          <link rel="stylesheet" href="{{url('resources/assets/back/css/style.css') }}" />
          <link rel="stylesheet" href="{{url('resources/assets/back/css/media-queries.css') }}" />
        @endif

        @yield('style')
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="menu">
                    <div class="brand-name">
                    </div>
                    <div class="profile-info">
                        @if(Auth::user()->image)
                          <img src="{{ url('resources/assets/back/images/male.png') }}" alt="Person" />
                        @else
                          <img src="{{ url('resources/assets/back/images/male.png') }}" alt="Person" />
                        @endif
                        <p>{{trans('home.welcome')}}, <span class="user-name">{{Auth::user()->name}}</span></p>
                    </div>

                    <div class="links">
                        <div class="link"  data-toggle="collapse" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-users" aria-hidden="true"></i><a href="#">{{trans('home.departments')}}</a><span class="fa fa-chevron-down"></span>
                        </div>
                        <div class="link-data collapse" id="collapseOne-1">
                          <ul>
                            <li><a href="{{ url('department') }}" >{{trans('home.departments')}}</a></li>
                          </ul>
                        </div>
                    </div>

                    <div class="links">
                        <div class="link"  data-toggle="collapse" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-users" aria-hidden="true"></i><a href="#">{{trans('home.employees')}}</a><span class="fa fa-chevron-down"></span>
                        </div>
                        <div class="link-data collapse" id="collapseOne-2">
                          <ul>
                            <li><a href="{{ url('employee') }}" >{{trans('home.employees')}}</a></li>
                          </ul>
                        </div>
                    </div>

                    <div class="links">
                        <div class="link"  data-toggle="collapse" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-users" aria-hidden="true"></i><a href="#">{{trans('home.users')}}</a><span class="fa fa-chevron-down"></span>
                        </div>
                        <div class="link-data collapse" id="collapseOne-3">
                          <ul>
                            <li><a href="{{ url('user') }}" >{{trans('home.users')}}</a></li>
                          </ul>
                        </div>
                    </div>

                </div>

                 <div class="content col-xs-12">
                    <div class="nav-bar group">
                        <span class="group"><i class="fa fa-bars"></i></span>
                        <div class="logout">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><span>{{trans('home.logout')}}</span><i class="fa fa-sign-out"></i></a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <div class="language group">

                        </div>

                    </div>
                    <div class="information">
                            @yield('content')
                    </div>

                </div>
            </div>

        </div>

        <script src="{{ url('resources/assets/back/js/jquery-2.2.4.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ url('resources/assets/back/js/select2.full.min.js') }}"></script>
        <script src="{{ url('resources/assets/back/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
        <script src="{{ url('resources/assets/back/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('resources/assets/back/js/validator.min.js') }}"></script>
        <script src="{{ url('resources/assets/back/js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ url('resources/assets/back/js/script.js') }}"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/themes/fa/theme.js"></script>

@yield('script')
@stack('scripts')

<script type="text/javascript">

tinymce.init({
    mode : "specific_textareas",
    mode : "textareas",
    editor_selector : "area1",
    height: 500,
    fontsize_formats: "8px 10px 11px 12px 14px 18px 24px 36px",
    font_formats: 'New Sans=Neo Sans Pro;Arial Black=arial black,avant garde;Gugi=Gugi, cursive;Times New Roman=times new roman,times;',
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages',
    toolbar2: 'ltr rtl | print preview media | forecolor backcolor emoticons | fontsizeselect | fontselect',
    //image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ]
});

//datatables
    (function() {
        $('#datatable').DataTable();
        $('.datepickerYear').datepicker( {
            changeMonth: false,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy',
            onClose: function(dateText, inst) {
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, 1));
            }
        });
        $('.datepicker').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
           onClose: function(dateText, inst) {
                function isDonePressed(){
                    return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                }

                if (isDonePressed()){

                    var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, month, 1));
                     console.log('Done is pressed')

                }
            }
        });
        })();

//checkAll

    $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

    $(".checkAll").change(function () {
    $(".web").prop('checked', $(this).prop("checked"));
    });

    $(".checkAllcart").change(function () {
    $(".cart").prop('checked', $(this).prop("checked"));
    });


// btn_delete
$(document).ready(function(){
      $('#btn_delete').click(function(){

                var id = [];
                <?php
                $last_word = Request::segment(1);
               //Session::set('route', $last_word);
               session()->put('route', $last_word);
                ?>

                $(':checkbox:checked').each(function(i){
                     id[i] = $(this).val();
                });

                if(id.length === 0) //tell you if the array is empty
                {
                     alert("Please Select atleast one checkbox");
                }else{
                    $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        }
                    });
                    $.ajax({
                          url:"<?php echo \Session::get('route')?>/"+ id,
                          type:'DELETE',
                          data:{id:id},
                          success:function()
                          {
                               for(var i=0; i<id.length; i++)
                               {
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');
                                    $('input:checkbox').removeAttr('checked');
                               }
                          }
                     });
                }
      });
 });

 $(document).ready(function(){
       $('#new_btn_delete').click(function(){

                 var id = [];
                 $(':checkbox:checked').each(function(i){
                      id[i] = $(this).val();

                 });
                 if(id.length === 0) //tell you if the array is empty
                 {
                      alert("Please Select atleast one checkbox");
                 }
                 else
                 {
                     $.ajaxSetup({
                         headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                         }
                         });
                     $.ajax({
                           url:"delete/"+id,
                           type:'POST',
                           data:{id:id},
                           success:function()
                           {
                                for(var i=0; i<id.length; i++)
                                {
                                     $('tr#'+id[i]+'').css('background-color', '#ccc');
                                     $('tr#'+id[i]+'').fadeOut('slow');
                                     $('input:checkbox').removeAttr('checked');
                                }
                           }
                      });
                 }


       });
  });



/*function delete(baseurl){
  var checkboxs = document.getElementsByName("checkbox");
  var ids=[];
  for(i=0 ;i < checkboxs.length;i++){
    if(checkboxs[i].checked){
      ids.push(checkboxs[i].value);
    }
  }
  if(ids.length == 0){
       alert("Please Select atleast one checkbox");
  }
  else {

  }
}*/

 // btn_active

$(document).ready(function(){
      $('#btn_active').click(function(){
                var id = [];
                <?php
                $last_word = Request::segment(1);
               //\Session::set('route', $last_word);
               session()->put('route', $last_word);
                ?>
                $(':checkbox:checked').each(function(i){
                     id[i] = $(this).val();
                });
                if(id.length === 0) //tell you if the array is empty
                {
                     alert("Please Select atleast one checkbox");
                }
                else
                {
                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                    $.ajax({
                          url:"<?php echo \Session::get('route')?>/up/"+ id,
                          method:'POST',
                          data:{id:id},
                          success:function()
                          {
                            $('input:checkbox').removeAttr('checked');
                            location.reload();
                          }
                     });
                }


      });
      $('#btn_back').click(function(){

                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                    $.ajax({
                          url:"backup",
                          method:'GET',
                          success:function()
                          {

                          }
                     });



      });
 });


</script>

    </body>
</html>
