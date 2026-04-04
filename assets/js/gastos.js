function carregarGastos() {
  fetch("../api/get_gasto.php")
    .then((res) => res.json())
    .then((data) => {
      console.log("data");

      const lista = document.getElementById("lista");
      lista.innerHTML = "";

      data.forEach((gasto) => {
        lista.innerHTML += `
            <div>
                R$ ${gasto.valor} - ${gasto.categoria}
            </div>
            `;
      });
    });
}
