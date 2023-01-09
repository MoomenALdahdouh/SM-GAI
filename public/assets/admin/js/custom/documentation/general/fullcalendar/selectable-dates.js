"use strict";var KTGeneralFullCalendarSelectDemos={init:function(){var t,e;t=document.getElementById("kt_docs_fullcalendar_selectable"),(e=new FullCalendar.Calendar(t,{headerToolbar:{left:"prev,next today",center:"title",right:"dayGridMonth,timeGridWeek,timeGridDay"},initialDate:"2020-09-12",navLinks:!0,selectable:!0,selectMirror:!0,select:function(t){Swal.fire({html:'<div class="mb-7">Create new event?</div><div class="fw-bolder mb-5">Event Name:</div><input type="text" class="form-control" name="event_name" />',icon:"info",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, create it!",cancelButtonText:language === "en" ? "No, return" : "لا تراجع",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(n){if(n.value){var a=document.querySelector('input[name="event_name"]').value;a&&e.addEvent({title:a,start:t.start,end:t.end,allDay:t.allDay}),e.unselect()}else"cancel"===n.dismiss&&Swal.fire({text:"Event creation was declined!.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))},eventClick:function(t){Swal.fire({text:"Are you sure you want to delete this event?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, delete it!",cancelButtonText:language === "en" ? "No, return" : "لا تراجع",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}}).then((function(e){e.value?t.event.remove():"cancel"===e.dismiss&&Swal.fire({text:"Event was not deleted!.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}})}))},editable:!0,dayMaxEvents:!0,events:[{title:"All Day Event",start:"2020-09-01"},{title:"Long Event",start:"2020-09-07",end:"2020-09-10"},{groupId:999,title:"Repeating Event",start:"2020-09-09T16:00:00"},{groupId:999,title:"Repeating Event",start:"2020-09-16T16:00:00"},{title:"Conference",start:"2020-09-11",end:"2020-09-13"},{title:"Meeting",start:"2020-09-12T10:30:00",end:"2020-09-12T12:30:00"},{title:"Lunch",start:"2020-09-12T12:00:00"},{title:"Meeting",start:"2020-09-12T14:30:00"},{title:"Happy Hour",start:"2020-09-12T17:30:00"},{title:"Dinner",start:"2020-09-12T20:00:00"},{title:"Birthday Party",start:"2020-09-13T07:00:00"},{title:"Click for Google",url:"http://google.com/",start:"2020-09-28"}]})).render()}};KTUtil.onDOMContentLoaded((function(){KTGeneralFullCalendarSelectDemos.init()}));
