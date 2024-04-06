let formKuNode = document.getElementById("formKu");

let namaNode = document.getElementById("nama");
let namaSpanNode = document.getElementById("namaSpan");

let usernameNode = document.getElementById("username");
let usernameSpanNode = document.getElementById("usernameSpan");

let emailNode = document.getElementById("email");
let emailSpanNode = document.getElementById("emailSpan");

let passNode = document.getElementById("pass");
let passSpanNode = document.getElementById("passSpan");

let konfPassNode = document.getElementById("konfPass");
let konfPassSpanNode = document.getElementById("konfPassSpan");

let no_telpNode = document.getElementById("no_telp");
let no_telpSpanNode = document.getElementById("no_telpSpan");

let jenis_kelaminNode = document.getElementById("jenis_kelamin");
let jenis_kelaminSpanNode = document.getElementById("jenis_kelaminSpan");

let alamat_webNode = document.getElementById("alamat_web");
let alamat_webSpanNode = document.getElementById("alamat_webSpan");

let syaratNode = document.getElementById("syarat");
let syaratSpanNode = document.getElementById("syaratSpan");

const diProses = (e) => {
  //===== Untuk Validasi Nama ==== //
  let namaError = "";
  // nama tidak boleh kosong dan menggandung angka, simbol, dll
  if (namaNode.value.trim() === "") {
    namaError = "Nama harus diisi";
  } else if (/\d/.test(namaNode.value.trim())) {
    namaError = "Nama tidak boleh mengandung angka";
  } else if (/\W/.test(namaNode.value.trim())) {
    namaError = "Nama tidak boleh mengandung simbol";
  }

  if (namaError !== "") {
    namaSpanNode.innerHTML = namaError;
    namaSpanNode.className = "form-error";
    namaNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi username ==== //
  let usernameError = "";

  if (usernameNode.value.trim() === "") {
    usernameError = "Username harus diisi";
  } else if (/\W/.test(usernameNode.value.trim())) {
    usernameError = "Hanya bisa diisi karakter alfanumerik";
  } else if (usernameNode.value.trim().length < 6) {
    usernameError = "Username minimal 6 karakter";
  }

  if (usernameError !== "") {
    usernameSpanNode.innerHTML = usernameError;
    usernameSpanNode.className = "form-error";
    usernameNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi Email ==== //
  let emailError = "";
  if (emailNode.value.trim() === "") {
    emailError = "Email harus diisi";
  } else if (!emailNode.value.includes("@")) {
    emailError = "Email tidak valid";
  }

  if (emailError !== "") {
    emailSpanNode.innerHTML = emailError;
    emailSpanNode.className = "form-error";
    emailNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi Password ==== //
  let passError = "";
  if (passNode.value.trim() === "") {
    passError = "Password harus diisi";
  } else if (passNode.value.trim().length < 6) {
    passError = "Password minimal 6 karakter";
  }

  if (passError !== "") {
    passSpanNode.innerHTML = passError;
    passSpanNode.className = "form-error";
    passNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi Konfirmasi Password ==== //
  let konfPassError = "";
  if (konfPassNode.value.trim() === "") {
    konfPassError = "Konfirmasi Password harus diisi";
  } else if (konfPassNode.value.trim().length < 6) {
    konfPassError = "Konfirmasi Password minimal 6 karakter";
  } else if (konfPassNode.value !== passNode.value) {
    konfPassError = "Konfirmasi Password tidak sama";
  }

  if (konfPassError !== "") {
    konfPassSpanNode.innerHTML = konfPassError;
    konfPassSpanNode.className = "form-error";
    konfPassNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi No. Telp ==== //
  let noTelpError = "";
  if (no_telpNode.value.trim() === "") {
    noTelpError = "No. Telp harus diisi";
  } else if (isNaN(no_telpNode.value.trim())) {
    noTelpError = "No. Telp harus angka";
  }

  if (noTelpError !== "") {
    no_telpSpanNode.innerHTML = noTelpError;
    no_telpSpanNode.className = "form-error";
    no_telpNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi Jenis Kelamin ==== //

  let jenisKelaminError = "";
  if (jenis_kelaminNode.value === "Pilih Jenis Kelamin") {
    jenisKelaminError = "Jenis Kelamin harus dipilih";
  }

  if (jenisKelaminError !== "") {
    jenis_kelaminSpanNode.innerHTML = jenisKelaminError;
    jenis_kelaminSpanNode.className = "form-error";
    jenis_kelaminNode.style.border = "2px solid red";
    e.preventDefault();
  }
  //===== Untuk Validasi Alamat Web ==== //
  let websiteError = "";
  if (alamat_webNode.value.trim() === "") {
    websiteError = "Alamat Website harus diisi";
  }

  if (websiteError !== "") {
    alamat_webSpanNode.innerHTML = websiteError;
    alamat_webSpanNode.className = "form-error";
    alamat_webNode.style.border = "2px solid red";
    e.preventDefault();
  }

  //===== Untuk Validasi Checkbox Syarat ==== //
  let syaratError = "";
  if (syaratNode.checked !== true) {
    syaratError = "Syarat dan ketentuan harus di setujui";
  }

  if (syaratError !== "") {
    syaratSpanNode.innerHTML = syaratError;
    syaratSpanNode.className = "form-error";
    e.preventDefault();
  }
};

const hapusError = (e) => {
  e.target.style.border = "";
  e.target.parentElement.lastElementChild.innerHTML = "";
};

formKuNode.addEventListener("submit", diProses);
namaNode.addEventListener("focus", hapusError);
usernameNode.addEventListener("focus", hapusError);
emailNode.addEventListener("focus", hapusError);
passNode.addEventListener("focus", hapusError);
konfPassNode.addEventListener("focus", hapusError);
no_telpNode.addEventListener("focus", hapusError);
jenis_kelaminNode.addEventListener("focus", hapusError);
alamat_webNode.addEventListener("focus", hapusError);
syaratNode.addEventListener("focus", hapusError);
