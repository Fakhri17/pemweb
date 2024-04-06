let formKuNode = document.getElementById("formKu");

let formElements = [
  { label: 'Nama', node: document.getElementById("nama"), spanNode: document.getElementById("namaSpan"), error: "" },
  { label: 'Username', node: document.getElementById("username"), spanNode: document.getElementById("usernameSpan"), error: "" },
  { label: 'Email', node: document.getElementById("email"), spanNode: document.getElementById("emailSpan"), error: "" },
  { label: 'Password', node: document.getElementById("pass"), spanNode: document.getElementById("passSpan"), error: "" },
  { label: 'Konfirmasi Password', node: document.getElementById("konfPass"), spanNode: document.getElementById("konfPassSpan"), error: "" },
  { label: 'No Telp', node: document.getElementById("no_telp"), spanNode: document.getElementById("no_telpSpan"), error: "" },
  { label: 'Jenis Kelamin', node: document.getElementById("jenis_kelamin"), spanNode: document.getElementById("jenis_kelaminSpan"), error: "" },
  { label: 'Alamat Web', node: document.getElementById("alamat_web"), spanNode: document.getElementById("alamat_webSpan"), error: "" },
  { node: document.getElementById("syarat"), spanNode: document.getElementById("syaratSpan"), error: "" }
];

const validateForm = (e) => {
  formElements.forEach((element) => {
    let { label, node, spanNode } = element;
    let error = "";

    if (node.value.trim() === "") {
      error = `${label} harus diisi`;
    } else if (node.id === "nama" && (/\d/.test(node.value.trim()) || /\W/.test(node.value.trim()))) {
      error = `Nama tidak boleh mengandung angka atau simbol`;
    } else if (node.id === "username" && (/\W/.test(node.value.trim()) || node.value.trim().length < 6)) {
      error = `Username hanya bisa diisi karakter alfanumerik dan minimal 6 karakter`;
    } else if (node.id === "email" && !node.value.includes("@")) {
      error = `email tidak valid`;
    } else if (node.id === "pass" && node.value.trim().length < 6) {
      error = `password minimal 6 karakter`;
    } else if (node.id === "konfPass" && (node.value.trim().length < 6 || node.value !== document.getElementById("pass").value)) {
      error = `password tidak sama atau minimal 6 karakter`;
    } else if (node.id === "no_telp" && (node.value.trim() === "" || isNaN(node.value.trim()))) {
      error = `No Telp harus diisi dengan angka`;
    } else if (node.id === "jenis_kelamin" && node.value === "Pilih Jenis Kelamin") {
      error = `Jenis Kelamin harus dipilih`;
    } else if (node.id === "alamat_web" && node.value.trim() === "") {
      error = `Alamat Website harus diisi`;
    } else if (node.id === "syarat" && !node.checked) {
      error = `Syarat harus disetujui`;
    }

    spanNode.innerHTML = error;
    spanNode.className = error !== "" ? "form-error" : "";
    node.style.border = error !== "" ? "2px solid red" : "";
    
  });

  if (document.getElementsByClassName("form-error").length > 0) {
    e.preventDefault();
  } else {
    // save data to local storage
    let data = {};
    formElements.forEach((element) => {
      let { node } = element;
      data[node.id] = node.value;
    });

    localStorage.setItem("data", JSON.stringify(data));
    
  }
};

const clearError = (e) => {
  e.target.style.border = "";
  e.target.parentElement.lastElementChild.innerHTML = "";
};

formKuNode.addEventListener("submit", validateForm);
formElements.forEach((element) => {
  element.node.addEventListener("focus", clearError);
});
