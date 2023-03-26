let pesos = document.querySelectorAll('.peso-animal')
let dataPesagem = document.querySelectorAll('.data-pesagem')

for (let i = 1; i < pesos.length; i++) {
    const dataAtual = new Date((dataPesagem[i].textContent))
    const dataAnterior = new Date((dataPesagem[i -1].textContent))
    let diferencaData =  Math.floor((dataAtual - dataAnterior) / (1000 * 60 * 60 * 24))

    const pesoAtual = parseFloat(pesos[i].textContent)
    const pesoAnterior = parseFloat(pesos[i - 1].textContent)
    let diferenca = (pesoAtual - pesoAnterior) / diferencaData

    const ganhoPerda = document.createElement('span')
    if (diferenca > 0) {
        diferenca = `+${diferenca.toFixed(3)} kg`
    } else {
        diferenca = `${diferenca.toFixed(3)} kg`
    }
    ganhoPerda.textContent = diferenca;
    pesos[i].parentNode.querySelector('.ganho-perda').appendChild(ganhoPerda);
}
