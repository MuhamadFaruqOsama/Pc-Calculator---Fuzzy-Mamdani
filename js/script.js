// Untuk HideLoad

function hideLoader() {
  const loader = document.getElementById("loader-page");
  loader.style.display = "none";
}

// Untuk memunculkan form Kondisi sesuai yang diceklis

function showForm() {
  // Kondisi
  const motherboard = document.getElementById("btnMobo").checked;
  const proccessor = document.getElementById("btnPcr").checked;
  const powerSply = document.getElementById("btnPSU").checked;
  const RAM = document.getElementById("btnRAM").checked;
  const SSD = document.getElementById("btnSSD").checked;
  const fanPro = document.getElementById("btnFanP").checked;
  const HDD = document.getElementById("btnHDD").checked;
  const VGA = document.getElementById("btnVGA").checked;
  const kabelPow = document.getElementById("btnKabelP").checked;
  const caseing = document.getElementById("btnCase").checked;
  const kabelSata = document.getElementById("btnKabelS").checked;
  const fanCase = document.getElementById("btnFanC").checked;
  const keyMo = document.getElementById("btnKeyMo").checked;
  const monitor = document.getElementById("btnMoni").checked;
  const kabelVGA = document.getElementById("btnKabelVGA").checked;

  // Untuk memunculkan input usia

  if (!motherboard && !proccessor && !powerSply && !RAM && !SSD && !fanPro && !HDD && !VGA && !kabelPow && !caseing && !kabelSata && !fanCase && !keyMo && !monitor && !kabelVGA) {
    document.getElementById("input-usia").style.display = "none";
  } else {
    document.getElementById("input-usia").style.display = "block";
  }

  // Memunculkan input kondisi dan hpp sesuai apa yang diklik

  if (motherboard) {
    document.getElementById("form-mobo").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-mobo").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-mobo").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-mobo").style.display = "none";
    }, 500);
  }

  if (proccessor) {
    document.getElementById("form-pcr").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-pcr").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-pcr").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-pcr").style.display = "none";
    }, 500);
  }

  if (powerSply) {
    document.getElementById("form-psu").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-psu").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-psu").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-psu").style.display = "none";
    }, 500);
  }

  if (RAM) {
    document.getElementById("form-RAM").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-RAM").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-RAM").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-RAM").style.display = "none";
    }, 500);
  }

  if (SSD) {
    document.getElementById("form-SSD").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-SSD").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-SSD").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-SSD").style.display = "none";
    }, 500);
  }

  if (fanPro) {
    document.getElementById("form-FanP").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-FanP").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-FanP").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-FanP").style.display = "none";
    }, 500);
  }

  if (HDD) {
    document.getElementById("form-HDD").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-HDD").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-HDD").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-HDD").style.display = "none";
    }, 500);
  }

  if (VGA) {
    document.getElementById("form-VGA").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-VGA").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-VGA").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-VGA").style.display = "none";
    }, 500);
  }

  if (kabelPow) {
    document.getElementById("form-KabelP").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-KabelP").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-KabelP").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-KabelP").style.display = "none";
    }, 500);
  }

  if (caseing) {
    document.getElementById("form-case").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-case").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-case").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-case").style.display = "none";
    }, 500);
  }

  if (kabelSata) {
    document.getElementById("form-kabelS").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-kabelS").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-kabelS").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-kabelS").style.display = "none";
    }, 500);
  }

  if (fanCase) {
    document.getElementById("form-fanC").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-fanC").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-fanC").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-fanC").style.display = "none";
    }, 500);
  }

  if (keyMo) {
    document.getElementById("form-keyM").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-keyM").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-keyM").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-keyM").style.display = "none";
    }, 500);
  }

  if (monitor) {
    document.getElementById("form-moni").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-moni").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-moni").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-moni").style.display = "none";
    }, 500);
  }

  if (kabelVGA) {
    document.getElementById("form-kabelVGA").style.display = "block";
    setTimeout(function () {
      document.getElementById("form-kabelVGA").classList.remove("hidden");
    }, 500);
  } else {
    document.getElementById("form-kabelVGA").classList.add("hidden");
    setTimeout(function () {
      document.getElementById("form-kabelVGA").style.display = "none";
    }, 500);
  }
}

//

