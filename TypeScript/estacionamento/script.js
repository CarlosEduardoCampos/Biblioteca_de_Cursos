"use strict";
(function () {
    var _a;
    const $ = (query) => document.querySelector(query);
    function patio() {
        function ler() {
            return localStorage.patio ? JSON.parse(localStorage.patio) : [];
        }
        function salvar(veiculos) {
            localStorage.setItem("patio", JSON.stringify(veiculos));
        }
        function adicionar(veiculo, salva) {
            var _a;
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${veiculo.nome}</td>
                <td>${veiculo.placa}</td>
                <td>${veiculo.entrada}</td>
                <td>
                    <button class = "delete" data-placa="${veiculo.placa}"><i class="fa fa-trash" style="font-size:20px;color:white"></i></>
                </td>
            `;
            (_a = $("#patio")) === null || _a === void 0 ? void 0 : _a.appendChild(row); // add row in table
            if (salva)
                salvar([...ler(), veiculo]);
        }
        function remover() {
        }
        function render() {
            $("#patio").innerHTML = "";
            const patio = ler();
            if (patio.length > 0) {
                patio.forEach(veiculo => adicionar(veiculo));
            }
        }
        return { ler, adicionar, remover, salvar, render };
    }
    patio().render();
    (_a = $("#cadastrar")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", () => {
        var _a, _b;
        const nome = (_a = $("#nome")) === null || _a === void 0 ? void 0 : _a.value;
        const placa = (_b = $("#placa")) === null || _b === void 0 ? void 0 : _b.value;
        if (!nome || !placa) {
            alert("Os campos nome e placa são obrigatórios");
            return;
        }
        else {
            patio().adicionar({ nome, placa, entrada: new Date() }, true);
        }
    });
})();
