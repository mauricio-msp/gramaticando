<?php
class Url {
    /**
     * @var array 
     */
    private $url;
    
    /**
     * __construct
     * Inicializa a array $url que conterá os valores passados pela URL 
     */
    public function __construct() {
        
        /** Checa se a url existe e é válida */
        if(isset($_GET['url']) && is_string($_GET['url'])){
            /** Gera uma array dividindo a string pela / */
            $this->url = explode('/', $_GET['url']);
        }else{
            /** Inicializa apenas com o login */
            $this->url = array('login');
        }
    }
    
    /**
     * Retorna uma instância única de uma classe.
     * @staticvar Singleton $instance A instância única dessa classe.
     * @return Singleton A Instância única.
     */
    public static function getInstance()
    {
        /** Inicializa a var instance e retorna */
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }
    
    /**
     * getURL
     * Retorna o valor da url na posição indicada no parametro 
     * @param int
     * @return string
     * @throws UrlException
     */
    public function getURL($posicao){
        /** Verifica se a posição é valida */
        if(is_int($posicao) && count($this->url) > $posicao && $posicao >= 0 ){
            /** Retorna a posição solicitada */
            return $this->url[$posicao];
        }else{
            /** Gera uma nova exceção caso a posição seja inválida */
            throw new UrlException("A posição de URL inválida", 121);
        }
    }
    
    /**
     * posicaoExiste
     * Retorna true caso a posicao exista na URL
     * @param int
     * @return string
     */
    public function posicaoExiste($posicao){
        /** Verifica se a posição é valida */
        if(is_int($posicao) && count($this->url) > $posicao && $posicao >= 0 ){
            return true;
        }else{
            return false;
        }
    }


    /**
     * getPage
     * Retorna parametro que representa uma pagina valida
     * @param int
     * @return string
     * @throws UrlException
     */
    public function getPage($pos = 1){
        $countPos = 1;
        foreach($this->url as $url){
            if(file_exists("pages/pg{$url}.php")){
                if($countPos < $pos){
                    $countPos++;
                }else{
                    return "pages/pg{$url}.php";
                }
            }
        }
        throw  new UrlException("URL inválida", 122);
    }
    
    
    /**
     * qtdURL
     * Retorna a quantidade de itens na URL
     * @return int
     */
    
    public function qtdURL(){
        return count($this->url);
    }
    
}