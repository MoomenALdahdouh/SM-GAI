"use strict";var KTGeneralPasswordMeterDemos={init:function(){!function(){const e=document.getElementById("kt_password_meter_example_show_score"),t=document.querySelector("#kt_password_meter_example"),n=KTPasswordMeter.getInstance(t);e.addEventListener("click",(e=>{const t=n.getScore();Swal.fire({text:"Current Password Score: "+t,icon:"success",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))}()}};KTUtil.onDOMContentLoaded((function(){KTGeneralPasswordMeterDemos.init()}));