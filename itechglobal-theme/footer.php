  <footer>
    <div class="container">&copy; 2026 Itech Global. All rights reserved.</div>
  </footer>

  <?php wp_footer(); ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('nav a').forEach(anchor => {
        anchor.addEventListener('click', event => {
          event.preventDefault();
          const target = document.querySelector(anchor.getAttribute('href'));
          if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
          }
        });
      });

      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });

      document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

      document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', () => {
          const para = item.querySelector('p');
          if (!para) return;
          const isOpen = para.style.display === 'block';
          para.style.display = isOpen ? 'none' : 'block';
        });
      });

      const form = document.querySelector('form');
      if (form) {
        form.addEventListener('submit', event => {
          event.preventDefault();
          const name = document.getElementById('name').value.trim();
          const email = document.getElementById('email').value.trim();
          const message = document.getElementById('message').value.trim();
          if (!name || !email || !message) {
            alert('Please fill in all fields.');
            return;
          }
          if (!/\S+@\S+\.\S+/.test(email)) {
            alert('Please enter a valid email address.');
            return;
          }
          alert('Thanks! We will reply shortly.');
          form.reset();
        });
      }
    });
  </script>
</body>
</html>
