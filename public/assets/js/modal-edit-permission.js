"use strict";
document.addEventListener("DOMContentLoaded", function (t) {
   FormValidation.formValidation(document.getElementById("editPermissionForm"), {
      fields: {
         editPermissionName: {
            validators: {
               notEmpty: {
                  message: "Please enter permission name"
               }
            }
         }
      },
      plugins: {
         trigger: new FormValidation.plugins.Trigger,
         bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: "",
            rowSelector: ".col-sm-9"
         }),
         submitButton: new FormValidation.plugins.SubmitButton,
         autoFocus: new FormValidation.plugins.AutoFocus
      }
   })
});