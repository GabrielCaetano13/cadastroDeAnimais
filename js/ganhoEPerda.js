let pesos = document.querySelectorAll('.peso-animal');

for (let i = 1; i < pesos.length; i++) {
    const pesoAtual = parseFloat(pesos[i].textContent);
    const pesoAnterior = parseFloat(pesos[i - 1].textContent);
    let diferenca = pesoAtual - pesoAnterior;
    const ganhoPerda = document.createElement('span');
    if (diferenca > 0) {
        diferenca = `+${diferenca.toFixed(3)} kg`
    } else {
        diferenca = `${diferenca.toFixed(3)} kg`
    }
    ganhoPerda.textContent = diferenca;
    pesos[i].parentNode.querySelector('.ganho-perda').appendChild(ganhoPerda);
}
