<?php require_once __DIR__.'/includes/config.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Quiz Result</title>
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/my_style.css"/>
<style>
.result-grid { display:grid; gap:1rem; grid-template-columns: repeat(auto-fit, minmax(240px,1fr)); }
.result-card { border:1px solid #ddd; border-radius:10px; padding:1rem; }
.highlight { outline:3px solid #4caf50; box-shadow:0 0 0 3px rgba(76,175,80,.2); }
</style>
</head>
<body>
<?php include __DIR__.'/includes/nav.php'; ?>
<main class="container">
<h1>Your Quiz Result</h1>
<?php
// Validate expected inputs (adapt names if your quiz differs)
$fields = ['q1','q2','q3','q4','q5'];
foreach ($fields as $f) {
if (!isset($_GET[$f]) || $_GET[$f] === '') {
echo '<p style="color:red">Missing answer for '.htmlspecialchars($f).'. Please go back and complete the quiz.</p>';
echo '<p><a href="'.BASE_URL.'/quiz.php">Return to quiz</a></p>';
include __DIR__.'/includes/footer.php';
echo '</body></html>'; exit;
}
}


$sum = 0; $maxPerQ = 4; $qCount = count($fields); $maxSum = $maxPerQ*$qCount;
foreach ($fields as $f) { $sum += (int)$_GET[$f]; }


$percent = (int)round(($sum / $maxSum) * 100);


// Categories example – adjust thresholds/texts to your quiz theme
$categories = [
[ 'label' => 'Needs Structure', 'range' => '0–49%', 'min' => 0, 'max' => 49, 'desc' => 'You might benefit from routines, planners, and breaking tasks into chunks.' ],
[ 'label' => 'Getting There', 'range' => '50–74%', 'min' => 50, 'max' => 74, 'desc' => 'You have some good habits. Keep reinforcing consistency.' ],
[ 'label' => 'Highly Organized','range' => '75–100%','min' => 75, 'max' => 100,'desc' => 'Your study discipline is strong; maintain balance and avoid burnout.' ],
];


// Find the card to highlight
$activeIdx = 0;
foreach ($categories as $i => $c) {
if ($percent >= $c['min'] && $percent <= $c['max']) { $activeIdx = $i; break; }
}
?>


<p><strong>Score:</strong> <?= $percent ?>%</p>


<section class="result-grid">
<?php foreach ($categories as $i => $c): ?>
<article class="result-card <?= ($i === $activeIdx ? 'highlight' : '') ?>">
<h2><?= htmlspecialchars($c['label']) ?> <small>(<?= htmlspecialchars($c['range']) ?>)</small></h2>
<p><?= htmlspecialchars($c['desc']) ?></p>
<?php if ($i === $activeIdx): ?><p><em>This is your category.</em></p><?php endif; ?>
</article>
<?php endforeach; ?>
</section>
</main>
<?php include __DIR__.'/includes/footer.php'; ?>
</body>
</html>