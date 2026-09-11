<?php require_once __DIR__.'/includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Login to To‑Do</title>
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/my_style.css"/>
</head>
<body>
<?php include __DIR__.'/includes/nav.php'; ?>
<main class="container">
<h1>Enter Password</h1>
<?php
// Hash of the valid password ("CS203") using sha256
// b14e9015dae06b5e206c2b37178eac45e193792c5ccf1d48974552614c61f2ff
const VALID_HASH = 'b14e9015dae06b5e206c2b37178eac45e193792c5ccf1d48974552614c61f2ff';


$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$pwd = isset($_POST['password']) ? (string)$_POST['password'] : '';
$hash = hash('sha256', $pwd);
if (hash_equals(VALID_HASH, $hash)) {
// Redirect to the to-do page
header('Location: '.BASE_URL.'/todo-list.php');
exit(); // important: stop executing the rest of the script
} else {
$error = 'Wrong password. Please try again.';
}
}
?>


<form action="" method="post">
<label for="password">Password</label>
<input id="password" name="password" type="password" required />
<button type="submit">Access To‑Do</button>
</form>


<?php if ($error): ?>
<p style="color:red; margin-top:0.5rem;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
</main>
<?php include __DIR__.'/includes/footer.php'; ?>
</body>
</html>