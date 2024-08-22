<?php
$mobile = "09158955030";
$email = "pspipm27@gmail.com";
$version = "2.3.5";
if (isset($_GET["en"])) $isEnglish = true;
else $isEnglish = false;
?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <title>محمد پوربهزاد - برنامه نویس Full stack</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="محمد پوربهزاد,محمد,پوربهزاد,پور بهزاد,محمد پور بهزاد,برنامه نویس,برنامه نویس وب,developer,web developer,frontend,backend,فرانت اند,بک اند,فول استک,mohammad,pourbehzad,mohammad pourbehzad,full stack"/>
    <meta name="description" content="برنامه نویس Full stack طراح وب با بیش از 6 سال کار تخصصی برنامه نویسی. توسعه دهنده وب با تجربه و مهارت در تمام مراحل توسعه پیشرفته وب. آشنایی کامل در فرایند رابط کاربری، تست و عیب یابی. متخصص در زمینه طراحی، نصب، تست و نگهداری سیستم‌های وب. دارای مجموعه‌ای متنوع از مهارت‌های برنامه نویسی. دارای مهارت در زمینه‌های SEO، Backend، Frontend و... با توانایی انجام پروژه به صورت تکی و همکاری گروهی."/>
    <meta name="author" content="محمد پوربهزاد"/>
    <meta name="theme-color" content="#00B3FF"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="shortcut icon" href="img/mohammad-pic.png"/>
    <script>
        let version = "<?php echo $version; ?>";
        if (localStorage.getItem("theme") === null) localStorage.setItem("theme", "light");
        document.write(`<link id="theme" rel="stylesheet" href="css/theme/${localStorage.getItem("theme")}.css?v=${version}"/>`);
    </script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo $version; ?>"/>
    <link rel="stylesheet" href="css/mobile.css?v=<?php echo $version; ?>"/>
</head>
<body dir="rtl">
    <div class="menu">
        <a class="changetThemeBtn" onclick="changeTheme();" href="javascript:void(0);">
            <script>document.write(localStorage.getItem("theme") === "light" ? "" : "");</script>
        </a>
        <!--<div class="openToWork">OPEN TO WORK</div>-->
        <a class="lang" href="index.php?en">
            <span class="icon"></span>
            <span class="text">EN</span>
        </a>
        <img class="mainImage" src="img/main-pic.jpg" alt="محمد پوربهزاد"/>
        <h1 class="name">محمد پوربهزاد</h1>
        <h2 class="title">برنامه نویس Full stack</h2>
        <address class="info">
            <div class="infoItem">
                <span class="icon"></span>
                <span class="text">متولد 1381 (22 سال)</span>
            </div>
            <div class="infoItem">
                <span class="icon"></span>
                <span class="text">6 سال سابقه کار تخصصی</span>
            </div>
            <div class="infoItem">
                <span class="icon"></span>
                <span class="text"><?php echo $mobile; ?></span>
            </div>
            <div class="infoItem">
                <span class="icon"></span>
                <span class="text"><?php echo $email; ?></span>
            </div>
            <div class="infoItem">
                <span class="icon"></span>
                <span class="text">خراسان رضوی - مشهد</span>
            </div>
            <div class="socials">
                <a class="socialItem" href="tel:<?php echo $mobile; ?>" title="Mobile"></a>
                <a class="socialItem" href="mailto:<?php echo $email; ?>" title="Email"></a>
                <a class="socialItem" href="https://linkedin.com/in/mohammad-pourbehzad" title="LinkedIn" target="_blank"></a>
                <a class="socialItem" href="https://github.com/mohammad-prb" title="Github" target="_blank"></a>
                <a class="socialItem" href="https://t.me/Mohammad_prb" title="Telegram" target="_blank"></a>
                <a class="socialItem" href="https://wa.me/<?php echo $mobile; ?>" title="WhatsApp" target="_blank"></a>
                <a class="socialItem" href="https://instagram.com/mammad.prb" title="Instagram" target="_blank"></a>
            </div>
        </address>
    </div>
    <div class="main">
        <div class="row">
            <div class="box about">
                <h3 class="boxTitle">
                    <span class="icon"></span>
                    <span class="text">درباره من</span>
                </h3>
                <div class="boxContent">
                    <p>
                        برنامه نویس Full stack طراح وب با بیش از 6 سال کار تخصصی برنامه نویسی.
                        توسعه دهنده وب با تجربه و مهارت در تمام مراحل توسعه پیشرفته وب. آشنایی کامل در فرایند رابط کاربری، تست و عیب یابی.
                        متخصص در زمینه طراحی، نصب، تست و نگهداری سیستم‌های وب. دارای مجموعه‌ای متنوع از مهارت‌های برنامه نویسی.
                        دارای مهارت در زمینه‌های SEO، Backend، Frontend و...
                        با توانایی انجام پروژه به صورت تکی و همکاری گروهی.
                    </p>
                </div>
            </div>
            <div class="box skills">
                <h3 class="boxTitle">
                    <span class="icon"></span>
                    <span class="text">مهارت ها</span>
                </h3>
                <div class="boxContent">
                    <div class="skill">PHP</div>
                    <div class="skill">Laravel</div>
                    <div class="skill">MySQL</div>
                    <div class="skill">TSQL</div>
                    <div class="skill">Java</div>
                    <div class="skill">Python</div>
                    <div class="skill">HTML</div>
                    <div class="skill">CSS</div>
                    <div class="skill">JavaScript</div>
                    <div class="skill">JSX</div>
                    <div class="skill">Vue.js</div>
                    <div class="skill">React</div>
                    <div class="skill">jQuery</div>
                    <div class="skill">UI/UX</div>
                    <div class="skill">SEO</div>
                    <div class="skill">Git</div>
                    <div class="skill">Regex</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box softSkills">
                <h3 class="boxTitle">
                    <span class="icon"></span>
                    <span class="text">ویژگی های فردی</span>
                </h3>
                <div class="boxContent">
                    <div class="softSkillItem">
                        <strong class="softSkill">روحیه کار تیمی</strong>
                        <div class="range"><span style="width: 95%;"></span></div>
                    </div>
                    <div class="softSkillItem">
                        <strong class="softSkill">خلاقیت</strong>
                        <div class="range"><span style="width: 88%;"></span></div>
                    </div>
                    <div class="softSkillItem">
                        <strong class="softSkill">نظم و دقت</strong>
                        <div class="range"><span style="width: 92%;"></span></div>
                    </div>
                    <div class="softSkillItem">
                        <strong class="softSkill">یادگیری</strong>
                        <div class="range"><span style="width: 97%;"></span></div>
                    </div>
                </div>
            </div>
            <div class="box education">
                <h3 class="boxTitle">
                    <span class="icon"></span>
                    <span class="text">سوابق تحصیلی</span>
                </h3>
                <div class="boxContent">
                    <img class="uniLogo" src="img/university.png" alt="دانشگاه آزاد اسلامی"/>
                    <div class="uniInfo">
                        <div class="uniInfoItem">کارشناسی مهندسی کامپیوتر (معدل 19)</div>
                        <div class="uniInfoItem">دانشگاه آزاد اسلامی (مشهد)</div>
                        <div class="uniInfoItem">1399 - 1403</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box jobs">
            <h3 class="boxTitle">
                <span class="icon"></span>
                <span class="text">تجربه های کاری</span>
            </h3>
            <div class="boxContent">
                <div class="line"></div>
                <div class="jobItem">
                    <h4 class="jobTitle">برنامه نویس Full stack</h4>
                    <div class="time">تیر 1401 تا تیر 1403</div>
                    <div class="company">گروه برنامه نویسی اوریوتِک (مشهد)</div>
                    <p class="description">طراحی UX/UI و پیاده سازی قسمت Frontend و Backend انواع وبسایت های فروشگاهی، شخصی، آموزشگاهی، سازمانی و...</p>
                </div>
                <div class="jobItem">
                    <h4 class="jobTitle">تدریس در دانشگاه</h4>
                    <div class="time">دی 1401 تا تیر 1402</div>
                    <div class="company">دانشگاه آزاد اسلامی (مشهد)</div>
                    <p class="description">برگزاری کلاس های درس نظریه زبان ها و ماشین ها مقطع کارشناسی زیر نظر دکتر حلمی در نیمسال دوم سال تحصیلی 1402-1401 دانشگاه آزاد اسلامی مشهد.</p>
                    <a class="certificate" href="mohammad-pourbehzad.pdf">Certificate</a>
                </div>
                <div class="jobItem">
                    <h4 class="jobTitle">برنامه نویس Full stack</h4>
                    <div class="time">تیر 1397 تا خرداد 1401</div>
                    <div class="company">توسعه فناوری های بینش پویان آویژگان (مشهد)</div>
                    <p class="description">طراحی UX/UI و پیاده سازی قسمت Frontend و Backend انواع وبسایت های فروشگاهی، شخصی، آموزشگاهی، سازمانی و...</p>
                </div>
            </div>
        </div>
        <div class="box projects">
            <h3 class="boxTitle">
                <span class="icon"></span>
                <span class="text">پروژه ها</span>
            </h3>
            <div class="boxContent">
                <div class="projectItem">
                    <h4 class="projectTitle">
                        <span class="icon"></span>پیاده سازی وبسایت های تبلیغاتی و سازمانی
                    </h4>
                    <p class="description">
                        پیاده سازی وبسایت های تبلیغاتی و سازمانی که باعث گسترش فعالیت‌های آنلاین، گسترش تبلیغات و ارتقاء خدمات آن مراکز و سازمان ها شده است.
                        همچنین همکاری با سازمان های جدید و پیشرفت های قابل توجه را برای آنها فراهم کرده است. برخی نمونه کارهای آنلاین:
                    </p>
                    <div class="examples">
                        <div class="example">
                            <a class="link" href="https://www.faridakhondi.ir/" target="_blank">آموزشگاه طلاسازی زرسنج</a>
                            <p class="exampleBody">
                                آموزشگاه فنی و حرفه‌ای آزاد طلا و جواهرسازی زرسنج مهر خراسان مجهز به آزمایشگاه عیارسنجی طلا ۱۷۰۲۵ با ورژن ۲۰۱۷ از مرکز ملی تایید صلاحیت ایران.
                                دارای گواهی ایزو 9001:2015 انگلستان و...
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.vlth.ir/" target="_blank">بنیاد علمی فرهنگی ولایت</a>
                            <p class="exampleBody">
                                بنیاد علمی فرهنگی ولایت با هدف تربیت نیروی انسانی متعهد،
                                توسعه اقتصادی، ارائه خدمات اجتماعی و فرهنگی و گسترش فعالیت‌های بین‌المللی فعالیت‌های متعددی انجام می‌دهد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.poosheshmobl.ir/" target="_blank">پوشش مبل مشهد</a>
                            <p class="exampleBody">
                                پوشش مبل مشهد، کارگاه تولیدی و دوزندگی انواع کاورهای مبل و...
                                بصورت پارچه ای و طلقی در مشهد با بیش از نیم قرن تجربه و فعالیت حرفه ای در این زمینه است.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.narkh.ir/" target="_blank">بنیاد حفظ آثار و نشر ارزش های دفاع مقدس</a>
                            <p class="exampleBody">
                                اداره کل حفظ آثار و نشر ارزش های دفاع مقدس خراسان رضوی
                                به موجب فرمان مقام معظم فرماندهی کل قوا و شرح وظایف ستاد کل نیروهای مسلح در سال 1369 تاسیس شده
                                و درجهت ارزش های دفاع مقدس فعالیت می کند.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.mihm.ir/" target="_blank">مجمع اسلامی حبل‌الله</a>
                            <p class="exampleBody">
                                مجمع اسلامی حبل‌الله مشهد، یک تشکل مردمی است که در اواخر سال 1392 آغاز به فعالیت کرده است
                                و فعالیت های خود را حول محور همگرایی امت اسلامی انجام می دهد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                    </div>
                </div>
                <div class="projectItem">
                    <h4 class="projectTitle">
                        <span class="icon"></span>پیاده سازی فروشگاه های اینترنتی
                    </h4>
                    <p class="description">
                        پیاده سازی وبسایت های فروشگاهی که باعث گسترش فروش و فعالیت‌های آنلاین، افزایش تنوع محصولات و ارتقاء خدمات به مشتریان آن فروشگاه شده است.
                        همچنین همکاری با برندهای جدید و برجسته را برای آنها فراهم کرده است. برخی نمونه کارهای آنلاین:
                    </p>
                    <div class="examples">
                        <div class="example">
                            <a class="link" href="https://www.dikala.ir/" target="_blank">فروشگاه دی کالا</a>
                            <p class="exampleBody">
                                فروشگاه دی کالا عرضه کننده انواع محصولات دیجیتال با کیفیت
                                از جمله انواع گوشی موبایل، ساعت هوشمند، کنسول بازی، هندز فری، ایرپاد، هدست، پرینتر و لوازم جانبی می باشد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.rayehemanshop.ir/" target="_blank">فروشگاه رایحه مان</a>
                            <p class="exampleBody">
                                فروشگاه رایحه مان توليد كننده و فروشنده انواع عطر و روغن های طبیعی، خاص و درمانی ميباشد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.cheshmbartar.ir/" target="_blank">فروشگاه چشم برتر</a>
                            <p class="exampleBody">
                                شركت چشم برتر توليد كننده انواع کالای دیجیتال، دوربین های مداربسته، دزدگیر، تجهیزات شبکه، درب های اتومات، تجهیزات ردیابی و... ميباشد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.honardouz.ir/" target="_blank">هنرکده دیجیتال ولیعصر</a>
                            <p class="exampleBody">
                                هنرکده دیجیتال ولیعصر توليد كننده انواع تابلوهای گلدوزی شده مثل تابلوهای آویز، اسماء، قرآنی و... ميباشد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.romaatoys.com/" target="_blank">فروشگاه روماتویز</a>
                            <p class="exampleBody">
                                فروشگاه روماتویز توليد كننده و فروشنده انواع اکشن فیگور های اورجینال و... ميباشد که خدمات خود را بصورت ریالی، دلاری و رمزارزی انجام می دهد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                        <div class="example">
                            <a class="link" href="https://www.sahour.ir/" target="_blank">فروشگاه ترمه ساهور</a>
                            <p class="exampleBody">
                                فروشگاه ترمه ساهور توليد كننده و فروشنده انواع ترمه، جانماز، سجاده، رومیزی، مخمل و... ميباشد.
                            </p>
                            <div class="showLink" onclick="clickLink(this);">مشاهده</div>
                        </div>
                    </div>
                </div>
                <div class="projectItem">
                    <h4 class="projectTitle">
                        <span class="icon"></span>جمع آوری کننده اخبار
                    </h4>
                    <p class="description">
                        این پروژه اخبار اخیر را در وبسایت های خبری درمورد یک کلمه کلیدی جمع آوری می کند و این اخبار جمع آوری شده را به پایگاه داده اضافه می کند.
                        این اخبار می توانند در هرکجای وبسایت شما نمایش داده شوند تا باعث بروز نگه داشته شدن محتوای سایت شما برای کاربران و موتوهای جستجو شوند.
                        این پروژه در Cronjob سرور قرار میگیرد تا بطور مداوم و این اخبار را جمع آوری کند.
                        این پروژه با توجه به بروز نگه داشتن سایت و قرار دادن محتوای مرتبط با جستجوی کاربران در وبسایت، برای بهبود سئو وبسایت بسیار مفید است و بازدید وبسایت
                        را به شکل قابل توجهی افزایش می دهد و وبسایت را برای موتورهای جستجو بهینه می کند.
                    </p>
                </div>
                <div class="projectItem">
                    <h4 class="projectTitle">
                        <span class="icon"></span>وب اپلیکیشن مدیریت اسناد
                    </h4>
                    <p class="description">
                        این برنامه برای مدیریت اسناد در یک سازمان استفاده می شود. در این برنامه، افراد خود را وارد کرده و سطح دسترسی هر یک را تعیین می کنید.
                        سپس می توانید اسناد را برای هر یک از سطوح دسترسی آپلود کنید. پس از ورود به برنامه، هر فرد تنها می تواند مدارکی را که باید مشاهده کند.
                        این وب اپلیکیشن برای کنترل دسترسی کارکنان سازمان استفاده می شود، همچنین می توان با کمک این برنامه اسناد سازمان را دسته بندی کرد
                        تا دسترسی به این اسناد راحت شده و از شلوغی اسناد جلوگیری شود. همچنین تاریخ و ساعت بارگذاری هر فایل مشخص شده و ترتیب آنها مشخص است.
                        در هر لحظه می توان به ورژن های قبلی این فایل ها هم دسترسی داشت.
                    </p>
                </div>
                <div class="projectItem">
                    <h4 class="projectTitle">
                        <span class="icon"></span>وب اپلیکیشن حضورغیاب کارمندان
                    </h4>
                    <p class="description">
                        در این برنامه زمان شروع و پایان کار هر روز را برای افراد خود وارد می کنید. این برنامه میزان کار هر فرد را در روز، هفته، ماه و سال محاسبه می کند.
                        همچنین آمارهای مختلفی از زمان کار هر فرد را در بازه های زمانی مختلف ارائه میدهد.
                        این اپلیکیشن همچنین حقوق هر فرد را بر اساس زمان کار انجام شده محاسبه می کند.
                        در این برنامه شما تاریخچه ساعات کاری و حقوق های محاسبه شده برای کارمندان خود را دارید.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/main.js"></script>
</html>
