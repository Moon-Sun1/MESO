<x-layout title="تفاصيل المنتج - نادي بلاد الرافدين">
  <x-slot name="head">
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

        /* Page shell */
        body.dark-scheme {
            background: #0f0f10;
            color: #eaeaea;
        }

        .breadcrumbs {
            background: linear-gradient(135deg, rgba(0, 184, 148, .08), rgba(0, 206, 201, .04));
            border-bottom: 1px solid #222;
            margin-top: 80px;
        }

        .breadcrumbs .container {
            padding: 16px 0;
        }

        .breadcrumbs a {
            color: #9adfd6;
            text-decoration: none;
        }

        .breadcrumbs a:hover {
            color: #00b894;
        }

        /* Hero section */
        .product-hero {
            position: relative;
            padding: 30px 0 10px 0;
        }

        .badge-deal {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: #fff;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 700;
        }

        .wish-btn {
            border: 1px solid #333;
            border-radius: 30px;
            padding: 8px 14px;
        }

        /* Gallery */
        .gallery-wrap {
            position: sticky;
            top: 90px;
        }

        .gallery-main {
            border-radius: 16px;
            overflow: hidden;
            background: #161616;
            border: 1px solid #2b2b2b;
        }

        .gallery-main img {
            width: 100%;
            height: 430px;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .thumbs {
            display: flex;
            gap: 10px;
            margin-top: 12px;
            overflow-x: auto;
            padding-bottom: 4px;
        }

        .thumbs img {
            width: 78px;
            height: 78px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .thumbs img.active {
            border-color: #00b894;
        }

        /* Info card */
        .info-card {
            background: #151515;
            border: 1px solid #2b2b2b;
            border-radius: 20px;
            padding: 20px;
        }

        .price {
            font-size: 26px;
            font-weight: 800;
            color: #00b894;
            text-shadow: 0 0 10px rgba(0, 184, 148, .4);
        }

        .stars {
            direction: ltr;
            color: #f39c12;
        }

        .feature-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .feature-pills .pill {
            background: #1c1c1c;
            border: 1px solid #2a2a2a;
            padding: 8px 12px;
            border-radius: 14px;
            font-size: 12px;
        }

        /* Variants */
        .variants .chip {
            background: #1b1b1b;
            border: 1px solid #2b2b2b;
            color: #eaeaea;
            padding: 8px 12px;
            border-radius: 12px;
            cursor: pointer;
        }

        .variants .chip.active {
            border-color: #00b894;
            box-shadow: 0 0 0 2px rgba(0, 184, 148, .25);
        }

        /* Sticky buy bar */
        .buybar {
            position: sticky;
            bottom: 0;
            z-index: 999;
            border-top: 1px solid #222;
            background: rgba(15, 15, 16, .9);
            backdrop-filter: saturate(140%) blur(8px);
        }

        .buybar .container {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .btn-main,
        .btn-ghost {
            background: linear-gradient(45deg, #00b894, #00cec9);
            border: none;
            padding: 12px 22px;
            border-radius: 30px;
            color: #fff;
            font-weight: 700;
            transition: transform .2s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-main:hover {
            transform: translateY(-2px);
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid #2b2b2b;
            color: #eaeaea;
        }

        /* Tabs */
        .tabs {
            display: flex;
            gap: 8px;
            border-bottom: 1px solid #222;
            margin-top: 20px;
        }

        .tabs .tab {
            padding: 10px 14px;
            border-radius: 10px 10px 0 0;
            background: #151515;
            border: 1px solid #222;
            border-bottom: none;
            cursor: pointer;
        }

        .tabs .tab.active {
            border-color: #00b894;
            color: #00e0c0;
        }

        .tab-panel {
            display: none;
            padding: 18px;
            background: #121212;
            border: 1px solid #222;
            border-radius: 0 12px 12px 12px;
        }

        .tab-panel.active {
            display: block;
        }

        /* Accordions for specs */
        details.spec {
            background: #121212;
            border: 1px solid #202020;
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 10px;
        }

        details.spec summary {
            cursor: pointer;
            font-weight: 700;
        }

        /* Related */
        .related .card {
            background: #161616;
            border: 1px solid #2b2b2b;
            border-radius: 16px;
            overflow: hidden;
            transition: transform .2s ease;
        }

        .related .card:hover {
            transform: translateY(-6px);
        }

        @media (max-width: 991px) {
            .gallery-main img {
                height: 300px;
            }
        }
    </style>
  </x-slot>




    <div class="breadcrumbs">
      <div class="container">
        <a href="{{ route('home') }}">الرئيسية</a> <span style="opacity:.6; margin:0 6px;">›</span>
        <a href="{{ route('shop') }}">المتجر</a> <span style="opacity:.6; margin:0 6px;">›</span>
        <span id="bcProduct">تفاصيل المنتج</span>
      </div>
    </div>

        <section class="product-hero">
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-6">
                        <div class="gallery-wrap">
                            <div class="gallery-main">
                                <img id="mainImage" src="" alt="صورة المنتج" />
                            </div>
                            <div class="thumbs" id="thumbs"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-card">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="badge-deal" id="dealBadge" style="display:none;">عرض خاص</span>
                                <button class="wish-btn" id="wishBtn"><i class="fa fa-heart"></i> أضف للمفضلة</button>
                            </div>
                            <h1 class="mb-2" id="productTitle">اسم المنتج</h1>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="stars" id="stars"></div>
                                <span style="opacity:.7" id="reviewsCount"></span>
                            </div>
                            <div class="price mb-3" id="price">0 دينار</div>
                            <div class="feature-pills mb-3" id="featurePills"></div>

                            <div class="variants mb-3">
                                <div class="mb-2" style="opacity:.85">المقاس</div>
                                <div class="d-flex flex-wrap gap-2" id="sizeVariants"></div>
                            </div>

                            <div class="variants mb-4">
                                <div class="mb-2" style="opacity:.85">اللون</div>
                                <div class="d-flex flex-wrap gap-2" id="colorVariants"></div>
                            </div>

                            <div class="d-flex align-items-center gap-2 mb-3">
                                <input id="qty" type="number" min="1" value="1"
                                    style="width:90px; background:#111; border:1px solid #2b2b2b; color:#fff; border-radius:10px; padding:8px 10px;" />
                                <button class="btn-main" id="addToCartBtn"><i class="fa fa-shopping-cart"></i> أضف
                                    للسلة</button>
                                <button class="btn-ghost" id="buyNowBtn"><i class="fa fa-bolt"></i> اشترِ الآن</button>
                            </div>

                            <ul style="opacity:.9; line-height:1.9; margin-bottom:0;">
                                <li>توصيل خلال 24-48 ساعة</li>
                                <li>إرجاع خلال 14 يومًا بدون أسئلة</li>
                                <li>دفع آمن بالنقاط والبطاقات</li>
                            </ul>
                        </div>

                        <div class="tabs">
                            <div class="tab active" data-tab="desc">الوصف</div>
                            <div class="tab" data-tab="specs">المواصفات</div>
                            <div class="tab" data-tab="faq">الأسئلة الشائعة</div>
                        </div>
                        <div class="tab-panel active" id="tab-desc"></div>
                        <div class="tab-panel" id="tab-specs"></div>
                        <div class="tab-panel" id="tab-faq"></div>
                    </div>
                </div>
            </div>
        </section>

    <section class="related" style="padding: 20px 0 40px 0;">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3 class="mb-0">منتجات قد تعجبك</h3>
          <a href="{{ route('shop') }}" style="opacity:.8">عرض الكل</a>
        </div>
        <div class="row g-3" id="relatedGrid"></div>
      </div>
    </section>

    <div class="buybar">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
          <div class="d-flex align-items-center gap-3">
            <img id="buybarImg" src="" alt="" style="width:54px; height:54px; border-radius:10px; object-fit:cover;" />
            <div>
              <div id="buybarTitle" style="font-weight:700;">—</div>
              <div id="buybarPrice" style="color:#00b894; font-weight:800;">—</div>
            </div>
          </div>
          <div class="d-flex align-items-center gap-2">
            <button class="btn-ghost" id="buybarWish"><i class="fa fa-heart"></i></button>
            <button class="btn-main" id="buybarAdd"><i class="fa fa-shopping-cart"></i> أضف للسلة</button>
            <button class="btn-main" style="background:linear-gradient(45deg,#e67e22,#f1c40f)" id="buybarBuy"><i class="fa fa-bolt"></i> اشترِ الآن</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" id="back-to-top"></a>

  <x-slot name="scripts">
    <script>
        // Basic product catalog (ids must match shop page)
      const catalog = {
        1: { id:1, title:"تيشرت نادي بلاد الرافدين", price:25000, images:["images/products/T-shirt.png","images/features/1.jpg","images/gallery/1.jpg"], rating:4.5, reviews:128, category:"clothes", features:["قطن مُهوّى","شعار مطبوع","مقاوم للبهتان"], sizes:["S","M","L","XL"], colors:["أسود","أبيض","تركواز"], desc:"تيشرت رسمي بجودة ممتازة، تصميم مريح يتلاءم مع الاستخدام اليومي ومناسب للمشجعين.", specs:{"الخامة":"100% قطن","الوزن":"220 غ","الغسيل":"30° درجة"}, faq:[["هل ينكمش بعد الغسيل؟","لا، مع الالتزام بالتعليمات لن يحدث انكماش ملحوظ."],["هل المقاسات نظامية؟","نعم، ننصح باختيار مقاسك المعتاد."]]},
        2: { id:2, title:"هودي نادي بلاد الرافدين", price:45000, images:["images/products/hody.png","images/features/2.jpg","images/gallery/2.jpg"], rating:5, reviews:64, category:"clothes", features:["نسيج دافئ","قبعة قابلة للشد","جيوب واسعة"], sizes:["S","M","L","XL"], colors:["أسود","رمادي"], desc:"هودي دافئ ومثالي للأجواء الباردة مع خامة فاخرة وراحة عالية.", specs:{"الخامة":"قطن وبوليستر","الوزن":"540 غ","العناية":"غسيل بارد"}, faq:[["هل مناسب للشتاء؟","نعم، سماكة مناسبة وبرودة ممتازة."]]},
        3: { id:3, title:"قبعة نادي بلاد الرافدين", price:15000, images:["images/products/cap.png","images/features/3.jpg"], rating:4, reviews:45, category:"accessories", features:["قابلة للتعديل","خامة متينة"], sizes:["قياس واحد"], colors:["أسود","أزرق"], desc:"قبعة أنيقة بخياطة متينة وشعار النادي محفور.", specs:{"الخامة":"بولستر","الوزن":"120 غ"}, faq:[["هل تناسب جميع المقاسات؟","نعم، مزودة بمشبك للتعديل."]]},
        4: { id:4, title:"شارة نادي بلاد الرافدين", price:5000, images:["images/products/badge.png"], rating:4.5, reviews:18, category:"badges", features:["مغناطيس قوي","لون ثابت"], sizes:["صغير","متوسط"], colors:["ذهبي","فضي"], desc:"شارة معدنية أنيقة لإظهار دعمك للنادي.", specs:{"الخامة":"معدن مطلي","الأبعاد":"3x3 سم"}, faq:[]},
        5: { id:5, title:"كوب نادي بلاد الرافدين", price:8000, images:["images/products/coffeCub.png"], rating:5, reviews:76, category:"mugs", features:["آمن للغسيل","طباعة عالية"], sizes:["350ml"], colors:["أبيض"], desc:"كوب خزفي بطباعة عالية الدقة لشعار النادي.", specs:{"الخامة":"خزف","السعة":"350 مل"}, faq:[]},
        6: { id:6, title:"جاكيت نادي بلاد الرافدين", price:65000, images:["images/products/jacket.png","images/features/4.jpg"], rating:4.5, reviews:22, category:"clothes", features:["مقاوم للمطر","سحّاب محكم"], sizes:["M","L","XL"], colors:["أسود"], desc:"جاكيت مقاوم لعوامل الطقس مع لمسات تصميمية راقية.", specs:{"الخامة":"نايلون","العزل":"خفيف"}, faq:[]},
        7: { id:7, title:"حقيبة ظهر نادي بلاد الرافدين", price:35000, images:["images/products/bag.png","images/features/5.jpg"], rating:5, reviews:31, category:"accessories", features:["جيوب متعددة","ضد الماء"], sizes:["سعة 22L"], colors:["أسود"], desc:"حقيبة عملية للمدرسة والعمل والرحلات.", specs:{"الخامة":"نايلون","الأبعاد":"44x30x16 سم"}, faq:[]},
        8: { id:8, title:"مجموعة شارات نادي بلاد الرافدين", price:12000, images:["images/products/badges-set.png"], rating:4.5, reviews:15, category:"badges", features:["٣ شارات","تغليف هدية"], sizes:["متنوع"], colors:["متعدد"], desc:"مجموعة مميزة من الشارات لهواة الاقتناء.", specs:{}, faq:[]},
        9: { id:9, title:"كوب سيراميك نادي بلاد الرافدين", price:10000, images:["images/products/ceramic-mug.png"], rating:5, reviews:40, category:"mugs", features:["سيراميك حراري","طباعة متينة"], sizes:["400ml"], colors:["أبيض"], desc:"كوب سيراميك متين للحياة اليومية.", specs:{}, faq:[]},
        10:{ id:10,title:"كرة قدم موقعة نادي بلاد الرافدين", price:50000, images:["images/products/football.png","images/features/6.jpg"], rating:4.5, reviews:12, category:"other", features:["توقيع اللاعبين","حافظة"], sizes:["حجم 5"], colors:["أبيض-أسود"], desc:"كرة قدم تذكارية موقعة من لاعبي النادي.", specs:{}, faq:[]}
      };

      const fmt = n => new Intl.NumberFormat('ar-IQ').format(n) + ' دينار';

      function qs(k){ return new URLSearchParams(location.search).get(k); }

      function renderStars(r){
        const full = Math.floor(r), half = r - full >= .5; let s = '';
        for(let i=0;i<full;i++) s += '<i class="fa fa-star"></i>';
        if(half) s += '<i class="fa fa-star-half-o"></i>';
        while((s.match(/fa-/g)||[]).length<5) s += '<i class="fa fa-star-o"></i>';
        return s;
      }

      function setActive(el, group){
        [...group.children].forEach(c=>c.classList.remove('active'));
        el.classList.add('active');
      }

      function renderProduct(p){
        document.getElementById('bcProduct').textContent = p.title;
        document.getElementById('productTitle').textContent = p.title;
        document.getElementById('price').textContent = fmt(p.price);
        document.getElementById('stars').innerHTML = renderStars(p.rating);
        document.getElementById('reviewsCount').textContent = '('+p.reviews+' تقييم)';

        const main = document.getElementById('mainImage');
        main.src = p.images[0];
        const thumbs = document.getElementById('thumbs');
        thumbs.innerHTML = '';
        p.images.forEach((src,idx)=>{
          const img = new Image(); img.src = src; if(idx===0) img.classList.add('active');
          img.addEventListener('click',()=>{ main.src = src; setActive(img, thumbs); });
          thumbs.appendChild(img);
        });

        const pills = document.getElementById('featurePills'); pills.innerHTML='';
        (p.features||[]).forEach(f=>{ const span=document.createElement('span'); span.className='pill'; span.textContent=f; pills.appendChild(span); });

        const sizeWrap = document.getElementById('sizeVariants'); sizeWrap.innerHTML='';
        (p.sizes||[]).forEach((s,i)=>{ const b=document.createElement('button'); b.type='button'; b.className='chip'+(i===0?' active':''); b.textContent=s; b.onclick=()=>setActive(b,sizeWrap); sizeWrap.appendChild(b); });

        const colorWrap = document.getElementById('colorVariants'); colorWrap.innerHTML='';
        (p.colors||[]).forEach((c,i)=>{ const b=document.createElement('button'); b.type='button'; b.className='chip'+(i===0?' active':''); b.textContent=c; b.onclick=()=>setActive(b,colorWrap); colorWrap.appendChild(b); });

        document.getElementById('tab-desc').textContent = p.desc||'';
        const specs = document.getElementById('tab-specs'); specs.innerHTML='';
        Object.keys(p.specs||{}).forEach(k=>{
          const d=document.createElement('details'); d.className='spec';
          const s=document.createElement('summary'); s.textContent=k; d.appendChild(s);
          const c=document.createElement('div'); c.style.opacity='.85'; c.style.marginTop='6px'; c.textContent=p.specs[k]; d.appendChild(c);
          specs.appendChild(d);
        });
        const faq = document.getElementById('tab-faq'); faq.innerHTML='';
        (p.faq||[]).forEach(([q,a])=>{
          const d=document.createElement('details'); d.className='spec';
          const s=document.createElement('summary'); s.textContent=q; d.appendChild(s);
          const c=document.createElement('div'); c.style.opacity='.85'; c.style.marginTop='6px'; c.textContent=a; d.appendChild(c);
          faq.appendChild(d);
        });

        // Buybar
        document.getElementById('buybarImg').src = p.images[0];
        document.getElementById('buybarTitle').textContent = p.title;
        document.getElementById('buybarPrice').textContent = fmt(p.price);

        // Related
        const related = Object.values(catalog).filter(x=>x.id!==p.id && x.category===p.category).slice(0,4);
        const rg = document.getElementById('relatedGrid'); rg.innerHTML='';
        related.forEach(r=>{
          const col=document.createElement('div'); col.className='col-6 col-md-3';
          col.innerHTML = `
            <a href="{{ route('product') }}?id=${r.id}" class="card text-decoration-none">
              <img src="${r.images[0]}" alt="" style="height:150px; object-fit:cover;" />
              <div class="p-2">
                <div style="font-weight:700; color:#fff;">${r.title}</div>
                <div style="color:#00b894; font-weight:800;">${fmt(r.price)}</div>
              </div>
            </a>`;
          rg.appendChild(col);
        });
      }

      function setupTabs(){
        const tabs = document.querySelectorAll('.tabs .tab');
        tabs.forEach(t=>t.addEventListener('click',()=>{
          tabs.forEach(x=>x.classList.remove('active')); t.classList.add('active');
          document.querySelectorAll('.tab-panel').forEach(p=>p.classList.remove('active'));
          document.getElementById('tab-'+t.dataset.tab).classList.add('active');
        }));
      }

      function addToCart(product, qty){
        try{
          const key='meso_cart';
          const cart = JSON.parse(localStorage.getItem(key)||'[]');
          const item = { id: product.id, title: product.title, price: product.price, image: product.images[0], qty };
          cart.push(item);
          localStorage.setItem(key, JSON.stringify(cart));
          alert('تمت الإضافة إلى السلة');
        }catch(e){ console.error(e); }
      }

      document.addEventListener('DOMContentLoaded', ()=>{
        setupTabs();
        const id = parseInt(qs('id')||'0',10);
        const product = catalog[id];
        if(!product){ location.href = '{{ route('shop') }}'; return; }
        renderProduct(product);

        document.getElementById('addToCartBtn').addEventListener('click',()=>{
          const q = Math.max(1, parseInt(document.getElementById('qty').value||'1',10));
          addToCart(product, q);
        });
        document.getElementById('buyNowBtn').addEventListener('click',()=>{
          const q = Math.max(1, parseInt(document.getElementById('qty').value||'1',10));
          addToCart(product, q); location.href='{{ route('shop') }}#cart';
        });
        document.getElementById('buybarAdd').addEventListener('click',()=>addToCart(product,1));
        document.getElementById('buybarBuy').addEventListener('click',()=>{ addToCart(product,1); location.href='{{ route('shop') }}#cart'; });
      });
    </script>
  </x-slot>
</x-layout>
