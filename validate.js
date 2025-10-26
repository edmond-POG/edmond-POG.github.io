function validate(event){
  event.preventDefault()
  const name = document.getElementById("name")
  const email = document.getElementById("email")
  const focus = document.getElementById("focus")
  const breaks = document.getElementById("breaks")
  const toolsChecked = Array.from(document.querySelectorAll('input[name="tools"]:checked'))
  const studyTimeChecked = document.querySelector('input[name="study_time"]:checked')
  const issues = []
  if(!name.value.trim()) issues.push("Please enter your name.")
  if(!email.value.trim()) issues.push("Please enter your email.")
  if(email.value && !/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email.value)) issues.push("Please enter a valid email address.")
  if(!studyTimeChecked) issues.push("Pick a preferred study time.")
  if(focus.value === "") issues.push("Select your current focus level.")
  if(breaks.value && (Number(breaks.value) < 0 || Number(breaks.value) > 60)) issues.push("Breaks must be between 0 and 60 minutes.")
  if(issues.length){
    window.alert(issues.join("\n"))
    return false
  }
  const result = document.getElementById("result")
  result.style.display = "block"
  let score = 0
  if(studyTimeChecked && studyTimeChecked.value === "night") score += 2
  score += toolsChecked.length
  if(focus.value === "high") score += 2
  if(Number(breaks.value) <= 20) score += 1
  let archetype = "Balanced Learner"
  if(score >= 5) archetype = "Laser-Focused Pro"
  else if(score <= 2) archetype = "Freestyle Learner"
  result.innerHTML = `<h2 style="margin:0 0 8px">Hi ${name.value.trim()}!</h2><p><strong>Your quiz result:</strong> ${archetype}</p><p class="help">Score: ${score}</p>`
  return true
}
