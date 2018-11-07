<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class phoneCRUD extends CI_Controller {


   public $PhoneCRUD;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('PhoneCRUDModel');


      $this->PhoneCRUD = new PhoneCRUDModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->PhoneCRUD->get_PhoneCRUD();


       $this->load->view('theme/header');       
       $this->load->view('phoneCRUD/list',$data);
       $this->load->view('theme/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $phone = $this->phoneCRUD->find_phone($id);


      $this->load->view('theme/header');
      $this->load->view('phoneCRUD/show',array('phone'=>$phone));
      $this->load->view('theme/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $this->load->view('theme/header');
      $this->load->view('phoneCRUD/create');
      $this->load->view('theme/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('id', 'Cedula', 'required');
        $this->form_validation->set_rules('name', 'Nombre', 'required');
		$this->form_validation->set_rules('lastname', 'Apellido', 'required');
		$this->form_validation->set_rules('phone', 'Telefono', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('phoneCRUD/create'));
        }else{
           $this->phoneCRUD->insert_phone();
           redirect(base_url('phoneCRUD'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $phone = $this->phoneCRUD->find_phone($id);


       $this->load->view('theme/header');
       $this->load->view('phoneCRUD/edit',array('phone'=>$phone));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $this->form_validation->set_rules('id', 'Cedula', 'required');
        $this->form_validation->set_rules('name', 'Nombre', 'required');
		$this->form_validation->set_rules('lastname', 'Apellido', 'required');
		$this->form_validation->set_rules('phone', 'Telefono', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('phoneCRUD/edit/'.$id));
        }else{ 
          $this->itemCRUD->update_phone($id);
          redirect(base_url('phoneCRUD'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $phone = $this->phoneCRUD->delete_phone($id);
       redirect(base_url('phoneCRUD'));
   }
}
