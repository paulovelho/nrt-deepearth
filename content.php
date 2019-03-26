<div class="summary">
	<span class="summary-toggle" onclick="toggleSummary();
	">Sumário &#8628;</span>
	<div id="summary-list" class="summary-list">
		<ul>
			<li onclick="goTo('10000up');"><span class="summary-alt">10.000 m</span>Estratosfera</li>
			<li onclick="goTo('9200up');"><span class="summary-alt">~9.000 m</span>Balão de festa</li>
			<li onclick="goTo('8848up');"><span class="summary-alt">8.848 m</span>Monte Everest</li>
			<li onclick="goTo('5895up');"><span class="summary-alt">5.895 m</span>Monte Kilimanjaro</li>
			<li onclick="goTo('5337up');"><span class="summary-alt">5.337 m</span>Padre do balão</li>
			<li onclick="goTo('4500up');"><span class="summary-alt">4.500 m</span>Tapete do Alladin</li>
			<li onclick="goTo('2up');"><span class="summary-alt">1,8 m</span>Fausto Silva</li>
			<li onclick="goTo('0');"><span class="summary-alt">0 m</span>Nível do mar</li>
			<li onclick="goTo('3810down');"><span class="summary-alt">-3.810 m</span>Titanic</li>
			<li onclick="goTo('10898down');"><span class="summary-alt">-10.994 m</span>Fossa das Marianas</li>
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

		<span class="mark mark-sign meter-3810down">-3.810 m</span>

		<span class="mark mark-sign meter-10994down">-10.994 m</span>

	</div>

	<div class="deep deep-image" onclick="inactiveAll();">
		<div class="deep-image-8k"></div>
		<div class="deep-image-5k"></div>
		<div class="deep-image-2k"></div>
		<div class="deep-image-0"></div>
	</div>

	<div class="deep deep-text">
		<div class="meter-10000up three-third">
			A estratosfera, na verdade, pode começar em altitudes tão altas quanto 20km, se na altura do equador ou tão baixas quanto 7km, se perto dos pólos. É comum aviões circularem acima desta altitude por conta de sua quase total ausência de vento e nuvens, garantindo mais estabilidade de vôo. Abaixo da estratosfera, começa a <b>troposfera</b>, onde ocorrem todos os tipos de eventos climáticos: chuvas, relâmpagos, ventos, músicas do Bob Dylan...
			<span class="call-next"><a href="javascript:goTo('9200up');" class="next">Balão de festa &gt;&gt;</a></span>
		</div>

		<div class="meter-9200up two-third" onclick="select('9200up');">
			Quando a gente solta um balão de festa, daqueles de gás hélio, qual altura ele chega?
			Se ele estiver propriamente cheio, é possível que ele chegue até cerca de 9000 metros, quando o ar se torna tão rarefeito que a pressão externa do balão cai muito mais do que a interna e ele estoura.<br/>
			Balões metereológicos, feitos para não estourar com a diferença de pressão, páram de subir quando a densidade da atmosfera se equipara à densidade do gás, o que ocorre a aproximadamente 32 km de altura.<br/>
			<span class="call-next"><a href="javascript:goTo('8848up');" class="next">Monte Everest &gt;&gt;</a></span>
		</div>

		<div class="meter-8848up one-third" onclick="select('8848up');">
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
			No dia 20 de abril de 2008, um domingo, o padre gaúcho Adelir Antônio de Carli subia aos céus sendo levado por mil balões de hélio. Sua idéia era partir de Paranaguá, no Paraná, rumo a Dourados, no Mato Grosso do Sul. Seu plano de vôo era (de acordo com o que ele mesmo dizia) baseado na “<i>vontade de Deus</i>”. A hipótese mais provável é que ele tenha caído nas águas de Santa Catarina, numa guinada de 180° do mapa direcional geográfico, um exemplo prático do baixo funcionamento da navegação aleatória divina. Seu corpo foi encontrado no Rio de Janeiro em 3 de julho, mostrando que Deus errou o percurso tanto com o padre morto quanto com ele vivo.<br/>
			Antes disso, em 13 de janeiro daquele ano, em um vôo teste, o padre usou 500 balões para decolar de Ampére, no Paraná e pousar em San Antonio, na Argentina, em um vôo que atingiu 5337 metros de altura. É plausível que, em sua última viagem, enquanto ligava para os bombeiros pedindo ajuda para usar o GPS, o padre estivesse em uma altitude similar.<br/>
			<span class="call-next"><a href="javascript:goTo('5895up');" class="next">Kilimanjaro &gt;&gt;</a></span>
		</div>

		<div class="meter-4500up" onclick="select('4500up');">
			Altura de vôo do tapete do Alladin (de acordo <a href="”http://nrt.paulovelho.com.br/a-whole-new-world/" target="_blank">com este texto aqui</a>)
		</div>

		<div class="meter-1500up">
			Pedra do Reino (de acordo <a href="http://nrt.paulovelho.com.br/reino-de-mufasa/" target="_blank">com este texto aqui</a>)
		</div>

		<div class="meter-524up three-third" onclick="select('524up');">
			Em 9 de julho de 1958, um tsunami atingiu a baía de Lituya, no Alaska. A onda de 524 metros é a maior já registrada (nos tempos modernos, sem contar aquela gerada pelo meteoro que matou os dinossauros) e matou um total de 2 pescadores.
		</div>

		<div class="meter-24up three-third" onclick="select('24up');">
			O surfista brasileiro Rodrigo Koxa entrou para o Guinness Book ao surfar uma onda de 24,4 metros em 08 de novembro de 2017 na Vila de Nazaré, em Leiria, Portugal. <a href="https://www.youtube.com/watch?v=V8d1VVTUmfk" target="_blank">Tem vídeo</a>.
		</div>

		<div class="meter-2up one-third" onclick="select('2up');">
			A altitude do Faustão ao nível do mar seria de 1,8 metros. Seria mais ou menos assim que o veríamos em comparação ao Monte Everest. Isso antes dele começar a crescer, evidentemente (<a href="http://nrt.paulovelho.com.br/o-loco-bicho-olha-o-tamanho-dessa-fera/" target="_blank">ver aqui</a>). Um pouco mais complexo é o conceito de “nível do mar”. E quando a maré sobe, o nível do mar muda? Se a Antartica derreter e o nível do mar subir, vamos ter que recalcular todas as altitudes?<br/>
			Vamos lá: O MSL (para <i>Mean Sea Level</i>, ou <i>Nível Médio do Mar</i> ou melhor ainda <i>Nível do Mar Malvado</i>) é o valor utilizado para saber a altitude média do mar em determinado ponto. A forma padrão de cálculo do nível do mar é a média da medição horária da altura da água em um determinado ponto durante 19 anos. Se você mora em Santos, mede aí e conta pra gente seus resultados.<br/>
			Assim, o nível do mar não é o mesmo em todos os lugares do mundo. Ele varia bastante, podendo oscilar entre 80 metros pra cima ou 100 metros pra baixo, dependendo do lugar. A partir dessas medições, foi gerado um “<i>geoid</i>”, que é um mapa da terra com a altura média dos oceanos sem contar a variação por conta de ventos e outras influências - apenas de acordo com a gravidade e rotação da terra. O modelo de uso atual é o WGS84 (para <i>World Geodetic System</i> e 1984 sendo o ano de seu estabelecimento, tendo revisões em 1996 e 2004). As altitudes são medidas de acordo com o nível do mar base definido por esse modelo.<br/>
			Mas e com o derretimento das calotas polares e o aumento dos oceanos? O Everest está diminuindo? A surpreendente resposta é “muito pelo contrário”: Enquanto os oceanos estão tendo um aumento de aproximadamente 3.2mm por ano, o Everest segue crescendo ainda mais, cerca de 4mm por ano. Isso porque a placa tectônica indiana segue empurrando a tibetana e movendo a montanha pra cima.
		</div>

		<div class="meter-115down one-third" onclick="select('115down');">
			Eurostar tunnel tunnel eurostar<br/>
			euro<br/>
			Eurostar tunnel tunnel eurostar<br/>
			euro<br/>
			euro euro<br/>
			Eurostar tunnel tunnel eurostar<br/>
		</div>

		<div class="meter-253down three-third" onclick="select('253down');">
			Mergulho livre mais profundo da história
		</div>

		<div class="meter-3810down">
			Titanic
		</div>

		<div class="meter-10898down">
			James Cameron
		</div>
	</div>
</div>
