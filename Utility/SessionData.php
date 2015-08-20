<?php

namespace KONEK\OemproBundle\Utility;

use Symfony\Component\HttpFoundation\Session\Session;


class SessionData
{
    /**
     *
     * @var Session Notre abstraction de session pour Oempro, ne correspond pas à 
     *              la session du browser
     * 
     */
    private static $_sessionData;
    
    private $_session;
    
    
    /**
     * 
     * @return String l'URL de l'api
     * 
     */
    private $url = "http://oempro1.eraidkonek.com/api.php?"; 
    
    /**
     *
     * @var String Le format de réponse  
     * 
     */
    private $responseFormat = "JSON";
  
    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
        $this->_session = new Session();
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
    
    /**
     * 
     * @return Session la session en cours
     * 
     */
    public static function getSession()
    {
        if( !isset(self::$_sessionData)){
            self::$_sessionData = new self();
            
        }
        //echo static::$_sessionData->logged;
        return self::$_sessionData;
    }
    
    // Pour vérifier s'il y a une connexion
    public function isLogged()
    {
        return $this->_session->get('logged', false);        
    }
    
    /**
     * Mise du logged a true
     */
    public function setLogged()
    {
        $this->_session->set('logged', true);
    }
    
    /**
     * mise du logged a false
     * 
     */
    public function unsetLogged()
    {
        $this->_session->set('logged', false);   
    }
    
    /**
     * 
     * @return String Retourne l'adresse URL de l'api d'oempro
     * 
     */
    public function getUrl()
    {
        if($this->isLogged()){
            return $this->url."SessionID=".$this->getSsId().'&'."ResponseFormat=".$this->getResponseFormat().'&';
        }
        
        return $this->url."ResponseFormat=".$this->getResponseFormat().'&';
    }
    
    /**
     * 
     * @return String Le type de réponse en string
     * 
     */
    public function getResponseFormat() 
    {
        return $this->responseFormat;        
    }
    
    /**
     * 
     * @param String $fullUrl l'url de l'action de l'APi, est obtenu de part les classes
     * @return une réponse dans le format spécifié dans ResponseFormat
     * 
     */
    public function getResponse($fullUrl) {
        $arrContextOptions = array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $fullUrl = $this->getUrl().$fullUrl;
        $response = file_get_contents($fullUrl, false, stream_context_create($arrContextOptions) );
        return json_decode($response);
    }
    
    public function getSsId()
    {
        return $this->_session->get('ssId', 0);   
    }
    
    public function setSsId($ssId)
    {
        $this->_session->set('ssId', $ssId);
    }
    
    
}


