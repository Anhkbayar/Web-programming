const nav = document.querySelector('#header_container');
const footer = document.querySelector('#footer_container');
fetch('/Header.html')
  .then(res => res.text())
  .then(data => {
    nav.innerHTML = data;
  });
fetch('/Footer.html')
  .then(res => res.text())
  .then(data =>{
    footer.innerHTML = data;
  })
