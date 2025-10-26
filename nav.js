function splitAtRoot(path){
  const url = new URL(path, location.origin)
  return url.pathname
}

function setNav(current_path){
  current_path = splitAtRoot(current_path || location.pathname)
  fetch("nav.html")
    .then(r => r.text())
    .then(html => {
      const target = document.getElementById("main-nav")
      if(!target) return
      target.innerHTML = html
      for (let child of target.children){
        if (child instanceof HTMLAnchorElement){
          const hrefClean = splitAtRoot(child.href)
          if (hrefClean === current_path){
            child.classList.add("current_page")
          }
        }
      }
    })
    .catch(err => {
      console.warn("Nav fetch failed. Deploy to GitHub Pages to test.", err)
    })
}
