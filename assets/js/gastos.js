function adicionarGasto() {
  const valor = document.getElementById("valor").value;
  const categoria = document.getElementById("categoria").value;

  fetch("/api/add_gasto.php", {
    method: "POST",
    body: JSON.stringify({ valor, categoria }),
  })
    .then((res) => res.json())
    .then(() => {
      carregarGastos(); // atualiza tela
    });
}

function carregarGastos() {
  fetch("/api/get_gastos.php")
    .then((res) => res.json())
    .then((data) => {
      const lista = document.getElementById("lista");
      lista.innerHTML = "";

      let total = 0;

      data.forEach((g) => {
        total += parseFloat(g.valor);

        lista.innerHTML += `
            <div>
              R$ ${g.valor} - ${g.categoria}
            </div>
          `;
      });

      document.getElementById("total").innerText = "R$ " + total.toFixed(2);
    });
}

// carrega ao abrir
carregarGastos();
