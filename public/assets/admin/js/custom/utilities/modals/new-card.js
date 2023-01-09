"use strict";var KTModalNewCard=function(){var t,e,n,r,o,i;return{init:function(){(i=document.querySelector("#kt_modal_new_card"))&&(o=new bootstrap.Modal(i),r=document.querySelector("#kt_modal_new_card_form"),t=document.getElementById("kt_modal_new_card_submit"),e=document.getElementById("kt_modal_new_card_cancel"),$(r.querySelector('[name="card_expiry_month"]')).on("change",(function(){n.revalidateField("card_expiry_month")})),$(r.querySelector('[name="card_expiry_year"]')).on("change",(function(){n.revalidateField("card_expiry_year")})),n=FormValidation.formValidation(r,{fields:{card_name:{validators:{notEmpty:{message:"Name on card is required"}}},card_number:{validators:{notEmpty:{message:"Card member is required"},creditCard:{message:"Card number is not valid"}}},card_expiry_month:{validators:{notEmpty:{message:"Month is required"}}},card_expiry_year:{validators:{notEmpty:{message:"Year is required"}}},card_cvv:{validators:{notEmpty:{message:"CVV is required"},digits:{message:"CVV must contain only digits"},stringLength:{min:3,max:4,message:"CVV must contain 3 to 4 digits only"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}),t.addEventListener("click",(function(e){e.preventDefault(),n&&n.validate().then((function(e){console.log("validated!"),"Valid"==e?(t.setAttribute("data-kt-indicator","on"),t.disabled=!0,setTimeout((function(){t.removeAttribute("data-kt-indicator"),t.disabled=!1,Swal.fire({text:language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",icon:"success",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}}).then((function(t){t.isConfirmed&&o.hide()}))}),2e3)):Swal.fire({text:language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))})),e.addEventListener("click",(function(t){t.preventDefault(),Swal.fire({text:language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",cancelButtonText:language === "en" ? "No, return" : "لا تراجع",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(t){t.value?(r.reset(),o.hide()):"cancel"===t.dismiss&&Swal.fire({text:language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))})))}}}();KTUtil.onDOMContentLoaded((function(){KTModalNewCard.init()}));
