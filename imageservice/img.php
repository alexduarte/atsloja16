<?PHP

//Pega o ID do produto
$id  = $_GET['id' ];
// 192.168.2.232/loja16
$ipServidorPasta = $_GET['ipServidorPasta' ];
//Montando URL
$url = "$ipServidorPasta/images/products/$id";
//URL imagem
$url_image = $_GET['url_image'];
//Chave WS Prestashop
$key = $_GET['key'];


//Verificando se URL da Imagem é um caminho local.
//se for local apenas adiciona a url
if(!filter_var($url_image, FILTER_VALIDATE_URL))
  {
    $image = array('image' => '@' . $url_image . ';type=image/jpeg');
  }
else // se a URL for web, baixa o arquivo para a pasta Downloads, depois pega o caminho da imagem local no servidor.
  {


    //Iniciando o processo de Downloads de IMAGEM
    $url_download = $_GET['url_image'];
    // maximum execution time in seconds
    set_time_limit (24 * 60 * 60);
    
    
	
    $file = fopen ($url_download, "rb");
    if ($file) {
	//Passando o nome da pasta e o nome do arquivo para ser salvo
      $newf = fopen ("downloads/". basename($url_download), "wb");

      if ($newf)
      while(!feof($file)) {
        fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
      }
    }   

    if ($file) {
      fclose($file);
    }

    if ($newf) {
      fclose($newf);
    }    

    //Finalizando o processo de Downloads de IMAGEM  
    $url_img_local_servidor = __DIR__."/downloads/".pathinfo($url_image)['basename'];


    //Passando a URL local do servidor da Imagem que vai gravar na loja
    $image = array('image' => '@' . $url_img_local_servidor . ';type=image/jpeg');

}


//Processo de envio para LOJA
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);

//curl_setopt($ch, CURLOPT_PUT, true); // Un-commet to edit an image
//$arr = array('image' => '@' . $image.');
curl_setopt($ch, CURLOPT_USERPWD, $key . ':');
$result = curl_setopt($ch, CURLOPT_POSTFIELDS, $image);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    if (($result = curl_exec ($ch)))throw new Exception('curl_exec gerou um erro.' ); 
echo $result;
curl_exec($ch);
curl_close($ch);
echo "<br>";

    
//Verificar se a imagem foi enviada de um link da web, para deletar ela da pasta temp
if(filter_var($url_image, FILTER_VALIDATE_URL)){
    //Passando pasta e nome do arquivo para deletar
    if(unlink("downloads/". basename($url_download))){
        echo "Arquivo excluido com sucesso.";
    }
    else{
       echo "Não foi possível excluir o arquivo.";
   }
}

?>
