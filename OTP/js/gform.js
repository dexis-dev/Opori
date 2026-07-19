const scriptURL = 'https://script.google.com/macros/s/AKfycbxaP2eflr4_xhGodx1QXQcAo7vQPvOuONeKESFaDDV-YcutV17yUqGe3iggAT-mu4Lw/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Данные успешно отправленыБ! Ждите обратной связи." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})