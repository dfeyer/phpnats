<?php

namespace Nats;

/**
 * StreamWrapper class.
 */
class StreamWrapper
{
    /**
     * Wrapper for stream_socket_client
     *
     * @param string  $address    Address to connect the socket.
     * @param integer $errno      Number of error.
     * @param string  $errstr     Description of error.
     * @param integer $timeout    Timeout.
     * @param integer $typeStream Type of stream.
     *
     * @return stream
     */
    public function getStreamSocketClient(string $address, int &$errno, string &$errstr, int $timeout, int $typeStream)
    {
        return stream_socket_client($address, $errno, $errstr, $timeout, $typeStream);
    }
    
    /**
     * Wrapper for stream_set_timeout
     *
     * @param mixed   $stream  Stream.
     * @param integer $seconds Seconds for timeout.
     *
     * @return boolean
     *
    */
    public function setStreamTimeout($stream, int $seconds)
    {
        return stream_set_timeout($stream, $seconds);
    }
}
