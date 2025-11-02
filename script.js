/* ---------- Slideshow ---------- */
let current_slide = 0;
let slideNodes = [];

function showSlide(n) {
  if (!slideNodes.length) return;
  // wrap-around
  if (n >= slideNodes.length) current_slide = 0;
  else if (n < 0) current_slide = slideNodes.length - 1;
  else current_slide = n;

  for (let i = 0; i < slideNodes.length; i++) {
    slideNodes[i].style.display = (i === current_slide) ? "block" : "none";
  }
}

function previous() { showSlide(current_slide - 1); }
function next()     { showSlide(current_slide + 1); }

function initSlideshow() {
  slideNodes = Array.from(document.querySelectorAll(".slideshow .slideshow_img"));
  showSlide(0);
}

/* ---------- To-Do with localStorage ---------- */
let items = [];
const STORAGE_KEY = "items";

function renderItem(item_text, id) {
  const ul = document.getElementById("todo-list");
  if (!ul) return;

  const li = document.createElement("li");
  li.dataset.id = id;

  const spanText = document.createElement("span");
  spanText.className = "text";
  spanText.textContent = item_text;

  const trash = document.createElement("span");
  trash.classList.add("trash", "fas", "fa-trash");
  trash.setAttribute("title", "Delete");

  trash.addEventListener("click", () => {
    li.remove();
    items = items.filter(x => x.id !== id);
    localStorage.setItem(STORAGE_KEY, JSON.stringify(items));
  });

  li.appendChild(spanText);
  li.appendChild(trash);
  ul.appendChild(li);
}

function renderList() {
  const ul = document.getElementById("todo-list");
  if (!ul) return;
  ul.innerHTML = "";
  items.forEach(it => renderItem(it.text, it.id));
}

function addItem(e) {
  if (e && e.preventDefault) e.preventDefault();
  const input = document.getElementById("todo-input");
  if (!input) return;

  const text = (input.value || "").trim();
  if (!text) {
    alert("Please enter something to add.");
    return;
  }

  const newItem = { text, id: Date.now() };
  items.push(newItem);
  localStorage.setItem(STORAGE_KEY, JSON.stringify(items));

  renderItem(newItem.text, newItem.id);
  input.value = "";
}

function initTodo() {
  try {
    items = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
  } catch {
    items = [];
  }
  renderList();

  const form = document.getElementById("todo-form");
  if (form) {
    form.addEventListener("submit", addItem);
  }
}
