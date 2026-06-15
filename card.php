<?php
// Standalone wedding invitation card — hero-style invitation only (no couple photo)
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

        .stage {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            flex: 1;
            min-height: 0;
        }

        /* Invitation card only — tall portrait suitable for sending */
        #invitation-card {
            position: relative;
            width: 1200px;
            height: 1700px;
            background-image: url('https://w.ladicdn.com/s750x900/6322a62f2dad980013bb5005/gray-green-floral-simple-illustration-wedding-invitation-20240504032041-nzlyi.png');
            background-size: cover;
            background-position: center;
            overflow: hidden;
            box-shadow: 0 30px 80px -30px rgba(0,0,0,0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 70px;
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            border: 1px solid rgba(110,125,87,0.55);
            outline: 1px solid rgba(110,125,87,0.25);
            outline-offset: 10px;
            padding: 70px 65px;
            background: rgba(255, 251, 244, 0.82);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 28px;
            width: 100%;
            height: 100%;
            max-width: 1060px;
        }

        /* Decorative corners */
        .d-corner {
            position: absolute;
            width: 28px;
            height: 28px;
            border: 2px solid #6e7d57;
        }
        .d-corner.tl { top: -2px; left: -2px; border-right: none; border-bottom: none; }
        .d-corner.tr { top: -2px; right: -2px; border-left: none; border-bottom: none; }
        .d-corner.bl { bottom: -2px; left: -2px; border-right: none; border-top: none; }
        .d-corner.br { bottom: -2px; right: -2px; border-left: none; border-top: none; }

        .d-floral-corner {
            position: absolute;
            width: 140px;
            height: 140px;
            background-image: url('https://w.ladicdn.com/s500x500/6322a62f2dad980013bb5005/3-20240504043622-9louq.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            pointer-events: none;
        }
        .d-floral-corner.tl { top: -55px; left: -55px; }
        .d-floral-corner.tr { top: -55px; right: -55px; transform: scaleX(-1); }
        .d-floral-corner.bl { bottom: -55px; left: -55px; transform: scaleY(-1); }
        .d-floral-corner.br { bottom: -55px; right: -55px; transform: scale(-1,-1); }

        .d-wreath {
            position: relative;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            border: 1px solid rgba(110,125,87,0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle, rgba(255,251,244,0.75) 62%, rgba(255,251,244,0.15));
            margin-bottom: 4px;
        }
        .d-wreath::before,
        .d-wreath::after {
            content: '';
            position: absolute;
            left: 50%;
            width: 110px;
            height: 74px;
            background-image: url('https://w.ladicdn.com/s450x450/6322a62f2dad980013bb5005/thiet-ke-chua-co-ten-2-20240504082626-p3p_x.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            transform: translateX(-50%);
        }
        .d-wreath::before { top: -36px; }
        .d-wreath::after { bottom: -36px; transform: translateX(-50%) rotate(180deg); }
        .d-wreath span {
            font-family: 'Ephesis', cursive;
            font-size: 4rem;
            color: #6e7d57;
            line-height: 1;
        }

        .d-kicker {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 9px;
            text-transform: uppercase;
            font-size: 20px;
            color: #6e7d57;
            font-weight: 600;
        }

        .d-names-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }
        .d-name-top, .d-name-bot {
            font-family: 'Ephesis', cursive;
            font-size: 5.2rem;
            line-height: 1;
            color: #1a1a1a;
            font-weight: 400;
        }
        .d-monogram {
            display: flex;
            align-items: center;
            gap: 24px;
            margin: 10px 0;
        }
        .d-monogram span {
            display: block;
            width: 90px;
            height: 1px;
            background: #6e7d57;
        }
        .d-monogram em {
            font-family: 'Ephesis', cursive;
            font-style: normal;
            font-size: 3rem;
            color: #6e7d57;
        }

        .d-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            width: 90%;
            margin: 6px 0;
        }
        .d-divider .d-div-leaf {
            flex: 1;
            height: 1px;
            max-width: 160px;
            background: linear-gradient(90deg, transparent, #6e7d57, transparent);
        }
        .d-divider .d-div-leaf.right { transform: scaleX(-1); }
        .d-divider .d-div-text {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 5px;
            text-transform: uppercase;
            font-size: 16px;
            color: #6e7d57;
            white-space: nowrap;
        }

        .d-hero-date {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Cormorant Garamond', serif;
            margin: 8px 0;
        }
        .d-date-cell {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 14px 18px;
            min-width: 80px;
        }
        .d-date-cell .lbl {
            font-size: 14px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #999;
        }
        .d-date-cell .val {
            font-size: 2.4rem;
            font-weight: 700;
            color: #1a1a1a;
            line-height: 1.1;
        }
        .d-date-cell.big .val { font-size: 4rem; color: #6e7d57; }
        .d-date-sep {
            width: 1px;
            height: 62px;
            background: rgba(110,125,87,0.4);
        }

        .d-hero-invite {
            font-family: 'Ephesis', cursive;
            font-size: 2.6rem;
            color: #1f1f1f;
            margin-top: 4px;
        }
        .d-hero-time {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: #1a1a1a;
            letter-spacing: 1px;
        }
        .d-hero-reception {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 5px;
            text-transform: uppercase;
            font-size: 15px;
            color: #6e7d57;
        }

        .d-floral-bottom {
            width: 220px;
            height: 160px;
            background-image: url('https://w.ladicdn.com/s450x450/6322a62f2dad980013bb5005/thiet-ke-chua-co-ten-2-20240504082626-p3p_x.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            transform: rotate(180deg);
            margin-top: 8px;
        }

        .preview-wrapper {
            transform-origin: center center;
            width: 1200px;
            height: 1700px;
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
            <div class="hero-inner">
                <span class="d-corner tl"></span>
                <span class="d-corner tr"></span>
                <span class="d-corner bl"></span>
                <span class="d-corner br"></span>

                <span class="d-floral-corner tl"></span>
                <span class="d-floral-corner tr"></span>
                <span class="d-floral-corner bl"></span>
                <span class="d-floral-corner br"></span>

                <div class="d-wreath"><span><?= htmlspecialchars($monogram) ?></span></div>

                <p class="d-kicker">— Wedding Invitation —</p>
                <div class="d-names-block">
                    <h2 class="d-name-top"><?= htmlspecialchars($groomName) ?></h2>
                    <div class="d-monogram"><span></span><em>&amp;</em><span></span></div>
                    <h2 class="d-name-bot"><?= htmlspecialchars($brideName) ?></h2>
                </div>

                <div class="d-divider">
                    <span class="d-div-leaf left"></span>
                    <span class="d-div-text">Save the Date</span>
                    <span class="d-div-leaf right"></span>
                </div>

                <div class="d-hero-date">
                    <div class="d-date-cell"><span class="lbl">Thứ</span><span class="val">6</span></div>
                    <div class="d-date-sep"></div>
                    <div class="d-date-cell big"><span class="lbl">Ngày</span><span class="val">3</span></div>
                    <div class="d-date-sep"></div>
                    <div class="d-date-cell"><span class="lbl">Tháng</span><span class="val">07</span></div>
                    <div class="d-date-sep"></div>
                    <div class="d-date-cell"><span class="lbl">Năm</span><span class="val">2026</span></div>
                </div>

                <p class="d-hero-invite">Trân trọng kính mời</p>
                <p class="d-hero-time"><?= htmlspecialchars($time) ?></p>
                <p class="d-hero-reception">Reception to Follow</p>

                <div class="d-floral-bottom"></div>
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
        const scale = Math.min(maxWidth / 1200, maxHeight / 1700, 1);
        previewWrapper.style.transform = 'scale(' + scale + ')';
    }
    fitPreview();
    window.addEventListener('resize', fitPreview);

    document.getElementById('downloadBtn').addEventListener('click', function () {
        const btn = this;
        const originalText = btn.textContent;
        btn.textContent = 'Đang tạo ảnh...';

        const clone = card.cloneNode(true);
        clone.style.position = 'fixed';
        clone.style.top = '0';
        clone.style.left = '-9999px';
        clone.style.width = '1200px';
        clone.style.height = '1700px';
        clone.style.transform = 'none';
        clone.style.margin = '0';
        document.body.appendChild(clone);

        html2canvas(clone, {
            scale: 2, // export 2400x3400, high-res print quality
            useCORS: true,
            allowTaint: true,
            backgroundColor: '#faf6ee',
            logging: false,
            width: 1200,
            height: 1700,
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
