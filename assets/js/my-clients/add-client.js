$(document).ready(function () {
	FormValidation.formValidation(document.getElementById("addClientForm"), {
		fields: {
			firstName: {
				validators: {
					notEmpty: {
						message: "First Name is required",
					},
				},
			},
			lastName: {
				validators: {
					notEmpty: {
						message: "Last Name is required",
					},
				},
      },
      suffix: {
				validators: {
					notEmpty: {
						message: "Suffix is required",
					},
				},
      },
      clientEmail: {
				validators: {
					notEmpty: {
						message: "The Email Address is required",
          },
          emailAddress: {
            message: "The Email Address is not Valid"
          }
        }
      },
        ssn: {
          validators: {
            notEmpty: {
              message: "SSN is required",
            },
          },
        },
        dateOfBirth: {
          validators: {
            notEmpty: {
              message: "DOB is required",
            },
          },
        },
        phoneH: {
          validators: {
            notEmpty: {
              message: "Phone (H) is required",
            },
          },
        },
        phoneW: {
          validators: {
            notEmpty: {
              message: "Phone (W) is required",
            },
          },
        },
        ext: {
          validators: {
            notEmpty: {
              message: "Ext is required",
            },
          },
        },
        phoneM: {
          validators: {
            notEmpty: {
              message: "phone (M) is required",
            },
          },
        },
        fax: {
          validators: {
            notEmpty: {
              message: "Fax is required",
            },
          },
        },
        mailingAddress: {
          validators: {
            notEmpty: {
              message: "Mailing Address is required",
            },
          },
        },
        clientCity: {
          validators: {
            notEmpty: {
              message: "City is required",
            },
          },
        },
        clientState: {
          validators: {
            notEmpty: {
              message: "State is required",
            }
          }
        },
        zipCode: {
          validators: {
            notEmpty: {
              message: "Zip Code is required",
            },
          },
        },
        status: {
          validators: {
            notEmpty: {
              message: "Status is required",
            },
          },
        },
        dateOfStart: {
          validators: {
            notEmpty: {
              message: "Date Of Start is required",
            },
          },
        },
        zipCode: {
          validators: {
            notEmpty: {
              message: "Zip Code is required",
            },
          },
        },
        assignToList: {
          validators: {
            notEmpty: {
              message: "Please Assign the task to clients",
            },
          },
        },
        country: {
          validators: {
            notEmpty: {
              message: "Country is required",
            },
          },
        },
        referredBy: {
          validators: {
            notEmpty: {
              message: "Referred By Field is required",
            },
          },
        },
        portalAccess: {
          validators: {
            choice:{
              min:1,
              message: "Selection of Portal Access is Required"
            },
          },
        },
        chargebeePlan: {
          validators: {
            notEmpty: {
              message: "Chargebee Plan is required",
            },
          },
        },
        cardNumber: {
          validators: {
            notEmpty: {
              message: "Card Number is required",
            },
          },
        },
        CVV: {
          validators: {
            notEmpty: {
              message: "CVV is required",
            },
          },
        },
        expiresOn: {
          validators: {
            notEmpty: {
              message: "Expires On field is required",
            },
          },
        }
		},
		plugins: {
			trigger: new FormValidation.plugins.Trigger(),
			// Bootstrap Framework Integration
			bootstrap: new FormValidation.plugins.Bootstrap(),
			// Validate fields when clicking the Submit button
			submitButton: new FormValidation.plugins.SubmitButton(),
			// Submit the form when all fields are valid
			defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
		},
  });
});
$('#clearDate').click(function(){
  document.getElementById('date-of-birth').valueAsDate = null
})
$.getJSON("assets/json-files/states.json", function(data){
  $.each(data,function(index,value){
    var billingState = document.getElementById('billingState')
    var option = document.createElement('option')
    option.text = value.name
    option.value = value.name
    billingState.add(option)
  })
})
$.getJSON("assets/json-files/states.json", function(data){
  $.each(data,function(index,value){
    var prevClientState = document.getElementById('prev-client-state')
    var option = document.createElement('option')
    option.text = value.name
    option.value = value.name
    prevClientState.add(option)
  })
})
$.getJSON("assets/json-files/states.json", function(data){
  $.each(data,function(index,value){
    var clientState = document.getElementById('client-state')
    var option = document.createElement('option')
    option.text = value.name
    option.value = value.name
    clientState.add(option)
  })
})
