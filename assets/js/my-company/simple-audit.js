$(document).ready(function () {
	$("#audit-template-table").DataTable({
		info: false,
		paging: false,
    searching: false,
    ajax : 'server-side/class/my-company/simple-audit-details.php',
    columns : [
      {data : 'audit_name'},
      {data : 'status'},
      {data : 'actions'}
    ]
	});

	// Image Input for company logo
	var avatar5 = new KTImageInput("company-logo");
	avatar5.on("cancel", function (imageInput) {
		swal.fire({
			title: "Image successfully changed !",
			type: "success",
			buttonsStyling: false,
			confirmButtonText: "Awesome!",
			confirmButtonClass: "btn btn-primary font-weight-bold",
		});
	});

	avatar5.on("change", function (imageInput) {
		swal.fire({
			title: "Image successfully changed !",
			type: "success",
			buttonsStyling: false,
			confirmButtonText: "Awesome!",
			confirmButtonClass: "btn btn-primary font-weight-bold",
		});
	});

	avatar5.on("remove", function (imageInput) {
		swal.fire({
			title: "Image successfully removed !",
			type: "error",
			buttonsStyling: false,
			confirmButtonText: "Got it!",
			confirmButtonClass: "btn btn-primary font-weight-bold",
		});
	});

  // CK Editor for simple audit document
  
	// Class definition

	var KTCkeditor = (function () {
		// Private functions
		var demos = function () {
			ClassicEditor.create(document.querySelector("#audit-text-area"))
				.then((editor) => {
					console.log(editor);
				})
				.catch((error) => {
					console.error(error);
				});
		};

		return {
			// public functions
			init: function () {
				demos();
			},
		};
	})();

	// Initialization
	jQuery(document).ready(function () {
		KTCkeditor.init();
  });

  // Preview Modal for Audit template
  $(document).on('click','.template-preview',function(){
    $('#template-modal').modal('show');
  })

    // Template modal text area
    var KTCkeditor2 = (function () {
      // Private functions
      var demos = function () {
        ClassicEditor.create(document.querySelector("#template-modal-text-area"))
          .then((editor) => {
            console.log(editor);
          })
          .catch((error) => {
            console.error(error);
          });
      };
  
      return {
        // public functions
        init: function () {
          demos();
        },
      };
    })();
    
    // Initialization
    KTCkeditor2.init();
});
