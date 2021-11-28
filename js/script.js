function datakwh() {
  const kwh = document.getElementById("kwh").value;
  const hargakwh = document.getElementById("harga-kwh");
  hargakwh.innerText = kwh * 1000;
}

function datadenda() {
  const denda = document.getElementById("denda").value;
  const jumlahdenda = document.getElementById("jumlah-denda");
  jumlahdenda.innerText = denda;
}

const btnBack = document.getElementById("back");
btnBack.addEventListener("click", function () {
  window.location.href = "../task/index.php";
});
