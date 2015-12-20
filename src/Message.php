<?php
namespace Nats;

/**
 * Message Class.
 */
class Message
{
    /**
     * Message Subject.
     *
     * @var string
     */
    private $subject;

    /**
     * Message Body.
     *
     * @var string
     */
    private $body;

    /**
     * Message Ssid.
     *
     * @var string
     */
    private $sid;

    /**
     * Message related connection.
     *
     * @var string
     */
    private $conn;

    /**
     * Message constructor.
     *
     * @param string     $subject Message subject.
     * @param string     $body    Message body.
     * @param string     $sid     Message Sid.
     * @param Connection $conn    Message Connection.
     */
    public function __construct(string $subject, string $body, string $sid, Connection $conn)
    {
        $this->setSubject($subject);
        $this->setBody($body);
        $this->setSid($sid);
        $this->setConn($conn);
    }

    /**
     * Set subject.
     *
     * @param string $subject Subject.
     *
     * @return $this
     */
    public function setSubject(string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body.
     *
     * @param string $body Body.
     *
     * @return $this
     */
    public function setBody(string $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set Ssid.
     *
     * @param string $sid Ssid.
     *
     * @return $this
     */
    public function setSid(string $sid)
    {
        $this->sid = $sid;
        return $this;
    }

    /**
     * Get Ssid.
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * String representation of a message.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getBody();
    }

    /**
     * Set Conn.
     *
     * @param Connection $conn Connection.
     *
     * @return $this
     */
    public function setConn(Connection $conn)
    {
        $this->conn = $conn;
        return $this;
    }

    /**
     * Get Conn.
     *
     * @return string
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * Allows you reply the message with a specific body.
     *
     * @param string $body Body to be set.
     *
     * @return void
     */
    public function reply(string $body)
    {
        $this->getConn()->publish(
            $this->getSubject(),
            $body
        );
    }
}
