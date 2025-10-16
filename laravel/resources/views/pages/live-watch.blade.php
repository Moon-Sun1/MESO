<x-layout title="البث المباشر - نادي بلاد الرافدين">
  <x-slot name="head">
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

      /* Layout */
      body.dark-scheme { background: #0f1115; color: #e8edf2; }
      .container-max { max-width: 1200px; margin: 100px auto; padding: 20px; }
      .grid { display: grid; grid-template-columns: 1.6fr .8fr; gap: 22px; }
      @media (max-width: 991.98px) { .grid { grid-template-columns: 1fr; } }

      /* Player Card */
      .player-card {
        position: relative; background: rgba(22,24,28,.65); border: 1px solid rgba(255,255,255,.06);
        border-radius: 16px; backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px);
        box-shadow: 0 10px 26px rgba(0,0,0,.35);
      }
      .player-header { padding: 16px 18px; display:flex; align-items:center; justify-content:space-between; gap: 10px; }
      .player-title { font-weight: 800; letter-spacing: .3px; margin: 0; font-size: 18px; }
      .badge-live { display:inline-flex; align-items:center; gap:8px; padding: 4px 10px; border-radius: 999px; font-weight:700; font-size:12px;
        color:#fff; background: linear-gradient(90deg, #e74c3c, #ff7a6b); box-shadow: 0 6px 12px rgba(231,76,60,.35); }
      .badge-chip { display:inline-flex; align-items:center; gap:8px; padding: 4px 10px; border-radius: 999px; font-weight:700; font-size:12px;
        color:#e8edf2; background: rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.08); }
      .player-media { position: relative; aspect-ratio: 16/9; background: #0b0d11; border-top: 1px solid rgba(255,255,255,.04); border-bottom: 1px solid rgba(255,255,255,.04); }
      .player-media iframe, .player-media video { position:absolute; inset:0; width:100%; height:100%; border:0; border-radius: 0 0 16px 16px; }
      .player-footer { display:flex; align-items:center; justify-content:space-between; padding: 12px 16px; }
      .meta { display:flex; align-items:center; gap:14px; font-size: 13px; color:#bfc4ce; }

      /* Schedule */
      .schedule-card { background: rgba(22,24,28,.55); border: 1px solid rgba(255,255,255,.06); border-radius: 16px; overflow: hidden; }
      .schedule-header { padding: 16px 18px; font-weight: 800; letter-spacing: .3px; border-bottom: 1px solid rgba(255,255,255,.06); }
      .schedule-list { max-height: 70vh; overflow: auto; padding: 8px; }
      .match {
        display:flex; align-items:center; justify-content:space-between; gap: 10px; padding: 12px;
        border: 1px solid rgba(255,255,255,.06); border-radius: 12px; margin: 8px; background: rgba(255,255,255,.02);
        transition: transform .2s ease, border-color .2s ease, background .2s ease;
      }
      .match:hover { transform: translateY(-2px); border-color: rgba(0,184,148,.35); background: rgba(0,184,148,.06); }
      .teams { display:flex; align-items:center; gap:10px; font-weight:700; }
      .time { font-size: 12px; color:#bfc4ce; }
      .watch-btn { display:inline-flex; align-items:center; gap:8px; padding:8px 12px; border-radius:10px; border:1px solid rgba(0,184,148,.4); color:#eafffa; background: rgba(0,184,148,.15); text-decoration:none; }
      .watch-btn:hover { background: rgba(0,184,148,.25); color:#ffffff; }
      .muted { color:#9aa2ad; }

      /* Voting */
      .vote-card { background: rgba(22,24,28,.55); border: 1px solid rgba(255,255,255,.06); border-radius: 16px; padding: 14px; display:flex; flex-direction: column; gap: 12px; }
      .vote-title { font-weight: 800; letter-spacing: .3px; }
      .vote-options { display:grid; grid-template-columns: 1fr 1fr; gap: 10px; }
      .vote-btn { display:flex; align-items:center; justify-content:center; gap:8px; padding: 10px 12px; border-radius: 12px; border:1px solid rgba(255,255,255,.08); background: rgba(255,255,255,.03); color:#e8edf2; text-decoration:none; cursor:pointer; transition: transform .15s ease, background .2s ease, border-color .2s ease; }
      .vote-btn:hover { transform: translateY(-2px); background: rgba(0,184,148,.15); border-color: rgba(0,184,148,.35); }
      .vote-meta { display:flex; align-items:center; justify-content:space-between; font-size: 12px; color:#9aa2ad; }
      .vote-bar { height: 8px; background: rgba(255,255,255,.06); border-radius: 999px; overflow:hidden; position:relative; }
      .vote-fill-a { position:absolute; inset-inline-start: 0; top:0; bottom:0; width:0%; background: linear-gradient(90deg, #00b894, #22d3a6); }
      .vote-fill-b { position:absolute; inset-inline-end: 0; top:0; bottom:0; width:0%; background: linear-gradient(90deg, #e74c3c, #ff7a6b); }
    </style>
  </x-slot>

    <div class="container-max" style="height: 100vh">
      <div class="grid">
        <!-- Player area -->
        <section class="player-card">
          <div class="player-header">
            <h3 class="player-title" id="matchTitle">البث المباشر</h3>
            <div style="display:flex; align-items:center; gap:8px;">
              <span class="badge-live" id="liveStatusBadge">البث المباشر</span>
              <span class="badge-chip" id="opponentBadge">المنافس</span>
            </div>
          </div>
          <div class="player-media" id="playerContainer">
            <!-- JS will inject iframe or video here -->
          </div>
          <div class="player-footer">
            <div class="meta">
              <span id="matchTime" class="muted">—</span>
              <span id="matchInfo" class="muted">—</span>
            </div>
            <a id="openInNew" class="watch-btn" href="#" target="_blank" rel="noopener">فتح في نافذة</a>
          </div>
        </section>

        <!-- Schedule area -->
        <aside class="schedule-card">
          <div class="schedule-header">جدول المباريات</div>
          <div class="schedule-list" id="scheduleList">
            <!-- Example items; clicking will load in the player -->
          </div>
          <div class="p-2"></div>
          <div class="vote-card" id="voteCard" aria-live="polite">
            <div class="vote-title">صوّت للفائز</div>
            <div class="vote-options">
              <button class="vote-btn" id="voteA">—</button>
              <button class="vote-btn" id="voteB">—</button>
            </div>
            <div class="vote-meta">
              <span id="voteCountA">0</span>
              <span id="votePercent">0% - 0%</span>
              <span id="voteCountB">0</span>
            </div>
            <div class="vote-bar">
              <div class="vote-fill-a" id="voteFillA"></div>
              <div class="vote-fill-b" id="voteFillB"></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <a href="#" id="back-to-top"></a>

  <x-slot name="scripts">
    <script>
      // Helpers
      function getParam(name) {
        const params = new URLSearchParams(window.location.search);
        return params.get(name);
      }

      function isYouTube(url) {
        if (!url) return false;
        return /youtu\.be|youtube\.com/i.test(url);
      }

      function renderPlayer(url) {
        const container = document.getElementById('playerContainer');
        container.innerHTML = '';
        if (!url) {
          container.innerHTML = '<div style="display:flex;align-items:center;justify-content:center;height:100%;color:#9aa2ad">اختر مباراة من الجدول لبدء المشاهدة</div>';
          return;
        }
        if (isYouTube(url)) {
          const iframe = document.createElement('iframe');
          iframe.src = url.replace('watch?v=', 'embed/');
          iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
          iframe.allowFullscreen = true;
          container.appendChild(iframe);
        } else {
          const video = document.createElement('video');
          video.src = url;
          video.controls = true;
          video.playsInline = true;
          video.style.background = '#000';
          container.appendChild(video);
        }
        document.getElementById('openInNew').href = url;
        // Update badges
        const [aName, bName] = parseTeamsFromTitle(document.getElementById('matchTitle').textContent);
        const liveBadge = document.getElementById('liveStatusBadge');
        const oppBadge = document.getElementById('opponentBadge');
        liveBadge.textContent = 'البث المباشر';
        oppBadge.textContent = bName || 'المنافس';
      }

      function loadMatch(match) {
        document.getElementById('matchTitle').textContent = match.title || 'البث المباشر';
        document.getElementById('matchTime').textContent = match.time || '—';
        document.getElementById('matchInfo').textContent = match.info || '—';
        renderPlayer(match.video || '');
        window.history.replaceState({}, '', `?title=${encodeURIComponent(match.title||'')}&video=${encodeURIComponent(match.video||'')}&time=${encodeURIComponent(match.time||'')}&info=${encodeURIComponent(match.info||'')}`);
        // Ensure voting UI reflects the newly loaded match immediately
        if (typeof updateVoteUI === 'function') { updateVoteUI(); }
        // Update opponent badge immediately on match change
        const [aName, bName] = parseTeamsFromTitle(match.title || '');
        const liveBadge = document.getElementById('liveStatusBadge');
        const oppBadge = document.getElementById('opponentBadge');
        if (liveBadge) liveBadge.textContent = 'البث المباشر';
        if (oppBadge) oppBadge.textContent = bName || 'المنافس';
      }

      // Seed schedule (temporary examples)
      const schedule = [
        { title: 'بلاد الرافدين × أسود الرافدين', time: 'اليوم 19:00', info: 'الدوري المحلي - الجولة 12', video: 'https://www.youtube.com/embed/dQw4w9WgXcQ' },
        { title: 'بلاد الرافدين × النهرين', time: 'غداً 17:30', info: 'كأس الأندية', video: 'https://www.youtube.com/embed/aqz-KE-bpKQ' },
        { title: 'ودّي: بلاد الرافدين × الشباب', time: 'الجمعة 20:15', info: 'مباراة ودية', video: '' }
      ];

      function renderSchedule() {
        const list = document.getElementById('scheduleList');
        list.innerHTML = '';
        schedule.forEach((m, i) => {
          const item = document.createElement('div');
          item.className = 'match';
          item.innerHTML = `
            <div>
              <div class="teams">${m.title}</div>
              <div class="time">${m.time} · <span class="muted">${m.info}</span></div>
            </div>
            <a class="watch-btn" href="#" data-idx="${i}">مشاهدة</a>
          `;
          list.appendChild(item);
        });
        list.addEventListener('click', (e) => {
          const a = e.target.closest('a.watch-btn');
          if (!a) return;
          e.preventDefault();
          const idx = parseInt(a.getAttribute('data-idx'), 10);
          loadMatch(schedule[idx]);
        });
      }

      // Init from URL if provided
      (function init() {
        renderSchedule();
        const title = getParam('title');
        const video = getParam('video');
        const time = getParam('time');
        const info = getParam('info');
        if (title || video) {
          loadMatch({ title, video, time, info });
        } else {
          renderPlayer('');
        }
        initVoting();
        setVoteVisibility(!!(title || video));
      })();

      // Voting logic (local only, with BroadcastChannel sync across tabs)
      const voteChannel = ('BroadcastChannel' in window) ? new BroadcastChannel('meso_vote') : null;
      function parseTeamsFromTitle(t) {
        if (!t) return ['الفريق (أ)', 'الفريق (ب)'];
        const parts = t.split(/[×x]/);
        if (parts.length >= 2) return [parts[0].trim(), parts[1].trim()];
        return [t, 'المنافس'];
      }
      function voteKeyForCurrent() {
        const t = document.getElementById('matchTitle').textContent || '';
        return 'meso_vote_' + t;
      }
      function readVotes() {
        try { return JSON.parse(localStorage.getItem(voteKeyForCurrent())||'{"a":0,"b":0}'); } catch(e) { return {a:0,b:0}; }
      }
      function writeVotes(v) {
        localStorage.setItem(voteKeyForCurrent(), JSON.stringify(v));
        if (voteChannel) voteChannel.postMessage({ key: voteKeyForCurrent(), votes: v });
      }
      function updateVoteUI() {
        const [aName, bName] = parseTeamsFromTitle(document.getElementById('matchTitle').textContent);
        document.getElementById('voteA').textContent = aName;
        document.getElementById('voteB').textContent = bName;
        const v = readVotes();
        const total = (v.a|0) + (v.b|0);
        const pa = total ? Math.round((v.a/total)*100) : 0;
        const pb = 100 - pa;
        document.getElementById('voteCountA').textContent = v.a|0;
        document.getElementById('voteCountB').textContent = v.b|0;
        document.getElementById('votePercent').textContent = pa + '% - ' + pb + '%';
        document.getElementById('voteFillA').style.width = pa + '%';
        document.getElementById('voteFillB').style.width = pb + '%';
      }
      function initVoting() {
        updateVoteUI();
        document.getElementById('voteA').onclick = function() {
          const v = readVotes(); v.a = (v.a|0) + 1; writeVotes(v); updateVoteUI();
        };
        document.getElementById('voteB').onclick = function() {
          const v = readVotes(); v.b = (v.b|0) + 1; writeVotes(v); updateVoteUI();
        };
        if (voteChannel) {
          voteChannel.onmessage = (ev) => {
            if (ev.data && ev.data.key === voteKeyForCurrent()) updateVoteUI();
          };
        }
        // Fallback for browsers without BroadcastChannel: listen to storage changes
        window.addEventListener('storage', (e) => {
          if (e && e.key === voteKeyForCurrent()) { updateVoteUI(); }
        });
      }

      function setVoteVisibility(show) {
        var card = document.getElementById('voteCard');
        if (!card) return;
        card.style.display = show ? 'flex' : 'none';
      }
    </script>
  </x-slot>
</x-layout>
