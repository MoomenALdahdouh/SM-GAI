"use strict";var KTUsersUpdateEmail=function(){const t=document.getElementById("kt_modal_update_email"),e=t.querySelector("#kt_modal_update_email_form"),n=new bootstrap.Modal(t);return{init:function(){(()=>{var o=FormValidation.formValidation(e,{fields:{profile_email:{validators:{notEmpty:{message:"Email address is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}});t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click",(t=>{t.preventDefault(),Swal.fire({text:language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",cancelButtonText:language === "en" ? "No, return" : "لا تراجع",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(t){t.value?(e.reset(),n.hide()):"cancel"===t.dismiss&&Swal.fire({text:language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))})),t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click",(t=>{t.preventDefault(),Swal.fire({text:language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",cancelButtonText:language === "en" ? "No, return" : "لا تراجع",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(t){t.value?(e.reset(),n.hide()):"cancel"===t.dismiss&&Swal.fire({text:language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))}));const i=t.querySelector('[data-kt-users-modal-action="submit"]');i.addEventListener("click",(function(t){t.preventDefault(),o&&o.validate().then((function(t){console.log("validated!"),"Valid"==t&&(i.setAttribute("data-kt-indicator","on"),i.disabled=!0,setTimeout((function(){i.removeAttribute("data-kt-indicator"),i.disabled=!1,Swal.fire({text:language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",icon:"success",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}}).then((function(t){t.isConfirmed&&n.hide()}))}),2e3))}))}))})()}}}();KTUtil.onDOMContentLoaded((function(){KTUsersUpdateEmail.init()}));
