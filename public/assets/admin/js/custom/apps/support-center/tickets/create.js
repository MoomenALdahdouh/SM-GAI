"use strict";var KTModalNewTicket=function(){var t,e,n,i,o,a;return{init:function(){(a=document.querySelector("#kt_modal_new_ticket"))&&(o=new bootstrap.Modal(a),i=document.querySelector("#kt_modal_new_ticket_form"),t=document.getElementById("kt_modal_new_ticket_submit"),e=document.getElementById("kt_modal_new_ticket_cancel"),new Dropzone("#kt_modal_create_ticket_attachments",{url:"https://keenthemes.com/scripts/void.php",paramName:"file",maxFiles:10,maxFilesize:10,addRemoveLinks:!0,accept:function(t,e){"justinbieber.jpg"==t.name?e("Naha, you don't."):e()}}),$(i.querySelector('[name="due_date"]')).flatpickr({enableTime:!0,dateFormat:"d, M Y, H:i"}),$(i.querySelector('[name="user"]')).on("change",(function(){n.revalidateField("user")})),$(i.querySelector('[name="status"]')).on("change",(function(){n.revalidateField("status")})),n=FormValidation.formValidation(i,{fields:{subject:{validators:{notEmpty:{message:"Ticket subject is required"}}},user:{validators:{notEmpty:{message:"Ticket user is required"}}},due_date:{validators:{notEmpty:{message:"Ticket due date is required"}}},description:{validators:{notEmpty:{message:"Target description is required"}}},"notifications[]":{validators:{notEmpty:{message:"Please select at least one notifications method"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}),t.addEventListener("click",(function(e){e.preventDefault(),n&&n.validate().then((function(e){console.log("validated!"),"Valid"==e?(t.setAttribute("data-kt-indicator","on"),t.disabled=!0,setTimeout((function(){t.removeAttribute("data-kt-indicator"),t.disabled=!1,Swal.fire({text:language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",icon:"success",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}}).then((function(t){t.isConfirmed&&o.hide()}))}),2e3)):Swal.fire({text:language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))})),e.addEventListener("click",(function(t){t.preventDefault(),Swal.fire({text:language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",cancelButtonText:language === "en" ? "No, return" : "لا تراجع",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(t){t.value?(i.reset(),o.hide()):"cancel"===t.dismiss&&Swal.fire({text:language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))})))}}}();KTUtil.onDOMContentLoaded((function(){KTModalNewTicket.init()}));