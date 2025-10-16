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
      }    /* Modern Card Styles */
    .card-modern {
      background: rgba(20,20,22,.9);
      border: 1px solid #242426;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(0,0,0,.3);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }
    .card-header-modern {
      background: linear-gradient(135deg, rgba(0,184,148,.1), rgba(231,76,60,.1));
      padding: 30px 40px;
      border-bottom: 1px solid rgba(255,255,255,.1);
    }
    .card-body-modern {
      padding: 40px;
    }

    /* Modern Form Styles */
    .form-floating-modern {
      position: relative;
      margin-bottom: 0;
    }
    .form-control-modern {
      background: rgba(255,255,255,.05);
      border: 1px solid rgba(255,255,255,.1);
      border-radius: 12px;
      padding: 16px 20px;
      color: #fff;
      font-size: 16px;
      transition: all .3s ease;
      width: 100%;
    }
    .form-control-modern:focus {
      background: rgba(255,255,255,.08);
      border-color: #00b894;
      box-shadow: 0 0 0 3px rgba(0,184,148,.2);
      outline: none;
    }
    .form-control-modern::placeholder {
      color: rgba(255,255,255,.5);
    }
    .form-floating-modern label {
      position: absolute;
      top: 16px;
      right: 20px;
      color: rgba(255,255,255,.7);
      font-size: 14px;
      font-weight: 500;
      transition: all .3s ease;
      pointer-events: none;
      background: transparent;
      padding: 0 4px;
    }
    .form-floating-modern .form-control-modern:focus + label,
    .form-floating-modern .form-control-modern:not(:placeholder-shown) + label {
      top: -8px;
      right: 16px;
      font-size: 12px;
      color: #00b894;
      background: rgba(20,20,22,.9);
    }

    /* Modern Checkbox */
    .form-check-modern {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .form-check-input-modern {
      width: 20px;
      height: 20px;
      background: rgba(255,255,255,.05);
      border: 1px solid rgba(255,255,255,.2);
      border-radius: 4px;
      cursor: pointer;
      transition: all .3s ease;
    }
    .form-check-input-modern:checked {
      background: linear-gradient(135deg, #00b894, #e74c3c);
      border-color: transparent;
    }
    .form-check-label-modern {
      color: rgba(255,255,255,.8);
      font-size: 14px;
      cursor: pointer;
    }

    /* Modern Button */
    .btn-modern {
      background: linear-gradient(135deg, #00b894, #e74c3c);
      border: none;
      border-radius: 12px;
      padding: 16px 40px;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      transition: all .3s ease;
      box-shadow: 0 8px 25px rgba(0,184,148,.3);
      position: relative;
      overflow: hidden;
    }
    .btn-modern:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 35px rgba(0,184,148,.4);
    }
    .btn-modern:active {
      transform: translateY(0);
    }

    /* RTL Adjustments */
    .form-floating-modern label {
      right: 20px;
      left: auto;
    }
    .form-floating-modern .form-control-modern:focus + label,
    .form-floating-modern .form-control-modern:not(:placeholder-shown) + label {
      right: 16px;
      left: auto;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .card-body-modern {
        padding: 30px 20px;
      }
      .card-header-modern {
        padding: 20px;
      }
    }
  </style>
</head>

    <div class="scrollbar"></div>
    <div id="de-loader"></div>

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
      <!-- float text begin -->
      <div class="float-text">
        <div class="de_social-icons">
          <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
          <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
          <a href="https://www.instagram.com/mesopotamia_engines_club?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa fa-instagram fa-lg"></i></a>
        </div>
        <span><a href="{{ route('tickets') }}">احصل على التذكرة</a></span>
      </div>
      <!-- float text close -->

      <div id="top"></div>

      <section id="section-hero" class="jarallax">
        <img src="images/background/3.jpg" class="jarallax-img" alt="">
        <div class="container position-relative z1000 wow fadeInDown">
          <div class="row align-items-center position-relative">
            <div class="spacer-double d-lg-none d-sm-block"></div>
            <div class="col-lg-12 z1000">
              <div class="spacer-double"></div>
              <h5 class="mb-4 s2">
                <span class="wow fadeInRight" data-wow-delay=".2s"><i class="id-color fa fa-users"></i>انضم إلى فريقنا</span>
                <span class="wow fadeInRight" data-wow-delay=".2s"><i class="id-color fa fa-trophy"></i>أكبر نادي رياضي في العراق</span>
              </h5>
              <h1 class="ultra-big text-uppercase mb-4 wow fadeInRight">
                <span class="wow fadeInLeft" data-wow-delay=".4s">سجل</span>
                <span class="text-line">معنا</span>
                <span class="text-gradient">الآن</span>
              </h1>
              <p class="lead wow fadeInLeft">
                انضم إلى عائلة نادي بلاد الرافدين وكن جزءاً من الإنجازات الرياضية. املأ النموذج أدناه لبدء رحلتك معنا.
              </p>
            </div>
          </div>
        </div>
        <div class="de-gradient-edge-bottom"></div>
      </section>

      <!-- Registration Section -->
      <section id="section-registration" class="no-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="card-modern">
                <div class="card-header-modern">
                  <h2 class="text-center mb-0"><i class="fa fa-users text-gradient me-2"></i>نموذج التسجيل في الفريق</h2>
                  <p class="text-center mt-2 opacity-75">املأ النموذج أدناه لبدء رحلتك مع نادي بلاد الرافدين</p>
                </div>
                <div class="card-body-modern">
                  <form id="registration-form" method="post" action="#" class="modern-form">
                    <div class="row g-4">
                      <div class="col-lg-6">
                        <div class="form-floating-modern">
                          <input type="text" class="form-control-modern" id="first-name" name="first-name" required>
                          <label for="first-name"><i class="fa fa-user me-2"></i>الاسم الأول *</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating-modern">
                          <input type="text" class="form-control-modern" id="last-name" name="last-name" required>
                          <label for="last-name"><i class="fa fa-user me-2"></i>اسم العائلة *</label>
                        </div>
                      </div>
                    </div>

                    <div class="row g-4 mt-2">
                      <div class="col-lg-6">
                        <div class="form-floating-modern">
                          <input type="email" class="form-control-modern" id="email" name="email" required>
                          <label for="email"><i class="fa fa-envelope me-2"></i>البريد الإلكتروني *</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating-modern">
                          <input type="tel" class="form-control-modern" id="phone" name="phone" required>
                          <label for="phone"><i class="fa fa-phone me-2"></i>رقم الهاتف *</label>
                        </div>
                      </div>
                    </div>

                    <div class="row g-4 mt-2">
                      <div class="col-lg-6">
                        <div class="form-floating-modern">
                          <input type="date" class="form-control-modern" id="birth-date" name="birth-date" required>
                          <label for="birth-date"><i class="fa fa-calendar me-2"></i>تاريخ الميلاد *</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating-modern">
                          <select class="form-control-modern" id="sport-interest" name="sport-interest" required>
                            <option value="">اختر الرياضة</option>
                            <option value="football">كرة القدم</option>
                            <option value="basketball">كرة السلة</option>
                            <option value="swimming">السباحة</option>
                            <option value="karting">الكارتينغ</option>
                            <option value="other">أخرى</option>
                          </select>
                          <label for="sport-interest"><i class="fa fa-trophy me-2"></i>الرياضة المفضلة *</label>
                        </div>
                      </div>
                    </div>

                    <div class="mt-4">
                      <div class="form-floating-modern">
                        <textarea class="form-control-modern" id="experience" name="experience" rows="4"></textarea>
                        <label for="experience"><i class="fa fa-history me-2"></i>خبرتك الرياضية (اختياري)</label>
                      </div>
                    </div>

                    <div class="mt-4">
                      <div class="form-floating-modern">
                        <textarea class="form-control-modern" id="message" name="message" rows="4"></textarea>
                        <label for="message"><i class="fa fa-comment me-2"></i>رسالة إضافية (اختياري)</label>
                      </div>
                    </div>

                    <div class="mt-4">
                      <div class="form-check-modern">
                        <input type="checkbox" class="form-check-input-modern" id="terms" name="terms" required>
                        <label class="form-check-label-modern" for="terms">أوافق على <a href="#" class="text-gradient">الشروط والأحكام</a> *</label>
                      </div>
                    </div>

                    <div class="text-center mt-5">
                      <button type="submit" class="btn-modern"><i class="fa fa-paper-plane me-2"></i>إرسال الطلب</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Benefits Section -->
      <section id="section-benefits" class="no-top no-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="text-uppercase mb-4"><span class="text-line">مزايا</span> <span class="text-gradient">العضوية</span></h2>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6">
              <div class="de-box-2 text-center">
                <i class="fa fa-users fa-3x text-gradient mb-3"></i>
                <h4>تدريبات احترافية</h4>
                <p>تدريبات يومية مع مدربين محترفين في جميع الرياضات.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="de-box-2 text-center">
                <i class="fa fa-trophy fa-3x text-gradient mb-3"></i>
                <h4>مشاركة في البطولات</h4>
                <p>فرصة المشاركة في البطولات المحلية والدولية.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="de-box-2 text-center">
                <i class="fa fa-heart fa-3x text-gradient mb-3"></i>
                <h4>مجتمع رياضي</h4>
                <p>انضم إلى مجتمع من عشاق الرياضة والرياضيين المحترفين.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>
</x-layout>
