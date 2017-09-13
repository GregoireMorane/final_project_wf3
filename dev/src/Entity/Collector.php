<?php
/**
 * Description of Collecteur
 *
 * @author ghmor
 */
namespace Entity;
class Collector
{
    const STATUS_COLLECTEUR = 'collector';
    const STATUS_ADMIN = 'admin';
    
    /**
     *
     * @var int
     */
    private $idcollector;
    /**
     *
     * @var string
     */
    private $lastname;
    /**
     *
     * @var string
     */
    private $firstname;
    /**
     *
     * @var string
     */
    private $phone_number;
    /**
     *
     * @var string
     */
    private $email;
    /**
     *
     * @var string
     */
    private $status;
    /**
     *
     * @var string
     */
    private $address;
    /**
     *
     * @var string
     */
    private $city;
    /**
     *
     * @var string
     */
    private $postal_code;
    
    //GETTERS
    function getIdcollector() {
        return $this->idcollector;
    }
    function getLastname() {
        return $this->lastname;
    }
    function getFirstname() {
        return $this->firstname;
    }
    function getPhoneNumber() {
        return $this->phone_number;
    }
    function getEmail() {
        return $this->email;
    }
    function getStatus() {
        return $this->status;
    }
    function getAddress() {
        return $this->address;
    }
    function getCity() {
        return $this->city;
    }
    public function getFullName(){
        return $this->firstname . ' ' . $this->lastname;
    }

    //SETTERS
    function getPostalCode() {
        return $this->postal_code;
    }
    function setIdcollector($idcollector) {
        $this->idcollector = $idcollector;
    }
    function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    function setPhoneNumber($phone_number) {
        $this->phone_number = $phone_number;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setStatus($status) {
        if (!in_array($status, [self::STATUS_COLLECTOR, self::STATUS_ADMIN])) {
            throw new \UnexpectedValueException('Unrecognized status value');
        }
        $this->status = $status;
        return $this;
    }
    function setAddress($address) {
        $this->address = $address;
    }
    function setCity($city) {
        $this->city = $city;
    }
    function setPostalCode($postal_code) {
        $this->postal_code = $postal_code;
    }
}
