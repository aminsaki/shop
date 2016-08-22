<nav class="navbar navbg navbar-fixed-top ">
    <div class="navbar-header">
        <button class="navbar-toggle " type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">تخفیف انلاین</a>
    </div>
    <div class="collapse navbar-collapse js-navbar-collapse navbg ">
        <ul class="nav navbar-nav navbar-right" >
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">فهرست مکان ها <i class="glyphicon glyphicon-new-window"></i></a>
                <ul class="dropdown-menu mega-dropdown-menu">
                   <div class="form-inline">
                       @foreach($catp as $row)
                       <div class="form-group tops">
                           {!! Form::open(['url'=>'serachs','method'=>'get']) !!}
                           <input type="hidden" name="catprodcts" value="{{$row->title}}">
                           <input type="hidden" name="city" value="@if(!empty($city)) {{$city}} @endif ">
                           <input type="hidden" name="state" value="@if(isset($state)) {{$state}} @endif">
                           <input type="submit" name="submit" class="btn btn-danger" value="{{$row->title}}">
                          {{Form::close()}}
                       </div>
                      @endforeach
                   </div>
               </ul>
            </li>
            <li><a href="#"data-toggle="modal" data-target=".bs-example-modal-lg">فهرست شهرها <i class="glyphicon glyphicon-new-window"></i></a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">تماس با ما <i class="glyphicon glyphicon-log-out"></i>   </a></li>
            <li><a href="{{url('learn')}}">پداف چطور کار می کند <i class="glyphicon glyphicon-pushpin"></i></a></li>
           <li><a href="{{url('/')}}">خانه <i class="glyphicon glyphicon-home"></i></a></li>

        </ul>

    </div><!-- /.nav-collapse -->
