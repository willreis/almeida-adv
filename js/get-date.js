function construirArray(qtdElementos) {
    this.length = qtdElementos
}

var arrayDia = new construirArray(7);
arrayDia[0] = "Domingo";
arrayDia[1] = "Segunda-Feira";
arrayDia[2] = "Terça-Feira";
arrayDia[3] = "Quarta-Feira";
arrayDia[4] = "Quinta-Feira";
arrayDia[5] = "Sexta-Feira";
arrayDia[6] = "Sabado";

var arrayMes = new construirArray(12);
arrayMes[0] = "Dezembro";
arrayMes[1] = "Janeiro";
arrayMes[2] = "Fevereiro";
arrayMes[3] = "Março";
arrayMes[4] = "Abril";
arrayMes[5] = "Maio";
arrayMes[6] = "Junho";
arrayMes[7] = "Julho";
arrayMes[8] = "Agosto";
arrayMes[9] = "Setembro";
arrayMes[10] = "Outubro";
arrayMes[11] = "Novembro";

function mostrarDataHora(mes) {
    retornoMes = " " + mes + " ";

    document.getElementById("datahora").innerHTML = retornoMes;
}

function getMesExtenso(mes) {
    return this.arrayMes[mes];
}

function getDiaExtenso(dia) {
    return this.arrayDia[dia];
}

function atualizarDataHora() {
    dataAtual = new Date();
    dia = dataAtual.getDate();
    diaSemana = getDiaExtenso(dataAtual.getDay());
    mes = getMesExtenso(dataAtual.getMonth());
    ano = dataAtual.getFullYear();
    hora = dataAtual.getHours();
    minuto = dataAtual.getMinutes();
    segundo = dataAtual.getSeconds();

    horaImprimivel = hora + ":" + minuto + ":" + segundo;
    mostrarDataHora(mes);
    setTimeout("atualizarDataHora()", 1000);

    mostrarAno(ano);
}
function mostrarAno(ano){
    retornoAno = " " +ano+ " ";
    document.getElementById("anoFooter").innerHTML = retornoAno;
}