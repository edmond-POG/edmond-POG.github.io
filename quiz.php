<?php require_once __DIR__.'/includes/config.php'; ?>
<title>Quiz</title>
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/my_style.css"/>
</head>
<body>
<?php include __DIR__.'/includes/nav.php'; ?>


<main class="container">
<h1>Which type of student are you?</h1>


<form action="<?= BASE_URL ?>/quiz_verification.php" method="get">
<fieldset>
<legend>Q1: I start assignments early.</legend>
<label><input type="radio" name="q1" value="0" required> Strongly disagree</label>
<label><input type="radio" name="q1" value="1"> Disagree</label>
<label><input type="radio" name="q1" value="2"> Neutral</label>
<label><input type="radio" name="q1" value="3"> Agree</label>
<label><input type="radio" name="q1" value="4"> Strongly agree</label>
</fieldset>


<!-- Duplicate for q2..q5 or adapt to your actual questions/inputs -->
<fieldset>
<legend>Q2: I keep a study schedule.</legend>
<label><input type="radio" name="q2" value="0" required> Strongly disagree</label>
<label><input type="radio" name="q2" value="1"> Disagree</label>
<label><input type="radio" name="q2" value="2"> Neutral</label>
<label><input type="radio" name="q2" value="3"> Agree</label>
<label><input type="radio" name="q2" value="4"> Strongly agree</label>
</fieldset>


<fieldset>
<legend>Q3: I review notes daily.</legend>
<label><input type="radio" name="q3" value="0" required> Strongly disagree</label>
<label><input type="radio" name="q3" value="1"> Disagree</label>
<label><input type="radio" name="q3" value="2"> Neutral</label>
<label><input type="radio" name="q3" value="3"> Agree</label>
<label><input type="radio" name="q3" value="4"> Strongly agree</label>
</fieldset>


<fieldset>
<legend>Q4: I avoid distractions while studying.</legend>
<label><input type="radio" name="q4" value="0" required> Strongly disagree</label>
<label><input type="radio" name="q4" value="1"> Disagree</label>
<label><input type="radio" name="q4" value="2"> Neutral</label>
<label><input type="radio" name="q4" value="3"> Agree</label>
<label><input type="radio" name="q4" value="4"> Strongly agree</label>
</fieldset>


<fieldset>
<legend>Q5: I finish tasks on time.</legend>
<label><input type="radio" name="q5" value="0" required> Strongly disagree</label>
<label><input type="radio" name="q5" value="1"> Disagree</label>
<label><input type="radio" name="q5" value="2"> Neutral</label>
<label><input type="radio" name="q5" value="3"> Agree</label>
<label><input type="radio" name="q5" value="4"> Strongly agree</label>
</fieldset>


<button type="submit">See my result</button>
</form>
</main>


<?php include __DIR__.'/includes/footer.php'; ?>
</body>
</html>