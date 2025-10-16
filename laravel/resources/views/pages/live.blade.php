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
          }      /* Scoped styles */
          .tabs { display:flex; gap:10px; flex-wrap:wrap; margin-bottom:18px; }
          .tab { background:#151515; border:1px solid #232323; color:#eaeaea; padding:10px 14px; border-radius:12px; cursor:pointer; font-weight:700; }
          .tab.active { border-color:#00b894; color:#00e0c0; }
          .panel { display:none; }
          .panel.active { display:block; }
          .live-table-wrap { background: rgba(20,20,22,.8); border:1px solid #242426; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,.2); }
          .live-table { width: 100%; border-collapse: separate; border-spacing: 0; }
          .live-table thead th { background: linear-gradient(180deg, #141416, #121214); color:#cfd3d6; font-weight:800; letter-spacing:.2px; padding:14px; border-bottom:1px solid #242426; }
          .live-table tbody td { padding:14px; border-bottom:1px solid #202124; vertical-align: middle; }
          .live-table tbody td:last-child { text-align:center; white-space:nowrap; }
          .live-row { transition: background .2s ease; }
          .live-row:hover { background: rgba(255,255,255,.03); }
          .pill { display:inline-flex; align-items:center; gap:6px; padding:6px 10px; border-radius:999px; font-size:12px; font-weight:700; }
          .pill-live { background: linear-gradient(45deg, #e74c3c, #ff6b6b); color:#fff; box-shadow:0 6px 16px rgba(231,76,60,.35); }
          .pill-upcoming { background:#16221f; color:#7ce8d8; border:1px solid #224a43; }
          .pill-finished { background:#1b1b1b; color:#aab1b8; border:1px solid #2b2f33; }
          .team { display:flex; align-items:center; gap:10px; }
          .badge-team { width:28px; height:28px; border-radius:8px; display:grid; place-items:center; color:#fff; font-weight:800; font-size:12px; }
          .badge-blue { background: linear-gradient(135deg,#2563eb,#3b82f6); }
          .badge-red { background: linear-gradient(135deg,#ef4444,#f97316); }
          .badge-green { background: linear-gradient(135deg,#10b981,#22d3ee); }
          .badge-gold { background: linear-gradient(135deg,#d97706,#f59e0b); }
          .btn-stream { background: linear-gradient(45deg, #00b894, #00cec9); color:#fff; padding:10px 14px; border-radius:12px; font-weight:800; text-decoration:none; display:inline-flex; align-items:center; gap:8px; line-height:1; direction: rtl; min-width: 130px; justify-content:center; }
          .btn-stream i { margin-left:6px; }
          .btn-stream:hover { filter: brightness(1.05); }
          .score { font-weight:900; color:#eaeaea; }
          .event-card { background:#141416; border:1px solid #242426; border-radius:16px; overflow:hidden; height:100%; }
          .event-card img { width:100%; height:160px; object-fit:cover; }
          .event-card .body { padding:14px; }
        </style>
      </head>
      <body class="dark-scheme">
        <div id="wrapper">
          <div class="scrollbar"></div>
          <div id="de-loader"></div>

          <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="subheader" class="jarallax">
              <img src="images/background/5.jpg" class="jarallax-img" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 offset-lg-3 text-center">
                    <h1><span class="text-line">البث</span> النتائج والفعاليات</h1>
                  </div>
                </div>
              </div>
              <div class="de-gradient-edge-bottom"></div>
            </section>

            <section class="no-top" aria-label="section">
              <div class="container">
                <div class="tabs">
                  <div class="tab active" data-panel="live">جدول المباريات البث المباشرة</div>
                  <div class="tab" data-panel="results">نتائج المباريات</div>
                  <div class="tab" data-panel="events">الفعاليات والأحداث</div>
                </div>

                <!-- Live schedule -->
                <div class="panel active" id="panel-live">
                  <div class="live-table-wrap">
                    <table class="live-table">
                      <thead>
                        <tr>
                          <th>الوقت</th>
                          <th>الحالة</th>
                          <th>الفعالية</th>
                          <th>النتائج</th>
                          <th>الفئة / المسار</th>
                          <th>البطولة</th>
                          <th>البث</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="live-row">
                          <td>10:00 ص</td>
                          <td><span class="pill pill-live"><i class="fa fa-circle"></i> مباشر</span></td>
                          <td><div class="team"><span class="badge-team badge-green">AR</span><span>سبرنت كارتينغ — الجولة 3</span></div></td>
                          <td class="score">لفة 12/20 • أفضل زمن 1:04.328</td>
                          <td><div class="team"><span class="badge-team badge-blue">IN</span><span>مسار الكارتينغ الداخلي</span></div></td>
                          <td>بطولة الكارتينغ العراقية (فئة الناشئين)</td>
                          <td><a href="{{ route('live.watch') }}" class="btn-stream"><i class="fa fa-play"></i> شاهد الآن</a></td>
                        </tr>
                        <tr class="live-row">
                          <td>12:30 م</td>
                          <td><span class="pill pill-upcoming"><i class="fa fa-clock-o"></i> قريباً</span></td>
                          <td><div class="team"><span class="badge-team badge-red">DF</span><span>عرض الدرفت الحر</span></div></td>
                          <td class="score">—</td>
                          <td><div class="team"><span class="badge-team badge-gold">EX</span><span>حلبة الاستعراض الحر</span></div></td>
                          <td>فعالية النادي المدعومة من الاتحاد العراقي</td>
                          <td><a href="#" class="btn-stream"><i class="fa fa-bell-o"></i> تذكير</a></td>
                        </tr>
                        <tr class="live-row">
                          <td>8:00 م</td>
                          <td><span class="pill pill-live"><i class="fa fa-circle"></i> مباشر</span></td>
                          <td><div class="team"><span class="badge-team badge-gold">AX</span><span>أوتوكروس — تجارب تأهيلية (الهواة)</span></div></td>
                          <td class="score">الصدارة 00:58.771</td>
                          <td><div class="team"><span class="badge-team badge-green">AR</span><span>ساحة الأوتوكروس</span></div></td>
                          <td>دوري رياضات المحركات بالنادي</td>
                          <td><a href="{{ route('live.watch') }}" class="btn-stream"><i class="fa fa-play"></i> شاهد الآن</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- Results -->
                <div class="panel" id="panel-results">
                  <div class="live-table-wrap">
                    <table class="live-table">
                      <thead>
                        <tr>
                          <th>التاريخ</th>
                          <th>الفعالية</th>
                          <th>الفئة</th>
                          <th>المركز 1</th>
                          <th>المركز 2</th>
                          <th>المركز 3</th>
                          <th>التفاصيل</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="live-row">
                          <td>2025-11-22</td>
                          <td>تحمل كارتينغ — سباق الفرق 60 دقيقة</td>
                          <td>كارتينغ</td>
                          <td>فريق AR (122 لفّة)</td>
                          <td>فريق BN (118 لفّة)</td>
                          <td>فريق TT (117 لفّة)</td>
                          <td><a href="#" class="btn-stream"><i class="fa fa-video-camera"></i> الملخص</a></td>
                        </tr>
                        <tr class="live-row">
                          <td>2025-10-05</td>
                          <td>تايم أتاك — الجولة 2</td>
                          <td>سيارات سياحية</td>
                          <td>أحمد ج. (00:58.221)</td>
                          <td>سيف م. (00:58.774)</td>
                          <td>حسام ك. (00:59.013)</td>
                          <td><a href="#" class="btn-stream"><i class="fa fa-bar-chart"></i> البيانات</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- Events -->
                <div class="panel" id="panel-events">
                  <div class="row g-3">
                    <div class="col-md-4">
                      <div class="event-card">
                        <img src="images/gallery/1.jpg" alt="">
                        <div class="body">
                          <h5>ورشة أساسيات الأوتوكروس</h5>
                          <p style="opacity:.9;">جلسة تدريبية للهواة تشمل خط التسابق، نقاط الكبح، وتمارين المخاريط.</p>
                          <div class="chips"><span class="chip">السبت</span><span class="chip">4:00 م</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="event-card">
                        <img src="images/gallery/2.jpg" alt="">
                        <div class="body">
                          <h5>ليلة الدرفت</h5>
                          <p style="opacity:.9;">عرض استعراضي بإشراف لجنة السلامة، مع مناطق مخصصة للجماهير.</p>
                          <div class="chips"><span class="chip">الخميس</span><span class="chip">8:30 م</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="event-card">
                        <img src="images/gallery/3.jpg" alt="">
                        <div class="body">
                          <h5>تجارب تايم أتاك المفتوحة</h5>
                          <p style="opacity:.9;">تجارب مفتوحة مع توقيت إلكتروني وعرض فوري للأزمنة والقطاعات.</p>
                          <div class="chips"><span class="chip">الإثنين</span><span class="chip">6:00 م</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </section>
          </div>

          <a href="#" id="back-to-top"></a>

          <script>
            // Tabs switching
            document.addEventListener('DOMContentLoaded', function(){
              const tabs = document.querySelectorAll('.tab');
              const panels = {
                live: document.getElementById('panel-live'),
                results: document.getElementById('panel-results'),
                events: document.getElementById('panel-events')
              };
              tabs.forEach(t=> t.addEventListener('click', ()=>{
                tabs.forEach(x=>x.classList.remove('active'));
                t.classList.add('active');
                Object.values(panels).forEach(p=>p.classList.remove('active'));
                const id = t.getAttribute('data-panel');
                panels[id].classList.add('active');
              }));
            });
          </script>

</x-layout>
