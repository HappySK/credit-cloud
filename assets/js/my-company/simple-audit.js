$(document).ready(function () {
	$("#audit-template-table").DataTable({
		info: false,
		paging: false,
		searching: false,
		ajax:
			"server-side/class/my-company/simple-audit-details.php?action=get_template_details",
		columns: [{ data: "audit_name" }, { data: "status" }, { data: "actions" }],
	});

	// Toggling Add Audit Template Button
	$('#add-new-simple-audit-template').click(function(){
		if($(this).text().trim() == "Add New Simple Audit Template")
		{
			$(this).html('<i class="fa fa-backward" aria-hidden="true"></i> Back')
		}
		else if($(this).text().trim() == "Back")
		{
			$(this).html('<i class="fa fa-plus" aria-hidden="true"></i> Add New Simple Audit Template')
		}
	})

	// Image Input for company logo
	var avatar5 = new KTImageInput("company-logo");
	avatar5.on("cancel", function (imageInput) {
		swal.fire({
			title: "Image Removed !",
			type: "error",
			buttonsStyling: false,
			confirmButtonText: "Got It!",
			confirmButtonClass: "btn btn-danger font-weight-bold",
		}).then(function(){
			$.post('server-side/class/my-company/simple-audit-details.php',{action : 'delete_image', img_content : $('#image-container').css('background-image')},function(data,status){
				// console.log(data);
			})
		})
	});

	avatar5.on("change", function (imageInput) {
		swal.fire({
			title: "Image successfully changed !",
			type: "success",
			buttonsStyling: false,
			confirmButtonText: "Awesome!",
			confirmButtonClass: "btn btn-primary font-weight-bold",
		}).then(function(){
			$.post('server-side/class/my-company/simple-audit-details.php',{action : 'update_image', img_content : $('#image-container').css('background-image')},function(data,status){
				// console.log(data);
			})
		});
	});

	avatar5.on("remove", function (imageInput) {
		swal.fire({
			title: "Image successfully removed !",
			type: "error",
			buttonsStyling: false,
			confirmButtonText: "Got it!",
			confirmButtonClass: "btn btn-primary font-weight-bold",
		}).then(function(){
			$.post('server-side/class/my-company/simple-audit-details.php',{action : 'delete_image', img_content : $('#image-container').css('background-image')},function(data,status){
				// console.log(data);
			})
		})
	});

	CKEDITOR.replace('audit-text-area');

	// Preview Modal for Audit template
	$(document).on("click", ".template-preview", function () {
		CKEDITOR.replace('template-modal-text-area')
		$.get('server-side/class/my-company/simple-audit-details.php',{action : 'get_template', id : $(this).attr('template_id')},function(data,status){
			// console.log(data)
			CKEDITOR.instances['template-modal-text-area'].setData(data.template_content)
		},'JSON')
		$("#template-modal").modal("show");
	});


	// Edit Modal for Audit Template
	$(document).on("click", ".edit-btn", function () {
		$("#add-new-simple-audit-template").html('<i class="fa fa-backward" aria-hidden="true"></i> Back');
		$.get(
			"server-side/class/my-company/simple-audit-details.php",
			{ action: "get_template", id: $(this).attr("template_id") },
			function (data, status) {
				// console.log(data);
				$("#audit-name").val(data.template_title);
				CKEDITOR.instances['audit-text-area'].setData(data.template_content);
				$("#audit_text_area").html(data.template_content);
				$('[value="' + data.default_template + '"]').attr("checked", true);
				res = data.page_numbering == "Yes" ? true : false;
				$("#page-numbering").attr("checked", res);
				$('#template-id').attr('value',data.template_id);
			},
			"JSON"
		);
	});

	// Delete template by posting delete request
	$(document).on("click", ".delete-btn", function () {
		$.post(
			"server-side/class/my-company/simple-audit-details.php",
			{ action: "delete_template", id: $(this).attr("template_id") },
			function (data, status) {
				// console.log(status)
			}
		);
		Swal.fire("Delete!", "You template has been deleted!", "info").then(
			function () {
				$("#audit-template-table").DataTable().ajax.reload();
			}
		);
	});

	// Fetch the image for the company-logo
	$.get('server-side/class/my-company/simple-audit-details.php',{action : 'get_image'},function(data,status){
		// console.log(data)
		$('#image-container').css('background-image',data.company_logo);
	},'JSON')

	// Status Column in the datatable
	$(document).on('change','[name="default-template"]',function(){
		$.post('server-side/class/my-company/simple-audit-details.php',{action : 'update_status', id : $(this).attr('template_id')},function(data,status){
			console.log(status)
		})
	})
});
