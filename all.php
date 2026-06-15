<?php
// Gallery page showing all invitation card variants

$cards = [
    ['file' => 'card-10h00-4-7.php',   'sort' => [1, 1], 'label' => '10:00 — Thứ 7, 04/07/2026'],
    ['file' => 'card-10h30-4-7.php',   'sort' => [1, 2], 'label' => '10:30 — Thứ 7, 04/07/2026'],
    ['file' => 'card-17h00-4-7.php',   'sort' => [1, 3], 'label' => '17:00 — Thứ 7, 04/07/2026'],
    ['file' => 'card-17h30-4-7.php',   'sort' => [1, 4], 'label' => '17:30 — Thứ 7, 04/07/2026'],
    ['file' => 'card-18h00-4-7.php',   'sort' => [1, 5], 'label' => '18:00 — Thứ 7, 04/07/2026'],
    ['file' => 'card-18h30-4-7.php',   'sort' => [1, 6], 'label' => '18:30 — Thứ 7, 04/07/2026'],

    ['file' => 'card-10h00-5-7.php',   'sort' => [2, 1], 'label' => '10:00 — Chủ nhật, 05/07/2026'],
    ['file' => 'card-10h30-5-7.php',   'sort' => [2, 2], 'label' => '10:30 — Chủ nhật, 05/07/2026'],
    ['file' => 'card-17h00-5-7.php',   'sort' => [2, 3], 'label' => '17:00 — Chủ nhật, 05/07/2026'],
    ['file' => 'card-17h30-5-7.php',   'sort' => [2, 4], 'label' => '17:30 — Chủ nhật, 05/07/2026'],
    ['file' => 'card-18h00-5-7.php',   'sort' => [2, 5], 'label' => '18:00 — Chủ nhật, 05/07/2026'],
    ['file' => 'card-18h30-5-7.php',   'sort' => [2, 6], 'label' => '18:30 — Chủ nhật, 05/07/2026'],

    ['file' => 'card-10h00-4-5-7.php', 'sort' => [3, 1], 'label' => '10:00 — 04 & 05/07/2026'],
    ['file' => 'card-10h30-4-5-7.php', 'sort' => [3, 2], 'label' => '10:30 — 04 & 05/07/2026'],
    ['file' => 'card-17h00-4-5-7.php', 'sort' => [3, 3], 'label' => '17:00 — 04 & 05/07/2026'],
    ['file' => 'card-17h30-4-5-7.php', 'sort' => [3, 4], 'label' => '17:30 — 04 & 05/07/2026'],
    ['file' => 'card-18h00-4-5-7.php', 'sort' => [3, 5], 'label' => '18:00 — 04 & 05/07/2026'],
    ['file' => 'card-18h30-4-5-7.php', 'sort' => [3, 6], 'label' => '18:30 — 04 & 05/07/2026'],
];

usort($cards, fn($a, $b) => $a['sort'] <=> $b['sort']);

