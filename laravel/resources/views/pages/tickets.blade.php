<x-layout title="نادي بلاد الرافدين">

    <style>
/* Dropdown menu styles */
      .dropdown {
        position: relative;
      }
      .dropdown-menu {
        display: none;
        position: absolute;
        top: 80%;
        left: 0;
        background: #141416;
        border-radius: 0;
        min-width: 150px;
        z-index: 1000;
      }
      .dropdown:hover .dropdown-menu {
        display: block;
      }
      .dropdown-menu li {
        list-style: none;
      }
      .dropdown-menu li a {
        display: block;
        padding: 10px 15px;
        color: #fff;
        text-decoration: none;
        transition: background .2s ease;
        font-weight: 400;
        font-size: 14px;
      }
      .dropdown-menu li a:hover {
        background: #242426;
      }

      /* Force header to be solid on tickets page */
      header {
        background: #141416 !important;
        box-shadow: 0 2px 10px rgba(0,0,0,.3);
      }

      /* Custom styles for tickets page */
      .hero-offer { background: linear-gradient(135deg, #00b894, #e74c3c); padding: 60px 0; text-align: center; color: #fff; margin-bottom: 0px; }
      .hero-offer h1 { font-size: 3rem; font-weight: 900; margin-bottom: 10px; }
      .hero-offer p { font-size: 1.2rem; opacity: 0.9; }
      .filters-search { background: rgba(20,20,22,.9); padding: 30px; border-radius: 18px; margin-bottom: 40px; }
      .search-bar { display: flex; gap: 15px; margin-bottom: 20px; }
      .search-bar input { flex: 1; padding: 12px; border: 1px solid #242426; border-radius: 10px; background: #16181b; color: #fff; }
      .search-bar button { padding: 12px 20px; background: linear-gradient(45deg, #00b894, #00cec9); border: none; border-radius: 10px; color: #fff; font-weight: 800; }
      .filters { display: flex; gap: 15px; flex-wrap: wrap; }
      .filters select { padding: 10px; border: 1px solid #242426; border-radius: 10px; background: #16181b; color: #fff; }
      .seasonal-card { background: linear-gradient(135deg, #1a1a1d, #2d2d30); border: 2px solid #00b894; border-radius: 24px; padding: 40px; text-align: center; margin-bottom: 40px; box-shadow: 0 20px 50px rgba(0,184,148,.3); position: relative; overflow: hidden; }
      .seasonal-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('images/misc/circle-gradient.png') no-repeat center; opacity: 0.1; }
      .seasonal-card h2 { font-size: 2.5rem; font-weight: 900; color: #00b894; margin-bottom: 10px; }
      .seasonal-card .price { font-size: 3rem; font-weight: 900; color: #fff; margin: 20px 0; }
      .seasonal-card .features { list-style: none; padding: 0; margin: 20px 0; }
      .seasonal-card .features li { margin-bottom: 10px; font-size: 1.1rem; }
      .seasonal-card .btn-subscribe { background: linear-gradient(45deg, #00b894, #e74c3c); color: #fff; border: none; padding: 15px 30px; border-radius: 15px; font-weight: 900; font-size: 1.2rem; text-decoration: none; display: inline-block; transition: transform .2s ease; }
      .seasonal-card .btn-subscribe:hover { transform: scale(1.05); }
      .event-card { background: rgba(20,20,22,.8); border: 1px solid #242426; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.25); transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; margin-bottom: 20px; display: flex; flex-direction: column; height: auto; }
      .event-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(0,0,0,.35); border-color: #2d2f33; }
      .event-image { width: 100%; height: 120px; background: #16181b; display: flex; align-items: center; justify-content: center; }
      .event-image img { width: 100%; height: 100%; object-fit: cover; }
      .event-content { flex: 1; padding: 15px; }
      .event-title { font-weight: 800; font-size: 1.1rem; margin: 0 0 8px 0; }
      .event-meta { display: flex; gap: 10px; margin-bottom: 10px; flex-wrap: wrap; }
      .event-meta span { background: #16181b; border: 1px solid #242426; padding: 4px 8px; border-radius: 6px; font-size: 0.8rem; }
      .event-description { margin-bottom: 15px; opacity: 0.9; font-size: 0.9rem; }
      .ticket-options { display: flex; gap: 10px; flex-wrap: wrap; }
      .ticket-option { background: #16181b; border: 1px solid #292b2f; border-radius: 8px; padding: 10px; flex: 1; min-width: 150px; transition: transform .2s ease, background .2s ease, border-color .2s ease; }
      .ticket-option:hover { transform: translateY(-2px); background: #1b1e22; border-color: #2f3237; }
      .ticket-price { font-size: 18px; font-weight: 900; color: #00b894; margin: 8px 0; }
      .btn-buy { background: linear-gradient(45deg, #00b894, #00cec9); color: #fff; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 800; text-decoration: none; display: inline-block; transition: filter .2s ease; width: 100%; text-align: center; font-size: 0.9rem; }
      .btn-buy:hover { filter: brightness(1.05); }
      #section-tickets-page { padding-top: 0px; }
    </style>
      <!-- content begin -->
      <div class="no-bottom " id="content">
        <div id="top"></div>

        <!-- Hero Offer Section -->
        <section class="hero-offer wow fadeInUp">
          <div class="container">
            <h1>عروض خاصة على التذاكر!</h1>
            <p>احجز الآن واحصل على خصم 20% على التذاكر الموسمية. لا تفوت الفرصة للاستمتاع بجميع الأحداث الرياضية في نادي بلاد الرافدين.</p>
            <a href="#seasonal" class="btn-main big">اكتشف العرض</a>
          </div>
        </section>

        <section id="section-tickets-page" class="pt60 pb60">
          <div class="container">
            <!-- Filters and Search -->
            <div class="filters-search wow fadeInUp">
              <div class="search-bar">
                <input type="text" placeholder="ابحث عن حدث...">
                <button><i class="fa fa-search"></i> بحث</button>
              </div>
              <div class="filters">
                <select>
                  <option>جميع التواريخ</option>
                  <option>ديسمبر 3</option>
                  <option>ديسمبر 4</option>
                  <option>ديسمبر 5</option>
                  <option>ديسمبر 6</option>
                  <option>ديسمبر 7</option>
                </select>
                <select>
                  <option>جميع الأنواع</option>
                  <option>كارتينغ</option>
                  <option>درفت</option>
                  <option>تايم أتاك</option>
                  <option>تحمل</option>
                  <option>أوتوكروس</option>
                </select>
                <select>
                  <option>جميع الأسعار</option>
                  <option>أقل من 50 دولار</option>
                  <option>50-100 دولار</option>
                  <option>أكثر من 100 دولار</option>
                </select>
              </div>
            </div>

            <!-- Events Row 1: First Three Events -->
            <div class="row">
              <!-- Event 1: Karting Sprint -->
              <div class="col-lg-4 col-md-6">
                <div class="event-card wow fadeInUp">
                  <div class="event-image">
                    <img src="images/gallery/1.jpg" alt="سبرنت كارتينغ">
                  </div>
                  <div class="event-content">
                    <h3 class="event-title">سبرنت كارتينغ — الجولة 3</h3>
                    <div class="event-meta">
                      <span><i class="fa fa-calendar"></i> ديسمبر 3, 2025</span>
                      <span><i class="fa fa-map-marker"></i> مسار الكارتينغ الداخلي</span>
                      <span><i class="fa fa-users"></i> 100+ مشارك</span>
                    </div>
                    <p class="event-description">انضم إلى الإثارة في بطولة الكارتينغ العراقية لفئة الناشئين. شاهد السباقات السريعة والمنافسة الشديدة في أحدث المسارات.</p>
                    <div class="ticket-options">
                      <div class="ticket-option">
                        <h4>تذكرة عادية</h4>
                        <p>دخول عام مع فرصة للفوز بجوائز</p>
                        <div class="ticket-price">49 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                      <div class="ticket-option">
                        <h4>تذكرة VIP</h4>
                        <p>دخول VIP مع بضائع مجانية ومقاعد أفضل</p>
                        <div class="ticket-price">89 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Event 2: Drift Showcase -->
              <div class="col-lg-4 col-md-6">
                <div class="event-card wow fadeInUp" data-wow-delay=".1s">
                  <div class="event-image">
                    <img src="images/gallery/2.jpg" alt="عرض الدرفت">
                  </div>
                  <div class="event-content">
                    <h3 class="event-title">عرض الدرفت الحر</h3>
                    <div class="event-meta">
                      <span><i class="fa fa-calendar"></i> ديسمبر 4, 2025</span>
                      <span><i class="fa fa-map-marker"></i> حلبة الاستعراض الحر</span>
                      <span><i class="fa fa-fire"></i> عرض استعراضي</span>
                    </div>
                    <p class="event-description">استمتع بعروض الدرفت الاحترافية المدعومة من الاتحاد العراقي. شاهد السيارات تتقن المنعطفات بأسلوب مذهل.</p>
                    <div class="ticket-options">
                      <div class="ticket-option">
                        <h4>تذكرة عادية</h4>
                        <p>دخول عام مع فرصة للفوز بجوائز</p>
                        <div class="ticket-price">49 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                      <div class="ticket-option">
                        <h4>تذكرة VIP</h4>
                        <p>دخول VIP مع بضائع مجانية ومقاعد أفضل</p>
                        <div class="ticket-price">89 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Event 3: Time Attack -->
              <div class="col-lg-4 col-md-6">
                <div class="event-card wow fadeInUp" data-wow-delay=".2s">
                  <div class="event-image">
                    <img src="images/gallery/3.jpg" alt="تايم أتاك">
                  </div>
                  <div class="event-content">
                    <h3 class="event-title">تايم أتاك — تصفيات الجولة 2</h3>
                    <div class="event-meta">
                      <span><i class="fa fa-calendar"></i> ديسمبر 5, 2025</span>
                      <span><i class="fa fa-map-marker"></i> مضمار التوقيت المصغر</span>
                      <span><i class="fa fa-trophy"></i> تصفيات</span>
                    </div>
                    <p class="event-description">اختبر حدود السرعة في كأس التوقيت العراقي للسيارات السياحية. شاهد أسرع السيارات في المنافسة.</p>
                    <div class="ticket-options">
                      <div class="ticket-option">
                        <h4>تذكرة عادية</h4>
                        <p>دخول عام مع فرصة للفوز بجوائز</p>
                        <div class="ticket-price">49 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                      <div class="ticket-option">
                        <h4>تذكرة VIP</h4>
                        <p>دخول VIP مع بضائع مجانية ومقاعد أفضل</p>
                        <div class="ticket-price">89 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Events Row 2: Last Two Events -->
            <div class="row">
              <!-- Event 4: Endurance Kart Relay -->
              <div class="col-lg-4 col-md-6">
                <div class="event-card wow fadeInUp" data-wow-delay=".3s">
                  <div class="event-image">
                    <img src="images/gallery/4.jpg" alt="تحمل كارتينغ">
                  </div>
                  <div class="event-content">
                    <h3 class="event-title">تحمل كارتينغ — سباق الفرق 60 دقيقة</h3>
                    <div class="event-meta">
                      <span><i class="fa fa-calendar"></i> ديسمبر 6, 2025</span>
                      <span><i class="fa fa-map-marker"></i> مسار الكارتينغ الرئيسي</span>
                      <span><i class="fa fa-clock-o"></i> 60 دقيقة</span>
                    </div>
                    <p class="event-description">شارك في سلسلة التحمل للأندية حيث تتنافس الفرق في سباق طويل الأمد مليء بالإثارة والاستراتيجية.</p>
                    <div class="ticket-options">
                      <div class="ticket-option">
                        <h4>تذكرة عادية</h4>
                        <p>دخول عام مع فرصة للفوز بجوائز</p>
                        <div class="ticket-price">49 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                      <div class="ticket-option">
                        <h4>تذكرة VIP</h4>
                        <p>دخول VIP مع بضائع مجانية ومقاعد أفضل</p>
                        <div class="ticket-price">89 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Event 5: Autocross Qualifiers -->
              <div class="col-lg-4 col-md-6">
                <div class="event-card wow fadeInUp" data-wow-delay=".4s">
                  <div class="event-image">
                    <img src="images/gallery/5.jpg" alt="أوتوكروس">
                  </div>
                  <div class="event-content">
                    <h3 class="event-title">أوتوكروس — تجارب تأهيلية (الهواة)</h3>
                    <div class="event-meta">
                      <span><i class="fa fa-calendar"></i> ديسمبر 7, 2025</span>
                      <span><i class="fa fa-map-marker"></i> ساحة الأوتوكروس</span>
                      <span><i class="fa fa-star"></i> للهواة</span>
                    </div>
                    <p class="event-description">ابدأ رحلتك في دوري رياضات المحركات بالنادي مع تجارب تأهيلية مخصصة للهواة والمبتدئين.</p>
                    <div class="ticket-options">
                      <div class="ticket-option">
                        <h4>تذكرة عادية</h4>
                        <p>دخول عام مع فرصة للفوز بجوائز</p>
                        <div class="ticket-price">49 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                      <div class="ticket-option">
                        <h4>تذكرة VIP</h4>
                        <p>دخول VIP مع بضائع مجانية ومقاعد أفضل</p>
                        <div class="ticket-price">89 دولار</div>
                        <a href="{{ route('checkout') }}" class="btn-buy">اشترِ الآن</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Special Seasonal Subscription -->
            <div class="row" id="seasonal">
              <div class="col-lg-12">
                <div class="seasonal-card wow fadeInUp">
                  <h2>اشتراك موسمي سنوي</h2>
                  <p class="price">299 دولار</p>
                  <ul class="features">
                    <li><i class="fa fa-check"></i> وصول غير محدود إلى جميع الأحداث لمدة عام كامل</li>
                    <li><i class="fa fa-check"></i> خصومات 20% على البضائع والطعام</li>
                    <li><i class="fa fa-check"></i> لقاءات حصرية مع النجوم الضيوف والسائقين</li>
                    <li><i class="fa fa-check"></i> قسائم مجانية للأنشطة الإضافية</li>
                    <li><i class="fa fa-check"></i> دعم VIP مع مواقف خاصة ودخول سريع</li>
                  </ul>
                  <a href="#" class="btn-subscribe">اشترك الآن واحصل على العرض الخاص</a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 text-center">
                <a href="{{ route('home') }}" class="btn-main big wow fadeInUp">العودة إلى الصفحة الرئيسية</a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- content close -->
      <a href="#" id="back-to-top"></a>
</x-layout>
