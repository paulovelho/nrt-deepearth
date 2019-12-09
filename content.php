<div class="summary">
	<span class="summary-toggle" onclick="toggleSummary();
	">Sumário &#8628;</span>
	<div id="summary-list" class="summary-list">
		<ul>
			<li onclick="goTo('10000up');"><span class="summary-alt">10.000 m</span>Estratosfera</li>
			<li onclick="goTo('9200up');"><span class="summary-alt">~9.000 m</span>Balão de festa</li>
			<li onclick="goTo('8848up');"><span class="summary-alt">8.848 m</span>Monte Evaterest</li>
			<li onclick="goTo('5895up');"><span class="summary-alt">5.895 m</span>Monte Kilimanjaro</li>
			<li onclick="goTo('5337up');"><span class="summary-alt">5.337 m</span>Padre do balão</li>
			<li onclick="goTo('4500up');"><span class="summary-alt">4.500 m</span>Tapete do Alladin</li>
			<li onclick="goTo('3658up');"><span class="summary-alt">3.658 m</span>Lhasa, Tibet</li>
			<li onclick="goTo('3570up');"><span class="summary-alt">3.3570 m</span>Uruguai Air force flight 571</li>
			<li onclick="goTo('1500up');"><span class="summary-alt">1.500 m</span>Pedra do Reino</li>
			<li onclick="goTo('760up');"><span class="summary-alt">760 m</span>São Paulo</li>
			<li onclick="goTo('691up');"><span class="summary-alt">691 m</span>Estação Higienópolis Mackenzie</li>
			<li onclick="goTo('524up');"><span class="summary-alt">524 m</span>Maior Tsunami</li>
			<li onclick="goTo('24up');"><span class="summary-alt">24 m</span>Maior onda surfada</li>
			<li onclick="goTo('2up');"><span class="summary-alt">1,8 m</span>Fausto Silva</li>
			<li onclick="goTo('115down');"><span class="summary-alt">-115 m</span>Eurostar</li>
			<li onclick="goTo('253down');"><span class="summary-alt">-253 m</span>Mergulho livre mais profundo</li>
			<li onclick="goTo('258down');"><span class="summary-alt">-258 m</span>Woodingean Well</li>
			<li onclick="goTo('430down');"><span class="summary-alt">-430 m</span>Praias do mar morto</li>
			<li onclick="goTo('907down');"><span class="summary-alt">-800 m</span>Submarino San Juan</li>

			<li onclick="goTo('1000down');"><span class="summary-alt">-1.000 m</span>Ausência de luz solar</li>
			<li onclick="goTo('1271down');"><span class="summary-alt">-1.271 m</span>Banda Agonizer</li>
			<li onclick="goTo('1500down');"><span class="summary-alt">-1.500 m</span>Mina de Mponeng</li>
			<li onclick="goTo('2998down');"><span class="summary-alt">-2.998 m</span>Baleia Cuvier's Beaked</li>
			<li onclick="goTo('3680down');"><span class="summary-alt">-3.680 m</span>Profundidade média dos oceanos</li>
			<li onclick="goTo('3810down');"><span class="summary-alt">-3.810 m</span>Titanic</li>
			<li onclick="goTo('8848down');"><span class="summary-alt">-8.848 m</span>Everest (afundado)</li>
			<li onclick="goTo('10898down');"><span class="summary-alt">-10.898 m</span>James Cameron</li>
			<li onclick="goTo('10898down');"><span class="summary-alt">-10.916 m</span>Jacques Piccard e John Walsh</li>
			<li onclick="goTo('10898down');"><span class="summary-alt">-10.927 m</span>Victor Vescovo</li>
			<li onclick="goTo('10994down');"><span class="summary-alt">-10.994 m</span>Fossa das Marianas</li>
			<li onclick="goTo('12199down');"><span class="summary-alt">-12.199 m</span>Kola Superdeep Borehole</li>
			<li onclick="goTo('20000down');"><span class="summary-alt">-20.000 m</span>Fim da crosta terrestre</li>
			<li onclick="goTo('40000down');"><span class="summary-alt">-40.000 m</span>Discontinuidade de Mohorovičić</li>
			<li onclick="goTo('50000down');"><span class="summary-alt">-50.000 m</span>Manto externo</li>
			<li onclick="goTo('410000down');"><span class="summary-alt">-410.000 m</span>Zona de transição</li>
			<li onclick="goTo('660000down');"><span class="summary-alt">-660.000 m</span>Manto interno</li>
			<li onclick="goTo('2910000down');"><span class="summary-alt">-2.910.000 m</span>Núcleo externo</li>
			<li onclick="goTo('4800000down');"><span class="summary-alt">-4.800.000 m</span>Pessoa em queda</li>
			<li onclick="goTo('5150000down');"><span class="summary-alt">-5.150.000 m</span>Núcleo interno</li>
			<li onclick="goTo('6351000down');"><span class="summary-alt">-6.351.000 m</span>Centro da Terra (Pólos)</li>
			<li onclick="goTo('6371071down');"><span class="summary-alt">-6.371.071 m</span>Centro da Terra (Média)</li>
			<li onclick="goTo('6378000down');"><span class="summary-alt">-6.378.000 m</span>Centro da Terra (Equador)</li>
		</ul>
	</div>
</div>

<div class="canvas">
	<div class="deep deep-meter" id="deep-meter">
		<span class="mark" id="deep-mark" style="display: none;"></span>
		<span class="mark mark-sign meter-10000up">10.000 m</span>
		<span class="mark mark-sign meter-8848up">8.848 m</span>
		<span class="mark mark-sign meter-8848up">8.848 m</span>
		<span class="mark mark-sign meter-5000up">5.000 m</span>
		<span class="mark mark-sign meter-0">nível do mar</span>

<?php 
	// signs:

	for ($i=12000; $i <= 6378000 ; $i += 2000) { 
		echo '<span class="mark mark-sign" style="top: '.($i+10000-20).'px">'.number_format($i, 0, '', '.').' m</span>';
	}

?>


	</div>

	<div class="deep deep-image" onclick="inactiveAll();">
		<div class="deep-image-8k"></div>
		<div class="deep-image-5k"></div>
		<div class="deep-image-2k"></div>
		<div class="deep-image-0"></div>
		<div class="deep-ocean-0"></div>
		<div class="deep-ocean-3k"></div>
		<div class="deep-ocean-8k"></div>
		<div class="deep-crust-end"></div>
		<div class="deep-crust-end-1"></div>
		<div class="deep-discontinuity"></div>
		<div class="deep-crust-end-2"></div>
		<div class="deep-outer-mantle"></div>
		<div class="deep-transition-zone"></div>
		<div class="deep-inner-mantle"></div>
		<div class="deep-outer-core"></div>
		<div class="deep-inner-core"></div>

		<div class="deep-free-falling"></div>

	</div>

	<div class="deep deep-text">
		<div class="meter-10000up three-third" onclick="select('10000up');">
			A estratosfera, na verdade, pode começar em altitudes tão altas quanto 20km, se na altura do equador ou tão baixas quanto 7km, se perto dos pólos. É comum aviões circularem acima desta altitude por conta de sua quase total ausência de vento e nuvens, garantindo mais estabilidade de vôo. Abaixo da estratosfera, começa a <b>troposfera</b>, onde ocorrem todos os tipos de eventos climáticos: chuvas, relâmpagos, ventos, músicas do Bob Dylan...
			<span class="call-next"><a href="javascript:goTo('9200up');" class="next">Balão de festa &gt;&gt;</a></span>
		</div>

		<div class="meter-9200up two-third" onclick="select('9200up');">
			Quando a gente solta um balão de festa, daqueles de gás hélio, qual altura ele chega?
			Se ele estiver propriamente cheio, é possível que ele chegue até cerca de 9000 metros, quando o ar se torna tão rarefeito que a pressão externa do balão cai muito mais do que a interna e ele estoura.<br/>
			Balões metereológicos, feitos para não estourar com a diferença de pressão, páram de subir quando a densidade da atmosfera se equipara à densidade do gás, o que ocorre a aproximadamente 32 km de altura.<br/>
			<span class="call-next"><a href="javascript:goTo('8848up');" class="next">Monte Everest &gt;&gt;</a></span>
		</div>

		<div class="meter-8848up two-third" onclick="select('8848up');">
			É de conhecimento notório que o monte Everest é a montanha mais alta do mundo, com seus 8848 metros de altura (ou 55 prédios do Banespa, um em cima do outro). O fato curioso e menos conhecido é que o Everest não é o ponto mais distante do centro da terra. Esse título fica com uma montanha no Equador: o monte Chimborazo.<br/>
			Para entender melhor: a terra não é exatamente redonda, mas sim <del>plana</del> uma esfera achatada nas extremidades, como uma bola de yoga com um gordo sentado em cima. A altura de uma montanha é medida a partir de sua distância do nível do mar - no exemplo apresentado, o nível do mar é a superfície da bola de yoga; mas o chão e o cu do gordo estão mais próximos do centro da bola do que as laterais.<br/>
			Assim, estando a 6.382.000 metros do centro da terra (pode rolar a página e contar), o Monte Everest perde para o <a href="javascript:goTo('6263up');">Chimborazo</a>, que tem meros 6263 metros de altura mas está a 6.384.000 metros do centro.<br/>
			<span class="call-next"><a href="javascript:goTo('5895up');" class="next">Kilimanjaro &gt;&gt;</a></span>
		</div>

		<div class="meter-6263up meter-hide"></div>

		<div class="meter-5895up two-third" onclick="select('5895up');">
			Não só o cume do Everest não é o ponto mais distante do centro da terra, mas ele quase não fica no TOP 10. Na verdade, ele é justamente o décimo.<br/>
			Na sexta posição está o Kilimanjaro, a montanha mais alta da África, com 5895 metros de altitude,  e ponto mais alto que eu ja cheguei na vida (a aventura é um dos capítulos <a href="https://www.amazon.com.br/Continente-Esquecido-Cadernos-expedicion%C3%A1rios-viagem-ebook/dp/B07JZWRMXC/ref=sr_1_2?ie=UTF8&qid=1546827172&sr=8-2" target="_blank">deste livreto aqui</a>)<br/>
			<span class="call-next"><a href="javascript:goTo('5337up');" class="next">Padre do Balão &gt;&gt;</a></span>
		</div>

		<div class="meter-5337up three-third" onclick="select('5337up');">
			No dia 20 de abril de 2008, um domingo, o padre gaúcho Adelir Antônio de Carli subia aos céus sendo levado por mil balões de hélio. Sua idéia era partir de Paranaguá, no Paraná, rumo a Dourados, no Mato Grosso do Sul. Seu plano de vôo era (de acordo com o que ele mesmo dizia) baseado na “<i>vontade de Deus</i>". A hipótese mais provável é que ele tenha caído nas águas de Santa Catarina, numa guinada de 180° do mapa direcional geográfico, um exemplo prático do baixo funcionamento da navegação aleatória divina. Seu corpo foi encontrado no Rio de Janeiro em 3 de julho, mostrando que Deus errou o percurso tanto com o padre morto quanto com ele vivo.<br/>
			Antes disso, em 13 de janeiro daquele ano, em um vôo teste, o padre usou 500 balões para decolar de Ampére, no Paraná e pousar em San Antonio, na Argentina, em um vôo que atingiu 5337 metros de altura. É plausível que, em sua última viagem, enquanto ligava para os bombeiros pedindo ajuda para usar o GPS, o padre estivesse em uma altitude similar.<br/>
			<span class="call-next"><a href="javascript:goTo('5130up');" class="next">La Rinconada, Peru &gt;&gt;</a></span>
		</div>

		<div class="meter-5130up one-third l2" onclick="select('5130up');">
			A 5130 metros de altitude, aos pés do glacial <i>La Bella Durmiente</i>, no Peru, fica a cidade de La Rinconada, o assentamento permanente de pessoas mais alto do mundo. A cidade fica em uma posição mais alta até que o acampamento-base do Everest, de onde saem as expedições finais para alpinistas chegarem ao &lquot;topo do mundo&rquot;. Apesar de ficar perto da linha do equador, a cidade tem uma temperatura próxima dos 10ºC no verão.<br/>
			E o motivo que leva 50.000 pessoas (dados de 2012) a viver em um lugar tão alto em condições tão inóspitas é: ouro. A população cresceu e se assentou entre 2001 e 2009, devido a um aumento de 235% no valor do ouro.
			<span class="call-next"><a href="javascript:goTo('4500up');" class="next">Tapete do Alladin &gt;&gt;</a></span>
		</div>

		<div class="meter-4500up three-third" onclick="select('4500up');">
			Altura de vôo do tapete do Alladin (de acordo <a href="http://nrt.paulovelho.com.br/a-whole-new-world/" target="_blank">com este texto aqui</a>)
			<span class="call-next"><a href="javascript:goTo('3658up');" class="next">Lhasa, Tibet &gt;&gt;</a></span>
		</div>

		<div class="meter-3658up one-third" onclick="select('3658up');">
			Apesar de ser parte do território chinês, o Tibet considera a si próprio como independente. Na condição de território autônomo, atualmente ele possui uma economia própria, além de sua própria língua e bandeira. A bandeira tibetana, aliás, foi adotada pelo 13º Dalai Lama em 1916 e foi banida pelo governo chinês em 1959 - a banição segue ativa até hoje.<br/>
			A cidade de Lhasa, a 3.568m de altitude tem diversos pontos significantes para o budismo, incluindo o palácio de inverno de Dalai Lama. Com 216.663 habitantes (dados de 2010), também é a capital do Tibet - que, se considerado independente, torna a cidade a capital mais alta do mundo. Apenas 8 metros mais baixa, a atual capital mais alta do mundo reconhecida pela ONU é La Paz, na Bolivia, com 758.845 habitantes (dados de 2012).
			<span class="call-next"><a href="javascript:goTo('3570up');" class="next">Air Force 571 &gt;&gt;</a></span>
		</div>

		<div class="meter-3570up three-third l2" onclick="select('3570up');">
			Em 13 de outubro de 1972, um avião transportando 45 pessoas caiu nos Andes, a 3570m de altitude. 28 pessoas sobreviveram ao impacto. Dez dias depois da queda as vítimas descobriram, através de um rádio que elas próprias haviam consertado, que as buscas por sobreviventes seriam finalizadas.<br/>
			O resgate só foi possível porque dois sobreviventes partiram do local da queda e, sem qualquer equipamento de escalada, famintos e acidentados, escalaram um pico de 4670m de altitude e andaram por 10 dias até encontrar ajuda. No total, foram 72 dias entre a queda e o resgate dos 16 sobreviventes.<br/>
			Mais sobre a história no livro “A Sociedade da Neve" (que, 10 anos depois de ler, eu ainda recomendo pra todo mundo)<br/>
			<span class="call-next"><a href="javascript:goTo('1500up');" class="next">Pedra do Reino &gt;&gt;</a></span>
		</div>

		<div class="meter-1500up three-third" onclick="select('1500up');">
			Pedra do Reino (de acordo <a href="http://nrt.paulovelho.com.br/reino-de-mufasa/" target="_blank">com este texto aqui</a>)
			<span class="call-next"><a href="javascript:goTo('760up');" class="next">São Paulo &gt;&gt;</a></span>
		</div>

		<div class="meter-760up two-third" onclick="select('760up');">
			O planalto paulista é a região que se estende da Serra do Mar até aproximadamente a cidade de Campinas. É nesse planalto que se assentou a cidade de São Paulo com seus milhões de habitantes gritando "<i>Porra, meu! Como assim não tem IPA?</i>" noite adentro.<br/>
			A altitude média da cidade é de 760 metros. Baixa, se comparada com Brasília, a 1.172m e alta, se comparada com o Rio de Janeiro, a 2m de altitude. O Brasil, aliás, possui 138 cidades a zero metros de altitude. A altitude média do país inteiro é de 320m - a cidade mais alta do Brasil é Campos do Jordão, a 1628m.<br/>
			A título de comparação: Paris fica a 35m, Madrid a 667m e Amsterdam a -2m (o título "<i>Países Baixos</i>" não veio à toa). Bern, capital da Suíça fica a 542m, mas o país possui uma altitude média de 1350m.<br/>
			Já o mundo tem uma altitude média de 840m.
			<span class="call-next"><a href="javascript:goTo('691up');" class="next">Estação Higienópolis - Mackenzie (Linha Amarela) &gt;&gt;</a></span>
		</div>

		<div class="meter-691up three-third" onclick="select('691up');">
			Ainda em eterna construção, o metrô de São Paulo terá a estação mais profunda da América Latina: a plataforma da linha laranja na estação Higienópolis-Mackenzie atingirá 69 metros de profundidade. A linha laranja, aliás será um destaque de distância da superfície: a estação Itaberaba (Freguesia do Ó) ficará 68 metros abaixo do solo e a estação PUC (Perdizes) ficará a 61 metros abaixo da PUC.<br/>
			Para efeito de comparação de quem vive na cidade: a plataforma da linha amarela da estação Pinheiros está a 30 metros de profundidade.
			<span class="call-next"><a href="javascript:goTo('524up');" class="next">Maior Tsunami &gt;&gt;</a></span>
		</div>

		<div class="meter-524up three-third" onclick="select('524up');">
			Em 9 de julho de 1958, um tsunami atingiu a baía de Lituya, no Alaska. A onda de 524 metros é a maior já registrada (nos tempos modernos, sem contar aquela gerada pelo meteoro que matou os dinossauros) e matou um total de 2 pescadores.
			<span class="call-next"><a href="javascript:goTo('24up');" class="next">Maior onda surfada &gt;&gt;</a></span>
		</div>

		<div class="meter-24up three-third" onclick="select('24up');">
			O surfista brasileiro Rodrigo Koxa entrou para o Guinness Book ao surfar uma onda de 24,4 metros em 08 de novembro de 2017 na Vila de Nazaré, em Leiria, Portugal. <a href="https://www.youtube.com/watch?v=V8d1VVTUmfk" target="_blank">Tem vídeo</a>.
			<span class="call-next"><a href="javascript:goTo('2up');" class="next">Faustão &gt;&gt;</a></span>
		</div>

		<div class="meter-2up one-third l3" onclick="select('2up');">
			A altitude do Faustão ao nível do mar seria de 1,8 metros. Seria mais ou menos assim que o veríamos em comparação ao Monte Everest. Isso antes dele começar a crescer, evidentemente (<a href="http://nrt.paulovelho.com.br/o-loco-bicho-olha-o-tamanho-dessa-fera/" target="_blank">ver aqui</a>). Um pouco mais complexo é o conceito de “nível do mar". E quando a maré sobe, o nível do mar muda? Se a Antartica derreter e o nível do mar subir, vamos ter que recalcular todas as altitudes?<br/>
			Vamos lá: O MSL (para <i>Mean Sea Level</i>, ou <i>Nível Médio do Mar</i> ou melhor ainda <i>Nível do Mar Malvado</i>) é o valor utilizado para saber a altitude média do mar em determinado ponto. A forma padrão de cálculo do nível do mar é a média da medição horária da altura da água em um determinado ponto durante 19 anos. Se você mora em Santos, mede aí e conta pra gente seus resultados.<br/>
			Assim, o nível do mar não é o mesmo em todos os lugares do mundo. Ele varia bastante, podendo oscilar entre 80 metros pra cima ou 100 metros pra baixo, dependendo do lugar. A partir dessas medições, foi gerado um “<i>geoid</i>", que é um mapa da terra com a altura média dos oceanos sem contar a variação por conta de ventos e outras influências - apenas de acordo com a gravidade e rotação da terra. O modelo de uso atual é o WGS84 (para <i>World Geodetic System</i> e 1984 sendo o ano de seu estabelecimento, tendo revisões em 1996 e 2004). As altitudes são medidas de acordo com o nível do mar base definido por esse modelo.<br/>
			Mas e com o derretimento das calotas polares e o aumento dos oceanos? O Everest está diminuindo? A surpreendente resposta é “muito pelo contrário": Enquanto os oceanos estão tendo um aumento de aproximadamente 3.2mm por ano, o Everest segue crescendo ainda mais, cerca de 4mm por ano. Isso porque a placa tectônica indiana segue empurrando a tibetana e movendo a montanha pra cima.
			<span class="call-next"><a href="javascript:goTo('115down');" class="next">Canal da Mancha &gt;&gt;</a></span>
		</div>

		<div class="meter-115down one-third l1" onclick="select('115down');">
			A construção do túnel que liga a principal ilha do Reino Unido à porção continental da Europa começou em 1988 e o túnel foi aberto em 1994. Com 50,45km de extensão, em sua parte mais baixa o túnel chega a 115 metros de profundidade, estando nesse ponto 75 metros abaixo do mar.<br/>
			O projeto custou £4,65 bilhões na época (o equivalente a £12 bilhões hoje), 80% mais do que o esperado. Muito caro pra vir agora o Brexit e o pessoal ter que rever toda a existência desse túnel aí.
			<span class="call-next"><a href="javascript:goTo('253down');" class="next">Mergulho livre &gt;&gt;</a></span>
		</div>

		<div class="meter-253down three-third" onclick="select('253down');">
			O austríaco Herbert Nitsch (não confundir com aquele Herbert das versões brasileiras) detém o atual recorde de mergulho livre, tendo descido a 214 metros em 2007. Um mergulho livre não é algo tão simples quanto parece (se é que parece simples): A pressão ainda pode deixar o corpo confuso, como se o cidadão estivesse bêbado. A meros 10 metros de profundidade, a pressão da água já dobra, comprimindo o seu corpo, fazendo com que o volume de ar nos seus pulmões diminua pela metade. Por isso o tanque de ar de mergulhadores possui uma porcentagem maior de nitrogênio: para facilitar a absorção do gás pelo corpo. Mesmo assim, se um mergulhador subir muito rápido à superfície, sem dar tempo do gás enriquecido deixar o corpo, o nitrogênio pode gerar bolhas nos tecidos internos.<br/>
			Foi justamente no retorno a superfície que nosso caríssimo Herbert Nitsch teve problemas quando tentou bater o próprio recorde em junho de 2012, nas águas de Santorini, na Grécia. Ele desmaiou no último trecho da subida, e, após relatar fraqueza extrema, teve que receber tratamento médico especializado intensivo em uma câmara de descompressão em Atenas. Nitsch continuou o tratamento posteriormente na Alemanha, e médicos chegaram a cogitar que ele não seria capaz de voltar a andar. Porém, ele recuperou-se muito bem, apesar de ter problemas permanentes de equilíbrio e coordenação (que nem eu, provavelmente).<br/>
			Ele continua mergulhando já que esses problemas não se destacam debaixo d’água.
			<span class="call-next"><a href="javascript:goTo('258down');" class="next">Woodingdean water well &gt;&gt;</a></span>
		</div>

		<div class="meter-258down one-third" onclick="select('258down');">
			Se alguma vez na sua vida você achou que estava no fundo do poço, saiba que é possível chegar mais fundo ainda.<br/>
			A escavação do poço de água Woodingdean foi iniciada em 1858 na cidade de Brighton, no Reino Unido, e dois anos depois os construtores ainda não tinham achado água, porém, ao invés de usar o bom-senso, desistir e comprar um garrafão da Lindoya, continuaram cavando até atingir 390 metros de profundidade - ajustando com a altitude do local, ele chega a 258m abaixo do nível do mar.<br/>
			Ainda é o poço mais profundo do mundo e também o buraco mais fundo escavado sem o auxílio de máquinas.
			<span class="call-next"><a href="javascript:goTo('430down');" class="next">Mar morto &gt;&gt;</a></span>
		</div>


		<div class="meter-430down one-third" onclick="select('430down');">
			Quando pensamos em "abaixo do nível do mar", o que vêm à cabeça é o trailer de <i>Procurando Nemo</i> e a idéia de que daqui a pouco os oceanos vão subir, inundar a Holanda e deixar queijos boiando em tamancos de madeira por aí.<br/>
			<a href=”https://en.wikipedia.org/wiki/List_of_elevation_extremes_by_country” target=”_blank”>Esta lista na wikipedia</a>, porém, mostra 45 países que possuem algum ponto de terra com uma altitude abaixo do nível do mar.<br/>
			Merece destaque, entretanto, o mar morto: suas praias, de um lado pertencentes à Israel e do outro à Jordânia são o ponto mais profundo da terra que você pode pousar de helicóptero (eu demorei bastante pra procurar essa associação - não é necessariamente o ponto seco mais profundo, já que você pode ir mais baixo entrando em grutas ou minas).<br/>
			Este recorde também dificilmente será quebrado: além de ser 200 metros abaixo do segundo colocado, o mar morto está encolhendo com o decorrer dos anos, criando praias ainda mais baixas. Dez anos atrás, este recorde era sete metros mais alto.
			<span class="call-next"><a href="javascript:goTo('907down');" class="next">San Juan &gt;&gt;</a></span>
		</div>

		<div class="meter-907down one-third" onclick="select('907down');">
			Em 15 de novembro de 2017, o submarino San Juan desapareceu da costa Argentina durante uma missão de rotina. Havia uma tripulação de 44 pessoas a bordo. A estimativa é que o oxigênio no interior da embarcação poderia durar somente mais sete dias. Uma missão de resgate contando com a ajuda da OTAN e de 14 outros países vasculhou uma imensa área de 482.507 km², com a ajuda de 15 aviões e 17 navios. Nada foi encontrado.<br/>
			Quinze dias depois do desaparecimento, a missão de resgate foi rebaixada para uma missão de busca, sem esperanças que a tripulação ainda estivesse viva.<br/>
			O submarino só foi encontrado um ano depois do desaparecimento, a uma profundidade de 907m.<br/>
			<span class="call-next"><a href="javascript:goTo('1000down');" class="next">Ausência de luz solar &gt;&gt;</a></span>
		</div>

		<div class="meter-1000down three-third" onclick="select('1000down');">
			Até 200 metros de profundidade, o oceano tem a sua zona fótica, na qual a luz solar ainda consegue penetrar com certa facilidade e a fotossíntese é possível.<br/>
			Abaixo disso, há a zona afótica, na qual a luz não consegue entrar tão bem, a fotossíntese não é possível, mas ainda é rica em alimentos e resíduos, diversos que caem da zona fótica.<br/>
			Abaixo de 1000 metros de profundidade, ninguém é de ninguém. Daqui pra baixo é escuridão total, mão na bunda, carteira sumindo, lanterninha de bolso, não tem luz, não tem segurança, mal tem comida, as criaturas são estranhas e inóspitas e o terreno é desconhecido. Bem-vindos à Zona Leste dos oceanos.<br/>
			<span class="call-next"><a href="javascript:goTo('1271down');" class="next">Banda Agonizer &gt;&gt;</a></span>
		</div>

		<div class="meter-1271down one-third" onclick="select('1271down');">
			Em 4 de agosto de 2007, a banda finlandesa de metal Agonizer entrou no Guinness Book ao fazer o show de rock mais baixo da história, na mina de Pyhäsalmi, a mais profunda da Europa, na Finlândia. O show foi limitado a um pequeno grupo por medidas de segurança. Em novembro do mesmo ano, Queens of Stone Age fizeram algo parecido em uma mina de sal em Erfurt, na Alemanha, mas eles "só" chegaram a 700 metros de profundidade. E eu que achava que Velhas Virgens era baixo.
			<span class="call-next"><a href="javascript:goTo('1500down');" class="next">Mina de Mponeng &gt;&gt;</a></span>
		</div>

		<div class="meter-1500down one-third" onclick="select('1500down');">
			A mina de ouro de Mponeng, na África do sul é a mina mais profunda do mundo. Só pra descer da superfície até o fundo da mina leva mais de uma hora. O que me faz pensar que os funcionários têm que planejar o horário de almoço com certa antecedência.
			<span class="call-next"><a href="javascript:goTo('2998down');" class="next">Baleia Cuvier's Beaked &gt;&gt;</a></span>
		</div>

		<div class="meter-2998down three-third" onclick="select('2998down');">
			O mais profundo que um mamífero foi detectado nadando foi a Cuvier’s beaked whale, a 2.998m de profundidade. Essa espécie de mamífero consegue ficar cerca de 120 minutos sem precisar voltar à superfície para respirar. Não por coincidência, é um pouco mais do que suficiente para assistir "Procurando Nemo".
			<span class="call-next"><a href="javascript:goTo('3680down');" class="next">Profundidade média dos oceanos &gt;&gt;</a></span>
		</div>

		<div class="meter-3680down two-third" onclick="select('3680down');">
			De acordo com os últimos cálculos da NOAA (<i>National Oceanic and Atmospheric Administration</i>), obtidos em 2010, a profundidade média dos oceanos é de cerca de 3,6km. Como as estimativas é que nós temos aproximadamente apenas 10% do oceano mapeado atualmente, esses cálculos parecem completamente randômicos - como qualquer outra informação envolvendo as profundezas dos mares.<br/>
			<span class="call-next"><a href="javascript:goTo('3810down');" class="next">Titanic &gt;&gt;</a></span>
		</div>

		<div class="meter-3810down two-third l2" onclick="select('3810down');">
			Na noite de 14 de abril de 1912, o Titanic afundou. Dos 2224 passageiros, 1514 morreram. Mas isso todo mundo já sabe, não à toa que o filme de mais de 20 anos atrás ainda segue como o segundo mais assistido nos cinemas do Brasil (recentemente superado por Homem de Ferro e seus amigos).<br/>
			O navio segue no fundo do mar: foi somente em setembro de 1985 que uma expedição conseguiu chegar até os destroços. Eles estavam a mais de 21km das coordenadas dadas pelos operadores na noite do naufrágio e o navio se partiu em dois pedaços, estando a 600 metros um do outro. Expedições posteriores resgataram diversos itens do navio, vendidos a compradores excêntricos, e até mesmo restos mortais humanos foram fotografados.<br/>
			Pra essa criançada com menos de 25 anos que não lembra do filme (naquela época a gente tinha que ficar 3 horas na fila pra comprar ingressos, como faziam os selvagens) e permanece ignorante ao destino do navio, tem um pessoal construindo o <b>Titanic II</b>, que, se já não bastasse o nome pra deixar os passageiros desconfiados, ele ainda está sendo construído na China. A previsão de inauguração é <del>2016</del> <del>2018</del> <i>2022</i> (tudo atrasa neste país, né?).<br/>
			<span class="call-next"><a href="javascript:goTo('8848down');" class="next">Everest afundado &gt;&gt;</a></span>
		</div>


		<div class="meter-8848down two-third l2" onclick="select('8848down');">
			Se cortássemos o Monte Everest bem no nível do mar, pegássemos umas gruas bem colocadas, virássemos o negócio de ponta cabeça e afundássemos ele no oceano até a base, teríamos uma desfiguração completa no mapa terrestre.<br/>
			A título de curiosidade, a montanha chegaria até aqui.<br/>
			<span class="call-next"><a href="javascript:goTo('10898down');" class="next">James Cameron &gt;&gt;</a></span>
		</div>

		<div class="meter-10898down three-third l1" onclick="select('10898down');">
			O tweet mais profundo da história foi enviado pelo cineasta James Cameron, em 25 de março de 2012. “<a href="https://twitter.com/jimcameron/status/184036733959143425" target="_blank">Hitting bottom never felt so good.</a>", disse ele durante a expedição <b>Deepsea Challenge</b>, após chegar a 10.898 metros abaixo d’água… E a Disney achava que os tweets do James Gunn que eram baixos.<br/>
			Cameron já tinha explorado o oceano antes: ele já fez 33 mergulhos para explorar o Titanic, mostrando que ele era obcecado pelo negócio mesmo. A paixão dele é tanta que a Deepsea foi feita com investimento próprio: A NOAA, agência de exploração oceânica americana teve em 2015 um budget de pesquisa de 26 milhões de dólares. James Cameron gastou de seu próprio bolso 10 milhões de dólares na missão; - caso você esteja se perguntando o que esse cara fez com toda a grana de bilheteria que Avatar rendeu para ele: uma boa parte foi por água abaixo e outra boa parte ele está mandando pro espaço, já que ele está na lista dos primeiros interessados a serem mandados em órbita como turistas espaciais. Mas, como é um cineasta, a exploração marítima rendeu <a href="https://www.youtube.com/watch?v=-8r_-79SjpA">um filme</a> (e, como é o James Cameron, o filme é 3D).<br/>
			Essa expedição, porém, não foi o ponto mais profundo que alguém chegou no oceano: 52 anos antes o suíço Jacques Piccard e o americano Don Walsh atingiram 10.916 metros de profundidade. Eles levaram 5 horas pra descer e ficaram por lá por 20 minutos.<br/>
			Recentemente um novo recorde foi alcançado: <a href="https://edition.cnn.com/travel/article/victor-vescovo-deepest-dive-pacific/index.html">Em primeiro de maio de 2019, o explorador Victor Vescovo atingiu 10.927 metros de profundidade</a>, estabelecendo o novo recorde. A expedição também partiu de investimento privado: além de Victor, a Discovery Channel está investindo na missão, que inclui mergulhos em todos os oceanos. Nas profundezas do oceano, ele encontrou plástico e papel de bala, provas de que pelo menos nosso lixo já chegou lá.<br/>
			<span class="call-next"><a href="javascript:goTo('10994down');" class="next">Fossa das Marianas &gt;&gt;</a></span>
		</div>

		<div class="meter-10994down three-third l3" onclick="select('10994down');">
			Não, não é o lugar onde um monte de menina chamada Mariana vai pra chorar. A fossa das Marianas tem esse nome porque fica a cerca de 200km das ilhas Mariana, pertencentes a Guam, pertencente aos Estados Unidos. A profundidade foi inicialmente mensurada em 1951, por um sonar malandro que emite ondas de som na água. Tecnologia fina que existe faz tempo. A galerinha da medição, porém, já sabia que tinha algo bem fundo por lá por conta de outra medição de 1875, que tinha sido feita com um peso amarrado numa corda.<br/>
			Cientistas seguem pesquisando os oceanos, cada vez com mais tecnologia e tentando obter um mapa cada vez mais acurado. As medições mais recentes na Fossa das Marianas datam de 2012. As imensas dificuldades em pesquisar o fundo dos mares, que incluem uma cacetada de água até chegar lá, fazem que o fundo dos oceanos seja menos mapeado do que o planeta Marte.<br/>
			<span class="call-next"><a href="javascript:goTo('12199down');" class="next">Kola Superdeep Borehole &gt;&gt;</a></span>
		</div>

		<div class="meter-12199down one-third l2" onclick="select('12199down');">
			Em 24 de maio de 1970, os russos começaram a cavar um buraco.<br/>
			Localizado na cidade de Мурманск (pronuncia-se Murmansk), a 50 metros de altitude, ele seguiu sendo cavado por 22 anos. O buraco de menos de 30 centímetros de diâmetro detém o atual recorde de ponto artificial mais profundo da terra, a 12.262 metros de profundidade.<br/>
			Em 1992, os cientistas desistiram de continuar cavando, por questões técnicas: a 180ºC, as ferramentas de escavação praticamente se desfaziam, além da rocha, que insistia em manter uma consistência mais pastosa do que sólida, o que dificultava o buraco a se manter estável, como se alguém estivesse tentando equilibrar uma vela de aniversário em um pote de iogurte - acontece, às vezes você faz aniversário e tá sozinho e sem dinheiro, qualquer iogurte de pêssego vira bolo.<br/>
			Mesmo assim, desde que atingiu o recorde, em 1989, nada conseguiu ir mais fundo. E esse trabalho todo foi o suficiente para penetrar cerca de um terço da crosta terrestre. Só a crosta. Até o centro da terra, é outra viagem.<br/>
			<span class="call-next"><a href="javascript:goTo('20000down');" class="next">Fim da crosta terrestre &gt;&gt;</a></span>
		</div>

		<div class="meter-20000down two-third l2" onclick="select('20000down');">
			É dificil determinar onde acaba a crosta terrestre porque, tal qual a sitcom “How I Met Your Mother”, ela também possui o final disforme e irregular. Em sua parte oceânica, a crosta pode ter somente de 5km a 10km de espessura, enquanto a parte continental pode ficar entre 30km a 50km. Isso porque a crosta fica quase “flutuando” na camada de baixo.<br/>
			A tênue divisa entre a crosta e o manto é marcada pela <i>Descontinuidade de Mohorovičić</i>, que pode ser considerada uma casca de cerca de 500m de altura.
			<span class="call-next"><a href="javascript:goTo('40000down');" class="next">Descontinuidade de Mohorovičić &gt;&gt;</a></span>
		</div>

		<div class="meter-40000down two-third l2" onclick="select('40000down');">
			No final da década de 50, os Estados Unidos iniciaram um programa pra atingir a Descontinuidade de Mohorovičić (pronuncia-se [moxorôʋiːt͡ʃit͡ɕ]). A entidade científica que estava cuidando do assunto era a <i>American Miscellaneous Society</i>, que já virou minha sociedade científica favorita, já que ela tinha o objetivo de estudar assuntos tão aleatórios que não se encaixavam em tema nenhum.<br/>
			O tal programa era o <b>Projeto Mohole</b>, cujo objetivo maluco era chegar até o manto da terra e obter uma amostra do material.<br/>
			A idéia de chegar ao manto terrestre pode ser um paralelo com a idéia de chegar na lua, já que ambas estavam sendo desenvolvidas na mesma época, tanto pelos Estados Unidos quanto pela União Soviética, e ambas envolviam a criação de tecnologias completamente novas e um tanto quanto malucas para que o homem chegasse aonde audaciosamente jamais esteve.<br/>
			A idéia do Projeto Mohole, em oposição ao plano russo, de ir por terra, era perfurar a partir do fundo do oceano, onde a crosta é mais fina. O programa, porém, foi cancelado em 1966, após os custos de escavação ficarem fora de controle com apenas alguns metros de basalto escavados.<br/>
			A Sociedade Americana Científica Randômica infelizmente também foi dissolvida.
			<span class="call-next"><a href="javascript:goTo('50000down');" class="next">Manto externo &gt;&gt;</a></span>
		</div>

		<div class="meter-50000down two-third l2" onclick="select('50000down');">
			A mais grossa, pesada e volumosa das camadas terrestre, o manto não passa de um gigantesco e lento rio de lava e é responsável pela maior parte da composição terrestre. O manto externo tem uma temperatura que vai de 500ºC perto da borda até uns 900º mais pro centro.<br/>
			Tal qual uma banheira de Nutella no inverno, o manto tem um estado mais pro sólido do que pro líquido, pelo menos na parte de cima, a externa. O manto também está o tempo todo se movendo a uma velocidade baixíssima, como um ônibus no horário de rush (às vezes ele anda alguns poucos centímetros por ano). Esse movimento, aliado com a pressão terrestre faz os vulcões estourarem, como espinhas num dia de casamento.
			<span class="call-next"><a href="javascript:goTo('410000down');" class="next">Zona de transição &gt;&gt;</a></span>
		</div>

		<div class="meter-410000down two-third l2" onclick="select('410000down');">
			A zona de transição não serve pra nada. Ela é só o nome daquele pedaço meio inusitado, que ninguém sabe dizer se é o manto externo ou interno. Aí os cientistas inventaram um nome legal pros repórteres ávidos por novidades pararem de encher o saco.
			<span class="call-next"><a href="javascript:goTo('660000down');" class="next">Manto Interno &gt;&gt;</a></span>
		</div>

		<div class="meter-660000down two-third l2" onclick="select('660000down');">
			Se o manto externo tem a consistência de Nutella fria, o manto interno tem a consistência de Doce de Leite quente (e essas analogias indicam que eu estou com vontade de comer doce).<br/>
			Por ser menos sólida do que o manto de fora, o manto interno se move com mais velocidade.<br/>
			Ele também é bem mais quente, com a temperatura podendo chegar a 4000ºC. Deve queimar a língua isso aí.
			<span class="call-next"><a href="javascript:goTo('2910000down');" class="next">Núcleo externo &gt;&gt;</a></span>
		</div>

		<div class="meter-2910000down two-third l2" onclick="select('2910000down');">
			Por volta de 2910km para baixo começa o núcleo terrestre.<br/>
			Se as camadas anteriores eram pastosas, o núcleo externo é completamente líquido, sendo composto primariamente de ferro e níquel derretidos.<br/>
			Como é a única camada líquida e fica se movendo feito uma criança com hiperatividade ao redor do núcleo interior sólido, é do núcleo externo que o magnetismo terrestre é originado.
			<span class="call-next"><a href="javascript:goTo('4800000down');" class="next">Pessoa em queda &gt;&gt;</a></span>
		</div>

		<div class="meter-4800000down one-third l2" onclick="select('4800000down');">
			Se você buscar no Google quanto tempo levaria para um indivíduo cair em queda livre até o centro da terra, o primeiro resultado que ele vai te dar é de 42 minutos. Este porém, é um resultado errado.<br/>
			De acordo com as contas <a href="https://arxiv.org/abs/1308.1342">neste artigo</a> do professor Alexander R. Klotz, a gravidade da terra não é exatamente constante durante todo o seu interior, então esse tempo poderia ser reduzido para até 38 minutos. Este, porém, é um resultado errado.<br/>
			O problema dessas abordagens é que elas ignoram a resistência do ar. Tal qual os convites pra jantar que eu mando pras menininhas, o cidadão em queda dos dois exemplos também fica no vácuo. O que, na verdade, torna tudo até mais difícil, já que a aceleração constante é uma matemática mais chata do que uma velocidade fixa.<br/>
			Quando o cidadão começa a cair, ele vai acelerando na velocidade da gravidade (de 9,8m/s²) até que chega um ponto no qual a resistência do ar impede que o corpo acelere mais e a velocidade se estabiliza. A velocidade máxima que o corpo atinge considerando a resistência do ar é chamada de <i>velocidade terminal</i>.<br/>
			No caso do corpo humano, a velocidade terminal varia da posição que o boneco cai. Caindo de cabeça, como se fosse uma estátua de Santo Antônio às vésperas de um dia dos namorados, a velocidade pode chegar a mais de 300km/h. Ainda bem distante do recorde de queda livre  atingido pelo glorioso Felix Baumgartner, de 1.358km/h, daquela vez que ele pulou de 39.000m de altura, mas aí também é fácil porque o ar era mais escasso do que cabelo em cucuruto de escritor e foi difícil segurar.<br/>
			Imaginando que um nobre senhor tropece em um buraco lá pelo nível do mar e caia na posição de um personagem de novela das oito, com o corpo deitado, sua velocidade terminal vai ser cerca de 195km/h. Como a ausência ou presença do ar não impede a gente de arredondar grandezas, podemos considerar 200km/h como velocidade terminal. Dessa forma, nosso desastrado senhor demoraria 31 horas e 51 minutos para chegar ao centro da terra.<br/>
			Por essas contas, depois de ficar 24 horas caindo, o nobre senhor ainda estaria passando por aqui. Mas, como as contas foram feitas por mim, pode ser que este também seja um resultado errado.
			<span class="call-next"><a href="javascript:goTo('5150000down');" class="next">Núcleo interno &gt;&gt;</a></span>
		</div>

		<div class="meter-5150000down two-third l2" onclick="select('5150000down');">
			Chegando a 5.430°C o núcleo mais núcleo possível da Terra é da mesma temperatura da superfície do Sol (e mais ou menos a temperatura de Campo Grande no verão).<br/>
			Mesmo assim, o núcleo interno da terra é uma bolota de ferro e níquel sólida. Isso porque, quanto maior a pressão, maior a temperatura necessária para derretimento desses metais e a pressão no núcleo pode chegar a 3.500.000 atmosferas, mais ou menos a mesma pressão sofrida por uma garota solteira ainda cursando a faculdade aos 28 anos, com todas suas primas já formadas e casadas.
			<span class="call-next"><a href="javascript:goTo('6351000down');" class="next">Centro da Terra (Pólos) &gt;&gt;</a></span>
		</div>

		<div class="meter-6351000down two-third l2" onclick="select('6351000down');">
			A distância para o centro da Terra não é a mesma em todos os lugares do planeta. Como a terra tem seu formato achatado nos pólos, o centro fica mais perto nas extremidades do planeta, e a partir daqui é onde você mudaria de sentido (se estivesse indo para baixo, iria pra cima e vice-versa)
			<span class="call-next"><a href="javascript:goTo('6371071down');" class="next">Centro da Terra (Média) &gt;&gt;</a></span>
		</div>
		<div class="meter-6371071down two-third l2" onclick="select('6371071down');">
			Mas, tal qual um engenheiro em formação, podemos tratar tudo com medidas aproximadas. É justo e um tanto quanto acurado estimar uma média de 6.371.071 metros de distância do centro da terra na maior parte do planeta.
			<span class="call-next"><a href="javascript:goTo('6378000down');" class="next">Centro da Terra (Equador) &gt;&gt;</a></span>
		</div>
		<div class="meter-6378000down two-third l2" onclick="select('6378000down');">
			É na linha do Equador, evidentemente, que se está mais distante. Considerando que cada pixel desta página fosse equivalente a um metro, esse é o tanto que você teria que rolar da estratosfera até não ter mais nada de novo pra ver.<br/>
			...a não ser o outro lado.<br/>
			É só começar a subir a rolagem agora.
		</div>



	</div>
</div>
