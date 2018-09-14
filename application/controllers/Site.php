<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
             public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Site_model'));
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

     /* THE INDEX PAGE */
	public function index()
	{   $data['slider']=$this->Site_model->update_slider();
        $data['facilities']=$this->Site_model->get_facilities();
        $data['news']=$this->Site_model->get_news();
        $data['department']=$this->Site_model->get_departments();
        $data['events']=$this->Site_model->get_events();
        //$data['get_quotes']=$this->Site_model->get_quotes();
		$this->load->view('inc/header',$data);
        $this->load->view('site/index',$data);
        $this->load->view('inc/footer');
	}

    /* ABOUT THE SCHOOL*/

    	public function About_us()
	{
	     $data['department']=$this->Site_model->get_departments();
		$this->load->view('inc/header',$data);
        $this->load->view('site/about_us');
        $this->load->view('inc/footer');
	}
    /* SCHOOL MISSION AND VISION */
    	public function Mission()
	{
	    $data['department']=$this->Site_model->get_departments();
		$this->load->view('inc/header',$data);
        $this->load->view('site/mission');
        $this->load->view('inc/footer');
	}

     /* SCHOOL LOCATION */
    	public function Location()
	{
	    $data['department']=$this->Site_model->get_departments();
		$this->load->view('inc/header',$data);
        $this->load->view('site/location',$data);
        $this->load->view('inc/footer');
	}

       /* SCHOOL ADMISSION */
    	public function Admission()
	{
	    $data['department']=$this->Site_model->get_departments();
		$this->load->view('inc/header',$data);
        $this->load->view('site/admission');
        $this->load->view('inc/footer');
	}

       /* SCHOOL BOARD OF MANAGEMENT */
    	public function Board()
	{
	    $data['department']=$this->Site_model->get_departments();
        $data['board']=$this->Site_model->get_board();
		$this->load->view('inc/header',$data);
        $this->load->view('site/bom');
        $this->load->view('inc/footer');
	}
     /* SCHOOL PTA MEMBERS */
     	public function PTA()
	{
	    $data['department']=$this->Site_model->get_departments();
        $data['pta']=$this->Site_model->get_PTA();
		$this->load->view('inc/header',$data);
        $this->load->view('site/pta',$data);
        $this->load->view('inc/footer');
	}

     /* SCHOOL PRINCIPAL */
     	public function Principal()
	{
	    $data['department']=$this->Site_model->get_departments();
		$this->load->view('inc/header',$data);
        $this->load->view('site/Principal');
        $this->load->view('inc/footer');
	}
     /* SCHOOL DEPUTY PRINCIPAL */
     	public function Deputy_Principal()
	{
	    $data['department']=$this->Site_model->get_departments();
		$this->load->view('inc/header',$data);
        $this->load->view('site/deputy');
        $this->load->view('inc/footer');
	}
      /* SCHOOL STUDENT LEADERS */
     	public function Student_leaders()
	{
        $data['department']=$this->Site_model->get_departments();
        $data['students']=$this->Site_model->get_students();
		$this->load->view('inc/header',$data);
        $this->load->view('site/student_leaders',$data);
        $this->load->view('inc/footer');
	}
        /* SCHOOL STUDENT LEADERS */
     	public function Alumini()
	{
        $data['department']=$this->Site_model->get_departments();
       /* $data['students']=$this->Site_model->get_students(); */
		$this->load->view('inc/header',$data);
        $this->load->view('site/alumini',$data);
        $this->load->view('inc/footer');
	}

    /* ======================================DEPARTMENTS-===================================================== */
    /* DIRECTOR OF STUDIES */
      public function Studies_director($id)
	{
        $data['department']=$this->Site_model->get_departments();
        $data['directors']=$this->Site_model->get_directors($id);
		$this->load->view('inc/header',$data);
        $this->load->view('site/director_of_studies',$data);
        $this->load->view('inc/footer');
	}

  /*  public function get_departments()
    {
        $data['department']=$this->Site_model->get_departments();
    }*/
    /* DIRECTOR MATHEMATICS DEPARTMENT */
      public function Mathematics_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/mathematics_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR SCIENCES DEPARTMENT */
      public function Sciences_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/sciences_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR LANGUAGES DEPARTMENT */
      public function languages_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/languages_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR HUMANITIES DEPARTMENT */
      public function Humanities_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/humanities_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR TECHNICALS DEPARTMENT */
      public function Technicals_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/technicals_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR GUIDANCE AND COUNSELLING DEPARTMENT */
      public function Guidance_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/guidance_department');
        $this->load->view('inc/footer');
	}
    /* DIRECTOR BOARDING DEPARTMENT */
      public function Boarding_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/boarding_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR ICT DEPARTMENT */
      public function ICT_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/ict_department');
        $this->load->view('inc/footer');
	}

    /* DIRECTOR GAMES AND SPORTS DEPARTMENT */
      public function Sports_director()
	{
		$this->load->view('inc/header');
        $this->load->view('site/sports_department');
        $this->load->view('inc/footer');
	}

    /* SCHOOL TEACHERS */
      public function Teachers()
	{
	    $data['teachers']=$this->Site_model->get_teachers();
        $data['department']=$this->Site_model->get_departments(); 
		$this->load->view('inc/header',$data);
        $this->load->view('site/teachers',$data);
        $this->load->view('inc/footer');
	}


    public function Alumini_registration()
    {
        if(isset($_POST['register']))
        {
        $params=array(
        'salutation'=>$this->input->post('salutation'),
        'fname'=>$this->input->post('fname'),
        'mname'=>$this->input->post('mname'),
        'lname'=>$this->input->post('lname'),
        'gender'=>$this->input->post('gender'),
        'idnumber'=>$this->input->post('idnumber'),
        'email'=>$this->input->post('email'),
        'mobile'=>$this->input->post('mobile'),
        'phone'=>$this->input->post('phone'),
        'postal'=>$this->input->post('postal'),
        'edulevel'=>$this->input->post('edulevel'),
        'country'=>$this->input->post('country')
        );
        }
        $result=$this->Site_model->Alumini_registration($params);
         if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Thank you for dear Alumini for Registering! Keep in touch for the upcoming events .<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/Alumini');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/Alumini');

            }
    }

     /* PAGE NOT FOUND */
      public function Error()
	{

        $this->load->view('404');

	}





  }