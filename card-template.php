<?php
// Shared invitation card template
// Expects: $slug, $titleLabel, $weekday, $day, $month, $year, $time, $timeLabel, $multiDate

$brideName = 'Thu Trang';
$groomName = 'Ngọc Tân';
$monogram = 'N&T';

$weekdayText = match ((int)$day) {
    3, 10, 17, 24, 31 => 'Thứ 6',
    4, 11, 18, 25 => 'Thứ 7',
    5, 12, 19, 26 => 'Chủ nhật',
    default => 'Thứ 6',
};
$day2 = (int)$day + 1;
$weekdayText2 = match ($day2) {
    3, 10, 17, 24, 31 => 'Thứ 6',
    4, 11, 18, 25 => 'Thứ 7',
    5, 12, 19, 26 => 'Chủ nhật',
    default => 'Thứ 6',
};

if (!isset($multiDate)) $multiDate = false;
if (!isset($slug)) $slug = 'thiep-cuoi-ngoc-tan-thu-trang';
if (!isset($titleLabel)) $titleLabel = '— Wedding Invitation —';
if (!isset($timeLabel)) $timeLabel = 'Giờ';

$dateDisplay = $multiDate
    ? "Ngày {$day} & " . ((int)$day + 1) . " tháng {$month} năm {$year}"
    : "Ngày {$day} tháng {$month} năm {$year}";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thiệp cưới <?= htmlspecialchars($groomName) ?> & <?= htmlspecialchars($brideName) ?> — <?= htmlspecialchars($time) ?></title>
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
            border: 1px solid #9aa47e;
            border-radius: 24px;
            background: #9aa47e;
            color: #fff;
            font-family: 'Cormorant Garamond', serif;
            font-size: 15px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all .2s;
        }
        .btn:hover { background: #2c2c2c; border-color: #2c2c2c; }
        .btn-outline {
            background: transparent;
            color: #9aa47e;
        }
        .btn-outline:hover { background: #9aa47e; color: #fff; }

        .stage {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            flex: 1;
            min-height: 0;
        }

        #invitation-card {
            position: relative;
            width: 720px;
            height: 1280px;
            background: linear-gradient(160deg, #8a9370 0%, #7b8360 100%);
            overflow: hidden;
            box-shadow: 0 30px 80px -30px rgba(0,0,0,0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            border: 1px solid rgba(248, 247, 243, 0.55);
            outline: 1px solid rgba(248, 247, 243, 0.25);
            outline-offset: 6px;
            padding: 40px 22px 30px;
            background: rgba(248, 247, 243, 0.95);
            box-shadow: 0 24px 70px -20px rgba(0,0,0,0.25);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            gap: 26px;
            width: 100%;
            height: 100%;
            max-width: 660px;
        }

        .hero-inner::before,
        .hero-inner::after {
            content: '';
            position: absolute;
            width: 190px;
            height: 190px;
            background-image: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20120%20120%22%3E%0A%20%20%3Cg%20fill%3D%22none%22%20stroke%3D%22%239aa47e%22%20stroke-width%3D%221.4%22%20opacity%3D%220.9%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M8%2082%20Q30%2028%2082%208%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M18%2098%20Q48%2042%2098%2018%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M32%20108%20Q58%2054%20108%2032%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20fill%3D%22%239aa47e%22%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2234%22%20cy%3D%2246%22%20rx%3D%228%22%20ry%3D%224%22%20transform%3D%22rotate%28-55%2034%2046%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2252%22%20cy%3D%2232%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-35%2052%2032%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2268%22%20cy%3D%2258%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-60%2068%2058%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2286%22%20cy%3D%2244%22%20rx%3D%226%22%20ry%3D%223%22%20transform%3D%22rotate%28-40%2086%2044%29%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.95%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%28-45%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%280%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2845%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2890%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2276%22%20cy%3D%2234%22%20r%3D%225%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.85%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%28-30%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2830%2044%2070%29%22%20fill%3D%22%23f5e1e1%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2890%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2244%22%20cy%3D%2270%22%20r%3D%223.5%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28-20%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%2840%2096%2076%29%22%20fill%3D%22%23f0e8dc%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28100%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2296%22%20cy%3D%2276%22%20r%3D%223%22%20fill%3D%22%239aa47e%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            pointer-events: none;
            z-index: 4;
        }
        .hero-inner::before { top: -34px; left: -34px; }
        .hero-inner::after  { bottom: -34px; right: -34px; transform: rotate(180deg); }

        .hero-inner .d-corner-extra {
            position: absolute;
            width: 190px;
            height: 190px;
            pointer-events: none;
            z-index: 4;
            background-image: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20120%20120%22%3E%0A%20%20%3Cg%20fill%3D%22none%22%20stroke%3D%22%239aa47e%22%20stroke-width%3D%221.4%22%20opacity%3D%220.9%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M8%2082%20Q30%2028%2082%208%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M18%2098%20Q48%2042%2098%2018%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M32%20108%20Q58%2054%20108%2032%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20fill%3D%22%239aa47e%22%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2234%22%20cy%3D%2246%22%20rx%3D%228%22%20ry%3D%224%22%20transform%3D%22rotate%28-55%2034%2046%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2252%22%20cy%3D%2232%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-35%2052%2032%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2268%22%20cy%3D%2258%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-60%2068%2058%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2286%22%20cy%3D%2244%22%20rx%3D%226%22%20ry%3D%223%22%20transform%3D%22rotate%28-40%2086%2044%29%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.95%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%28-45%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%280%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2845%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2890%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2276%22%20cy%3D%2234%22%20r%3D%225%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.85%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%28-30%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2830%2044%2070%29%22%20fill%3D%22%23f5e1e1%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2890%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2244%22%20cy%3D%2270%22%20r%3D%223.5%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28-20%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%2840%2096%2076%29%22%20fill%3D%22%23f0e8dc%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28100%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2296%22%20cy%3D%2276%22%20r%3D%223%22%20fill%3D%22%239aa47e%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .hero-inner .d-corner-extra.tr { top: -34px; right: -34px; transform: scaleX(-1); }
        .hero-inner .d-corner-extra.bl { bottom: -34px; left: -34px; transform: scaleY(-1); }

        .hero-top, .hero-middle, .hero-bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .hero-top {
            gap: 0;
        }
        .hero-top .d-wreath {
            margin-bottom: 0;
        }
        .hero-top .d-kicker {
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .hero-middle {
            gap: 10px;
        }

        .hero-bottom {
            gap: 10px;
            margin-top: auto;
        }

        .d-corner {
            position: absolute;
            width: 28px;
            height: 28px;
            border: 2px solid #9aa47e;
        }
        .d-corner.tl { top: -2px; left: -2px; border-right: none; border-bottom: none; }
        .d-corner.tr { top: -2px; right: -2px; border-left: none; border-bottom: none; }
        .d-corner.bl { bottom: -2px; left: -2px; border-right: none; border-top: none; }
        .d-corner.br { bottom: -2px; right: -2px; border-left: none; border-top: none; }

        .d-floral-corner { display: none; }

        .d-flower-deco {
            position: absolute;
            z-index: 3;
            pointer-events: none;
            width: 150px;
            height: 150px;
            opacity: 0.65;
        }
        .d-flower-deco svg {
            width: 100%;
            height: 100%;
            display: block;
        }
        .d-flower-deco.tl { top: 14px; left: 14px; }
        .d-flower-deco.tr { top: 14px; right: 14px; transform: scaleX(-1); }
        .d-flower-deco.bl { bottom: 14px; left: 14px; transform: scaleY(-1); }
        .d-flower-deco.br { bottom: 14px; right: 14px; transform: scale(-1, -1); }

        .d-wreath {
            position: relative;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            border: 1px solid rgba(154, 164, 126, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle, rgba(255,255,252,0.9) 62%, rgba(248,247,243,0.15));
            flex-shrink: 0;
        }
        .d-wreath::before,
        .d-wreath::after {
            content: '';
            position: absolute;
            left: 50%;
            width: 120px;
            height: 78px;
            background-image: url('https://w.ladicdn.com/s450x450/6322a62f2dad980013bb5005/thiet-ke-chua-co-ten-2-20240504082626-p3p_x.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            transform: translateX(-50%);
        }
        .d-wreath::before { top: -34px; }
        .d-wreath::after { bottom: -34px; transform: translateX(-50%) rotate(180deg); }
        .d-wreath span {
            font-family: 'Ephesis', cursive;
            font-size: 4rem;
            color: #9aa47e;
            line-height: 1;
        }

        .d-kicker {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 7px;
            text-transform: uppercase;
            font-size: 17px;
            color: #9aa47e;
            font-weight: 600;
            flex-shrink: 0;
        }

        .d-names-block {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            width: 64%;
            margin: 0 auto;
            flex-shrink: 0;
        }
        .d-name-top, .d-name-bot {
            font-family: 'Ephesis', cursive;
            font-size: 5rem;
            line-height: 1;
            color: #2c2c2c;
            font-weight: 400;
        }
        .d-name-top { text-align: left; }
        .d-name-bot { text-align: right; }
        .d-monogram {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 22px;
            margin: 8px 0;
        }
        .d-monogram span {
            display: block;
            width: 80px;
            height: 1px;
            background: #9aa47e;
        }
        .d-monogram em {
            font-family: 'Ephesis', cursive;
            font-style: normal;
            font-size: 2.8rem;
            color: #9aa47e;
        }

        .d-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            width: 88%;
            margin: 8px 0;
            flex-shrink: 0;
        }
        .d-divider .d-div-leaf {
            flex: 1;
            height: 1px;
            max-width: 130px;
            background: linear-gradient(90deg, transparent, #9aa47e, transparent);
        }
        .d-divider .d-div-leaf.right { transform: scaleX(-1); }
        .d-divider .d-div-text {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-size: 12px;
            color: #9aa47e;
            white-space: nowrap;
        }

        .d-hero-date {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Cormorant Garamond', serif;
            margin: 8px 0;
            flex-shrink: 0;
        }
        .d-date-cell {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 12px 16px;
            min-width: 72px;
        }
        .d-date-cell .lbl {
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #a8a8a0;
        }
        .d-date-cell .val {
            font-size: 2.1rem;
            font-weight: 700;
            color: #2c2c2c;
            line-height: 1.1;
        }
        .d-date-cell.big .val { font-size: 3.6rem; color: #9aa47e; }
        .d-date-sep {
            width: 1px;
            height: 58px;
            background: rgba(154, 164, 126, 0.4);
        }

        .d-date-full {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.7rem;
            color: #2c2c2c;
            font-weight: 600;
            letter-spacing: 1px;
            margin: 8px 0;
            text-align: center;
            flex-shrink: 0;
        }

        .d-multi-date {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            margin: 8px 0;
        }
        .d-multi-date .d-hero-date {
            margin: 0;
        }
        .d-multi-date-sep {
            font-family: 'Ephesis', cursive;
            font-size: 1.6rem;
            color: #9aa47e;
            line-height: 1;
        }

        .d-hero-invite {
            font-family: 'Ephesis', cursive;
            font-size: 2.4rem;
            color: #2c2c2c;
            margin-top: 4px;
        }
        .d-hero-time {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.7rem;
            font-weight: 600;
            color: #2c2c2c;
            letter-spacing: 1px;
        }
        .d-hero-reception {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-size: 13px;
            color: #9aa47e;
        }

        .d-venue {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            margin: 4px 0;
            text-align: center;
        }
        .d-venue-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #2c2c2c;
            line-height: 1.4;
        }
        .d-venue-address {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #9aa47e;
            line-height: 1.4;
        }

        .d-floral-bottom {
            width: 200px;
            height: 135px;
            background-image: url('https://w.ladicdn.com/s450x450/6322a62f2dad980013bb5005/thiet-ke-chua-co-ten-2-20240504082626-p3p_x.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            transform: rotate(180deg);
            margin-top: 16px;
            flex-shrink: 0;
        }

        .preview-wrapper {
            transform-origin: center center;
            width: 720px;
            height: 1280px;
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

                <span class="d-corner-extra tr"></span>
                <span class="d-corner-extra bl"></span>

                <span class="d-floral-corner tl"></span>
                <span class="d-floral-corner tr"></span>
                <span class="d-floral-corner bl"></span>
                <span class="d-floral-corner br"></span>

                <div class="hero-top">
                    <div class="d-wreath"><span><?= htmlspecialchars($monogram) ?></span></div>
                    <p class="d-kicker"><?= htmlspecialchars($titleLabel) ?></p>
                    <div class="d-names-block">
                        <h2 class="d-name-top"><?= htmlspecialchars($groomName) ?></h2>
                        <div class="d-monogram"><span></span><em>&amp;</em><span></span></div>
                        <h2 class="d-name-bot"><?= htmlspecialchars($brideName) ?></h2>
                    </div>
                </div>

                <div class="hero-middle">
                    <div class="d-divider">
                        <span class="d-div-leaf left"></span>
                        <span class="d-div-text">Save the Date</span>
                        <span class="d-div-leaf right"></span>
                    </div>

                    <?php if ($multiDate): ?>
                        <div class="d-multi-date">
                            <div class="d-hero-date">
                                <div class="d-date-cell"><span class="lbl">Thứ</span><span class="val"><?= htmlspecialchars($weekdayText) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell big"><span class="lbl">Ngày</span><span class="val"><?= htmlspecialchars($day) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell"><span class="lbl">Tháng</span><span class="val"><?= htmlspecialchars($month) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell"><span class="lbl">Năm</span><span class="val"><?= htmlspecialchars($year) ?></span></div>
                            </div>
                            <span class="d-multi-date-sep">và</span>
                            <div class="d-hero-date">
                                <div class="d-date-cell"><span class="lbl">Thứ</span><span class="val"><?= htmlspecialchars($weekdayText2) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell big"><span class="lbl">Ngày</span><span class="val"><?= htmlspecialchars($day2) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell"><span class="lbl">Tháng</span><span class="val"><?= htmlspecialchars($month) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell"><span class="lbl">Năm</span><span class="val"><?= htmlspecialchars($year) ?></span></div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="d-hero-date">
                            <div class="d-date-cell"><span class="lbl">Thứ</span><span class="val"><?= htmlspecialchars($weekdayText) ?></span></div>
                            <div class="d-date-sep"></div>
                            <div class="d-date-cell big"><span class="lbl">Ngày</span><span class="val"><?= htmlspecialchars($day) ?></span></div>
                            <div class="d-date-sep"></div>
                            <div class="d-date-cell"><span class="lbl">Tháng</span><span class="val"><?= htmlspecialchars($month) ?></span></div>
                            <div class="d-date-sep"></div>
                            <div class="d-date-cell"><span class="lbl">Năm</span><span class="val"><?= htmlspecialchars($year) ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="hero-bottom">
                    <p class="d-hero-invite">Trân trọng kính mời</p>
                    <p class="d-hero-time"><?= htmlspecialchars($time) ?></p>
                    <div class="d-venue">
                        <p class="d-venue-title">TIỆC ĐƯỢC TỔ CHỨC TẠI TƯ GIA NHÀ TRAI</p>
                        <p class="d-venue-address">Xã Xuân Giang, Ninh Bình</p>
                    </div>
                    <p class="d-hero-reception">Reception to Follow</p>
                    <div class="d-floral-bottom"></div>
                </div>
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
        const scale = Math.min(maxWidth / 720, maxHeight / 1280, 1);
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
        clone.style.width = '720px';
        clone.style.height = '1280px';
        clone.style.transform = 'none';
        clone.style.margin = '0';
        document.body.appendChild(clone);

        html2canvas(clone, {
            scale: 2,
            useCORS: true,
            allowTaint: true,
            backgroundColor: '#8a9370',
            logging: false,
            width: 720,
            height: 1280,
        }).then(function (canvas) {
            document.body.removeChild(clone);
            const link = document.createElement('a');
            link.download = '<?= htmlspecialchars($slug) ?>.png';
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

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('download') === 'auto') {
        setTimeout(function () {
            document.getElementById('downloadBtn').click();
        }, 1800);
    }
</script>

</body>
</html>
