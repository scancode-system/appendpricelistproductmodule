<?php

return [
    'name' => 'AppendPriceListProduct', 
	'fields' => [],
	'sample' => [
		[
			'name' => 'price_list_*',
			'observation' => 'Preço tabelado. Dependendo de qual tabela de preço o cliente é vinculado, será aplicado o preço da tabela específica. Para configurar em qual tabela os preços serão aplicados, troque o (*) asterisco pelo nome da tabela. Caso queira adicionar mais tabelas de preço, criar uma nova coluna com o mesmo titulo, mas com um nome de tabela diferente',
			'sample_1' => '150.70',
			'filled' => false
		]
	]
];