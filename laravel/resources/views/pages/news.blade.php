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
          }/* Dropdown menu styles */
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
          }      /* Scoped styles for news hub */
          .news-hero h1 { letter-spacing:.3px; }
          .news-tabs { display:flex; gap:10px; flex-wrap:wrap; margin-bottom:18px; }
          .news-tab { background:#151515; border:1px solid #232323; color:#eaeaea; padding:10px 14px; border-radius:12px; cursor:pointer; font-weight:700; }
          .news-tab.active { border-color:#00b894; color:#00e0c0; }
          .news-card { background:#141416; border:1px solid #242426; border-radius:16px; overflow:hidden; height:100%; transition:transform .2s ease, box-shadow .2s ease; }
          .news-card:hover { transform: translateY(-6px); box-shadow:0 16px 40px rgba(0,0,0,.35); }
          .news-thumb { height: 180px; overflow:hidden; }
          .news-thumb img { width:100%; height:100%; object-fit:cover; }
          .news-body { padding:16px; }
          .news-meta { display:flex; gap:10px; flex-wrap:wrap; opacity:.8; font-size:12px; margin-bottom:8px; }
          .news-meta .chip { background:#16181b; border:1px solid #292b2f; padding:6px 10px; border-radius:10px; }
          .news-title { margin:0 0 8px 0; font-weight:800; }
          .news-actions a { background: linear-gradient(45deg,#00b894,#00cec9); color:#fff; padding:10px 14px; border-radius:12px; font-weight:800; text-decoration:none; display:inline-flex; align-items:center; gap:8px; }
          .archive { background:#121214; border:1px solid #222; border-radius:16px; padding:16px; }
          .archive details { background:#141416; border:1px solid #232323; border-radius:12px; padding:10px 12px; margin-bottom:10px; }
          .archive details summary { cursor:pointer; font-weight:800; }
          .archive ul { list-style:none; padding:0; margin:10px 0 0 0; }
          .archive li { padding:6px 0; opacity:.9; }
        </style>
    </head>

    <body class="dark-scheme">
        <div id="wrapper">

            <!-- page preloader begin -->
            <div id="de-loader"></div>
            <!-- page preloader close -->

            <!-- content begin -->
            <div class="no-bottom no-top" id="content">
                <div id="top"></div>
                <!-- section begin -->
                <section id="subheader" class="jarallax news-hero">
                    <img src="images/background/2.jpg" class="jarallax-img" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 text-center">
                                <h1><span class="text-line">أخبار</span> وتحديثات النادي</h1>
                            </div>
                        </div>
                    </div>
                    <div class="de-gradient-edge-bottom"></div>
                </section>
                <!-- section close -->

                <section id="section-content" class="no-top" aria-label="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                              <div class="news-tabs">
                                <div class="news-tab active" data-filter="official">الأخبار الرسمية</div>
                                <div class="news-tab" data-filter="reports">التقارير والتحليلات</div>
                                <div class="news-tab" data-filter="articles">مقالات مختارة</div>
                              </div>
                              <div class="row g-4" id="newsGrid">
                                <div class="col-md-6" data-type="official">
                                  <div class="news-card">
                                    <div class="news-thumb"><img src="images/blog/1.jpg" alt=""></div>
                                    <div class="news-body">
                                      <div class="news-meta"><span class="chip">رسمي</span><span class="chip">اليوم</span></div>
                                      <h4 class="news-title">الاتحاد العراقي يعتمد جولة "تايم أتاك" ضمن أجندة النادي</h4>
                                      <p>أعلن نادي بلاد الرافدين اعتماد الاتحاد العراقي لرياضة السيارات لجولة "تايم أتاك" ضمن منافسات الموسم الحالي مع نظام توقيت إلكتروني محدث.</p>
                                      <div class="news-actions"><a href="{{ route('blog.single') }}?id=1"><i class="fa fa-book"></i> قراءة المزيد</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6" data-type="official">
                                  <div class="news-card">
                                    <div class="news-thumb"><img src="images/blog/2.jpg" alt=""></div>
                                    <div class="news-body">
                                      <div class="news-meta"><span class="chip">رسمي</span><span class="chip">محدث يومياً</span></div>
                                      <h4 class="news-title">إطلاق نظام الاشتراك الذكي للفعاليات</h4>
                                      <p>أطلق النادي منصة اشتراك ذكي تتيح التسجيل الفوري، متابعة النتائج، وإشعارات لحظية للمتسابقين والجماهير.</p>
                                      <div class="news-actions"><a href="{{ route('blog.single') }}?id=2"><i class="fa fa-book"></i> تفاصيل المنصة</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6" data-type="reports">
                                  <div class="news-card">
                                    <div class="news-thumb"><img src="images/blog/3.jpg" alt=""></div>
                                    <div class="news-body">
                                      <div class="news-meta"><span class="chip">تحليل</span><span class="chip">أداء</span></div>
                                      <h4 class="news-title">تحليل سرعات القطاعات في مسار الكارتينغ</h4>
                                      <p>قراءة تقنية لأزمنة القطاعات وأثر تغيير ضغط الإطارات على الثبات والخروج من المنعطفات لخمسة متسابقين.</p>
                                      <div class="news-actions"><a href="{{ route('blog.single') }}?id=3"><i class="fa fa-bar-chart"></i> قراءة التقرير</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6" data-type="reports">
                                  <div class="news-card">
                                    <div class="news-thumb"><img src="images/blog/4.jpg" alt=""></div>
                                    <div class="news-body">
                                      <div class="news-meta"><span class="chip">تقرير</span><span class="chip">السلامة</span></div>
                                      <h4 class="news-title">تقرير السلامة: جاهزية حلبة الاستعراض الحر</h4>
                                      <p>مراجعة أسبوعية لإجراءات السلامة، مسارات الهروب، وتوزيع marshals أثناء عروض الدرفت.</p>
                                      <div class="news-actions"><a href="{{ route('blog.single') }}?id=4"><i class="fa fa-shield"></i> عرض التفاصيل</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6" data-type="articles">
                                  <div class="news-card">
                                    <div class="news-thumb"><img src="images/features/1.jpg" alt=""></div>
                                    <div class="news-body">
                                      <div class="news-meta"><span class="chip">مقال</span><span class="chip">آراء</span></div>
                                      <h4 class="news-title">كيف تبني مسارك في رياضات المحركات من الهواة إلى المحترفين</h4>
                                      <p>دليل عملي للانتقال من فعاليات الأوتوكروس إلى بطولات التوقيت الرسمية عبر خطط تدريب واقعية.</p>
                                      <div class="news-actions"><a href="{{ route('blog.single') }}?id=5"><i class="fa fa-file-text-o"></i> اقرأ المقال</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6" data-type="articles">
                                  <div class="news-card">
                                    <div class="news-thumb"><img src="images/features/2.jpg" alt=""></div>
                                    <div class="news-body">
                                      <div class="news-meta"><span class="chip">مقال</span><span class="chip">تقنيات</span></div>
                                      <h4 class="news-title">اختيار الإطارات الأنسب لفعاليات النادي</h4>
                                      <p>متى تختار مركب ناعم مقابل متوسط؟ وكيف يؤثر ذلك على التماسك وأزمنة اللفات في مساراتنا؟</p>
                                      <div class="news-actions"><a href="{{ route('blog.single') }}?id=6"><i class="fa fa-file-text-o"></i> اقرأ الآن</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="archive">
                                <h4 class="mb-3">الأرشيف المنظم</h4>
                                <details open>
                                  <summary>2025</summary>
                                  <ul>
                                    <li><a href="#">ديسمبر — نهائيات كأس التوقيت</a></li>
                                    <li><a href="#">نوفمبر — عرض درفت الخريف</a></li>
                                    <li><a href="#">أكتوبر — سباق تحمل الكارتينغ 60 دقيقة</a></li>
                                  </ul>
                                </details>
                                <details>
                                  <summary>2024</summary>
                                  <ul>
                                    <li><a href="#">سبتمبر — افتتاح مضمار التوقيت المصغر</a></li>
                                    <li><a href="#">مايو — بطولة الأوتوكروس للهواة</a></li>
                                  </ul>
                                </details>
                                <details>
                                  <summary>2023</summary>
                                  <ul>
                                    <li><a href="#">ديسمبر — تحديث نظام التوقيت الإلكتروني</a></li>
                                    <li><a href="#">أبريل — أول فعالية كارتينغ رسمية</a></li>
                                  </ul>
                                </details>
                              </div>
                            </div>


                            <div class="spacer-single"></div>

                            <div class="col-lg-12 text-center">
                                <div class="pagination">
                                    <a href="#">&laquo;</a>
                                    <a href="#">1</a>
                                    <a href="#" class="active">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#">6</a>
                                    <a href="#">&raquo;</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <!-- content close -->
            <a href="#" id="back-to-top"></a>
        <script>
          // Simple client-side filter for news tabs
          document.addEventListener('DOMContentLoaded', function(){
            const tabs = document.querySelectorAll('.news-tab');
            const cards = document.querySelectorAll('#newsGrid > div[data-type]');
            tabs.forEach(t => t.addEventListener('click', () => {
              tabs.forEach(x=>x.classList.remove('active')); t.classList.add('active');
              const f = t.getAttribute('data-filter');
              cards.forEach(c => {
                c.style.display = (f==='official' && c.dataset.type==='official') ||
                                  (f==='reports' && c.dataset.type==='reports') ||
                                  (f==='articles' && c.dataset.type==='articles') ? '' : 'none';
              });
            }));
          });
        </script>
</x-layout>
