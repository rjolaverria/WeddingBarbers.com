// Navbar Scroll Transition

window.addEventListener('scroll', function() {
  const nav = document.getElementById('navbar');
  const a = $('#navbar .desktop-nav a');
  if (window.scrollY > 50) {
    nav.classList.add('nav-dark');
    for (let index = 0; index < a.length; index++) {
      a[index].style.color = '#000';
    }
  } else {
    nav.classList.remove('nav-dark');
    for (let index = 0; index < a.length; index++) {
      a[index].style.color = '#fff';
    }
  }
});

// Smooth Scrolling
$('#navbar a').on('click', function(event) {
  if (this.hash !== '') {
    event.preventDefault();

    const hash = this.hash;
    $('.toggler').prop('checked', false);
    $('html, body').animate(
      {
        scrollTop: $(hash).offset().top - 50
      },
      800
    );
  }
});
