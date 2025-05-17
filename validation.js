// Basit JavaScript doğrulama
function validateForm() {
  const adsoyad = document.getElementById("adsoyad").value.trim();
  const email = document.getElementById("email").value.trim();
  const telefon = document.getElementById("telefon").value.trim();
  const mesaj = document.getElementById("mesaj").value.trim();

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const telefonRegex = /^[0-9]+$/;

  if (!adsoyad || !email || !telefon || !mesaj) {
    alert("Lütfen tüm alanları doldurun.");
    return false;
  }

  if (!emailRegex.test(email)) {
    alert("Geçerli bir e-posta adresi giriniz.");
    return false;
  }

  if (!telefonRegex.test(telefon)) {
    alert("Telefon numarası sadece rakamlardan oluşmalıdır.");
    return false;
  }

  return true;
}

// Framework benzeri doğrulama (örn. Vue.js mantığında kontrol)
function kontrolFramework() {
  const inputs = document.querySelectorAll("#iletisimForm input, #iletisimForm textarea, #iletisimForm select");
  let eksik = false;

  inputs.forEach((input) => {
    if (input.value.trim() === "") {
      input.classList.add("is-invalid");
      eksik = true;
    } else {
      input.classList.remove("is-invalid");
    }
  });

  if (!eksik) {
    alert("Tüm alanlar geçerli görünüyor. Form gönderilmeye hazır.");
  } else {
    alert("Lütfen boş veya hatalı alanları kontrol edin.");
  }
}
