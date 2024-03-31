 // Internal JavaScript
 alert("Selamat menunaikan ibadah puasa");

 // Mengubah teks saat diklik
 function changeText() {
   var textElement = document.getElementById("myText");
   textElement.innerHTML = "Teks telah berubah";
 }

 // Array anggota sebelum dan setelah penambahan
 var anggota = ["Anggota 1", "Anggota 2", "Anggota 3", "Anggota 4"];
//  tampilkan hanya sampai 4 anggota
console.log("Anggota sebelum penambah:", anggota.slice(0, 4));

//  tambahkan 2 anggota
anggota.push("Anggota 5", "Anggota 6");
console.log("Anggota setelah penambah:", anggota);
