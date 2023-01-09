<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />

    <link rel="icon" type="image/x-icon" href="{{asset('dashboard/images/web_page_img/Linkedin.svg')}}logo 1.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/web_page.css')}}">
    <title>SM GAI</title>
    <style>

    </style>
</head>
<body>
<nav id="header">
    <div class="logo">
        <img src="{{asset('dashboard/images/web_page_img/Group 8.svg')}}">
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fa fa-bars"></i>
    </label>
    <ul>
        <li><a href="#About">عن التطبيق</a></li>
        <li><a href="#">آلية العمل</a></li>
        <li><a href="#Downlad">تحميل التطبيق</a></li>
        <div class="LanBut  " style="margin-top: -6px;">
            <div class="HeaderButtons">
                <li ><a href="https://play.google.com/store/apps/details?id=com.techbox.sm_gai_customer" target="_blank"><button style=" width: 136px;">تحميل الأن</button></a> </li>
            </div>
        </div>

    </ul>
</nav>
<a href="#" id="scroll" style="display: none;"><span>a</span></a>
<section class="Section1">
    <div class="container">
        <div class="row align-items-center">
            <div data-aos="fade-up" class="col rigCon">
                <div class="header1"><h3>إبقى على ترقب بأخر تحديثاتنا</h3></div>
                <div data-aos="fade-down" data-aos-delay="500" class="header2"><h1> تطبيق سم جاي يوفر لك أفضل خدمات النقل </h1></div>
                <div data-aos="fade-up" data-aos-delay="500" class="BottomBorder"><img alt="img" src="{{asset('dashboard/images/web_page_img/path2987.svg')}}"></div>
                <div class="paragraph"><p>قم بتوظيف أفضل الأشخاص تقييماً ليساعدوك في عملية
                    نقل المنتجات و الشحنات من مكان إلى أخر</p></div>
                <div class="buttons d-flex">
                    <a data-aos="fade-down" data-aos-delay="800" href="https://play.google.com/store/apps/details?id=com.techbox.sm_gai_customer" target="_blank"><button>التحميل الأن</button></a>
                    <button data-aos="fade-up" data-aos-delay="800">مشاهدة فيديو <i class="m-4 fa fa-play" aria-hidden="true"></i></button>
                </div>
            </div>
            <div data-aos="fade-down" class="col leftCon"><img src="{{asset('dashboard/images/web_page_img/Group 7.png')}}">
                <!-- <web_page_img src="/web_page_img/Mobile.svg">
                <web_page_img src="/web_page_img/2.jpeg">
                <web_page_img src="/web_page_img/3.jpeg"> -->
            </div>
        </div>

    </div>

</section>
<section style=" height: 130px; width: 100%;">

</section>
<section  class="Section2">
    <div class="container">

        <h3 data-aos="fade-down">خطوات الإنضمام لنا!</h3>
        <h1 data-aos="fade-down" data-aos-delay="500">كيف تبدأ و تصبح مندوب معانا ؟</h1>
        <div class="Displaying row mt-5 justify-content-between">
            <div  class="RigCon col-4">
                <img data-aos="fade-down" alt="A1" src="{{asset('dashboard/images/web_page_img/Group 9.svg')}}">
                <img data-aos="fade-up" data-aos-delay="500" alt="A2" src="{{asset('dashboard/images/web_page_img/Group 10.svg')}}">
                <img  data-aos="fade-down" data-aos-delay="500" alt="A3" src="{{asset('dashboard/images/web_page_img/Group 13.svg')}}">

            </div>
            <div class="LefCon col-5 justify-content-center">
                <div style="gap: 40px;" class=" row">
                    <div  class="col-5" data-aos="fade-down" data-aos-delay="400">
                        <div class="Grid">
                            <div class="icon"><img src="{{asset('dashboard/images/web_page_img/user-plus.svg')}}"/></div>
                            <div class="header"><h2>إنشاء حساب</h2></div>
                            <div class="content"><p>تحتاج إلى إنشاء حساب. يمكنك القيام بذلك بالنقر فوق زر التسجيل أعلاه.
                            </p></div>
                            <div class="SmallIcon"><p>01</p></div>

                        </div>
                    </div>
                    <div class="col-5" data-aos="fade-down" data-aos-delay="400" >
                        <div class="Grid  ">
                            <div class="icon"><img src="{{asset('dashboard/images/web_page_img/user-plus2.svg')}}"/></div>
                            <div class="header"><h2>إختار نوع الشحنة</h2></div>
                            <div class="content"><p>قم بالإطلاع على تفاصيل الشحنات المطلوب نقلها و قم بإختيار الشحنة المناسبة لك</p></div>
                            <div class="SmallIcon"><p>02</p></div>

                        </div>
                    </div>
                    <div class="col-5"  data-aos="fade-up" data-aos-delay="250" >
                        <div class="Grid  ">
                            <div class="icon"><img src="{{asset('dashboard/images/web_page_img/film.svg')}}"/></div>
                            <div class="header"><h2>قدم عرض سعر</h2></div>
                            <div class="content"><p>بعد إختيارك الشحنة التي تود نقلها قم بتقديم عرض سعر</p></div>
                            <div class="SmallIcon"><p>03</p></div>

                        </div>
                    </div>
                    <div class="col-5" data-aos="fade-up"  data-aos-delay="250">
                        <div class="Grid  ">
                            <div class="icon"><img src="{{asset('dashboard/images/web_page_img/flag.svg')}}"/></div>
                            <div class="header"><h2>إبدأ بنقل الشحنة</h2></div>
                            <div class="content"><p>بعد قبول عرضك من قبل العميل, تواصل مع العميل و قمت بنقل الشحنة من المكان الذي يريده</p></div>
                            <div class="SmallIcon"><p>04</p></div>

                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>
