<?php
// Standalone wedding invitation card - Ngọc Tân & Thu Trang
$brideName = 'Thu Trang';
$groomName = 'Ngọc Tân';
$weekday = 'Thứ 6';
$day = '3';
$month = '07';
$year = '2026';
$time = '16 giờ 30 phút';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thiệp cưới <?= htmlspecialchars($groomName) ?> & <?= htmlspecialchars($brideName) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Great+Vibes&family=Cormorant+Garamond:wght@400;500;600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html, body {
            min-height: 100%;
            font-family: 'Cormorant Garamond', serif;
            background: #d5d5d5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .toolbar {
            margin-bottom: 16px;
            display: flex;
            gap: 10px;
            z-index: 10;
            flex-wrap: wrap;
            justify-content: center;
        }
        .btn {
            padding: 10px 22px;
            border: 1px solid #6e7d57;
            border-radius: 24px;
            background: #6e7d57;
            color: #fff;
            font-family: 'Cormorant Garamond', serif;
            font-size: 15px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all .2s;
        }
        .btn:hover { background: #1a1a1a; border-color: #1a1a1a; }
        .btn-outline {
            background: transparent;
            color: #6e7d57;
        }
        .btn-outline:hover { background: #6e7d57; color: #fff; }

        /* Card stage */
        .stage {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            flex: 1;
            min-height: 0;
        }

        /* Landscape invitation card — 1920 x 1080 Full HD */
        #invitation-card {
            position: relative;
            width: 1920px;
            height: 1080px;
            background: #ffffff;
            color: #1a1a1a;
            overflow: hidden;
            box-shadow: 0 30px 80px -30px rgba(0,0,0,0.35);
            display: flex;
            flex-direction: column;
        }

        /* Top white content area */
        .card-top {
            position: relative;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 220px;
        }

        /* Botanical side sprays drawn inline as SVG */
        .spray {
            position: absolute;
            bottom: 0;
            width: 420px;
            height: 900px;
            pointer-events: none;
            z-index: 1;
            opacity: 0.92;
        }
        .spray svg {
            width: 100%;
            height: 100%;
            display: block;
        }
        .spray.left { left: -30px; }
        .spray.right { right: -30px; transform: scaleX(-1); }

        /* Center content */
        .card-content {
            position: relative;
            z-index: 2;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 18px;
        }

        .top-label {
            font-family: 'Cormorant Garamond', serif;
            font-size: 24px;
            letter-spacing: 6px;
            text-transform: uppercase;
            color: #1a1a1a;
            font-weight: 600;
        }

        .script-title {
            font-family: 'Great Vibes', cursive;
            font-size: 110px;
            line-height: 1.05;
            color: #1a1a1a;
            font-weight: 400;
        }
        .script-title .line2 {
            display: block;
            font-size: 90px;
            margin-top: -10px;
        }

        .names {
            font-family: 'Ephesis', cursive;
            font-size: 72px;
            color: #1a1a1a;
            margin-top: 10px;
        }

        .date-line {
            font-family: 'Cormorant Garamond', serif;
            font-size: 26px;
            letter-spacing: 2px;
            color: #1a1a1a;
            font-weight: 600;
            margin-top: 6px;
        }
        .date-line .dot {
            display: inline-block;
            margin: 0 14px;
            color: #6e7d57;
        }

        .time {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            color: #555;
            letter-spacing: 1px;
            margin-top: 4px;
        }

        /* Bottom sage band */
        .card-bottom {
            position: relative;
            height: 170px;
            background: #d5dcc6;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            z-index: 2;
        }
        .card-bottom .invite-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 30px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #1a1a1a;
            font-weight: 600;
        }
        .card-bottom .reception {
            font-family: 'Cormorant Garamond', serif;
            font-size: 18px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #4a4a4a;
        }

        /* Preview scaling for screen */
        .preview-wrapper {
            transform-origin: center center;
            width: 1920px;
            height: 1080px;
        }

        @media print {
            .toolbar { display: none; }
            body { background: #fff; }
        }
    </style>
</head>
<body>

<div class="toolbar">
    <button class="btn" id="downloadBtn">⬇ Tải ảnh Full HD</button>
    <button class="btn btn-outline" id="printBtn">🖨 In thiệp</button>
</div>

<div class="stage" id="stage">
    <div class="preview-wrapper" id="previewWrapper">
        <div id="invitation-card">
            <div class="card-top">
                <span class="spray left">
                    <svg viewBox="0 0 420 900" preserveAspectRatio="xMidYMax meet" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="fernLight" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#c5d4ae"/>
                                <stop offset="100%" stop-color="#9bb07a"/>
                            </linearGradient>
                            <linearGradient id="fernMid" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#a3b588"/>
                                <stop offset="100%" stop-color="#7a8f5a"/>
                            </linearGradient>
                            <linearGradient id="fernDark" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#7a8f5a"/>
                                <stop offset="100%" stop-color="#566b3f"/>
                            </linearGradient>
                        </defs>

                        <!-- main curved stems -->
                        <path d="M210 900 C195 780 160 650 110 500 C80 410 55 340 30 290" fill="none" stroke="#8c9e6d" stroke-width="3" stroke-linecap="round"/>
                        <path d="M250 900 C265 780 300 640 350 480 C375 400 400 340 415 290" fill="none" stroke="#8fa370" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M160 900 C125 760 80 600 50 430 C35 350 22 290 8 240" fill="none" stroke="#a3b588" stroke-width="2" stroke-linecap="round"/>

                        <!-- dense fern leaflets along left stem -->
                        <g opacity="0.92">
                            <ellipse cx="55" cy="330" rx="52" ry="10" fill="url(#fernDark)" transform="rotate(-28 55 330)"/>
                            <ellipse cx="72" cy="375" rx="58" ry="11" fill="url(#fernMid)" transform="rotate(-24 72 375)"/>
                            <ellipse cx="88" cy="425" rx="64" ry="12" fill="url(#fernDark)" transform="rotate(-20 88 425)"/>
                            <ellipse cx="105" cy="480" rx="68" ry="13" fill="url(#fernMid)" transform="rotate(-16 105 480)"/>
                            <ellipse cx="122" cy="540" rx="72" ry="14" fill="url(#fernDark)" transform="rotate(-12 122 540)"/>
                            <ellipse cx="140" cy="605" rx="74" ry="15" fill="url(#fernLight)" transform="rotate(-8 140 605)"/>
                            <ellipse cx="160" cy="675" rx="76" ry="15" fill="url(#fernMid)" transform="rotate(-4 160 675)"/>
                            <ellipse cx="182" cy="750" rx="74" ry="15" fill="url(#fernDark)" transform="rotate(0 182 750)"/>
                            <ellipse cx="205" cy="830" rx="70" ry="14" fill="url(#fernMid)" transform="rotate(4 205 830)"/>
                        </g>

                        <!-- dense fern leaflets along right stem -->
                        <g opacity="0.92">
                            <ellipse cx="335" cy="360" rx="56" ry="11" fill="url(#fernLight)" transform="rotate(22 335 360)"/>
                            <ellipse cx="318" cy="415" rx="62" ry="12" fill="url(#fernMid)" transform="rotate(18 318 415)"/>
                            <ellipse cx="300" cy="475" rx="66" ry="13" fill="url(#fernDark)" transform="rotate(14 300 475)"/>
                            <ellipse cx="282" cy="540" rx="70" ry="14" fill="url(#fernLight)" transform="rotate(10 282 540)"/>
                            <ellipse cx="265" cy="610" rx="72" ry="15" fill="url(#fernMid)" transform="rotate(6 265 610)"/>
                            <ellipse cx="250" cy="685" rx="72" ry="15" fill="url(#fernDark)" transform="rotate(2 250 685)"/>
                            <ellipse cx="238" cy="765" rx="70" ry="14" fill="url(#fernLight)" transform="rotate(-2 238 765)"/>
                        </g>

                        <!-- airy side sprigs -->
                        <g fill="#9bb07a" opacity="0.8">
                            <ellipse cx="28" cy="400" rx="42" ry="8" transform="rotate(-38 28 400)"/>
                            <ellipse cx="38" cy="455" rx="46" ry="9" transform="rotate(-32 38 455)"/>
                            <ellipse cx="50" cy="515" rx="48" ry="9" transform="rotate(-26 50 515)"/>
                            <ellipse cx="370" cy="340" rx="46" ry="9" transform="rotate(38 370 340)"/>
                            <ellipse cx="385" cy="400" rx="50" ry="10" transform="rotate(32 385 400)"/>
                            <ellipse cx="395" cy="465" rx="50" ry="10" transform="rotate(26 395 465)"/>
                        </g>

                        <!-- baby's breath white dots -->
                        <g fill="#fff" opacity="0.95">
                            <circle cx="88" cy="425" r="4"/>
                            <circle cx="105" cy="480" r="5"/>
                            <circle cx="122" cy="540" r="4"/>
                            <circle cx="160" cy="675" r="5"/>
                            <circle cx="205" cy="830" r="4"/>
                            <circle cx="300" cy="475" r="4"/>
                            <circle cx="265" cy="610" r="5"/>
                            <circle cx="238" cy="765" r="4"/>
                            <circle cx="38" cy="455" r="3"/>
                            <circle cx="385" cy="400" r="3"/>
                        </g>

                        <!-- tiny cream buds -->
                        <g fill="#f3deb7" opacity="0.95">
                            <circle cx="72" cy="375" r="4"/>
                            <circle cx="140" cy="605" r="5"/>
                            <circle cx="182" cy="750" r="4"/>
                            <circle cx="335" cy="360" r="4"/>
                            <circle cx="282" cy="540" r="5"/>
                            <circle cx="250" cy="685" r="4"/>
                        </g>
                    </svg>
                </span>
                <span class="spray right">
                    <svg viewBox="0 0 420 900" preserveAspectRatio="xMidYMax meet" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="fernLightR" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#c5d4ae"/>
                                <stop offset="100%" stop-color="#9bb07a"/>
                            </linearGradient>
                            <linearGradient id="fernMidR" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#a3b588"/>
                                <stop offset="100%" stop-color="#7a8f5a"/>
                            </linearGradient>
                            <linearGradient id="fernDarkR" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#7a8f5a"/>
                                <stop offset="100%" stop-color="#566b3f"/>
                            </linearGradient>
                        </defs>
                        <path d="M210 900 C195 780 160 650 110 500 C80 410 55 340 30 290" fill="none" stroke="#8c9e6d" stroke-width="3" stroke-linecap="round"/>
                        <path d="M250 900 C265 780 300 640 350 480 C375 400 400 340 415 290" fill="none" stroke="#8fa370" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M160 900 C125 760 80 600 50 430 C35 350 22 290 8 240" fill="none" stroke="#a3b588" stroke-width="2" stroke-linecap="round"/>
                        <g opacity="0.92">
                            <ellipse cx="55" cy="330" rx="52" ry="10" fill="url(#fernDarkR)" transform="rotate(-28 55 330)"/>
                            <ellipse cx="72" cy="375" rx="58" ry="11" fill="url(#fernMidR)" transform="rotate(-24 72 375)"/>
                            <ellipse cx="88" cy="425" rx="64" ry="12" fill="url(#fernDarkR)" transform="rotate(-20 88 425)"/>
                            <ellipse cx="105" cy="480" rx="68" ry="13" fill="url(#fernMidR)" transform="rotate(-16 105 480)"/>
                            <ellipse cx="122" cy="540" rx="72" ry="14" fill="url(#fernDarkR)" transform="rotate(-12 122 540)"/>
                            <ellipse cx="140" cy="605" rx="74" ry="15" fill="url(#fernLightR)" transform="rotate(-8 140 605)"/>
                            <ellipse cx="160" cy="675" rx="76" ry="15" fill="url(#fernMidR)" transform="rotate(-4 160 675)"/>
                            <ellipse cx="182" cy="750" rx="74" ry="15" fill="url(#fernDarkR)" transform="rotate(0 182 750)"/>
                            <ellipse cx="205" cy="830" rx="70" ry="14" fill="url(#fernMidR)" transform="rotate(4 205 830)"/>
                        </g>
                        <g opacity="0.92">
                            <ellipse cx="335" cy="360" rx="56" ry="11" fill="url(#fernLightR)" transform="rotate(22 335 360)"/>
                            <ellipse cx="318" cy="415" rx="62" ry="12" fill="url(#fernMidR)" transform="rotate(18 318 415)"/>
                            <ellipse cx="300" cy="475" rx="66" ry="13" fill="url(#fernDarkR)" transform="rotate(14 300 475)"/>
                            <ellipse cx="282" cy="540" rx="70" ry="14" fill="url(#fernLightR)" transform="rotate(10 282 540)"/>
                            <ellipse cx="265" cy="610" rx="72" ry="15" fill="url(#fernMidR)" transform="rotate(6 265 610)"/>
                            <ellipse cx="250" cy="685" rx="72" ry="15" fill="url(#fernDarkR)" transform="rotate(2 250 685)"/>
                            <ellipse cx="238" cy="765" rx="70" ry="14" fill="url(#fernLightR)" transform="rotate(-2 238 765)"/>
                        </g>
                        <g fill="#9bb07a" opacity="0.8">
                            <ellipse cx="28" cy="400" rx="42" ry="8" transform="rotate(-38 28 400)"/>
                            <ellipse cx="38" cy="455" rx="46" ry="9" transform="rotate(-32 38 455)"/>
                            <ellipse cx="50" cy="515" rx="48" ry="9" transform="rotate(-26 50 515)"/>
                            <ellipse cx="370" cy="340" rx="46" ry="9" transform="rotate(38 370 340)"/>
                            <ellipse cx="385" cy="400" rx="50" ry="10" transform="rotate(32 385 400)"/>
                            <ellipse cx="395" cy="465" rx="50" ry="10" transform="rotate(26 395 465)"/>
                        </g>
                        <g fill="#fff" opacity="0.95">
                            <circle cx="88" cy="425" r="4"/>
                            <circle cx="105" cy="480" r="5"/>
                            <circle cx="122" cy="540" r="4"/>
                            <circle cx="160" cy="675" r="5"/>
                            <circle cx="205" cy="830" r="4"/>
                            <circle cx="300" cy="475" r="4"/>
                            <circle cx="265" cy="610" r="5"/>
                            <circle cx="238" cy="765" r="4"/>
                            <circle cx="38" cy="455" r="3"/>
                            <circle cx="385" cy="400" r="3"/>
                        </g>
                        <g fill="#f3deb7" opacity="0.95">
                            <circle cx="72" cy="375" r="4"/>
                            <circle cx="140" cy="605" r="5"/>
                            <circle cx="182" cy="750" r="4"/>
                            <circle cx="335" cy="360" r="4"/>
                            <circle cx="282" cy="540" r="5"/>
                            <circle cx="250" cy="685" r="4"/>
                        </g>
                    </svg>
                </span>

                <div class="card-content">
                    <p class="top-label">THIỆP MỜI</p>
                    <div class="script-title">
                        Wedding
                        <span class="line2">Invitation</span>
                    </div>

                    <p class="names"><?= htmlspecialchars($groomName) ?> &amp; <?= htmlspecialchars($brideName) ?></p>

                    <p class="date-line">
                        <?= htmlspecialchars($weekday) ?>
                        <span class="dot">•</span>
                        Ngày <?= htmlspecialchars($day) ?>
                        <span class="dot">•</span>
                        Tháng <?= htmlspecialchars($month) ?>
                        <span class="dot">•</span>
                        <?= htmlspecialchars($year) ?>
                    </p>
                    <p class="time"><?= htmlspecialchars($time) ?> — Reception to Follow</p>
                </div>
            </div>

            <div class="card-bottom">
                <p class="invite-text">TRÂN TRỌNG KÍNH MỜI</p>
                <p class="reception">Sự hiện diện của bạn là niềm vinh hạnh cho gia đình chúng mình</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    const card = document.getElementById('invitation-card');
    const previewWrapper = document.getElementById('previewWrapper');

    function fitPreview() {
        const stage = document.getElementById('stage');
        const maxWidth = stage.clientWidth - 40;
        const maxHeight = stage.clientHeight - 40;
        const cardWidth = 1920;
        const cardHeight = 1080;
        const scale = Math.min(maxWidth / cardWidth, maxHeight / cardHeight, 1);
        previewWrapper.style.transform = 'scale(' + scale + ')';
    }
    fitPreview();
    window.addEventListener('resize', fitPreview);

    document.getElementById('downloadBtn').addEventListener('click', function () {
        const btn = this;
        const originalText = btn.textContent;
        btn.textContent = 'Đang tạo ảnh...';

        // Clone and render at native size for sharp export
        const clone = card.cloneNode(true);
        clone.style.position = 'fixed';
        clone.style.top = '0';
        clone.style.left = '-9999px';
        clone.style.width = '1920px';
        clone.style.height = '1080px';
        clone.style.transform = 'none';
        clone.style.margin = '0';
        document.body.appendChild(clone);

        html2canvas(clone, {
            scale: 1, // native 1920x1080 Full HD
            useCORS: true,
            allowTaint: true,
            backgroundColor: '#ffffff',
            logging: false,
            width: 1920,
            height: 1080,
        }).then(function (canvas) {
            document.body.removeChild(clone);
            const link = document.createElement('a');
            link.download = 'Thiep-Cuoi-Ngoc-Tan-Thu-Trang.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
            btn.textContent = originalText;
        }).catch(function (err) {
            document.body.removeChild(clone);
            console.error(err);
            btn.textContent = 'Lỗi, thử lại';
            setTimeout(() => { btn.textContent = originalText; }, 2000);
        });
    });

    document.getElementById('printBtn').addEventListener('click', function () {
        window.print();
    });
</script>

</body>
</html>
