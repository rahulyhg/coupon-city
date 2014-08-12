<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'Test Frame work';
    }

    public function merchant_model_post() {
        $data = array('email' => 'akason47@live.com', 'password' => 'johnbull');
        echo $this->curl->simple_post('api/merchant/index/', $data);
    }

    public function merchant_model_put($id = NULL) {
        $data = array('email' => 'akason47@live.com', 'password' => 'johnbull');
        echo $this->curl->simple_post('api/merchant/index/' . $id, $data);
    }

    public function merchant_model_get($id = NULL) {
        echo $this->curl->simple_get('api/merchant/index/' . $id);
    }

    public function merchant_model_delete($id = NULL) {
        echo $this->curl->simple_delete('api/merchant/index/' . $id);
    }

    public function test_coupon_gen() {
        $this->load->model('coupon_model', 'coupon');
        $this->coupon->test_encrpt();
    }

    public function email() {
        $this->load->library('mailer');
        echo $this->mailer->send_mail();
    }

    public function featured_coupons() {
        $this->load->model('featured_coupon_model');
        $featured = $this->featured_coupon_model
                ->with('coupon')
                ->with('coupon_medias')
                ->limit(3, 0)
                ->get_all();
        print_r($featured);

        foreach ($featured as $row) {
            echo '<br/> <br/>';
            print_r($row->coupon);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */