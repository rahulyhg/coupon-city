<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of merchant_model
 *
 * @author kaso
 */
class Merchant_information_model extends MY_Model {

    public $_table = 'merchants_informations';
    public $protected_attributes = array('id');
    public $belongs_to = array('merchant' => array('model' => 'merchant_model'));

    //public $has_many = array('comments' => array('model' => 'model_comments'));
    //put your code here
}