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
      }      /* Custom styles for checkout page */
      .checkout-hero { background: linear-gradient(135deg, #00b894, #e74c3c); padding: 60px 0; text-align: center; color: #fff; margin-bottom: 0; }
      .checkout-hero h1 { font-size: 3rem; font-weight: 900; margin-bottom: 10px; }
      .checkout-hero p { font-size: 1.2rem; opacity: 0.9; }
      .checkout-form { background: rgba(20,20,22,.9); padding: 40px; border-radius: 18px; margin-bottom: 40px; }
      .checkout-form .form-group { margin-bottom: 20px; }
      .checkout-form label { display: block; margin-bottom: 8px; font-weight: 600; color: #fff; }
      .checkout-form input, .checkout-form select { width: 100%; padding: 12px; border: 1px solid #242426; border-radius: 10px; background: #16181b; color: #fff; }
      .checkout-form input::placeholder { color: #aaa; }
      .checkout-form .btn-submit { background: linear-gradient(45deg, #00b894, #00cec9); color: #fff; border: none; padding: 15px 30px; border-radius: 15px; font-weight: 900; font-size: 1.2rem; text-decoration: none; display: inline-block; transition: transform .2s ease; width: 100%; text-align: center; }
      .checkout-form .btn-submit:hover { transform: scale(1.05); }
      /* Tighten space between hero and form */
      #section-checkout { padding-top: 24px; }
    </style>
  </head>

  <body class="dark-scheme">
    <div id="wrapper">
      <div class="scrollbar"></div>
      <!-- page preloader begin -->
      <div id="de-loader"></div>
      <!-- page preloader close -->

      <!-- content begin -->
      <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- Checkout Hero Section -->
        <section class="checkout-hero wow fadeInUp">
          <div class="container">
            <h1>إتمام الشراء</h1>
            <p>أدخل تفاصيلك لإكمال عملية شراء التذكرة.</p>
          </div>
        </section>

        <section id="section-checkout" class="pt60 pb60">
          <div class="container">
            <div class="checkout-form wow fadeInUp">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="quantity">الكمية:</label>
                  <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" required>
                </div>
                <div class="form-group">
                  <label for="name">الاسم الكامل:</label>
                  <input type="text" id="name" name="name" placeholder="أدخل اسمك الكامل" required>
                </div>
                <div class="form-group">
                  <label for="email">البريد الإلكتروني:</label>
                  <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>
                </div>
                <div class="form-group">
                  <label for="phone">رقم الهاتف:</label>
                  <input type="tel" id="phone" name="phone" placeholder="أدخل رقم هاتفك" required>
                </div>
                <button type="submit" class="btn-submit">إتمام الشراء</button>
              </form>
            </div>

            <div class="row">
              <div class="col-lg-12 text-center">
                <a href="{{ route('tickets') }}" class="btn-main big wow fadeInUp">العودة إلى التذاكر</a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- content close -->

      <a href="#" id="back-to-top"></a>

</x-layout>
