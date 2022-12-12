function Darkmode() {
  // Cek kondisi slider berada dibagian mana berdasarkan id slider
  if (document.getElementById("slider").style.float !== "right") {
    //Ubah warna background berubah menjadi kuning saat slider bergerak ke kanan
    document.getElementById("slider").style.float = "right";
    document.getElementById("slideHousing").style.backgroundColor = "yellow";

    // warna backround saat menghidupkan dark mode
    document.body.style.backgroundColor = "#20222b";
    document.getElementById("header").style.color = "#e6e6e6";
  } else {
    // warna slider saat kembali ke kiri
    document.getElementById("slider").style.float = "left";
    document.getElementById("slideHousing").style.backgroundColor = "#fafab8";

    // warna backgroundcolor saat darkmode dimatikan
    document.body.style.backgroundColor = "white";
    document.getElementById("header").style.color = "#000";
  }
}