$cardUrls = array_map(fn($c) => $c['file'], $cards);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tất cả thiệp mừng — Ngọc Tân & Thu Trang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Cormorant Garamond', serif;
            background: #f4f4f4;
            color: #2c2c2c;
            padding: 24px;
        }
        .page-header {
            max-width: 1400px;
            margin: 0 auto 28px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }
        .page-header h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #7b8360;
        }
        .page-header p {
            font-size: 1.05rem;
            color: #777;
            margin-top: 4px;
        }
        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border: 1px solid #9aa47e;
            border-radius: 28px;
            background: #9aa47e;
            color: #fff;
            font-family: 'Cormorant Garamond', serif;
            font-size: 16px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all .2s;
            text-decoration: none;
        }
        .btn:hover { background: #7b8360; border-color: #7b8360; }
        .btn-outline {
            background: transparent;
            color: #9aa47e;
        }
        .btn-outline:hover { background: #9aa47e; color: #fff; }
        .btn:disabled {
            opacity: .6;
            cursor: wait;
        }

        .section-title {
            max-width: 1400px;
            margin: 32px auto 16px;
            font-size: 1.35rem;
            font-weight: 600;
            color: #7b8360;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
        }

        .card-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 24px;
        }

        .card-item {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 30px -12px rgba(0,0,0,0.12);
            padding: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .preview-wrap {
            width: 162px;
            height: 288px;
            overflow: hidden;
            border-radius: 10px;
            position: relative;
            background: #f0f0f0;
            box-shadow: inset 0 0 0 1px rgba(0,0,0,0.06);
        }
        .preview-wrap iframe {
            width: 720px;
            height: 1280px;
            transform: scale(0.225);
            transform-origin: 0 0;
            border: none;
            display: block;
        }
        .preview-wrap a {
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .card-meta {
            text-align: center;
            width: 100%;
        }
        .card-label {
            font-size: 1rem;
            font-weight: 600;
            color: #2c2c2c;
            margin-bottom: 10px;
            line-height: 1.35;
        }
        .card-actions {
            display: flex;
            gap: 8px;
            justify-content: center;
        }
        .card-actions .btn {
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 20px;
        }

        .progress {
            max-width: 1400px;
            margin: 16px auto 0;
            font-size: .95rem;
            color: #777;
            min-height: 24px;
        }

        @media (max-width: 640px) {
            .page-header { flex-direction: column; align-items: flex-start; }
            .card-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
            .preview-wrap { width: 138px; height: 245px; }
            .preview-wrap iframe { transform: scale(0.192); }
        }
    </style>
</head>
<body>

<div class="page-header">
    <div>
        <h1>Tất cả thiệp mừng</h1>
        <p>Ngọc Tân & Thu Trang — 18 phiên bản khung giờ và ngày</p>
    </div>
    <div class="actions">
        <button class="btn" id="downloadAllBtn" onclick="downloadAll()">⬇ Tải tất cả</button>
        <a class="btn btn-outline" href="card.php">Xem thiệp mặc định</a>
    </div>
</div>

<div class="progress" id="progressText"></div>

<?php
$currentDateGroup = null;
$gridOpen = false;
foreach ($cards as $i => $card):
    $dateGroup = match ($card['sort'][0]) {
        1 => 'Ngày 04/07/2026 — Thứ 7',
        2 => 'Ngày 05/07/2026 — Chủ nhật',
        3 => 'Ngày 04 & 05/07/2026',
    };
    if ($dateGroup !== $currentDateGroup):
        if ($gridOpen) echo '</div>';
        $currentDateGroup = $dateGroup;
        echo '<h2 class="section-title">' . htmlspecialchars($dateGroup) . '</h2>';
        echo '<div class="card-grid">';
        $gridOpen = true;
    endif;
?>
    <div class="card-item" data-file="<?= htmlspecialchars($card['file']) ?>">
        <div class="preview-wrap">
            <iframe src="<?= htmlspecialchars($card['file']) ?>" loading="lazy" title="<?= htmlspecialchars($card['label']) ?>"></iframe>
            <a href="<?= htmlspecialchars($card['file']) ?>" target="_blank"></a>
        </div>
        <div class="card-meta">
            <div class="card-label"><?= htmlspecialchars($card['label']) ?></div>
            <div class="card-actions">
                <a class="btn btn-outline" href="<?= htmlspecialchars($card['file']) ?>" target="_blank">Xem</a>
                <button class="btn" onclick="downloadOne('<?= htmlspecialchars($card['file']) ?>')">Tải</button>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php if ($gridOpen) echo '</div>'; ?>

<script>
    const cardFiles = <?= json_encode($cardUrls) ?>;

    function downloadOne(file) {
        const url = file + (file.indexOf('?') === -1 ? '?download=auto' : '&download=auto');
        const iframe = document.createElement('iframe');
        iframe.src = url;
        iframe.style.position = 'fixed';
        iframe.style.left = '-9999px';
        iframe.style.top = '0';
        iframe.style.width = '720px';
        iframe.style.height = '1280px';
        iframe.style.opacity = '0';
        iframe.style.pointerEvents = 'none';
        document.body.appendChild(iframe);
        setTimeout(() => {
            if (iframe.parentNode) iframe.parentNode.removeChild(iframe);
        }, 8000);
    }

    function downloadAll() {
        const btn = document.getElementById('downloadAllBtn');
        const progress = document.getElementById('progressText');
        if (btn.disabled) return;
        btn.disabled = true;
        btn.textContent = 'Đang tải...';

        let index = 0;
        const delay = 3000;

        function next() {
            if (index >= cardFiles.length) {
                progress.textContent = 'Hoàn tất! Nếu trình duyệt chặn nhiều file, hãy dùng nút Tải từng thiệp.';
                btn.disabled = false;
                btn.textContent = '⬇ Tải tất cả';
                return;
            }
            const file = cardFiles[index];
            progress.textContent = 'Đang tải ' + (index + 1) + '/' + cardFiles.length + ': ' + file;
            downloadOne(file);
            index++;
            setTimeout(next, delay);
        }

        next();
    }
</script>

</body>
</html>
