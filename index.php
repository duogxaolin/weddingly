<?php
// Wedding invitation - Ngọc Tân & Thu Trang
// Pixel-perfect reconstruction from LadiPage

// Handle wish submission
$wishSaved = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wish_name'])) {
    $name = trim($_POST['wish_name'] ?? '');
    $message = trim($_POST['wish_message'] ?? '');
    if ($name !== '' && $message !== '') {
        $file = __DIR__ . '/wishes.json';
        $wishes = [];
        if (file_exists($file)) {
            $wishes = json_decode(file_get_contents($file), true) ?: [];
        }
        $wishes[] = [
            'name' => mb_substr(htmlspecialchars($name), 0, 100),
            'message' => mb_substr(htmlspecialchars($message), 0, 500),
            'time' => date('Y-m-d H:i:s'),
        ];
        file_put_contents($file, json_encode($wishes, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        $wishSaved = true;
    }
}

// Load existing wishes
$wishes = [];
if (file_exists(__DIR__ . '/wishes.json')) {
    $wishes = array_reverse(json_decode(file_get_contents(__DIR__ . '/wishes.json'), true) ?: []);
}

// Shared content (used by both mobile and desktop layouts)
$brideName = 'Thu Trang';
$groomName = 'Ngọc Tân';
$brideQuote = '"Em đã pha trà,<br>Cũng đã cắm hoa<br>Chỉ chờ anh qua<br>Là tròn chữ <span style="color:#446084;font-weight:700;">Nhà</span>"';
$groomQuote = '"Anh yêu em như anh yêu đất nước<br>Vất vả đau thương tươi thắm vô ngần<br>Anh nhớ em mỗi bước đường anh bước<br>Mỗi tối anh nằm mỗi miếng anh ăn"';
$venueAddress = 'Khu Đô Thị Mới Trạm Bóng - Thôn Minh Tân<br>Quang Minh - Gia Lộc - Hải Dương';
$mapUrl = 'https://maps.app.goo.gl/UNtAc16hVrn59km3A';
$bankAccount = '9973972951';
$bankName = 'Vietcombank';
$accountHolder = 'Ngoc Tan';
$qrUrl = 'https://img.vietqr.io/image/VCB-9973972951-qr_only.png?addInfo=Chuc%20hai%20ban%20hanh%20phuc';
$countdownEnd = '1783071000000';
$galleryImages = ['NLV_3594','NLV_4011','NLV_3768','NLV_5889','NLV_5440','NLV_4316','NLV_4350','NLV_6174','NLV_6108'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Ngọc Tân &amp; Thu Trang</title>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang web chính thức của Ngọc Tân &amp; Thu Trang, nơi chia sẻ những khoảnh khắc đẹp và câu chuyện tình yêu.">
    <meta property="og:title" content="Ngọc Tân &amp; Thu Trang - Hành trình hạnh phúc">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/assets/image/NLV_4876.png">
    <meta property="og:url" content="https://damcuoitungphanh.com">
    <link rel="icon" type="image/x-icon" href="/assets/image/NLV_4876.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Cormorant+Garamond:wght@400;500;600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css?v=8">
</head>
<body>

<!-- Gate overlay -->
<div class="gate-container" id="gate">
    <div class="gate-right" style="background-image: url('/assets/image/thiep.jpg');"></div>
    <button id="openGateBtn" class="open-gate-btn" style="background-image: url('/assets/image/button.png');" aria-label="Mở thiệp"></button>
</div>

<audio id="audio" src="/assets/audio/ido.mp3" preload="auto"></audio>

<!-- Music toggle -->
<button id="musicToggle" class="music-toggle" style="background-image: url('https://w.ladicdn.com/s350x350/6322a62f2dad980013bb5005/play_pause_fast_forward_stop_in_circles-20241022100240-rn2mm.png');" aria-label="Bật/tắt nhạc"></button>

<div class="responsive-scale"><div class="wedding-wrap" id="main" style="display:none">

    <!-- ===== SECTION 1: HERO ===== -->
    <section class="section mobile-only" id="SECTION1">
        <div class="ladi-el bg1 ladi-bg"></div>
        <div class="ladi-el overlay1"></div>
        <div class="ladi-el floral-body ladi-bg"></div>
        <div class="ladi-el deco-top ladi-bg"></div>
        <div class="ladi-el deco-left ladi-bg"></div>
        <div class="ladi-el deco-square ladi-bg"></div>

            <h1 class="ladi-el title" data-aos="fade-up">NGỌC TÂN &amp; THU TRANG</h1>
        <p class="ladi-el subtitle" data-aos="fade-up">Wedding</p>
        <div class="ladi-el save-date" data-aos="fade-up">Save<br>the<br>date</div>
        <div class="ladi-el names" data-aos="fade-up">
            <strong>NGỌC TÂN</strong><br>&amp;<br><strong>THU TRANG</strong>
        </div>
        <p class="ladi-el invite-text" data-aos="fade-up">Trân trọng kính mời</p>

        <div class="ladi-el date-box" data-aos="fade-up">
            <span class="weekday">Thứ 6</span>
            <span class="line"></span>
            <span class="day">3</span>
            <span class="line"></span>
            <span class="month">Tháng 7</span>
        </div>
        <p class="ladi-el year" data-aos="fade-up">2026</p>
        <p class="ladi-el reception" data-aos="fade-up">Reception to Follow</p>

        <div class="ladi-el deco-bottom ladi-bg"></div>
    </section>

    <!-- ===== SECTION 2: COUPLE ===== -->
    <section class="section mobile-only" id="SECTION2">
        <div class="ladi-el floral-top ladi-bg"></div>
        <div class="ladi-el floral-bottom ladi-bg"></div>

        <div class="ladi-el bride-photo" data-aos="fade-left"></div>
        <div class="ladi-el bride-portrait-1 ladi-bg" data-aos="fade-right"></div>
        <div class="ladi-el bride-portrait-2 ladi-bg" data-aos="fade-right"></div>
        <p class="ladi-el bride-label" data-aos="fade-up">CÔ DÂU</p>
        <p class="ladi-el bride-name" data-aos="fade-up">Thu Trang</p>
        <div class="ladi-el bride-quote" data-aos="fade-up">
            "Em đã pha trà,<br>
            Cũng đã cắm hoa<br>
            Chỉ chờ anh qua<br>
            Là tròn chữ <span style="color:#446084;font-weight:700;">Nhà</span>"
        </div>

        <div class="ladi-el groom-photo" data-aos="fade-right"></div>
        <div class="ladi-el groom-portrait-1 ladi-bg" data-aos="fade-left"></div>
        <div class="ladi-el groom-portrait-2 ladi-bg" data-aos="fade-left"></div>
        <p class="ladi-el groom-label" data-aos="fade-up">CHÚ RỂ</p>
        <p class="ladi-el groom-name" data-aos="fade-up">Ngọc Tân</p>
        <div class="ladi-el groom-quote" data-aos="fade-up">
            "Anh yêu em như anh yêu đất nước<br>
            Vất vả đau thương tươi thắm vô ngần<br>
            Anh nhớ em mỗi bước đường anh bước<br>
            Mỗi tối anh nằm mỗi miếng anh ăn"
        </div>
    </section>

    <!-- ===== SECTION 3: CALENDAR + VENUE ===== -->
    <section class="section mobile-only" id="SECTION3">
        <div class="ladi-el floral-bg ladi-bg"></div>
        <div class="ladi-el deco-top ladi-bg"></div>
        <div class="ladi-el deco-bottom ladi-bg"></div>
        <div class="ladi-el deco-corner ladi-bg"></div>

        <h2 class="ladi-el title" data-aos="fade-up">Kính mời!</h2>
        <div class="ladi-el month-year" data-aos="fade-up">
            <span class="month">THÁNG 7</span>
            <span class="dash">-</span>
            <span class="year">2026</span>
        </div>

        <div class="ladi-el calendar" data-aos="fade-up">
            <div class="calendar-row days">
                <span>mon</span><span>tue</span><span>wed</span><span>thur</span><span>fri</span><span>sat</span><span>sun</span>
            </div>
            <div class="calendar-row nums">
                <span>29</span><span>30</span><span>1</span><span>2</span><span class="highlight">3</span><span>4</span><span>5</span>
            </div>
            <div class="calendar-row nums">
                <span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span>
            </div>
            <div class="calendar-row nums">
                <span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span>
            </div>
            <div class="calendar-row nums">
                <span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span>
            </div>
            <div class="calendar-row nums">
                <span>27</span><span>28</span><span>29</span><span>30</span><span>31</span><span>&nbsp;</span><span>&nbsp;</span>
            </div>
        </div>

        <p class="ladi-el event-title" data-aos="fade-up">TIỆC NHÀ TRAI ĐƯỢC TỔ CHỨC</p>
        <p class="ladi-el venue-title" data-aos="fade-up">TƯ GIA NHÀ TRAI</p>
        <p class="ladi-el venue-address" data-aos="fade-up">
            Khu Đô Thị Mới Trạm Bóng - Thôn Minh Tân<br>
            Quang Minh - Gia Lộc - Hải Dương
        </p>
        <a class="ladi-el map-btn" data-aos="fade-up" href="https://maps.app.goo.gl/UNtAc16hVrn59km3A" target="_blank" rel="noopener">XEM ĐỊA CHỈ</a>
    </section>

    <!-- ===== SECTION 4: TIMELINE ===== -->
    <section class="section mobile-only" id="SECTION4">
        <div class="ladi-el floral-bg ladi-bg"></div>
        <div class="ladi-el banner ladi-bg"></div>
        <div class="ladi-el banner-gradient"></div>
        <div class="ladi-el deco-right ladi-bg"></div>

        <h2 class="ladi-el title" data-aos="fade-up">Sự kiện</h2>
        <p class="ladi-el subtitle" data-aos="fade-up">quan trọng</p>

        <div class="ladi-el timeline" data-aos="fade-up">
            <div class="timeline-row">
                <span class="icon"></span>
                <span class="time">16:30</span>
                <span class="line"></span>
                <span class="desc">Đón tiếp khách mời</span>
            </div>
            <div class="timeline-row">
                <span class="icon"></span>
                <span class="time">17:00</span>
                <span class="line"></span>
                <span class="desc">Tiệc mừng cưới</span>
            </div>
            <div class="timeline-row">
                <span class="icon"></span>
                <span class="time">19:00</span>
                <span class="line"></span>
                <span class="desc">Chương trình văn nghệ mừng hạnh phúc</span>
            </div>
        </div>

        <p class="ladi-el closing" data-aos="fade-up">
            Sự hiện diện của bạn là niềm vinh hạnh cho gia đình chúng mình!
        </p>
    </section>

    <!-- ===== SECTION 5: GALLERY ===== -->
    <section class="section mobile-only" id="SECTION5">
        <div class="ladi-el floral-mid ladi-bg"></div>
        <div class="ladi-el floral-bottom ladi-bg"></div>

        <div class="ladi-el header-photo ladi-bg"></div>
        <div class="ladi-el header-frame"></div>
        <p class="ladi-el header-label" data-aos="fade-up">Dresscode</p>
        <div class="color-dots" style="position:absolute;top:29.397px;left:330px;z-index:5;">
            <span class="dot" style="background:#1a1a1a;"></span>
            <span class="dot" style="background:#ce9862;"></span>
            <span class="dot" style="background:#f3deb7;"></span>
            <span class="dot" style="border:1px solid #000;"></span>
        </div>
        <div class="ladi-el deco-divider ladi-bg"></div>

        <div class="ladi-el photo-left-1" data-aos="fade-right"></div>
        <div class="ladi-el photo-right-1" data-aos="fade-left"></div>

        <div class="ladi-el script-save">Save</div>
        <div class="ladi-el script-the">the</div>
        <div class="ladi-el script-date">Date</div>
        <div class="ladi-el deco-leaf ladi-bg"></div>

        <p class="ladi-el gallery-label">03.07.2026</p>

        <div class="ladi-el gallery">
            <div class="photo tall" style="background-image:url('/assets/image/NLV_3594.png');"></div>
            <div class="photo short" style="background-image:url('/assets/image/NLV_4011.png');"></div>
            <div class="photo short" style="background-image:url('/assets/image/NLV_3768.png');"></div>
            <div class="photo tall" style="background-image:url('/assets/image/NLV_5889.png');"></div>
            <div class="photo tall" style="background-image:url('/assets/image/NLV_5440.png');"></div>
            <div class="photo tall" style="background-image:url('/assets/image/NLV_4316.png');"></div>
            <div class="photo tall" style="background-image:url('/assets/image/NLV_4350.png');"></div>
            <div class="photo tall" style="background-image:url('/assets/image/NLV_6174.png');"></div>
            <div class="photo tall" style="background-image:url('/assets/image/NLV_6108.png');"></div>
        </div>
    </section>

    <!-- ===== SECTION 6: MỪNG CƯỚI + COUNTDOWN ===== -->
    <section class="section mobile-only" id="SECTION6">
        <div class="ladi-el floral-top ladi-bg"></div>
        <div class="ladi-el floral-bottom ladi-bg"></div>
        <div class="ladi-el deco-header ladi-bg"></div>

        <h2 class="ladi-el title" data-aos="fade-up">Mừng Cưới</h2>
        <p class="ladi-el desc" data-aos="fade-up">
            Sự hiện diện và lời chúc của bạn là niềm vinh hạnh cho gia đình chúng mình.
        </p>

        <form class="ladi-el rsvp-form" method="POST" action="">
            <input type="text" name="wish_name" placeholder="Tên của bạn" required maxlength="100">
            <textarea name="wish_message" placeholder="Lời chúc của bạn..." required maxlength="500" rows="3"></textarea>
            <button type="submit">GỬI LỜI CHÚC</button>
        </form>

        <?php if ($wishSaved): ?>
        <div style="position:absolute;top:605px;left:18.961px;width:382.078px;text-align:center;color:#1a7a3a;font-size:14px;z-index:5;">
            ✓ Cảm ơn bạn đã gửi lời chúc!
        </div>
        <?php endif; ?>

        <p class="ladi-el thanks" data-aos="fade-up">
            Cảm ơn bạn rất nhiều vì đã gửi những lời chúc mừng tốt đẹp nhất đến đám cưới của tụi mình.
        </p>

        <div class="ladi-el deco-divider ladi-bg"></div>

        <h3 class="ladi-el countdown-title" data-aos="fade-up">Đếm ngược thời gian</h3>
        <div class="ladi-el countdown" id="countdown" data-endtime="1783071000000">
            <div class="box"><b id="cd-day">00</b><span>Ngày</span></div>
            <div class="box"><b id="cd-hour">00</b><span>Giờ</span></div>
            <div class="box"><b id="cd-minute">00</b><span>Phút</span></div>
            <div class="box"><b id="cd-second">00</b><span>Giây</span></div>
        </div>
    </section>

    <!-- ===== SECTION 7: THANK YOU ===== -->
    <section class="section mobile-only" id="SECTION7">
        <div class="ladi-el closing-photo ladi-bg"></div>
        <div class="ladi-el overlay-frame ladi-bg"></div>

        <p class="ladi-el quote" data-aos="fade-up">
            "Yêu là cùng nhau vượt qua nỗi đau, là khi anh chọn ở lại thay vì bỏ chạy."
        </p>
        <h2 class="ladi-el thank-you" data-aos="fade-up">Thank you!</h2>
    </section>

</div></div>

<!-- ============ DESKTOP LAYOUT (≥768px) ============ -->
<div class="desktop-wrap desktop-only gate-hidden" id="desktop-main">

    <!-- HERO (split screen) -->
    <section class="d-hero">
        <div class="d-hero-photo" style="background-image:url('/assets/image/NLV_3721.png');"></div>
        <div class="d-hero-card">
            <div class="d-hero-inner">
                <span class="d-corner tl"></span>
                <span class="d-corner tr"></span>
                <span class="d-corner bl"></span>
                <span class="d-corner br"></span>

                <p class="d-kicker" data-aos="fade-up">— Wedding Invitation —</p>
                <div class="d-names-block" data-aos="fade-up">
                    <h2 class="d-name-top">Ngọc Tân</h2>
                    <div class="d-monogram"><span></span><em>&amp;</em><span></span></div>
                    <h2 class="d-name-bot">Thu Trang</h2>
                </div>

                <div class="d-divider" data-aos="fade-up"><span>Save the Date</span></div>

                <div class="d-hero-date" data-aos="fade-up">
                    <div class="d-date-cell"><span class="lbl">Thứ</span><span class="val">6</span></div>
                    <div class="d-date-sep"></div>
                    <div class="d-date-cell big"><span class="lbl">Ngày</span><span class="val">3</span></div>
                    <div class="d-date-sep"></div>
                    <div class="d-date-cell"><span class="lbl">Tháng</span><span class="val">07</span></div>
                    <div class="d-date-sep"></div>
                    <div class="d-date-cell"><span class="lbl">Năm</span><span class="val">2026</span></div>
                </div>

                <p class="d-hero-invite" data-aos="fade-up">Trân trọng kính mời</p>
                <p class="d-hero-time" data-aos="fade-up">16 giờ 30 phút</p>
                <p class="d-hero-reception" data-aos="fade-up">Reception to Follow</p>
            </div>
        </div>
    </section>

    <!-- COUPLE (2 columns) -->
    <section class="d-couple">
        <h2 class="d-section-title" data-aos="fade-up">Cô Dâu &amp; Chú Rể</h2>
        <div class="d-couple-grid">
            <div class="d-person" data-aos="fade-right">
                <div class="d-person-photo" style="background-image:url('/assets/image/codau.jpg');"></div>
                <p class="d-person-label">CÔ DÂU</p>
                <h3 class="d-person-name"><?= htmlspecialchars($brideName) ?></h3>
                <p class="d-person-quote"><?= $brideQuote ?></p>
            </div>
            <div class="d-heart">&amp;</div>
            <div class="d-person" data-aos="fade-left">
                <div class="d-person-photo" style="background-image:url('/assets/image/NLV_4141.png');"></div>
                <p class="d-person-label">CHÚ RỂ</p>
                <h3 class="d-person-name"><?= htmlspecialchars($groomName) ?></h3>
                <p class="d-person-quote"><?= $groomQuote ?></p>
            </div>
        </div>
    </section>

    <!-- CALENDAR + VENUE -->
    <section class="d-event">
        <h2 class="d-section-title" data-aos="fade-up">Kính mời!</h2>
        <div class="d-event-grid">
            <div class="d-calendar-card" data-aos="fade-right">
                <p class="d-cal-monthyear">THÁNG 7 · 2026</p>
                <div class="d-cal">
                    <div class="d-cal-row d-cal-days"><span>T2</span><span>T3</span><span>T4</span><span>T5</span><span>T6</span><span>T7</span><span>CN</span></div>
                    <div class="d-cal-row"><span class="muted">29</span><span class="muted">30</span><span>1</span><span>2</span><span class="hl">3</span><span>4</span><span>5</span></div>
                    <div class="d-cal-row"><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span></div>
                    <div class="d-cal-row"><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span></div>
                    <div class="d-cal-row"><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span></div>
                    <div class="d-cal-row"><span>27</span><span>28</span><span>29</span><span>30</span><span>31</span></div>
                </div>
            </div>
            <div class="d-venue-card" data-aos="fade-left">
                <p class="d-venue-kicker">TIỆC NHÀ TRAI ĐƯỢC TỔ CHỨC</p>
                <h3 class="d-venue-title">TƯ GIA NHÀ TRAI</h3>
                <p class="d-venue-address"><?= $venueAddress ?></p>
                <a class="d-map-btn" href="<?= $mapUrl ?>" target="_blank" rel="noopener">📍 XEM ĐỊA CHỈ</a>
            </div>
        </div>
    </section>

    <!-- TIMELINE -->
    <section class="d-timeline">
        <h2 class="d-section-title" data-aos="fade-up">Sự kiện quan trọng</h2>
        <div class="d-timeline-grid">
            <div class="d-tl-card" data-aos="fade-up">
                <div class="d-tl-time">16:30</div>
                <p class="d-tl-desc">Đón tiếp khách mời</p>
            </div>
            <div class="d-tl-card" data-aos="fade-up">
                <div class="d-tl-time">17:00</div>
                <p class="d-tl-desc">Tiệc mừng cưới</p>
            </div>
            <div class="d-tl-card" data-aos="fade-up">
                <div class="d-tl-time">19:00</div>
                <p class="d-tl-desc">Chương trình văn nghệ mừng hạnh phúc</p>
            </div>
        </div>
        <p class="d-timeline-note" data-aos="fade-up">Sự hiện diện của bạn là niềm vinh hạnh cho gia đình chúng mình!</p>
    </section>

    <!-- GALLERY -->
    <section class="d-gallery">
        <h2 class="d-section-title" data-aos="fade-up">Khoảnh khắc</h2>
        <div class="d-gallery-grid">
            <?php foreach ($galleryImages as $img): ?>
            <div class="d-gallery-photo" style="background-image:url('/assets/image/<?= $img ?>.png');" data-aos="fade-up"></div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- GIFT + RSVP -->
    <section class="d-gift">
        <h2 class="d-section-title" data-aos="fade-up">Mừng Cưới</h2>
        <div class="d-gift-grid">
            <div class="d-rsvp-col" data-aos="fade-right">
                <h3>Gửi lời chúc</h3>
                <form method="POST" action="">
                    <input type="text" name="wish_name" placeholder="Tên của bạn" required maxlength="100">
                    <textarea name="wish_message" placeholder="Lời chúc của bạn..." required maxlength="500" rows="4"></textarea>
                    <button type="submit">GỬI LỜI CHÚC</button>
                </form>
                <?php if ($wishSaved): ?>
                <p class="d-saved">✓ Cảm ơn bạn đã gửi lời chúc!</p>
                <?php endif; ?>
                <?php if (!empty($wishes)): ?>
                <div class="d-wishes-list">
                    <?php foreach (array_slice($wishes, 0, 5) as $w): ?>
                    <div class="d-wish"><strong><?= $w['name'] ?></strong>: <?= $w['message'] ?></div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="d-bank-col" data-aos="fade-left">
                <div class="d-qr">
                    <img src="<?= $qrUrl ?>" alt="QR chuyển khoản">
                </div>
                <div class="d-bank-info">
                    <p class="d-bank-role">CHÚ RỂ</p>
                    <p class="d-bank-holder"><?= htmlspecialchars($accountHolder) ?></p>
                    <p class="d-bank-name"><?= htmlspecialchars($bankName) ?></p>
                    <p class="d-bank-num"><?= htmlspecialchars($bankAccount) ?></p>
                    <button class="d-copy-btn" data-copy="<?= htmlspecialchars($bankAccount) ?>">📋 Sao chép STK</button>
                </div>
            </div>
        </div>
        <div class="d-countdown" data-aos="fade-up">
            <h3>Đếm ngược thời gian</h3>
            <div class="cd-desktop" data-endtime="<?= $countdownEnd ?>">
                <div class="box"><b class="cd-day">00</b><span>Ngày</span></div>
                <div class="box"><b class="cd-hour">00</b><span>Giờ</span></div>
                <div class="box"><b class="cd-minute">00</b><span>Phút</span></div>
                <div class="box"><b class="cd-second">00</b><span>Giây</span></div>
            </div>
        </div>
    </section>

    <!-- CLOSING -->
    <section class="d-closing">
        <div class="d-closing-bg" style="background-image:url('/assets/image/NLV_3430.png');"></div>
        <div class="d-closing-overlay">
            <p class="d-closing-quote">"Yêu là cùng nhau vượt qua nỗi đau, là khi anh chọn ở lại thay vì bỏ chạy."</p>
            <h2 class="d-thank-you">Thank you!</h2>
        </div>
    </section>

</div>

<!-- Wishes modal -->
<div id="wishes-modal" class="modal-backdrop">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h3 style="text-align:center;font-family:'Ephesis',cursive;font-size:30px;color:#1f1f1f;margin-bottom:15px;">Gửi lời chúc</h3>
        <?php if (!empty($wishes)): ?>
        <div style="max-height:300px;overflow-y:auto;margin-bottom:15px;">
            <?php foreach (array_slice($wishes, 0, 10) as $w): ?>
            <div style="background:rgba(255,255,255,0.7);padding:8px 12px;border-radius:8px;margin-bottom:8px;">
                <strong style="font-family:'Cormorant Garamond',serif;color:#1a1a1a;"><?= $w['name'] ?></strong>
                <p style="font-family:'Cormorant Garamond',serif;font-size:14px;margin-top:2px;"><?= $w['message'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <p style="text-align:center;font-family:'Cormorant Garamond',serif;color:#1a7a3a;">
            Cuộn lên để gửi lời chúc tại form bên dưới ↓
        </p>
    </div>
</div>

<script src="/assets/js/app.js?v=7"></script>
</body>
</html>
