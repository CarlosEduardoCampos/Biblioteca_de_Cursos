<?php 
	//Declara parametros
	$hierarquia = array
	(
		//Inicio: CEO
		array
		(
			'nome_cargo' => 'CEO',
			'subordinados' => array
			(
				//Inicio: Diretor Comercial
				array
				(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array
					(
						//Inicio: Gerente de Vendas
						array
						(
							'nome_cargo' => 'Gerente de Vendas'
						),
						//Termino: Gerente de Vendas
					)
				),
				//Termino: Diretor Comercial

				//Inicio: Diretor Financeiro
				array
				(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array
					(
						//Inicio: Gerente de Contas a Pagar
						array
						(
							'nome_cargo' => 'Gerente de Contas a Pagar',
							'subordinados' => array 
							(
								//Inicio: Gerente de Supervisor de Pagamentos
								array
								(
									'nome_cargo' => 'Supervisor de Pagamentos'
								)
								//Inicio: Gerente de Supervisor de Pagamentos
							)
						),
						//Termino: Gerente de Contas a Pagar

						//Inicio: Gerente de Compras
						array
						(
							'nome_cargo' => 'Gerente de Compras',
							'subordinados' => array 
							(
								//Inicio: Supervisor de suplementos
								array 
								(
									'nome_cargo' => 'Supervisor de Suplementos'
								)
								//Termino: Supervisor de suplementos
							)
						)
						//Termino: Gerente de Compras
					)
				)
				//Termino: Diretor Financeiro
			)
		)
		//Termino: CEO
	);

	//Cria função
	function exibe($cargos)
	{
		$html = '<ul>';
		//Percorre array
		foreach ($cargos as $cargo)
		{	
			$html .= '<li>';
			$html .= $cargo['nome_cargo'];

			//count($variavel['posição array']) conta os elementos no array
			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0)
			{
				$html .= exibe($cargo['subordinados']);
			}

			$html .= '</li>';
		}
		$html .= '</ul>';
		//
		return $html;
	}

	//Chama função
	echo exibe($hierarquia);
?>