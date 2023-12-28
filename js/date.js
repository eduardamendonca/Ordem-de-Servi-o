// cria um objeto Date com a data e hora atuais
var dataAtual = new Date();

// obtém o dia, mês e ano da data atual
var dia = dataAtual.getDate();
var mes = dataAtual.getMonth() + 1; // é necessário adicionar 1, pois o mês começa em 0 (janeiro)
var ano = dataAtual.getFullYear();

// cria uma string com a data formatada
var dataFormatada = dia + '/' + mes + '/' + ano;

// exibe a data formatada no console do navegador
console.log('A data atual é: ' + dataFormatada);