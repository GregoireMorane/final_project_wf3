<?php
/**
 * Description of Client
 *
 * @author ghmor
 */
namespace Entity;
class Client
{   
    /**
     *
     * @var int 
     */
    private $id_client;
    /**
     *
     * @var int 
     */
    private $start_date_contract;
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
    private $password;
    /**
     *
     * @var int 
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
    private $billing_adress;
    /**
     *
     * @var string
     */
    private $postal_code;
    /**
     *
     * @var string
     */
    private $city;
    /**
     *
     * @var string
     */
    private $country;
    /**
     *
     * @var string
     */
    private $is_active;
    /**
     *
     * @var string
     */
    private $company;
    /**
     *
     * @var string
     */
    private $siret;
    
    //GETTERS
    public function getIdClient() {
        return $this->id_client;
    }
    public function getStartDateContract() {
        return $this->start_date_contract;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getPhoneNumber() {
        return $this->phone_number;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getBillingAdress() {
        return $this->billing_adress;
    }
    public function getPostalCode() {
        return $this->postal_code;
    }
    public function getCity() {
        return $this->city;
    }
    public function getCountry() {
        return $this->country;
    }
    public function getIsActive() {
        return $this->is_active;
    }
    public function getCompany() {
        return $this->company;
    }
    public function getSiret() {
        return $this->siret;
    }
    public function getFullName(){
        return $this->firstname . ' ' . $this->lastname;
    }
    
    //SETTERS
    public function setIdClient($id_client){
        $this->id_client = $id_client;
        return $this;
    }
    public function setStartDateContract($start_date_contract){
        $this->start_date_contract = $start_date_contract;
        return $this;
    }
    public function setLastname($lastname){
        $this->lastname = $lastname;
        return $this;
    }
    public function setFirstname($firstname){
        $this->firstname = $firstname;
        return $this;
    }
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
    public function setPhoneNumber($phone_number){
        $this->phone_number = $phone_number;
        return $this;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    public function setBillingAdress($billing_adress){
        $this->billing_adress = $billing_adress;
        return $this;
    }
    public function setPostalCode($postal_code){
        $this->postal_code = $postal_code;
        return $this;
    }
    public function setCity($city){
        $this->city = $city;
        return $this;
    }
    public function setCountry($country){
        $this->country = $country;
        return $this;
    }
    public function setIsActive($is_active){
        $this->is_active = $is_active;
        return $this;
    }
    public function setCompany($ompany){
        $this->company = $company;
        return $this;
    }
    public function setSiret($siret){
        $this->siret = $siret;
        return $this;
    }
}
