// deklarasi variabel display untuk menampilkan operasi dan hasil
const display = document.querySelector(".display");
// set nilai awal display dengan nilai 0
display.value = 0;

// fungsi untuk menambahkan input ke display
const appendToDisplay = (input) => {
  // jika nilai display adalah 0, maka nilai display akan diganti dengan input
  // jika tidak, maka nilai display akan ditambahkan dengan input
  // ini merupakan operasi ternary
  display.value = display.value === "0" ? input : display.value + input;
};

// mengambil semua elemen button
const keyPress = document.addEventListener("keydown", function (event) {
  // mendapatkan key dari event
  const key = event.key;
  // menggunakan regex jika key adalah angka atau operator
  if (key.match(/[0-9\.\+\-\*\/\(\)]/)) {
    // maka akan ditambahkan ke display
    appendToDisplay(key);
  } 
  // jika key adalah "c" maka akan dihapus semua
  else if (key === "Backspace") {
    clearLast();
  }
  // jika key adalah "Enter" maka akan dihitung 
  else if (key === "Enter") {
    calculate();
  }
});

// fungsi untuk menghapus satu karakter terakhir
const clearLast = () => {
  let displayValue = display.value;
  // jika panjang karakter lebih dari 0, maka akan dihapus satu karakter terakhir
  if (displayValue.length > 0) {
    displayValue = displayValue.slice(0, -1);
    display.value = displayValue;
  }
  // jika panjang karakter adalah 0, maka nilai display akan diganti dengan 0
  if (displayValue.length === 0) {
    display.value = 0;
  }
};

// fungsi untuk menghapus semua
const clearDisplay = () => {
  display.value = 0;
};

// fungsi untuk menghitung operasi
const calculate = () => {
  // menggunakan try catch untuk menangkap error
  try {
    // jika tidak ada error, maka akan dihitung dan hasilnya akan ditampilkan
    display.value = eval(display.value);
  } catch (error) {
    display.value = "Error";
  }
};
