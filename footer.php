
<?php wp_footer(); ?>
<script>
  document
  const header = document.getElementById('header');
    const sections = document.querySelectorAll('section');

    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const theme = entry.target.dataset.theme;
            console.log(theme)
            if (theme === 'dark') {
              header.classList.add('dark');
            } else {
              header.classList.remove('dark');
            }
          }
        });
      },
      { threshold: 0.4 }
    );

    sections.forEach(section => observer.observe(section));
</script>
</body>
</html>