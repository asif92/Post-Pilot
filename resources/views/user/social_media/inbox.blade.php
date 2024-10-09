@include('components.head')
@include('components.nav')
@include('components.sidebar')

<main>
    <div class="container-fluid">
        <!-- <div class="row">
			<div class="col-12">
				<h1>Social Media Inbox</h1>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-12">
				@include('components.inbox')
			</div>
		</div>
	</div>
</main>


@include('components.footer')

<script>
    $(document).ready(function(e) {
    	$('#send_message_input').emojiPicker();

		$('#emoji_picker').click(function () {
	        // e.preventDefault();
	        $('#send_message_input').emojiPicker('toggle', {
	        	// width: '300px',
          // height: '200px',
          position: 'top',
          button: false,

	        });
			// $("#all_messages .contact").removeClass('active');
			// $(this).addClass("active");
		});
  });

	$('#all_messages .contact').click(function () {
		$("#all_messages .contact").removeClass('active');
		$(this).addClass("active");

		$("#no_content_section").css('display', 'none');
		$("#message_content_section").css('display', 'block');
		$(".messages").animate({ scrollTop: $(document).height() }, "slow");
	});

	$('#unresolved_messages .contact').click(function () {
		$("#unresolved_messages .contact").removeClass('active');
		$(this).addClass("active");

		$("#no_content_section").css('display', 'none');
		$("#message_content_section").css('display', 'block');
		$(".messages").animate({ scrollTop: $(document).height() }, "slow");
	});

	$('#resolved_messages .contact').click(function () {
		$("#resolved_messages .contact").removeClass('active');
		$(this).addClass("active");

		$("#no_content_section").css('display', 'none');
		$("#message_content_section").css('display', 'block');
		$(".messages").animate({ scrollTop: $(document).height() }, "slow");
	});


// tinymce.init({
//   selector: 'input#input',
//   plugins: 'emoticons',
//   toolbar: 'emoticons',
//   setup: function (editor) {

//     editor.ui.registry.addButton('customInsertButton', {
//       text: 'My Button',
//       onAction: function (_) {
//         editor.insertContent('&nbsp;<strong>It\'s my button!</strong>&nbsp;');
//       }
//     });
//   },
//   content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
// });


// tinymce.init({
//   selector: 'textarea#mytextarea',
//   toolbar: 'customInsertButton',
//   setup: function (editor) {

//     editor.ui.registry.addButton('customInsertButton', {
//       text: 'My Button',
//       onAction: function (_) {
//         editor.insertContent('&nbsp;<strong>It\'s my button!</strong>&nbsp;');
//       }
//     });
//   },
//   content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
// });

// tinymce.init({
//     selector: "input#input",
//     plugins: "emoticons",
//     toolbar: "emoticons imageupload",
//     toolbar_location: "bottom",
//     // images_upload_url: 'postAcceptor.php',
// 	// images_upload_handler: example_image_upload_handler,
// 	// file_picker_types: 'file',
// 	// images_upload_url: 'postAcceptor.php',
// 	// images_upload_base_path: '/some/basepath',
//     menubar: false,
//     setup: function(editor) {
//         var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
//         $(editor.getElement()).parent().append(inp);

//         inp.on("change",function(){
//         	newMessage();
//             var input = inp.get(0);

//             var file = input.files[0];
//             var fr = new FileReader();
//             fr.onload = function() {
//                 var img = new Image();
//                 img.src = fr.result;
//                 editor.insertContent('<img src="'+img.src+'" height="25" width="25"/>');
//                 inp.val('');
//             }
//             fr.readAsDataURL(file);
//         });
//         editor.ui.registry.addButton( 'imageupload', {
//             icon: "upload",
//             tooltip: 'Insert media files',
//             onAction: function (_) {
//                 inp.trigger('click');
// 				// editor.insertContent('&nbsp;<strong>It\'s my button!</strong>&nbsp;');
// 			}
//             // onclick: function(e) {
//             //     inp.trigger('click');
//             // }
//         });
// 	}
//   });
// function example_image_upload_handler(blobInfo, success, failure) {
// 	setTimeout(function () {
//       /* no matter what you upload, we will turn it into TinyMCE logo :)*/
//       success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
//     }, 2000);

