@include('components.head')
@include('components.nav')
@include('components.sidebar')

<style>
	.form-rendered #build-wrap {
  display: none;
}

.render-wrap {
  display: none;
}

.form-rendered .render-wrap {
  display: block;
}

#edit-form {
  display: none;
  float: right;
}

.form-rendered #edit-form {
  display: block;
}
</style>
<main>
    <div class="container-fluid">
        <div class="row">
			<div class="col-9">
				<h1>Sales Forms</h1>
			</div>
			<div class="col-3">
				<button class="btn btn-primary rounded" id="edit-form">Edit Form</button>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="build-wrap"></div>
			</div>
			<div class="col-12">
				<div id="preview" class="render-wrap"></div>
			</div>
		</div>
	</div>
</main>

@include('components.footer')

<script>
jQuery(function ($) {
	var fbTemplate = document.getElementById("build-wrap");
	var options = {
		controlOrder: [
		 	'text',
		 	'textarea',
		 	'number'
		 	],
		// controlPosition: 'left',
		scrollToFieldOnAdd: false,
		onSave: function (evt, formData) {
			console.log("formbuilder saved");
			toggleEdit(false);
			$(".render-wrap").formRender({ formData });
		}
	};
	$(fbTemplate).formBuilder(options);
});

/**
 * Toggles the edit mode for the demo
 * @return {Boolean} editMode
 */
function toggleEdit(editing) {
  document.body.classList.toggle("form-rendered", !editing);
}

document.getElementById("edit-form").onclick = function () {
  toggleEdit(true);
};
</script>
