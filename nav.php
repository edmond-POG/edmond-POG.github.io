<?php // includes/nav.php ?>
<!-- Bonus: replace text "Index" with your logo -->
<a class="brand" href="<?= BASE_URL ?>/index.php" aria-label="Home">
<img src="<?= BASE_URL ?>/assets/img/logo.png" alt="Site logo" style="height:36px; width:auto; vertical-align:middle;"/>
</a>


<button class="hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="nav-links">☰</button>


<ul id="nav-links" class="links">
<li><a href="<?= BASE_URL ?>/about.php">About</a></li>
<li class="dropdown">
<button class="dropbtn" aria-haspopup="true" aria-expanded="false">Discover me!</button>
<ul class="dropdown-content" aria-label="submenu">
<li><a href="<?= BASE_URL ?>/my_artistic_self.php">My Artistic Self</a></li>
<li><a href="<?= BASE_URL ?>/my_vacation.php">My Dream Vacation</a></li>
</ul>
</li>
<li><a href="<?= BASE_URL ?>/quiz.php">Quiz</a></li>
<!-- Lab 8: gate the to-do list -->
<li><a href="<?= BASE_URL ?>/login.php">To‑Do List</a></li>
</ul>
</div>
</nav>


<style>
/* Minimal styles – adjust to your CSS */
.site-nav { position: sticky; top:0; background:#111; color:#fff; z-index:999; }
.nav-inner { display:flex; align-items:center; justify-content:space-between; gap:1rem; padding:0.75rem 1rem; }
.links { display:flex; list-style:none; gap:1rem; margin:0; padding:0; }
.links a { color:#fff; text-decoration:none; }


.dropdown { position:relative; }
.dropbtn { background:none; border:1px solid #444; color:#fff; padding:0.4rem 0.6rem; border-radius:8px; cursor:pointer; }
.dropdown-content { display:none; position:absolute; top:120%; left:0; background:#222; padding:0.5rem 0; border-radius:8px; min-width:190px; }
.dropdown-content li { list-style:none; }
.dropdown-content a { display:block; padding:0.5rem 0.75rem; }
.dropdown:hover .dropdown-content { display:block; }


/* Hamburger for small screens */
.hamburger { display:none; background:none; color:#fff; border:1px solid #444; padding:0.25rem 0.5rem; border-radius:8px; }
@media (max-width: 800px) {
.hamburger { display:inline-block; }
#nav-links { display:none; flex-direction:column; width:100%; }
#nav-links.open { display:flex; }
}
</style>


<script>
// Tiny JS for hamburger toggle (bonus)
(function(){
const btn = document.querySelector('.hamburger');
const links = document.getElementById('nav-links');
if (btn && links) {
btn.addEventListener('click', () => {
const open = links.classList.toggle('open');
btn.setAttribute('aria-expanded', String(open));
});
}
})();
</script>