// // images_upload_handler: function (blobInfo, success, failure) {
// //     setTimeout(function () {
// //       /* no matter what you upload, we will turn it into TinyMCE logo :)*/
// //       success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
// //     }, 2000);
// //   },
// //   content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
// // });
// 	// console.log(blobInfo);
// 	// console.log(success);
// 	// console.log(blobInfo.blob());
// 	// console.log(blobInfo.filename());
// 	// return blobInfo.blob();
// 	// logo_icon_object.image = e.target.files[0];
// 	// logo_icon_object.temp_image_path = logo_icon_object.path;
// 	// let files = e.target.files || e.dataTransfer.files;
// 	// if (!files.length)
// 	//     return;
// 	// let reader = new FileReader();
// 	// reader.onload = (e) => {
// 	//     logo_icon_object.path = e.target.result;
// 	// };
// 	// reader.readAsDataURL(files[0]);
// }


// function example_image_upload_handler (blobInfo, success, failure, progress) {
//   var xhr, formData;

//   xhr = new XMLHttpRequest();
//   xhr.withCredentials = false;
//   xhr.open('POST', 'postAcceptor.php');

//   xhr.upload.onprogress = function (e) {
//     progress(e.loaded / e.total * 100);
//   };

//   xhr.onload = function() {
//     var json;

//     if (xhr.status === 403) {
//       failure('HTTP Error: ' + xhr.status, { remove: true });
//       return;
//     }

//     if (xhr.status < 200 || xhr.status >= 300) {
//       failure('HTTP Error: ' + xhr.status);
//       return;
//     }

//     json = JSON.parse(xhr.responseText);

//     if (!json || typeof json.location != 'string') {
//       failure('Invalid JSON: ' + xhr.responseText);
//       return;
//     }

//     success(json.location);
//   };

//   xhr.onerror = function () {
//     failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
//   };

//   formData = new FormData();
//   formData.append('file', blobInfo.blob(), blobInfo.filename());

//   xhr.send(formData);
// };


// $(function() {
//         // Initializes and creates emoji set from sprite sheet
//         window.emojiPicker = new EmojiPicker({
// 			emojiable_selector: '[data-emojiable=true]',
// 			assetsPath: '/img/emoji-picker/',
// 			popupButtonClasses: 'fa fa-smile-o' // far fa-smile if you're using FontAwesome 5
//         });
//         // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
//         // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
//         // It can be called as many times as necessary; previously converted input fields will not be converted again
//         window.emojiPicker.discover();
//       });

// $("#profile-img").click(function() {
// 	console.log('profile-img');
// 	$("#status-options").toggleClass("active");
// });

// $(".expand-button").click(function() {
//   $("#profile").toggleClass("expanded");
// 	$("#contacts").toggleClass("expanded");
// });

// $("#status-options ul li").click(function() {
// 	$("#profile-img").removeClass();
// 	$("#status-online").removeClass("active");
// 	$("#status-away").removeClass("active");
// 	$("#status-busy").removeClass("active");
// 	$("#status-offline").removeClass("active");
// 	$(this).addClass("active");
	
// 	if($("#status-online").hasClass("active")) {
// 		$("#profile-img").addClass("online");
// 	} else if ($("#status-away").hasClass("active")) {
// 		$("#profile-img").addClass("away");
// 	} else if ($("#status-busy").hasClass("active")) {
// 		$("#profile-img").addClass("busy");
// 	} else if ($("#status-offline").hasClass("active")) {
// 		$("#profile-img").addClass("offline");
// 	} else {
// 		$("#profile-img").removeClass();
// 	};
	
// 	$("#status-options").removeClass("active");
// });

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="sent"><img src="https://i.pravatar.cc/150?u=24" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "slow");
	// $(".messages").animate({ scrollTop: $(document).height() }, "fast");
	// console.log($(document).height());
	// console.log(("#messages_box").height());
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});


</script>