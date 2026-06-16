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
if (!isset($venueTitle)) $venueTitle = 'TIỆC ĐƯỢC TỔ CHỨC TẠI TƯ GIA NHÀ TRAI';

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
            width: 210px;
            height: 210px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            pointer-events: none;
            z-index: 4;
        }
        .hero-inner::before {
            top: -44px;
            left: -44px;
            background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20120%20120%22%3E%0A%20%20%3Cg%20fill%3D%22none%22%20stroke%3D%22%239aa47e%22%20stroke-width%3D%221.4%22%20opacity%3D%220.9%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M8%2082%20Q30%2028%2082%208%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M18%2098%20Q48%2042%2098%2018%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M32%20108%20Q58%2054%20108%2032%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20fill%3D%22%239aa47e%22%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2234%22%20cy%3D%2246%22%20rx%3D%228%22%20ry%3D%224%22%20transform%3D%22rotate%28-55%2034%2046%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2252%22%20cy%3D%2232%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-35%2052%2032%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2268%22%20cy%3D%2258%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-60%2068%2058%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2286%22%20cy%3D%2244%22%20rx%3D%226%22%20ry%3D%223%22%20transform%3D%22rotate%28-40%2086%2044%29%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.95%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%28-45%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%280%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2845%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2890%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2276%22%20cy%3D%2234%22%20r%3D%225%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.85%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%28-30%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2830%2044%2070%29%22%20fill%3D%22%23f5e1e1%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2890%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2244%22%20cy%3D%2270%22%20r%3D%223.5%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28-20%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%2840%2096%2076%29%22%20fill%3D%22%23f0e8dc%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28100%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2296%22%20cy%3D%2276%22%20r%3D%223%22%20fill%3D%22%239aa47e%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E);
            /* background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%20120%20120%27%3E%3Cg%20fill%3D%27none%27%20stroke%3D%27%23f8f7f3%27%20stroke-width%3D%271.6%27%20opacity%3D%270.95%27%3E%3Cpath%20d%3D%27M8%2082%20Q30%2028%2082%208%27%2F%3E%3Cpath%20d%3D%27M18%2098%20Q48%2042%2098%2018%27%2F%3E%3Cpath%20d%3D%27M32%20108%20Q58%2054%20108%2032%27%2F%3E%3C%2Fg%3E%3Cg%20fill%3D%27%23f8f7f3%27%20opacity%3D%270.95%27%3E%3Cellipse%20cx%3D%2776%27%20cy%3D%2734%27%20rx%3D%2718%27%20ry%3D%2710%27%20transform%3D%27rotate%28-45%2076%2034%29%27%2F%3E%3Cellipse%20cx%3D%2776%27%20cy%3D%2734%27%20rx%3D%2718%27%20ry%3D%2710%27%20transform%3D%27rotate%280%2076%2034%29%27%2F%3E%3Cellipse%20cx%3D%2776%27%20cy%3D%2734%27%20rx%3D%2718%27%20ry%3D%2710%27%20transform%3D%27rotate%2845%2076%2034%29%27%2F%3E%3Cellipse%20cx%3D%2776%27%20cy%3D%2734%27%20rx%3D%2718%27%20ry%3D%2710%27%20transform%3D%27rotate%2890%2076%2034%29%27%2F%3E%3Ccircle%20cx%3D%2776%27%20cy%3D%2734%27%20r%3D%275%27%20fill%3D%27%239aa47e%27%2F%3E%3C%2Fg%3E%3Cg%20fill%3D%27%23f8f7f3%27%20opacity%3D%270.8%27%3E%3Cellipse%20cx%3D%2744%27%20cy%3D%2770%27%20rx%3D%2712%27%20ry%3D%278%27%20transform%3D%27rotate%28-30%2044%2070%29%27%2F%3E%3Cellipse%20cx%3D%2744%27%20cy%3D%2770%27%20rx%3D%2712%27%20ry%3D%278%27%20transform%3D%27rotate%2830%2044%2070%29%27%2F%3E%3Cellipse%20cx%3D%2744%27%20cy%3D%2770%27%20rx%3D%2712%27%20ry%3D%278%27%20transform%3D%27rotate%2890%2044%2070%29%27%2F%3E%3Ccircle%20cx%3D%2744%27%20cy%3D%2770%27%20r%3D%273.5%27%20fill%3D%27%239aa47e%27%2F%3E%3C%2Fg%3E%3Cg%20fill%3D%27%23f8f7f3%27%20opacity%3D%270.65%27%3E%3Cellipse%20cx%3D%2796%27%20cy%3D%2776%27%20rx%3D%2710%27%20ry%3D%277%27%20transform%3D%27rotate%28-20%2096%2076%29%27%2F%3E%3Cellipse%20cx%3D%2796%27%20cy%3D%2776%27%20rx%3D%2710%27%20ry%3D%277%27%20transform%3D%27rotate%2840%2096%2076%29%27%2F%3E%3Cellipse%20cx%3D%2796%27%20cy%3D%2776%27%20rx%3D%2710%27%20ry%3D%277%27%20transform%3D%27rotate%28100%2096%2076%29%27%2F%3E%3Ccircle%20cx%3D%2796%27%20cy%3D%2776%27%20r%3D%273%27%20fill%3D%27%239aa47e%27%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E); */
        }
        .hero-inner::after  { bottom: -34px; right: -34px; transform: rotate(180deg); background-image: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20120%20120%22%3E%0A%20%20%3Cg%20fill%3D%22none%22%20stroke%3D%22%239aa47e%22%20stroke-width%3D%221.4%22%20opacity%3D%220.9%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M8%2082%20Q30%2028%2082%208%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M18%2098%20Q48%2042%2098%2018%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M32%20108%20Q58%2054%20108%2032%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20fill%3D%22%239aa47e%22%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2234%22%20cy%3D%2246%22%20rx%3D%228%22%20ry%3D%224%22%20transform%3D%22rotate%28-55%2034%2046%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2252%22%20cy%3D%2232%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-35%2052%2032%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2268%22%20cy%3D%2258%22%20rx%3D%227%22%20ry%3D%223.5%22%20transform%3D%22rotate%28-60%2068%2058%29%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2286%22%20cy%3D%2244%22%20rx%3D%226%22%20ry%3D%223%22%20transform%3D%22rotate%28-40%2086%2044%29%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.95%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%28-45%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%280%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2845%2076%2034%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2276%22%20cy%3D%2234%22%20rx%3D%2218%22%20ry%3D%2210%22%20transform%3D%22rotate%2890%2076%2034%29%22%20fill%3D%22%23f2e8e8%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2276%22%20cy%3D%2234%22%20r%3D%225%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.85%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%28-30%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2830%2044%2070%29%22%20fill%3D%22%23f5e1e1%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2244%22%20cy%3D%2270%22%20rx%3D%2212%22%20ry%3D%228%22%20transform%3D%22rotate%2890%2044%2070%29%22%20fill%3D%22%23e8c4c4%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2244%22%20cy%3D%2270%22%20r%3D%223.5%22%20fill%3D%22%23d4af37%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%20%20%3Cg%20opacity%3D%220.75%22%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28-20%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%2840%2096%2076%29%22%20fill%3D%22%23f0e8dc%22%2F%3E%0A%20%20%20%20%3Cellipse%20cx%3D%2296%22%20cy%3D%2276%22%20rx%3D%2210%22%20ry%3D%227%22%20transform%3D%22rotate%28100%2096%2076%29%22%20fill%3D%22%23f8f7f3%22%2F%3E%0A%20%20%20%20%3Ccircle%20cx%3D%2296%22%20cy%3D%2276%22%20r%3D%223%22%20fill%3D%22%239aa47e%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E"); }

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
        .d-wreath .d-icon {
            width: 82px;
            height: 82px;
            display: block;
        }
        .d-wreath .d-icon svg {
            width: 100%;
            height: 100%;
            display: block;
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
        .d-date-cell.weekday { justify-content: center; }
        .d-date-cell.weekday .val { font-size: 1.7rem; font-weight: 600; color: #2c2c2c; letter-spacing: 0.5px; }
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
                    <div class="d-wreath"><i class="d-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path fill="#aacf37" d="M16.21 17h-.06a5.5 5.5 0 1 1 5.74-6.62 1 1 0 0 1-.38 1 16.22 16.22 0 0 0-4.43 5.1A1 1 0 0 1 16.21 17zm.29-9a3.5 3.5 0 0 0-.82 6.9 18.32 18.32 0 0 1 4.08-4.69A3.47 3.47 0 0 0 16.5 8zM47.5 6a5.44 5.44 0 0 0-5.13 3.54A5.16 5.16 0 0 0 42 11.3a1 1 0 0 0 .35.79c.28.24.54.48.8.75a16.53 16.53 0 0 1 2.73 3.59 1 1 0 0 0 .71.5 5.29 5.29 0 0 0 .9.07 4.94 4.94 0 0 0 .87-.07A5.5 5.5 0 0 0 47.5 6zm-.13 9a2.61 2.61 0 0 0-.2-.3 8.48 8.48 0 0 0-.48-.74c-.16-.25-.34-.49-.52-.72s-.57-.72-.88-1.06-.47-.52-.71-.76l-.53-.5A3.5 3.5 0 1 1 47.37 15zM26.57 51.26a1 1 0 0 0-.9-.12h0a13.4 13.4 0 0 1-5.58.82H20a1 1 0 0 0-.68.27A1 1 0 0 0 19 53v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V52.08A1 1 0 0 0 26.57 51.26zM25 56H21V54a14.85 14.85 0 0 0 4-.54z"/><path fill="#2b5a31" d="M26.57,51.26a1,1,0,0,0-.9-.12h0a13.4,13.4,0,0,1-5.58.82H20a1,1,0,0,0-.68.27A1,1,0,0,0,19,53v.94L21,54a14.85,14.85,0,0,0,4-.54h0l2-.68v-.7A1,1,0,0,0,26.57,51.26Z"/><path fill="#aacf37" d="M44.69,52.24A1,1,0,0,0,44,52h-.07c-.3,0-.61,0-.92,0a13.43,13.43,0,0,1-4.66-.84h0a1,1,0,0,0-1.35.93V57a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V53A1,1,0,0,0,44.69,52.24ZM43,56H39V53.46a14.07,14.07,0,0,0,2.13.42A14.44,14.44,0,0,0,43,54Z"/><path fill="#2b5a31" d="M22 29a1 1 0 0 1-1 1 12.94 12.94 0 0 0-6.5 1.74C10.38 34.12 8 36.4 8 41c0 6.29 4.7 10.6 12 11h.07A1 1 0 0 1 20 54H20L19 53.9C11.07 53.17 6 48.19 6 41c0-5.31 2.78-8.17 7-10.69l.5-.3c.49-.28 1-.53 1.5-.76l.1 0 .35-.14q.32-.13.63-.24l.16 0 .8-.25c.41-.11.82-.21 1.24-.28l.62-.1.29 0 .56-.05a2.56 2.56 0 0 1 .39 0c.29 0 .57 0 .86 0A1 1 0 0 1 22 29zM58 41c0 7.19-5.07 12.17-13 12.9l-1 .07h0a1 1 0 0 1-.06-2H44c7.29-.37 12-4.68 12-11a10.63 10.63 0 0 0-.15-1.84c-.63-3.94-3.39-6.06-7.28-7.91A12.82 12.82 0 0 0 43 30a1 1 0 0 1 0-2l.79 0h.14l.63 0 .94.13.12 0 .66.12.83.22c.26.07.52.16.79.25a14.48 14.48 0 0 1 1.53.63l.57.28c3.21 1.59 6.36 3.78 7.52 7.76A12.21 12.21 0 0 1 58 41zM38.36 51.15h0l-.06 0a17.19 17.19 0 0 0-12.62 0l.33.94.44.9.56-.21a15.17 15.17 0 0 1 10 0l.64.23a.84.84 0 0 0 .35.07 1 1 0 0 0 .91-.65A1 1 0 0 0 38.36 51.15z"/><path fill="#aacf37" d="M18.5 45a1 1 0 0 1 0-2A1.5 1.5 0 1 0 17 41.5a1 1 0 0 1-2 0A3.5 3.5 0 1 1 18.5 45zM45.5 45A3.5 3.5 0 1 1 49 41.5a1 1 0 0 1-2 0A1.5 1.5 0 1 0 45.5 43a1 1 0 0 1 0 2z"/><path fill="#2b5a31" d="M50,24.5v5.85a1,1,0,0,1-.47.85,1,1,0,0,1-1,.05A12.82,12.82,0,0,0,43,30a1,1,0,0,1,0-2l.79,0h.14l.63,0,.94.13.12,0,.66.12.83.22c.26.07.52.16.79.25l.1,0V24.5a16.43,16.43,0,0,0-4.84-11.66c-.26-.27-.52-.51-.8-.75A16.45,16.45,0,0,0,31.5,8a16.23,16.23,0,0,0-9.61,3.1l-.37.27-.09.07-.78.63-.22.2q-.39.35-.75.72l-.08.08c-.26.28-.52.57-.77.87s-.52.64-.76,1l-.22.32a5.39,5.39,0,0,0-.33.5c-.16.24-.3.49-.44.74a16.47,16.47,0,0,0-2.08,8v4.75l.1,0,.35-.14q.32-.13.63-.24l.16,0,.8-.25c.41-.11.82-.21,1.24-.28l.62-.1.29,0,.56-.05a2.56,2.56,0,0,1,.39,0c.29,0,.57,0,.86,0a1,1,0,0,1,0,2,12.94,12.94,0,0,0-6.5,1.74,1,1,0,0,1-.5.14,1,1,0,0,1-1-1V24.5a17.91,17.91,0,0,1,.79-5.3,16,16,0,0,1,.94-2.5c.19-.41.39-.81.61-1.2s.32-.56.49-.83.34-.53.53-.79.34-.49.53-.72.41-.53.63-.78.43-.47.65-.7l.56-.56.25-.23c.19-.18.38-.35.58-.51s.49-.41.75-.6S21,9.25,21.4,9a18,18,0,0,1,4.83-2.25A18.52,18.52,0,0,1,42.37,9.54c.45.33.88.67,1.3,1s.61.55.91.84.48.5.71.76.6.69.88,1.06.36.47.52.72a8.48,8.48,0,0,1,.48.74c.16.25.31.49.46.75.27.48.52,1,.74,1.48A18.36,18.36,0,0,1,50,24.5Z"/><circle cx="23.5" cy="20.5" r="1.5" fill="#2b5a31"/><circle cx="40.5" cy="20.5" r="1.5" fill="#2b5a31"/><path fill="#aacf37" d="M37.29 57.71A21.92 21.92 0 0 1 6.42 26.57l7.37-7.37A17.91 17.91 0 0 0 13 24.5v5.81C8.78 32.83 6 35.69 6 41c0 7.19 5.07 12.17 13 12.9V57a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V52.77a15.17 15.17 0 0 1 10 0V57A1 1 0 0 0 37.29 57.71zM64 21.92a21.89 21.89 0 0 1-6.42 15.51l-.06.06c-1.16-4-4.31-6.17-7.52-7.76V24.5a18.36 18.36 0 0 0-1.63-7.57A5.5 5.5 0 0 0 47.5 6a5.44 5.44 0 0 0-5.13 3.54A18.52 18.52 0 0 0 26.23 6.76l.34-.34A21.93 21.93 0 0 1 64 21.92z" opacity=".5"/><path fill="#2b5a31" d="M37,52.08v.7l2,.68h0A14.85,14.85,0,0,0,43,54l2-.09V53a1,1,0,0,0-.31-.73A1,1,0,0,0,44,52h-.07a13.4,13.4,0,0,1-5.58-.82h0a1,1,0,0,0-.9.12A1,1,0,0,0,37,52.08Z"/></svg></i></div>
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
                                <div class="d-date-cell weekday"><span class="val"><?= htmlspecialchars($weekdayText) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell big"><span class="lbl">Ngày</span><span class="val"><?= htmlspecialchars($day) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell"><span class="lbl">Tháng</span><span class="val"><?= htmlspecialchars($month) ?></span></div>
                                <div class="d-date-sep"></div>
                                <div class="d-date-cell"><span class="lbl">Năm</span><span class="val"><?= htmlspecialchars($year) ?></span></div>
                            </div>
                            <span class="d-multi-date-sep">và</span>
                            <div class="d-hero-date">
                                <div class="d-date-cell weekday"><span class="val"><?= htmlspecialchars($weekdayText2) ?></span></div>
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
                            <div class="d-date-cell weekday"><span class="val"><?= htmlspecialchars($weekdayText) ?></span></div>
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
                        <p class="d-venue-title"><?= htmlspecialchars($venueTitle) ?></p>
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