</nav>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"style="height: 122px;">
            {!! Form::open(['url'=>'serachs','method'=>'get']) !!}
            <div class="form-group "style="margin-top:33px">

                <input type="submit" name="serach" class="btn btn-default col-md-4" value="جستجوی براساس شهر">

                <select id="city" name="city" class=" col-md-4 btn btn-primary"></select>


                <select id="state" name="state" onchange="Func()" class="col-md-4 col btn btn-primary">
                    <option> لطفا نام استان خود را انتخاب کنید</option>
                    <option value="البرز" data_city="آسارا , اشتهارد , چهارباغ , شهر جدید هشتگرد , طالقان , کرج , کمال‌شهر , کوهسار , گرمدره , ماهدشت , محمدشهر , مشکین‌دشت , نظرآباد , هشتگرد">البرز</option>
                    <option value="آذربایجان شرقی" data_city="آبش‌احمد , آذرشهر , آقکند , اسکو , اهر , ایلخچی , باسمنج , بخشایش , بستان‌آباد , بناب , بناب جدید , تبریز , ترک , ترکمانچایتسوج , تیکمه‌داش , جلفا , خاروانا , خامنه , خراجو , خسروشهر , خضرلو , خمارلو , خواجه , دوزدوزان , زرنق , زنوز , سراب , سردرود , سهند , سیس , سیه‌رود , شبستر , شربیان , شرفخانه , شندآباد , صوفیان , عجب‌شیر , قره‌آغاج , کشکسرای , کلوانق , کلیبر , کوزه‌کنان , گوگان , لیلان , مراغه , مرند , ملکان , ملک‌کیان , ممقان , مهربان , میانه , نظرکهریزی , وایقان , ورزقان , هادیشهر , هرگلان , هریس , هشترود , هوراند , یامچی">آذربایجان شرقی</option>
                    <option value="آذربایجان غربی" data_city="آواجیق , ارومیه , اشنویه , ایواوغلی , باروق , بازرگان , بوکان , پلدشت , پیرانشهر , تازه‌شهر , تکاب , چهاربرج , خوی , ربط , سردشت , سرو , سلماس , سیلوانه , سیمینه , سیه‌چشمه , شاهین‌دژ , شوط , فیرورق , قره‌ضیاءالدین , قوشچی , کشاورز , گردکشانه , ماکو , محمدیار , محمودآباد , مهاباد , میاندوآب , میرآباد , نالوس , نقده , نوشین‌شهر">آذربایجان غربی</option>
                    <option value="اردبیل" data_city="خلخال , آبی‌بیگلو , اردبیل , اصلاندوز , بیله‌سوار , پارس‌آباد , تازه‌کند , تازه‌کند انگوت , جعفرآباد , رضی , سرعین , عنبران , فخرآباد , کلور , کوراییم , گرمی , گیوی , لاهرود , مشگین‌شهر , نمین , نیر , هشتجین , هیر">اردبیل</option>
                    <option value="اصفهان" data_city="ابریشم , اردستان , اژیه , اصفهان , افوس , انارک , ایمان‌شهر , بادرود , باغ بهادران , برف‌انبار , بهاران‌شهر , بهارستان , بویین و میاندشت , پیربکران , تودشک , تیران , جندق , جوزدان , چادگان , چرمهین , چم گردان , حبیب‌آباد , حسن‌آباد , حنا , خالدآباد , خمینی‌شهر , خوانسار , خور , خوراسگان , خورزوق , داران , دامنه , درچه‌پیاز , دستگرد , دهاقان , دهق , دولت‌آباد , دیزیچه , رزوه , رضوان‌شهر , زاینده‌رود , زرین‌شهر , زواره , زیباشهر , سده لنجان , سگزی , سمیرم , شاهین‌شهر , شهرضا , طالخونچه , عسگران , علویجه , فریدون‌شهر , فلاورجان , فولادشهر , قهدریجان , کاشان , کرکوند , کلیشاد و سودرجان , کمشجه , کمه , کهریزسنگ , کوشک , کوهپایه , گز , گلپایگان , گل‌دشت , گل‌شهر , گوگد , مبارکه , محمدآباد , مشکات , منظریه , مهاباد , میمه , نایین , نجف‌آباد , نصرآباد , نطنز , نیک‌آباد , ورزنه , ورنامخواست , وزوان , ونک , هرند">اصفهان</option>
                    <option value="ایلام" data_city="آبدانان , آسمان‌آباد , ارکواز , ایلام , ایوان , بدره , پهله , توحید , چوار , دره‌شهر , دلگشا , دهلران , زرنه , سرابله , سراب‌باغ , صالح‌آباد , لومار , مورموری , موسیان , مهران , میمه">ایلام</option>
                    <option value="بوشهر" data_city="آب‌پخش , آبدان , امام حسن , اهرم , برازجان , بردخون , بردستان , بندر بوشهر , بندر دیر , بندر دیلم , بندر ریگ , بندر کنگان , بندر گناوه , تنگ ارم , جم , چغادک , خارک , خورموج , دالکی , دلوار , ریز , سعدآباد , شبانکاره , شنبه , طاهری , عسلویه , کاکی , کلمه , نخل تقی , وحدتیه">بوشهر</option>
                    <option value="تهران" data_city="آبسرد , آبعلی , ارجمند , اسلام‌شهر , اندیشه , باغستان , باقرشهر , بومهن , پاکدشت , پردیس , پیشوا , تجریش , تهران , جوادآباد , چهاردانگه , حسن‌آباد , دماوند , رباطکریم , رودهن , شاهدشهر , شریف‌آباد , شهرری , شهریار , صالح‌آباد , صباشهر , صفادشت , فردوسیه , فشم , فیروزکوه , قدس , قرچک , کهریزک , کیلان , گلستان , لواسان , ملارد , نسیم‌شهر , نصیرآباد , وحیدیه , ورامین">تهران</option>
                    <option value="چهارمحال و بختیاری" data_city="اردل , آلونی , باباحیدر , بروجن , بلداجی , بن , جونقان , چلگرد , سامان , سفیددشت , سودجان , سورشجان , شلمزار , شهرکرد , طاقانک , فارسان , فرادنبه , فرخ‌شهر , کیان , گندمان , گهرو , لردگان , مال‌خلیفه , ناغان , نافچ , نقنه , هفشجان">چهارمحال و بختیاری</option>
                    <option value="خراسان جنوبی" data_city="آرین‌شهر , ارسک , اسدیه , اسفدن , اسلامیه , آیسک , بشرویه , بیرجند , حاجی‌آباد , خضری دشت بیاض , خوسف , زهان , سرایان , سربیشه , سه‌قلعه , شوسف , طبس مسینا , فردوس , قائن , قهستان , مود , نهبندان , نیمبلوک">خراسان جنوبی</option>
                    <option value="خراسان رضوی" data_city="انابد , باجگیران , بار , باخرز , بایگ , بجستان , بردسکن , بیدخت , تایباد , تربت جام , تربت حیدریه , جغتای , جنگل , چاپشلو , چکنه , چناران , خرو , خلیل‌آباد , خواف , داورزن , دررود , درگز , دولت‌آباد , رباط سنگ , رشتخوار , رضویه , رودآب , ریوش , سبزوار , سرخس , سلامی , سلطان‌آباد , سنگان , شادمهر , شاندیز , ششتمد , شهرآباد , صالح‌آباد , طرقبه , عشق‌آباد , فرهادگرد , فریمان , فیروزه , فیض‌آباد , قاسم‌آباد , قدمگاه , قلندرآباد , قوچان , کاخک , کاریز , کاشمر , کدکن , کلات , کندر , گناباد , لطف‌آباد , مشهد , مشهد ریزه , ملک‌آباد , نشتیفان , نصرآباد , نقاب , نوخندان , نیشابور , نیل‌شهر , همت‌آباد">خراسان رضوی</option>
                    <option value="خراسان شمالی" data_city="	    آشخانه , اسفراین , بجنورد , پیش‌قلعه , جاجرم , حصار گرم‌خان , درق , راز , سنخواست , شوقان , شیروان , صفی‌آباد , فاروج , قاضی , گرمه , لوجلی">خراسان شمالی</option>
                    <option value="خوزستان" data_city="آبادان , آغاجاری , اروندکنار , الوان , امیدیه , اندیمشک , اهواز , ایذه , باغ‌ملک , بستان , بندر امام خمینی , بندر ماهشهر , بهبهان , جایزان , جنت‌مکان , چمران , حر ریاحی , حسینیه , حمیدیه , خرمشهر , دزآب , دزفول , دهدز , رامشیر , رامهرمز , رفیع , زهره , سالند , سردشت , سوسنگرد , شادگان , شوش , شوشتر , شیبان , صفی‌آباد , صیدون , قلعه خواجه , قلعه‌تل , گتوند , لالی , مسجدسلیمان , مقاومت , ملاثانی , میانرود , مینوشهر , هفتگل , هندیجان , هویزه , ویس">خوزستان</option>
                    <option value="زنجان" data_city="آب‌بر , ابهر , ارمغان‌خانه , چورزق , حلب , خرمدره , دندی , زرین‌آباد , زرین‌رود , زنجان , سجاس , سلطانیه , سهرورد , صائین‌قلعه , قیدار , گرماب , ماه‌نشان , هیدج ">زنجان</option>
                    <option value="سمنان" data_city="	   آرادان , امیریه , ایوانکی , بسطام , بیارجمند , دامغان , درجزین , دیباج , سرخه , سمنان , شاهرود , شهمیرزاد , کلاته خیج , گرمسار , مجن , مهدی‌شهر , میامی">سمنان</option>
                    <option value="سیستان و بلوچستان" data_city="ادیمی , اسپکه , ایرانشهر , بزمان , بمپور , بنت , بنجار , پیشین , جالق , چابهار , خاش , دوست‌محمد , راسک , زابل , زابلی , زاهدان , زهک , سراوان , سرباز , سوران , سیرکان , فنوج , قصرقند , کنارک , گلمورتی , محمد‌آباد , میرجاوه , نصرت‌آباد , نگور , نوک‌آباد , نیک‌شهر">سیستان و بلوچستان</option>
                    <option value="فارس" data_city="آباده , آباده طشک , اردکان , ارسنجان , استهبان , اسیر , اشکنان , افزر , اقلید , اهل , اوز , ایج , ایزدخواست , باب انار , بالاده , بنارویه , بهمن , بیرم , بیضا , جنت‌شهر , جهرم , جویم , حاجی‌آباد , خاوران , خرامه , خشت , خنج , خور , خومه‌زار , داراب , داریان , دوزه , دهرم , رامجرد , رونیز , زاهدشهر , زرقان , سده , سروستان , سعادت‌شهر , سورمق , سوریان , سیدان , ششده , شهرپیر , شیراز , صغاد , صفاشهر , علامرودشت , فتح‌آباد , فراشبند , فسا , فیروزآباد , قائمیه , قادرآباد , قطب‌آباد , قیر , کازرون , کامفیروز , کره‌ای , کنارتخته , کوار , گراش , گله‌دار , لارستان , لامرد , لپوئی , لطیفی , مرودشت , مشکان , مصیری , مهر , میمند , نوجین , نودان , نورآباد , نی‌ریز , وراوی , هماشهر">فارس</option>
                    <option value="قزوین" data_city="آبگرم , آبیک , آوج , ارداق , اسفرورین , اقبالیه , الوند , بوئین‌زهرا , بیدستان , تاکستان , خاکعلی , خرمدشت , دانسفهان , رازمیان , سگزآباد , سیردان , شال , ضیاءآباد , قزوین , کوهین , محمدیه , محمودآباد نمونه , معلم‌کلایه , نرجه">قزوین</option>
                    <option value="قم" data_city="جعفریه , دستجرد , سلفچگان , قم , قنوات , کهک">قم</option>
                    <option value="کردستان" data_city="آرمرده , بابارشانی , بانه , بلبان‌آباد , بویین سفلی , بیجار , چناره , دزج , دلبران , دهگلان , دیواندره , زرینه , سروآباد , سریش‌آباد , سقز , سنندج , شویشه , صاحب , قروه , کامیاران , کانی‌دینار , کانی‌سور , مریوان , موچش , یاسوکند">کردستان</option>
                    <option value="کرمان" data_city="اختیارآباد , ارزوئیه , امین‌شهر , انار , اندوهجرد , باغین , بافت , بردسیر , بروات , بزنجان , بم , بهرمان , پاریز , جبالبارز , جوزم , جوپار , جیرفت , چترود , خاتون‌آباد , خانوک , خرسند , درب بهشت , دهج , رابر , راور , راین , رفسنجان , رودبار , ریحان‌شهر , زرند , زنگی‌آباد , زیدآباد , سیرجان , شهداد , شهربابک , صفائیه , عنبرآباد , فاریاب , فهرج , قلعه گنج , کاظم‌آباد , کرمان , کشکوئیه , کهنوج , کوهبنان , کیان‌شهر , گلباف , گلزار , ماهان , محمدآباد , محی‌آباد , مردهک , مس سرچشمه , منوجان , نجف‌شهر , نرماشیر , نظام‌شهر , نگار , نودژ , هجدک , یزدان‌شهر">کرمان</option>
                    <option value="کرمانشاه" data_city="ازگله , اسلام‌آباد غرب , باینگان , بیستون , پاوه , تازه‌آباد , جوانرود , حمیل , رباط , روانسر , سرپل ذهاب , سرمست , سطر , سنقر , سومار , صحنه , قصر شیرین , کرمانشاه , کرند غرب , کنگاور , کوزران , گهواره , گیلانغرب , میان‌راهان , نودشه , نوسود , هرسین , هلشی">کرمانشاه</option>
                    <option value="کهکیلویه و بویراحمد" data_city="باشت , پاتاوه , چرام , چیتاب , دهدشت , دوگنبدان , دیشموک , سوق , سی‌سخت , قلعه رئیسی , گراب سفلی , لنده , لیکک , مارگون , یاسوج">کهگیلویه و بویراحمد</option>
                    <option value="گلستان" data_city="آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">گلستان</option>
                    <option value="گیلام" data_city="آستارا , آستانه اشرفیه , احمدسرگوراب , اسالم , اطاقور , املش , بازارجمعه , بره‌سر , بندر انزلی , پره‌سر , توتکابن , جیرنده , چابکسر , چاف و چمخاله , چوبر , حویق , خشکبیجار , خمام , دیلمان , رانکوه , رحیم‌آباد , رستم‌آباد , رشت , رضوانشهر , رودبار , رودسر , رودبنه , سنگر , سیاهکل , شفت , شلمان , صومعه‌سرا , فومن , کلاچای , کوچصفهان , کومله , کیاشهر , گوراب زرمیخ , لاهیجان , لشت نشا , لنگرود , لوشان , لوندویل , لیسار , ماسال , ماسوله , مرجغل , منجیل , واجارگاه , هشتپر">گیلان</option>
                    <option value="لرستان" data_city="زنا , اشترینان , الشتر , الیگودرز , بروجرد , پل‌دختر , چالانچولان , چغلوندی , چقابل , خرم‌آباد , درب گنبد , دورود , زاغه , سپیددشت , سراب‌دوره , فیروزآباد , کونانی , کوهدشت , گراب , معمولان , مومن‌آباد , نورآباد , ویسیان">لرستان</option>
                    <option value="مازندران" data_city="آلاشت , آمل , امیرشهر , ایزدشهر , بابل , بابلسر , بلده , بهشهر , بهنمیر , پل سفید , تنکابن , جویبار , چالوس , چمستان , خرم‌آباد , خلیل‌شهر , خوش‌رودپی , دابودشت , رامسر , رستمکلا , رویان , رینه , زرگرمحله , زیرآب , ساری , سرخ‌رود , سلمان‌شهر , سورک , شیرگاه , شیرود , عباس‌آباد , فریدون‌کنار , فریم , قائم‌شهر , کتالم و سادات‌شهر , کلارآباد , کلاردشت , کله‌بست , کوهی‌خیل , کیاسر , کیاکلا , گزنک , گلوگاه , گلوگاه بابل , گتاب , محمودآباد , مرزن‌آباد , مارزیکلا , نشتارود , نکا , نور , نوشهر">مازندران</option>
                    <option value="مرکزی" data_city="اراک , آستانه , آشتیان , پرندک , تفرش , توره , خمین , خنداب , داودآباد , دلیجان , رازقان , زاویه , ساوه , سنجانشازند , غرق‌آباد , فرمهین , قورچی‌باشی , کرهرود , کمیجان , مأمونیه , محلات , میلاجرد , نراق , نوبران , نیم‌ورهندودر">مرکزی</option>
                    <option value="هرمزگان" data_city="ابوموسی , بستک , بندر چارک , بندر خمیر , بندرعباس , بندر لنگه , پارسیان , جاسک , جناح , حاجی‌آباد , درگهاندهبارز , رویدر , زیارت‌علی , سندرک , سوزا , سیریک , فارغان , فین , قشم , کنگ , کیش , هرمز , هشت‌بندیمیناب">هرمزگان</option>
                    <option value="همدان" data_city="ازندریان , اسدآباد , برزول , بهار , تویسرکان , جورقان , جوکار , دمق , رزن , زنگنه , سامن , سرکان , شیرین‌سو , صالح‌آباد , فامنین , فرسفج , فیروزان , قروه درجزین , قهاوند , کبودرآهنگ , گل‌تپه , گیان , لالجین , مریانج , ملایر , مهاجران , نهاوند , همدان">همدان</option>
                    <option value="یزد" data_city="ابرکوه , احمدآباد , اردکان , اشکذر , بافق , بهاباد , تفت , حمیدیا , خضرآباد , دیهوک , زارچ , شاهدیه , طبس , عشق‌آباد , عقدا , مروست , مهردشت , مهریز , میبد , ندوشن , نیر , هرات , یزد">یزد</option>
                </select>
            </div>
          {{Form::close()}}
        </div>
    </div>
</div>
