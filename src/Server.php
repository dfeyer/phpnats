<?php

namespace Nats;

/**
 * Server Class.
 */
class Server
{
    /**
     * Url.
     *
     * @var url
     */
    private $url;

    /**
     * isConnected.
     *
     * @var isConnected
     */
    private $isConnected = false;

    /**
     * Reconnects.
     *
     * @var recconects
     */
    private $reconnects = 0;

    /**
     * lastAttempt.
     *
     * @var lastAttempt
     */
    private $lastAttempt = null;

    /**
     * serverSocket.
     *
     * @var serverSocket
     */
    private $serverSocket = null;
   
    /**
     * Server constructor.
     *
     * @param string $url Url to connect.
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Getter for url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Getter for isConnected
     *
     * @return boolean
    */
    public function getIsConnected()
    {
        return $this->isConnected;
    }


    /**
     * Setter for isConnected
     *
     * @param boolean $isConnected Client connect to this server socket.
     *
     * @return void
     */
    public function setIsConnected($isConnected)
    {
        $this->isConnected = $isConnected;
    }

    /**
     * Setter for reconnects
     *
     * @param integer $reconnects Number of reconnexions.
     *
     * @return void
     */
    public function setReconnects($reconnects)
    {
        $this->reconnects = $reconnects;
    }

   /**
    * Setter for lastAttempt
    *
    * @param integer $lastAttempt Date for last attempt to connect.
    *
    * @return void
    */
    public function setLastAttemp($lastAttempt)
    {
        $this->lastAttempt = $lastAttempt;
    }

    /**
     * Getter for socket
     *
     * @return socket
     */
    public function getServerSocket()
    {
        return $this->serverSocket;
    }

    /**
    * Setter for serverSocket
    *
    * @param mixed $socket Socket with the connexion.
    *
    * @return void
    */
    public function setServerSocket($socket)
    {
        $this->serverSocket = $socket;
    }
}
