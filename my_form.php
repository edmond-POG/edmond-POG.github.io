<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Type Quiz</title>
  <link rel="stylesheet" href="my_style.css?v=lab6-1">
  <script src="nav.js?v=lab6-1"></script>
  <script defer src="validate.js?v=lab6-1"></script>
</head>
<body>
  <div class="body_wrapper">
    <header>
      <nav id="main-nav" class="main_nav"></nav>
      <script>setNav(location.pathname)</script>
    </header>

    <main>
      <h1>Which Type of Student Are You?</h1>
      <p class="help">Fill the form and get your fun result. No data is submitted.</p>

      <form class="quiz" onsubmit="return validate(event)">
        <fieldset>
          <legend>Your Info</legend>
          <label for="name">Name</label>
          <input id="name" name="name" type="text" placeholder="Your full name" required>
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="name@example.com" required>
        </fieldset>

        <fieldset>
          <legend>Quiz</legend>
          <label>1) Preferred study time</label>
          <div class="row">
            <label><input type="radio" name="study_time" value="morning">Morning</label>
            <label><input type="radio" name="study_time" value="afternoon">Afternoon</label>
            <label><input type="radio" name="study_time" value="night">Late night</label>
          </div>

          <label>2) Pick your tools (choose all that apply)</label>
          <div class="row">
            <label><input type="checkbox" name="tools" value="flashcards">Flashcards</label>
            <label><input type="checkbox" name="tools" value="group">Group study</label>
            <label><input type="checkbox" name="tools" value="notes">Handwritten notes</label>
            <label><input type="checkbox" name="tools" value="apps">Study apps</label>
          </div>

          <label for="breaks">3) Break length (minutes)</label>
          <input id="breaks" name="breaks" type="number" min="0" max="60" step="5" value="15">

          <label for="focus">4) How focused do you feel today?</label>
          <select id="focus" name="focus">
            <option value="">Choose…</option>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
          </select>

          <label for="goal">5) Main goal this week</label>
          <textarea id="goal" name="goal" rows="3" placeholder="e.g., finish Lab 6 early"></textarea>
        </fieldset>

        <input type="submit" value="See My Result">
      </form>

      <div id="result" class="card" style="display:none; margin-top:16px"></div>

      <p class="help" style="margin-top:16px"><a href="index.html">Back to Home</a></p>
    </main>
  </div>

  <footer>
    <p>CS203 Labs — GitHub Pages</p>
  </footer>
</body>
</html>