function hitungHargaJual() {
  function getValue(name) {
    for (let i = 0; i < 5; i++) {
      if (document.getElementsByName(name)[i].checked) {
        return parseFloat(document.getElementsByName(name)[i].value);
      }
    }
  }

  let valueKondisiMotherboard = getValue("kon_mobo");
  let valueKondisiProcessor = getValue("kon_proc");
  let valueKondisiPSU = getValue("kon_psu");
  let valueKondisiRAM = getValue("kon_ram");
  let valueKondisiSSD = getValue("kon_ssd");
  let valueKondisiFanPro = getValue("kon_fanp");
  let valueKondisiHDD = getValue("kon_hdd");
  let valueKondisiVGA = getValue("kon_vga");
  let valueKondisiKabelP = getValue("kon_power");
  let valueKondisiCase = getValue("kon_case");
  let valueKondisiKabelS = getValue("kon_sata");
  let valueKondisiFanCase = getValue("kon_fanc");
  let valueKondisiKeyMouse = getValue("kon_keym");
  let valueKondisiMonitor = getValue("kon_moni");
  let valueKondisiKabelVGA = getValue("kon_kvga");

  let kelengkapan = [];
  let kondisiAkhir = 0;
  let kondisi = [
    valueKondisiMotherboard,
    valueKondisiProcessor,
    valueKondisiPSU,
    valueKondisiRAM,
    valueKondisiSSD,
    valueKondisiFanPro,
    valueKondisiHDD,
    valueKondisiVGA,
    valueKondisiKabelP,
    valueKondisiCase,
    valueKondisiKabelS,
    valueKondisiFanCase,
    valueKondisiKeyMouse,
    valueKondisiMonitor,
    valueKondisiKabelVGA,
  ];

  for (i = 0; i < 15; i++) {
    kondisiAkhir = kondisiAkhir + kondisi[i];
    if (kondisi[i] != 0) {
      kelengkapan.push(i);
    }
  }

  console.log(kelengkapan);
  console.log(kondisi);

  // HPP
  let valueHPPMotherboard = parseFloat(document.getElementById("hpp-mobo").value);
  let valueHPPProcessor = parseFloat(document.getElementById("hpp-pcr").value);
  let valueHPPPSU = parseFloat(document.getElementById("hpp-psu").value);
  let valueHPPRAM = parseFloat(document.getElementById("hpp-RAM").value);
  let valueHPPSSD = parseFloat(document.getElementById("hpp-SSD").value);
  let valueHPPFanPro = parseFloat(document.getElementById("hpp-FanP").value);
  let valueHPPHDD = parseFloat(document.getElementById("hpp-HDD").value);
  let valueHPPVGA = parseFloat(document.getElementById("hpp-VGA").value);
  let valueHPPKabelP = parseFloat(document.getElementById("hpp-KabelP").value);
  let valueHPPCase = parseFloat(document.getElementById("hpp-case").value);
  let valueHPPKabelS = parseFloat(document.getElementById("hpp-kabelS").value);
  let valueHPPFanCase = parseFloat(document.getElementById("hpp-fanC").value);
  let valueHPPKeyMouse = parseFloat(document.getElementById("hpp-keyM").value);
  let valueHPPMonitor = parseFloat(document.getElementById("hpp-moni").value);
  let valueHPPKabelVGA = parseFloat(document.getElementById("hpp-kabelVGA").value);

  let hppAkhir = 0;
  let hpp = [
    valueHPPMotherboard,
    valueHPPProcessor,
    valueHPPPSU,
    valueHPPRAM,
    valueHPPSSD,
    valueHPPFanPro,
    valueHPPHDD,
    valueHPPVGA,
    valueHPPKabelP,
    valueHPPCase,
    valueHPPKabelS,
    valueHPPFanCase,
    valueHPPKeyMouse,
    valueHPPMonitor,
    valueHPPKabelVGA,
  ];

  for (i = 0; i < 15; i++) {
    hppAkhir += hpp[i];
  }

  kondisiAkhir = kondisiAkhir / kelengkapan.length;

  let usia = document.getElementById("input-usia-floating").value;
  let alfa = new Array(27);
  let z = new Array(27);

  // Inisialisasi HPP
  const HPP1 = 1000000;
  const HPP2 = 2000000;
  const HPP3 = 3000000;
  const HPP4 = 4000000;
  const HPP5 = 5000000;
  const HPP6 = 6000000;
  const HPP7 = 7000000;
  const HPP8 = 8000000;
  const HPP9 = 9000000;
  const HPP10 = 10000000;

  // Fungsi Keanggotan Variabel Kondisi

  function kondisiBuruk() {
    if (kondisiAkhir <= 30) {
      return (30 - kondisiAkhir) / 30;
    } else if (kondisiAkhir > 30) {
      return 0;
    }
  }

  function kondisiNormal() {
    if (kondisiAkhir < 20 || kondisiAkhir > 80) {
      return 0;
    } else if (kondisiAkhir >= 20 && kondisiAkhir <= 50) {
      return (kondisiAkhir - 20) / 30;
    } else if (kondisiAkhir >= 50 && kondisiAkhir <= 80) {
      return (80 - kondisiAkhir) / 30;
    }
  }

  function kondisiBaik() {
    if (kondisiAkhir <= 70) {
      return 0;
    } else if (kondisiAkhir > 70) {
      return (70 - kondisiAkhir) / 30;
    }
  }

  // Fungsi Keanggotaan Variabel HPP

  function hppRendah() {
    if (hppAkhir <= HPP4) {
      return (HPP4 - hppAkhir) / HPP4;
    } else if (hppAkhir > HPP4) {
      return 0;
    }
  }

  function hppStandar() {
    if (hppAkhir < HPP1 || hppAkhir > HPP9) {
      return 0;
    } else if (hppAkhir >= HPP1 && hppAkhir <= HPP5) {
      return (hppAkhir - HPP1) / HPP4;
    } else if (hppAkhir > HPP5 && hppAkhir <= HPP9) {
      return (HPP9 - hppAkhir) / HPP4;
    }
  }

  function hppTinggi() {
    if (hppAkhir <= HPP6) {
      return 0;
    } else if (hppAkhir > HPP6) {
      return (hppAkhir - HPP6) / HPP4;
    }
  }

  // Fungsi Keanggotaan Variabel Usia
  function usiaMuda() {
    if (usia > 18) {
      return 0;
    } else if (usia <= 18) {
      return (18 - usia) / 18;
    }
  }

  function usiaTengah() {
    if (usia < 12 || usia > 48) {
      return 0;
    } else if (usia >= 12 && usia <= 30) {
      return (usia - 12) / 18;
    } else if (usia >= 30 && usia <= 48) {
      return (48 - usia) / 18;
    }
  }

  function usiaTua() {
    if (usia < 42) {
      return 0;
    } else if (usia >= 42) {
      return (usia - 42) / 18;
    }
  }

  function findMin(x, y, z) {
    if (x <= y && x <= z) {
      return x;
    } else if (y <= x && y <= z) {
      return y;
    } else {
      return z;
    }
  }

  function findZ(x, y) {
    if (x <= y) {
      return x;
    } else {
      return y;
    }
  }

  // Pembentukan Aturan - HPP Rendah

  //[R1] Jika HPP Rendah, Kondisi Buruk dan Usia Tua maka Harga Jual Rendah
  alfa[1] = findMin(hppRendah(), kondisiBuruk(), usiaTua());
  z[1] = HPP7 - HPP7 * alfa[1];

  //[R2] Jika HPP Rendah, Kondisi Buruk dan Usia Tengah maka Harga Jual Rendah
  alfa[2] = findMin(hppRendah(), kondisiBuruk(), usiaTengah());
  z[2] = HPP7 - HPP7 * alfa[2];

  //[R3] Jika HPP Rendah, Kondisi Buruk dan Usia Muda maka Harga Jual Rendah
  alfa[3] = findMin(hppRendah(), kondisiBuruk(), usiaMuda());
  z[3] = HPP7 - HPP7 * alfa[3];

  //[R4] Jika HPP Rendah, Kondisi Normal dan Usia Tua maka Harga Jual Rendah
  alfa[4] = findMin(hppRendah(), kondisiNormal(), usiaTua());
  z[4] = HPP7 - HPP7 * alfa[4];

  //[R5] Jika HPP Rendah, Kondisi Normal dan Usia Tengah maka Harga Jual Rendah
  alfa[5] = findMin(hppRendah(), kondisiNormal(), usiaTengah());
  z[5] = HPP7 - HPP7 * alfa[5];

  //[R6] Jika HPP Rendah, Kondisi Normal dan Usia Muda maka Harga Jual Rendah
  alfa[6] = findMin(hppRendah(), kondisiNormal(), usiaMuda());
  z[6] = HPP7 - HPP7 * alfa[6];

  //[R7] Jika HPP Rendah, Kondisi Baik dan Usia Tua maka Harga Jual Rendah
  alfa[7] = findMin(hppRendah(), kondisiBaik(), usiaTua());
  z[7] = HPP7 - HPP7 * alfa[7];

  //[R8] Jika HPP Rendah, Kondisi Baik dan Usia Tengah maka Harga Jual Rendah
  alfa[8] = findMin(hppRendah(), kondisiBaik(), usiaTengah());
  z[8] = HPP7 - HPP7 * alfa[8];

  //[R9] Jika HPP Rendah, Kondisi Baik dan Usia Muda maka Harga Jual Rendah
  alfa[9] = findMin(hppRendah(), kondisiBaik(), usiaMuda());
  z[9] = HPP7 - HPP7 * alfa[9];

  //Pembentukan Aturan - HPP Standar

  //[R10] Jika HPP Standar, Kondisi Buruk dan Usia Tua maka Harga Jual Rendah
  alfa[10] = findMin(hppStandar(), kondisiBuruk(), usiaTua());
  z[10] = HPP7 - HPP7 * alfa[10];

  //[R11] Jika HPP Standar, Kondisi Buruk dan Usia Tengah maka Harga Jual Rendah
  alfa[11] = findMin(hppStandar(), kondisiBuruk(), usiaTengah());
  z[11] = HPP7 - HPP7 * alfa[11];

  //[R12] Jika HPP Standar, Kondisi Buruk dan Usia Muda maka Harga Jual Rendah
  alfa[12] = findMin(hppStandar(), kondisiBuruk(), usiaMuda());
  z[12] = HPP7 - HPP7 * alfa[12];

  //[R13] Jika HPP Standar, Kondisi Normal dan Usia Tua maka Harga Jual Rendah
  alfa[13] = findMin(hppStandar(), kondisiNormal(), usiaTua());
  z[13] = HPP7 - HPP7 * alfa[13];

  //[R14] Jika HPP Standar, Kondisi Normal dan Usia Tengah maka Harga Jual Rendah
  alfa[14] = findMin(hppStandar(), kondisiNormal(), usiaTengah());
  z[14] = HPP7 - HPP7 * alfa[14];

  //[R15] Jika HPP Standar, Kondisi Normal dan Usia Muda maka Harga Jual Standar
  alfa[15] = findMin(hppStandar(), kondisiNormal(), usiaMuda());
  z[15] = findZ(HPP3 * alfa[15] + HPP6, HPP10 - HPP4 * alfa[15]);

  //[R16] Jika HPP Standar, Kondisi Baik dan Usia Tua maka Harga Jual Rendah
  alfa[16] = findMin(hppStandar(), kondisiBaik(), usiaTua());
  z[16] = HPP7 - HPP7 * alfa[16];

  //[R17] Jika HPP Standar, Kondisi Baik dan Usia Tengah maka Harga Jual Standar
  alfa[17] = findMin(hppStandar(), kondisiBaik(), usiaTengah());
  z[17] = findZ(HPP3 * alfa[17] + HPP6, HPP10 - HPP4 * alfa[17]);

  //[R18] Jika HPP Standar, Kondisi Baik dan Usia Muda maka Harga Jual Standar
  alfa[18] = findMin(hppStandar(), kondisiBaik(), usiaMuda());
  z[18] = findZ(HPP3 * alfa[18] + HPP6, HPP10 - HPP4 * alfa[18]);

  //Pembentukan Aturan - HPP Tinggi

  //[R19] Jika HPP Tinggi, Kondisi Buruk dan Usia Tua maka Harga Jual Sedang
  alfa[19] = findMin(hppTinggi(), kondisiBuruk(), usiaTua());
  z[19] = findZ(HPP3 * alfa[19] + HPP6, HPP10 - HPP4 * alfa[19]);

  //[R20] Jika HPP Tinggi, Kondisi Buruk dan Usia Tengah maka Harga Jual Sedang
  alfa[20] = findMin(hppTinggi(), kondisiBuruk(), usiaTengah());
  z[20] = findZ(HPP3 * alfa[20] + HPP6, HPP10 - HPP4 * alfa[20]);

  //[R21] Jika HPP Tinggi, Kondisi Buruk dan Usia Muda maka Harga Jual Sedang
  alfa[21] = findMin(hppTinggi(), kondisiBuruk(), usiaMuda());
  z[21] = findZ(HPP3 * alfa[21] + HPP6, HPP10 - HPP4 * alfa[21]);

  //[R22] Jika HPP Tinggi, Kondisi Normal dan Usia Tua maka Harga Jual Tinggi
  alfa[22] = findMin(hppTinggi(), kondisiNormal(), usiaTua());
  z[22] = HPP5 * alfa[22] + HPP9;

  //[R23] Jika HPP Tinggi, Kondisi Normal dan Usia Tengah maka Harga Jual Tinggi
  alfa[23] = findMin(hppTinggi(), kondisiNormal(), usiaTengah());
  z[23] = HPP5 * alfa[23] + HPP9;

  //[R24] Jika HPP Tinggi, Kondisi Normal dan Usia Muda maka Harga Jual Tinggi
  alfa[24] = findMin(hppTinggi(), kondisiNormal(), usiaMuda());
  z[24] = HPP5 * alfa[24] + HPP9;

  //[R25] Jika HPP Tinggi, Kondisi Baik dan Usia Tua maka Harga Jual Tinggi
  alfa[25] = findMin(hppTinggi(), kondisiBaik(), usiaTua());
  z[25] = HPP5 * alfa[25] + HPP9;

  //[R26] Jika HPP Tinggi, Kondisi Baik dan Usia Tengah maka Harga Jual Tinggi
  alfa[26] = findMin(hppTinggi(), kondisiBaik(), usiaTengah());
  z[26] = HPP5 * alfa[26] + HPP9;

  //[R27] Jika HPP Tinggi, Kondisi Baik dan Usia Muda maka Harga Jual Tinggi
  alfa[27] = findMin(hppTinggi(), kondisiBaik(), usiaMuda());
  z[27] = HPP5 * alfa[27] + HPP9;

  let alfaZ = 0;
  let predikat = 0;

  function hasilAkhir() {
    for (i = 1; i <= 27; i++) {
      alfaZ = alfaZ + alfa[i] * z[i];
      predikat = predikat + alfa[i];
    }
    return (deffuzifikasi = alfaZ / predikat);
  }

  // 0 0-20
  // 21 - 40 => 31
  //  41-60 => 51
  // 61-80 => 71
  // 81 - 95 => 90
  //

  console.log(`Nilai alfa z : ${hasilAkhir()}`);
  // console.log(`Nilai predikat : ${predikat}`)

  document.getElementById("simpan-kondisi").setAttribute("value", kondisiAkhir);
  document.getElementById("simpan-hpp").setAttribute("value", hppAkhir);
  document.getElementById("simpan-usia").setAttribute("value", usia);
  document.getElementById("simpan-harga").setAttribute("value", hasilAkhir());
  document.getElementById("result-kondisi").textContent = `${kondisiAkhir}%`;
  document.getElementById("result-hpp").textContent = `Rp. ${hppAkhir.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
  document.getElementById("result-usia").textContent = `${usia} Months`;
  document.getElementById("result-harga").textContent = `Rp. ${hasilAkhir().toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

  document.getElementById("result-calculate").style.display = "block";
  setTimeout(function () {
    document.getElementById("result-calculate").classList.remove("hidden");
  }, 500);
  document.getElementById("btn-simpan").removeAttribute("disabled", "");

  let idSimpan = [
    "simpan-mobo",
    "simpan-pcr",
    "simpan-psu",
    "simpan-ram",
    "simpan-ssd",
    "simpan-fan",
    "simpan-hdd",
    "simpan-vga",
    "simpan-kabelP",
    "simpan-case",
    "simpan-kabelS",
    "simpan-fanC",
    "simpan-keyMo",
    "simpan-moni",
    "simpan-kabVga",
  ];

  function simpanDB(id, i) {
    document.getElementById(id).setAttribute("value", kondisi[i]);
    return console.log(`id : ${id}, kondisi : ${kondisi[i]}`);
  }

  for (let i = 0; i < kelengkapan.length; i++) {
    simpanDB(idSimpan[kelengkapan[i]], kelengkapan[i]);
  }
}

document.getElementById("input-usia-floating").addEventListener("input", function (isi) {
  let value = isi.target.value;
  if (value <= 0) {
    document.getElementById("input-usia-floating").style.borderColor = "#FF0000";
    document.getElementById("msg-wrong").classList.remove("d-none");
    document.getElementById("msg-60").classList.add("d-none");
    document.getElementById("btn-hitung").setAttribute("disabled", "");
  } else if (value > 60) {
    document.getElementById("input-usia-floating").style.borderColor = "#FF0000";
    document.getElementById("msg-60").classList.remove("d-none");
    document.getElementById("msg-wrong").classList.add("d-none");
    document.getElementById("btn-hitung").setAttribute("disabled", "");
  } else {
    document.getElementById("input-usia-floating").style.borderColor = "#a249c2";
    document.getElementById("msg-60").classList.add("d-none");
    document.getElementById("msg-wrong").classList.add("d-none");
    document.getElementById("btn-hitung").removeAttribute("disabled", "");
  }
});
