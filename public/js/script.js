document.addEventListener("DOMContentLoaded", function () {
  const alerts = document.querySelectorAll(".alert");
  alerts.forEach((alert) => {
    if (
      alert.classList.contains("alert-success") ||
      alert.classList.contains("alert-danger")
    ) {
      setTimeout(() => {
        alert.style.opacity = "0";
        setTimeout(() => {
          alert.style.display = "none";
        }, 300);
      }, 5000);
    }
  });

  const deleteButtons = document.querySelectorAll(
    '.btn-danger[data-action="delete"]'
  );
  deleteButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      if (!confirm("Êtes-vous sûr de vouloir supprimer ce stagiaire ?")) {
        e.preventDefault();
      }
    });
  });

  const forms = document.querySelectorAll("form");
  forms.forEach((form) => {
    form.addEventListener("submit", function (e) {
      const requiredFields = form.querySelectorAll("[required]");
      let hasError = false;

      requiredFields.forEach((field) => {
        if (!field.value.trim()) {
          field.classList.add("is-invalid");
          hasError = true;
        } else {
          field.classList.remove("is-invalid");
        }
      });

      if (hasError) {
        e.preventDefault();
        alert("Veuillez remplir tous les champs obligatoires.");
      }
    });
  });
});
