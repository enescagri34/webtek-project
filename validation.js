// validation.js

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (e) {
    const adsoyad = form.adsoyad.value.trim();
    const email = form.email.value.trim();
    const konu = form.konu.value.trim();
    const mesaj = form.mesaj.value.trim();

    if (!adsoyad || !email || !konu || !mesaj) {
      e.preventDefault();
      alert("Lütfen tüm alanları doldurunuz.");
    }
  });
});
