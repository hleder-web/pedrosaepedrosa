
<?php wp_footer(); ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".header");
  const sentinelas = document.querySelectorAll(".sentinela");

  console.log("Sentinelas encontradas:", sentinelas);

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        console.log("Observando entrada:", entry);

        if (entry.isIntersecting) {
          const bg = entry.target.dataset.bg;
          console.log(`Seção ${bg} entrou na vista`);

          // Altera a classe do header conforme o fundo
          header.classList.toggle("dark", bg === "escuro");
        }
      });
    },
    {
      threshold: 0.1, // Configurado para considerar qualquer parte da sentinela visível
    }
  );

  sentinelas.forEach((el) => {
    console.log("Observando sentinela:", el);
    observer.observe(el);
  });
});
</script>
</body>
</html>