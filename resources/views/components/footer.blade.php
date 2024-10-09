 <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">{{env('APP_NAME')}} @ {{date('Y')}}</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/js/vendor/bootstrap.bundle.min.js"></script>
   <!--  <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="/js/vendor/moment.min.js"></script>
    <script src="/js/vendor/fullcalendar.min.js"></script> -->
    <script src="/js/vendor/fullcalendar-6.1.10/index.global.js"></script>
    <script src="/js/vendor/datatables.min.js"></script>
    <script src="/js/vendor/perfect-scrollbar.min.js"></script>
  <!--   <script src="/js/vendor/progressbar.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script> -->
    <script src="/js/vendor/select2.full.js"></script>
    <script src="/js/vendor/nouislider.min.js"></script>
  <!--   <script src="/js/vendor/bootstrap-datepicker.js"></script> -->
  
    <script src="/js/vendor/mousetrap.min.js"></script>
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/dore.script.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/vendor/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="/js/vendor/emoji-picker/jquery.emojipicker.js"></script>
    <script type="text/javascript" src="/js/vendor/emoji-picker/jquery.emojis.js"></script>
    <script src="/js/vendor/dragula.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    <!-- <script src="/js/vendor/chart.js"></script> -->
    <script src="/js/vendor/jqueryui_1.13.2.min.js"></script>
    <script src="/js/vendor/form-builder.min.js"></script>
    <script src="/js/vendor/formbuilder-form-render.min.js"></script>

</body>
<script type="text/javascript">
         $(document).ready(function(){
$("#brand_link").val(['<?php echo session('brand')?>']).trigger('change');
 function showNotification(placementFrom, placementAlign, type,message,title1) {
      $.notify(
        {
          title: title1,
          message: message,
          target: "_blank"
        },
        {
          element: "body",
          position: null,
          type: type,
          allow_dismiss: true,
          newest_on_top: false,
          showProgressbar: false,
          placement: {
            from: placementFrom,
            align: placementAlign
          },
          offset: 20,
          spacing: 10,
          z_index: 1031,
          delay: 4000,
          timer: 2000,
          url_target: "_blank",
          mouse_over: null,
          animate: {
            enter: "animated fadeInDown",
            exit: "animated fadeOutUp"
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: "class",
          template:
            '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            "</div>" +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            "</div>"
        }
      );
    }

           $('#create_brand').on('submit' , function (e) {
    e.preventDefault();

     $("#create_brand_btn").html("  Processing");
     $("#create_brand_btn").prop("disabled",true);
 
     var formData = new FormData(this);

 
    $.ajax({
       headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
        url : '/brands',
        type : 'POST' ,
        data : formData ,
        contentType: false,
        cache: false,
        processData:false,
        dataType: 'json',
        mimeType: 'multipart/form-data',
        success:function (data) {
          // alert(data.success)
          var success_msg=data.hasOwnProperty('success')
            var slug_name=data.hasOwnProperty('slug')
           // alert(slug)
          var errors_msg=data.hasOwnProperty('errors')
           if (success_msg == true) {
           
              showNotification("top", "right", "success",data.success,"Success")  
                setTimeout(window.location.href="/brand_workspaces/"+data.slug+"", 4000);
                $("#create_brand_btn").html("Create");
                $("#create_brand_btn").prop("disabled",false);
                // toastr.success_msg(data.errors)
           }
           if (errors_msg== true) {
         showNotification("top", "right", "danger",data.errors,"Error")
     
             $("#create_brand_btn").html("Create");
     $("#create_brand_btn").prop("disabled",false);
           }
           
          
     } ,
    error: function(data) {
         if( data.status === 422 ) {
            var errors = $.parseJSON(data.responseText);
            $.each(errors, function (key, value) {
                // console.log(key+ " " +value);
          

                if($.isPlainObject(value)) {
                    $.each(value, function (key, value) {                       
                        console.log(key+ " " +value);
                     showNotification("top", "right", "danger",value,"Error")

  
                   
                    });
                }else{
               
                }
            });
            $("#create_brand_btn").html("Create");
     $("#create_brand_btn").prop("disabled",false);

          } 
    }
});
});

           $(document).on("change","#brand_link", function(e){
            var link=$(this).val();

            var formData = new FormData();
            formData.append( 'brand_link',link);

 
    $.ajax({
       headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
        url : '/set_brand_session',
        type : 'POST' ,
        data : formData ,
        contentType: false,
        cache: false,
        processData:false,
        dataType: 'json',
        mimeType: 'multipart/form-data',
        success:function (data) {
          
          var success_msg=data.hasOwnProperty('success')
        
          var errors_msg=data.hasOwnProperty('errors')
           if (success_msg == true) {
            if (link=="Reset") {
                 setTimeout(window.location.href="/dashboard",0000);
            }else{
                setTimeout(window.location.href="/brand_dashboard/"+link+"", 0000);
            }
              
           }
           if (errors_msg== true) {
         showNotification("top", "right", "danger",data.errors,"Error")
     
             $("#create_brand_btn").html("Create");
     $("#create_brand_btn").prop("disabled",false);
           }
              // toastr.error(value)
          
     } ,
    error: function(data) {
         if( data.status === 422 ) {
            var errors = $.parseJSON(data.responseText);
            $.each(errors, function (key, value) {
                // console.log(key+ " " +value);
          

                if($.isPlainObject(value)) {
                    $.each(value, function (key, value) {                       
                        console.log(key+ " " +value);
                     showNotification("top", "right", "danger",value,"Error")

  
             
                    });
                }else{
                
                }
            });
            $("#create_brand_btn").html("Create");
     $("#create_brand_btn").prop("disabled",false);

          } 
    }
});


    

});
        });
    </script>

</html>