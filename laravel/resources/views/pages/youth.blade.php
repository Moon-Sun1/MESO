<x-layout title="شباب الفريق | نادي بلاد الرافدين">

  <style>
    /* Dropdown menu styles */
    .dropdown { position: relative; }
    .dropdown-menu {
      display: none; position: absolute; top: 80%; left: 0; background: #141416;
      border-radius: 0; min-width: 150px; z-index: 1000;
    }
    .dropdown:hover .dropdown-menu { display: block; }
    .dropdown-menu li { list-style: none; }
    .dropdown-menu li a {
      display: block; padding: 10px 15px; color: #fff; text-decoration: none;
      transition: background .2s ease; font-weight: 400; font-size: 14px;
    }
    .dropdown-menu li a:hover { background: #242426; }
    .dropdown:after { font-family: FontAwesome; content: "\f078"; padding-left: 5px; font-size: 8px; position: relative; top: -2px; color: blue; }

    /* Member card styles (inlined) */
    .member-card {
      position: relative;
      background: rgba(22, 24, 28, 0.65);
      border: 1px solid rgba(255, 255, 255, 0.06);
      border-radius: 16px;
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
      transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
      height: 100%;
    }
    .member-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.35);
      border-color: rgba(0, 184, 148, 0.35);
    }
    .member-card .de-team-item { display: flex; align-items: center; gap: 18px; padding: 22px; }
    @media (max-width: 767.98px) { .member-card .de-team-item { flex-direction: column; text-align: center; } }
    .member-card .de-team-pic { flex: 0 0 auto; }
    .member-card .de-team-pic img {
      width: 96px; height: 96px; object-fit: cover; border-radius: 50%;
      box-shadow: 0 0 0 3px rgba(255,255,255,0.08), 0 10px 18px rgba(0,0,0,.35);
      transition: transform .3s ease, box-shadow .3s ease;
    }
    .member-card:hover .de-team-pic img {
      transform: scale(1.04);
      box-shadow: 0 0 0 3px rgba(0, 184, 148, 0.3), 0 14px 24px rgba(0,0,0,.4);
    }
    .member-card .de-team-desc h4 { margin: 0 0 6px 0; font-weight: 700; letter-spacing: .3px; }
    .member-card .de-team-desc .lead {
      display: inline-block; margin: 0 0 10px 0; padding: 4px 10px; font-size: 12px; font-weight: 600; line-height: 1.4;
      color: #b8fff0; background: rgba(0, 184, 148, 0.12); border: 1px solid rgba(0, 184, 148, 0.3); border-radius: 999px;
      text-transform: none;
    }
    .member-card .de-team-desc p { color: #bfc4ce; margin-bottom: 12px; }
    .member-card .de-team-social a {
      width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; margin-inline-start: 6px;
      color: #e5e9f0; border: 1px solid rgba(255,255,255,0.08); border-radius: 50%; background: rgba(255,255,255,0.03);
      transition: background .2s ease, color .2s ease, border-color .2s ease, transform .2s ease;
    }
    .member-card .de-team-social a:hover {
      background: linear-gradient(90deg, rgba(0,184,148,.25), rgba(231,76,60,.25));
      border-color: rgba(0,184,148,.45); color: #ffffff; transform: translateY(-2px);
    }
  </style>
</head>

<body class="dark-scheme">
  <div id="wrapper">
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
      <div id="top"></div>

      <style>
        /* Toolbar, inputs, and pagination (no header) */
        .toolbar { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; justify-content: space-between; margin: 10px 0 8px; position: sticky; top: 10px; z-index: 5; }
        .toolbar-left, .toolbar-right { display: flex; gap: 10px; align-items: center; }
        .input, .select { background: rgba(22,24,28,.65); border: 1px solid rgba(255,255,255,.08); color: #e5e9f0; border-radius: 10px; padding: 10px 12px; outline: none; transition: border-color .2s ease, background .2s ease; }
        .input::placeholder { color: #7c8595; }
        .input:focus, .select:focus { border-color: rgba(0,184,148,.45); background: rgba(22,24,28,.8); }
        .btn-soft { border: 1px solid rgba(255,255,255,.08); background: rgba(255,255,255,.04); color: #e5e9f0; border-radius: 10px; padding: 10px 12px; }
        .btn-soft:hover { background: rgba(0,184,148,.18); border-color: rgba(0,184,148,.45); color: #fff; }
        .pagination-modern { display: flex; gap: 8px; align-items: center; justify-content: center; margin-top: 16px; }
        .page-btn { min-width: 40px; height: 40px; padding: 0 12px; border-radius: 10px; border: 1px solid rgba(255,255,255,.08); background: rgba(255,255,255,.04); color: #e5e9f0; }
        .page-btn.active { background: rgba(0,184,148,.22); border-color: rgba(0,184,148,.5); color: #fff; }
        #section-youth { padding-top: 8px; }
        #section-youth .spacer-single { height: 10px !important; }
        .soft-divider { height: 1px; background: linear-gradient(90deg, rgba(255,255,255,.06), rgba(255,255,255,.02)); border: 0; margin: 8px 0 12px; }
        .section-title { font-weight: 700; letter-spacing: .3px; margin: 4px 0 10px; color: #e5e9f0; }
      </style>

      <!-- section begin -->
      <section id="section-youth" aria-label="section" class="no-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="text-uppercase wow fadeInUp">
                <span class="text-line">شباب</span>
                <span class="text-gradient">الفريق</span>
              </h2>
              <div class="spacer-single"></div>
            </div>
          </div>
          <div class="soft-divider"></div>
          <div class="toolbar" dir="rtl">
            <div class="toolbar-left">
              <input id="searchInputYouth" class="input" type="text" placeholder="ابحث بالاسم..." />
              <select id="filterDisciplineYouth" class="select">
                <option value="">كل التخصصات</option>
                <option value="سباقات">سباقات</option>
                <option value="رالي">رالي</option>
                <option value="فورمولا">فورمولا</option>
              </select>
            </div>
            <div class="toolbar-right">
              <button id="resetFiltersYouth" class="btn-soft">إعادة تعيين</button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-end">
              <div class="section-title">قائمة الشباب</div>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-4 mb-sm-30 youth-card" data-name="أحمد محمد" data-discipline="سباقات">
              <div class="de-team-list member-card">
                <div class="de-team-item">
                  <div class="de-team-pic">
                    <img src="images/person/1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="de-team-desc">
                    <h4>أحمد محمد</h4>
                    <p class="lead">سائق سباقات</p>
                    <p>
                      سائق موهوب في سباقات السيارات مع مهارات استثنائية في القيادة،
                      يمثل الفريق في البطولات المحلية والإقليمية.
                    </p>
                    <div class="de-team-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-sm-30 youth-card" data-name="محمد علي" data-discipline="رالي">
              <div class="de-team-list member-card">
                <div class="de-team-item">
                  <div class="de-team-pic">
                    <img src="images/person/2.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="de-team-desc">
                    <h4>محمد علي</h4>
                    <p class="lead">سائق رالي</p>
                    <p>
                      سائق متخصص في رالي السيارات مع خبرة واسعة،
                      يشارك في التحديات الوطنية والدولية.
                    </p>
                    <div class="de-team-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-sm-30 youth-card" data-name="علي حسن" data-discipline="فورمولا">
              <div class="de-team-list member-card">
                <div class="de-team-item">
                  <div class="de-team-pic">
                    <img src="images/person/3.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="de-team-desc">
                    <h4>علي حسن</h4>
                    <p class="lead">سائق فورمولا</p>
                    <p>
                      سائق فورمولا موهوب مع أرقام قياسية محلية،
                      يمثل الفريق في المسابقات الإقليمية والدولية.
                    </p>
                    <div class="de-team-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination-modern">
            <button class="page-btn active" type="button">1</button>
            <button class="page-btn" type="button" disabled>2</button>
          </div>
        </div>
      </section>
    </div>
<script>
  (function(){
    const cards = Array.from(document.querySelectorAll('.youth-card'));
    const searchInput = document.getElementById('searchInputYouth');
    const filterDiscipline = document.getElementById('filterDisciplineYouth');
    const resetBtn = document.getElementById('resetFiltersYouth');
    const statTotal = document.getElementById('statTotalYouth');

    function applyFilters(){
      const q = (searchInput?.value || '').trim().toLowerCase();
      const disc = (filterDiscipline?.value || '').trim();
      let visible = 0;
      cards.forEach(card => {
        const name = (card.getAttribute('data-name') || '').toLowerCase();
        const d = card.getAttribute('data-discipline') || '';
        const matchName = !q || name.includes(q);
        const matchDisc = !disc || d === disc;
        const show = matchName && matchDisc;
        card.style.display = show ? '' : 'none';
        if(show) visible++;
      });
      if (statTotal) statTotal.textContent = String(visible);
    }

    searchInput?.addEventListener('input', applyFilters);
    filterDiscipline?.addEventListener('change', applyFilters);
    resetBtn?.addEventListener('click', () => {
      if (searchInput) searchInput.value = '';
      if (filterDiscipline) filterDiscipline.value = '';
      applyFilters();
    });

    applyFilters();
  })();
</script>

</x-layout>
