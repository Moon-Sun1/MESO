<header class="transparent">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="de-flex sm-pt10">

            <div class="de-flex-col">
              <div class="de-flex-col">
                <!-- logo begin -->
                <div id="logo" style="display: flex; align-items: center; gap: 10px; direction: rtl;">
                  <a href="{{ route('home') }}" style="display: flex; align-items: center; text-decoration: none;">
                    <img
                      class="logo-main"
                      src="{{ asset('images/Al-Rafidain-logo.png') }}"
                      alt="شعار نادي بلاد الرافدين"
                      style="width: 75px;"
                    />
                    <span
                      style="
                        font-size: 22px;
                        font-weight: 700;
                        background: linear-gradient(90deg, #00b894, #e74c3c);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        margin-right: 10px;
                        font-family: 'Cairo', 'Tajawal', sans-serif;
                        white-space: nowrap;
                        letter-spacing: 0.5px;
                        text-shadow: 0 0 6px rgba(0,0,0,0.4);
                      "
                    >نادي بلاد الرافدين</span>
                  </a>
                </div>
                <!-- logo close -->
              </div>
            </div>

            <div class="de-flex-col header-col-mid">
              <ul id="mainmenu">
                <li>
                  <a class="menu-item {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">الأخبار</a>
                </li>
                <li>
                  <a class="menu-item {{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">المتجر</a>
                </li>
                <li>
                  <a class="menu-item" href="{{ route('gallery') }}">المعرض</a>
                </li>
                <li>
                  <a class="menu-item {{ request()->routeIs('tickets') ? 'active' : '' }}" href="{{ route('tickets') }}">التذاكر</a>
                </li>
                <li>
                  <a class="menu-item {{ request()->routeIs('live') ? 'active' : '' }}" href="{{ route('live') }}">الاحداث</a>
                </li>
                <li class="dropdown {{ request()->routeIs('drivers') || request()->routeIs('youth') || request()->routeIs('juniors') ? 'active' : '' }}">
                  <a class="menu-item" href="{{ route('drivers') }}">الفريق</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('youth') }}">شباب</a></li>
                    <li><a href="{{ route('juniors') }}">ناشئين</a></li>
                    <li><a href="{{ route('drivers') }}">سائقين</a></li>
                  </ul>
                </li>
                <li>
                  <a class="menu-item {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">حول</a>
                </li>
                <li>
                  <a class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">الرئيسية</a>
                </li>
              </ul>
            </div>

            <div class="de-flex-col">
              <div class="menu_side_area">
                <a href="{{ route('tickets') }}" class="btn-line">اشترِ التذكرة</a>
                <span id="menu-btn"></span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