<section style=" height: 200px; width: 100%;">

</section>
<section id="About" class="Section3">
    <div class="container text-center">
        <div   class="ImgCon">
            <img data-aos="flip-up" src="{{asset('dashboard/images/web_page_img/Group 268.png')}}">
            <img data-aos="fade-up" data-aos-delay="800" class="Vector1" src="{{asset('dashboard/images/web_page_img/Vector 11.svg')}}">
            <img data-aos="fade-down"  data-aos-delay="800"class="Vector2" src="{{asset('dashboard/images/web_page_img/Vector 13.svg')}}">
        </div>
        <div data-aos="fade-up" class="Content">
            <h1>عن سم جاي</h1>
            <p>سم جاي معتمدين من هيئة النقل نوفر خدمات نقل البضائع بجميع انواعها - طبية - مجمدة - مبردة - جاف - سوائل - أثاث إلخ... شاحنات وسائقين مسجلين رسمياً بحسب إشتراطات هيئة النقل. نضمن حفظ الحقوق المالية للخدمة للعميل والكابتن.</p>
        </div>
    </div>
</section>

<section id="Downlad" class="Section4">
    <div class="container OuterContent" >
        <img class="BGIM" src="{{asset('dashboard/images/web_page_img/Background.svg')}}">
        <div class="InnerContent row justify-content-around  ">
            <div class="FirstClass col-lg-4">
                <div class="download"><h2>- التحميل الأن</h2></div>
                <div data-aos="fade-down" class="paragraph"><p>شركتك تخص شاحنات النقل، قم بالإنضمام لنا الآن!</p></div>
                <div class="Stores d-flex">
                    <img data-aos="flip-up"data-aos-delay="500" src="{{asset('dashboard/images/web_page_img/Apple.svg')}}">
                    <img data-aos="flip-up" data-aos-delay="500"src="{{asset('dashboard/images/web_page_img/Google.svg')}}">
                </div>
            </div>
            <div class="MobilesGrid col-lg-6 ">
                <div class="row"  style="gap: 65px;">

                    <div data-aos="fade-up" data-aos-delay="500" class="IMG1 col-3">
                        <img src="{{asset('dashboard/images/web_page_img/Mockup.svg')}}">
                    </div>
                    <div data-aos="fade-up" data-aos-delay="1000" class="IMG2 col-3">
                        <img src="{{asset('dashboard/images/web_page_img/Mockup2.svg')}}">
                    </div>
                    <div data-aos="fade-up" data-aos-delay="1500" class="IMG3 col-3">
                        <img src="{{asset('dashboard/images/web_page_img/Mockup5.svg')}}">
                    </div>
                </div>
                <div class="row"  style="gap: 65px;">

                    <div data-aos="fade-up" data-aos-delay="3000"  class="IMG1 col-3">
                        <img src="{{asset('dashboard/images/web_page_img/Mockup4.svg')}}">
                    </div>
                    <div data-aos="fade-up" data-aos-delay="2500" class="IMG2 col-3">
                        <img src="{{asset('dashboard/images/web_page_img/Mockup3.svg')}}">
                    </div>
                    <div data-aos="fade-up" data-aos-delay="2000" class="IMG3 col-3">
                        <img src="{{asset('dashboard/images/web_page_img/Mockup6.svg')}}">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<footer>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <img src="{{asset('dashboard/images/web_page_img/Group 13452.svg')}}">
            <button class="close"><img src="{{asset('dashboard/images/web_page_img/Close.svg')}}"></button>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
                هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
        </div>

    </div>
    <div class="container">
        <div class="TopFooter justify-content-between d-flex">
            <img src="{{asset('dashboard/images/web_page_img/logo 2.svg')}}">
            <div class="FooterButt d-flex">
                <button id="myBtn" class="m-2">شروط الإستخدام</button>
                <a style="margin-top: 11%;" href="https://wa.me/966506471561" target="_blank">  <button class="m-2">تواصل معنا</button></a>
            </div>
        </div>
        <div class="border"></div>
        <div class="BottomFooter mt-4">
            <div class="Social d-flex">
                <a><img src="{{asset('dashboard/images/web_page_img/Linkedin.svg')}}"></a>
                <a><img src="{{asset('dashboard/images/web_page_img/Facebook.svg')}}"></a>
                <a><img src="{{asset('dashboard/images/web_page_img/Instagram.svg')}}"></a>
                <a><img src="{{asset('dashboard/images/web_page_img/Twitter.svg')}}"></a>

            </div>
            <div class="Policy">
                <p>© حقوق الطبع والنشر 2022 SMGAI. كل الحقوق محفوظة.</p>
            </div>
        </div>
    </div>
</footer>
<button class="ScrollUp d-none" onclick="scrollToTop()" id="back-to-up">

    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</button>
<script>

    window.onscroll = () => {
        toggleTopButton();
    }
    function scrollToTop(){
        window.scrollTo({top: 0, behavior: 'smooth'});
    }

    function toggleTopButton() {
        if (document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20) {
            document.getElementById('back-to-up').classList.remove('d-none');
        } else {
            document.getElementById('back-to-up').classList.add('d-none');
        }
    }

    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $("#header").addClass("active");
        }
        else {
            $("#header").removeClass("active");
        }
    });


</script>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    AOS.init({
        duration: 1300,

    })
</script>
</html>
