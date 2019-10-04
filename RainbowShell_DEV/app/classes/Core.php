<?php 




require_once 'Database.php';

class Core extends Database{
	
	public function hash($senha){
		return md5($senha);
	}

	public function erro($erro){
		return '<div class="alert alert-danger">'.$erro.'</div>';;
	}

	public function sucesso($sucesso){
		return '<div class="alert alert-success">'.$sucesso.'</div>';;
	}

	public function imgUpload($diretorio, $imagemNome, $imagemTmp)
	{

		$resultado = array( 
			'status' => 0, 
			'message' => '' 
		);

		$imagemDiretorio = $_SERVER['DOCUMENT_ROOT'] . '/PIT/RainbowShell_DEV/' . $diretorio;

		if(isset($imagemNome)){ 

			if (!file_exists($imagemDiretorio)) {
				mkdir($imagemDiretorio, 0777, true);
			}

			$imagemNome = basename($imagemNome); 
			$imagemDiretorioFinal = $imagemDiretorio . $imagemNome; 
			$imagemTipo = pathinfo($imagemDiretorioFinal, PATHINFO_EXTENSION); 

			$diretorioInsert = $diretorio . $imagemNome;
			
			if(!file_exists($imagemDiretorioFinal))
			{
				if(move_uploaded_file($imagemTmp, $imagemDiretorioFinal)){ 
					$resultado = array( 
						'status' => 1, 
						'message' => 'Sucesso no upload da imagem!' ,
						'img' => $diretorioInsert
					);
				}else{ 
					$resultado = array( 
						'status' => 0, 
						'message' => 'Ocorreu algum erro, tente novamente!' 
					); 
				} 
			}
			else
			{
				$resultado = array( 
					'status' => 0, 
					'message' => 'Essa imagem já está em sua conta, tente outro nome!' 
				);
			}
		}
		
		return $resultado;
	}
}
?>