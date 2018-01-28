var timerId = null; // variável que armazena a chamada da função timeout

function iniciaJogo() {

	// var url = window.location; traz a URL inteira
	var url = window.location.search; // traz o que esta depois da ? (interrrogação)
	
	var nivel_jogo = url.replace("?", "");

	var tempo_segundos = 0;

	// 1 Fácil -> 120 segundos
	if(nivel_jogo == 1) {
		tempo_segundos = 120;
	}

	// 2 Normal -> 60 segundos
	if(nivel_jogo == 2) {
		tempo_segundos = 60;
	}

	// 3 Difícil -> 30 segundos
	if(nivel_jogo == 3) {
		tempo_segundos = 30;
	}

	// inserindo segundos no span
	document.getElementById('cronometro').innerHTML = tempo_segundos; // innerHTML -> insere conteúdo dentro da tag

	// quantidade de balões
	var qtd_baloes = 80;

	cria_baloes(qtd_baloes);

	// imprimir qtd baloes inteiros
	document.getElementById('baloes_inteiros').innerHTML = qtd_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;

	contagem_tempo(tempo_segundos + 1)

}

function contagem_tempo(segundos) {

	segundos = segundos - 1;

	if(segundos == -1) {
		clearTimeout(timerId); // para a execução da função do setTimeout
		game_over();
		return false;
	}

	document.getElementById('cronometro').innerHTML = segundos;

	timerId = setTimeout("contagem_tempo("+segundos+")", 1000);

}

function game_over() {
	remove_eventos_baloes();
	alert('Fim de Jogo, você não conseguiu estourar todos os balões a tempo');
}

function cria_baloes(qtd_baloes) {

	for(var i = 1; i <= qtd_baloes; i++) {

		var balao = document.createElement("img"); //função que permite criar uma tag (um elemento) dentro da pagina html
		balao.src = 'imagens/balao_azul_pequeno.png';
		balao.style.margin = '10px';
		balao.id = 'b'+i;
		balao.onclick = function() { estourar(this); }; // passa como parametro o elemento clicado

		document.getElementById('cenario').appendChild(balao); // função que colocara as tags img dentro do elemento div, adicionará filhos de tag img à tag div
	}

}

function estourar(e) {

	var id_balao = e.id;

	document.getElementById(id_balao).setAttribute("onclick", ""); // removeu o evento onclick do elemento
	document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png'

	pontuacao(-1);
}

function pontuacao(acao) {

	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML; // recupera o conteudo da tag
	var baloes_estourados = document.getElementById('baloes_estourados').innerHTML; // recupera o conteudo da tag

	baloes_inteiros = parseInt(baloes_inteiros);
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados = baloes_estourados - acao;

	document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
	document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

	situacao_jogo(baloes_inteiros);

}

function situacao_jogo(baloes_inteiros) {
	if(baloes_inteiros == 0) {
		alert('Parabéns, você conseguiu estourar todos os balões a tempo');
		parar_jogo();
	}
}

function parar_jogo() {
	clearTimeout(timerId);
}

function remove_eventos_baloes() {
	var i = 1; //contado para recuperar baloes por id

	//percorre os elementos de acordo com o id e só irá sair do laço quando não houver correspondência com elemento
	while(document.getElementById('b'+i)) {
		//retira o evento onclick do elemento
		document.getElementById('b'+i).onclick = '';
		i++; // faz a iteração da variável i
	}
}