<?php
// Standalone wedding invitation card - Ngọc Tân & Thu Trang
$brideName = 'Thu Trang';
$groomName = 'Ngọc Tân';
$weekday = 'Thứ 6';
$day = '3';
$month = '07';
$year = '2026';
$time = '16 giờ 30 phút';
$monogram = 'N&T';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thiệp cưới <?= htmlspecialchars($groomName) ?> & <?= htmlspecialchars($brideName) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Cormorant+Garamond:wght@400;500;600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html, body {
            height: 100%;
            font-family: 'Cormorant Garamond', serif;
            background: #e8e8e8;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .toolbar {
            margin-bottom: 16px;
            display: flex;
            gap: 10px;
            z-index: 10;
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
            flex: 1;
            width: 100%;
            overflow: auto;
        }

        /* The invitation card itself — rendered as Full HD portrait PNG */
        #invitation-card {
            position: relative;
            width: 1080px;
            height: 1350px;
            background: #fdfbf6;
            color: #1a1a1a;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 90px 110px;
            overflow: hidden;
            box-shadow: 0 30px 80px -30px rgba(0,0,0,0.35);
            transform-origin: top center;
        }

        /* Soft watercolor wash background */
        #invitation-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 120% 80% at 20% 10%, rgba(234, 228, 214, 0.55) 0%, transparent 55%),
                radial-gradient(ellipse 120% 80% at 85% 90%, rgba(224, 232, 214, 0.45) 0%, transparent 55%),
                radial-gradient(ellipse 80% 60% at 50% 50%, rgba(255, 252, 245, 0.8) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        /* Double border frame */
        .frame-outer,
        .frame-inner {
            position: absolute;
            left: 44px;
            right: 44px;
            top: 44px;
            bottom: 44px;
            border: 1px solid rgba(110, 125, 87, 0.5);
            pointer-events: none;
            z-index: 1;
        }
        .frame-inner {
            left: 54px;
            right: 54px;
            top: 54px;
            bottom: 54px;
            border-color: rgba(110, 125, 87, 0.28);
        }

        /* Corner flowers */
        .corner-flower {
            position: absolute;
            width: 180px;
            height: 180px;
            background-image: url('https://w.ladicdn.com/s450x450/6322a62f2dad980013bb5005/thiet-ke-chua-co-ten-2-20240504082626-p3p_x.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            pointer-events: none;
            z-index: 2;
            opacity: 0.85;
        }
        .corner-flower.tl { top: 24px; left: 24px; transform: rotate(0deg); }
        .corner-flower.tr { top: 24px; right: 24px; transform: scaleX(-1); }
        .corner-flower.bl { bottom: 24px; left: 24px; transform: scaleY(-1); }
        .corner-flower.br { bottom: 24px; right: 24px; transform: scale(-1, -1); }

        /* Content sits above decor */
        .card-content {
            position: relative;
            z-index: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 28px;
            width: 100%;
        }

        /* Monogram circle */
        .monogram {
            width: 170px;
            height: 170px;
            border: 1px solid rgba(110, 125, 87, 0.55);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 251, 244, 0.65);
            margin-bottom: 6px;
        }
        .monogram span {
            font-family: 'Ephesis', cursive;
            font-size: 72px;
            color: #1a1a1a;
            line-height: 1;
        }

        .kicker {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            letter-spacing: 8px;
            text-transform: uppercase;
            color: #6e7d57;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 18px;
        }
        .kicker::before,
        .kicker::after {
            content: '';
            width: 56px;
            height: 1px;
            background: rgba(110, 125, 87, 0.55);
        }

        .names {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }
        .names h1 {
            font-family: 'Ephesis', cursive;
            font-size: 118px;
            font-weight: 400;
            line-height: 1.05;
            color: #1a1a1a;
        }
        .ampersand {
            display: flex;
            align-items: center;
            gap: 22px;
            font-family: 'Ephesis', cursive;
            font-size: 54px;
            color: #6e7d57;
        }
        .ampersand::before,
        .ampersand::after {
            content: '';
            width: 120px;
            height: 1px;
            background: rgba(110, 125, 87, 0.55);
        }

        .save-the-date {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            letter-spacing: 6px;
            text-transform: uppercase;
            color: #1a1a1a;
            font-weight: 600;
            margin: 10px 0;
        }

        .date-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0;
            margin: 8px 0;
            font-family: 'Cormorant Garamond', serif;
        }
        .date-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 120px;
            padding: 0 18px;
        }
        .date-item .label {
            font-size: 20px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #6e7d57;
            font-weight: 600;
        }
        .date-item .value {
            font-size: 64px;
            font-weight: 700;
            line-height: 1;
            color: #1a1a1a;
            margin-top: 4px;
        }
        .date-sep {
            width: 1px;
            height: 90px;
            background: rgba(110, 125, 87, 0.4);
        }
        .date-item.year .value {
            font-size: 52px;
        }

        .invite-text {
            font-family: 'Ephesis', cursive;
            font-size: 42px;
            color: #1a1a1a;
            margin-top: 8px;
        }

        .time {
            font-family: 'Cormorant Garamond', serif;
            font-size: 28px;
            font-weight: 600;
            color: #1a1a1a;
            letter-spacing: 1px;
        }

        .reception {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            letter-spacing: 6px;
            text-transform: uppercase;
            color: #6e7d57;
            font-weight: 600;
        }

        .bottom-ornament {
            width: 170px;
            height: 110px;
            background-image: url('https://w.ladicdn.com/s450x450/6322a62f2dad980013bb5005/thiet-ke-chua-co-ten-2-20240504082626-p3p_x.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            transform: rotate(180deg);
            opacity: 0.7;
            margin-top: 10px;
        }

        /* Preview scaling for screen */
        .preview-wrapper {
            transform-origin: center center;
            width: 1080px;
            height: 1350px;
        }

        /* Hide toolbar in downloaded image */
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

<div class="stage">
    <div class="preview-wrapper" id="previewWrapper">
        <div id="invitation-card">
            <div class="frame-outer"></div>
            <div class="frame-inner"></div>

            <span class="corner-flower tl"></span>
            <span class="corner-flower tr"></span>
            <span class="corner-flower bl"></span>
            <span class="corner-flower br"></span>

            <div class="card-content">
                <div class="monogram"><span><?= htmlspecialchars($monogram) ?></span></div>

                <p class="kicker">Wedding Invitation</p>

                <div class="names">
                    <h1><?= htmlspecialchars($groomName) ?></h1>
                    <div class="ampersand">&amp;</div>
                    <h1><?= htmlspecialchars($brideName) ?></h1>
                </div>

                <p class="save-the-date">Save the Date</p>

                <div class="date-row">
                    <div class="date-item">
                        <span class="label">Thứ</span>
                        <span class="value">6</span>
                    </div>
                    <div class="date-sep"></div>
                    <div class="date-item">
                        <span class="label">Ngày</span>
                        <span class="value">3</span>
                    </div>
                    <div class="date-sep"></div>
                    <div class="date-item">
                        <span class="label">Tháng</span>
                        <span class="value">07</span>
                    </div>
                    <div class="date-sep"></div>
                    <div class="date-item year">
                        <span class="label">Năm</span>
                        <span class="value">2026</span>
                    </div>
                </div>

                <p class="invite-text">Trân trọng kính mời</p>
                <p class="time"><?= htmlspecialchars($time) ?></p>
                <p class="reception">Reception to Follow</p>

                <div class="bottom-ornament"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    const card = document.getElementById('invitation-card');
    const previewWrapper = document.getElementById('previewWrapper');

    // Scale preview to fit the viewport while keeping Full HD export size
    function fitPreview() {
        const stage = document.querySelector('.stage');
        const maxWidth = stage.clientWidth - 40;
        const maxHeight = stage.clientHeight - 40;
        const cardWidth = 1080;
        const cardHeight = 1350;
        const scale = Math.min(maxWidth / cardWidth, maxHeight / cardHeight, 1);
        previewWrapper.style.transform = 'scale(' + scale + ')';
    }
    fitPreview();
    window.addEventListener('resize', fitPreview);

    document.getElementById('downloadBtn').addEventListener('click', function () {
        const btn = this;
        const originalText = btn.textContent;
        btn.textContent = 'Đang tạo ảnh...';

        // Clone the card off-screen at full size so the preview scale doesn't affect export
        const clone = card.cloneNode(true);
        clone.style.position = 'fixed';
        clone.style.top = '0';
        clone.style.left = '-9999px';
        clone.style.width = '1080px';
        clone.style.height = '1350px';
        clone.style.transform = 'none';
        clone.style.margin = '0';
        document.body.appendChild(clone);

        html2canvas(clone, {
            scale: 2, // export at 2160 x 2700, higher than Full HD
            useCORS: true,
            backgroundColor: '#fdfbf6',
            logging: false,
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
