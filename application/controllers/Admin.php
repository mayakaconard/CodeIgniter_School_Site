<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
             public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Admin_model'));
    }

	public function index()
	{
		$this->load->view('login');
	}
    /* ADMINISTRATION DASHBOARD */
    public function Dashboard()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin_inc/footer');
        }
        else{
            redirect('Admin/index');
        }
    }
    /* ADMINISTRATION MANAGE NEWS AND UPCOMING EVENTS FOR THE SITE */
      public function News()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['news']=$this->Admin_model->get_news();
        $data['events']=$this->Admin_model->get_events();
        //$data['delete_news']=$this->Admin_model->delete_news($id);
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/news',$data);
        $this->load->view('admin_inc/footer');
        }
         else{
            redirect('Admin/index');
        }

    }
     /* ADMINISTRATION MANAGE SLIDER AND SCHOOL PHYSICAL FEATURES */
      public function Update_images()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['slider']=$this->Admin_model->update_slider();
        $data['facility']=$this->Admin_model->get_facilities();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/images_update',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }
    /* ADMINISTRATION MANAGE TEACHERS */
      public function Teachers()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['teacher']=$this->Admin_model->get_teachers();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/teachers',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }
     /* DIRECTOR OF DEPARTMENTS */
      public function Directors()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['teacher']=$this->Admin_model->get_teachers();
        $data['department']=$this->Admin_model->get_departments();
        $data['directors']=$this->Admin_model->get_directors();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/directors',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }
     /* BOM MEMBERS */
      public function Board()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['board']=$this->Admin_model->get_board();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/board',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }
     /* PTA MEMBERS */
      public function PTA()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['pta']=$this->Admin_model->get_PTA();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/pta',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }
     /* STUDENT LEADERS */
      public function Student_leaders()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['students']=$this->Admin_model->get_students();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/student_leaders',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }
     /* ALUMINI OF THE SCHOOL */
      public function Alumini()
    {
        if ($this->session->userdata('is_logged_in')) {
        $data['admin']=$this->Admin_model->get_admin($this->session->userdata('username'));
        $data['alumini']=$this->Admin_model->get_alumini();
        $this->load->view('admin_inc/header');
        $this->load->view('admin_inc/sidebar',$data);
        $this->load->view('admin/alumini',$data);
        $this->load->view('admin_inc/footer');
         }
        else{
            redirect('Admin/index');
        }
    }

     /*========================================== ADDING INFORMATION TO THE DATABASE FROM THE DASHBOARD============================================================== */
     /* INSERT NEWS TO DATABASE */
      public function Insert_news()
    {
        if(isset($_POST['save']))
        {
        $file_name='photo';
        $photo=$this->upload_photo($file_name);
            $params=array(
            'title'=>$this->input->post('title'),
            'news'=>$this->input->post('news'),
            'photo'=>$photo
            );
            $news=$this->Admin_model->Insert_news($params);
             if($news)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">News Captured Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');

            }
        }

    }
        /* INSERT EVENYS TO DATABASE */
      public function Insert_events()
    {
        if(isset($_POST['save']))
        {
            $params=array(
            'subject'=>$this->input->post('subject'),
            'message'=>$this->input->post('event'),
            'dated'=>$this->input->post('date'),
            );
            $events=$this->Admin_model->Insert_events($params);
             if($events)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Event Captured Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');

            }
        }

    }

    /* INSERT NEWS TO DATABASE */
      public function Slider()
    {
        if(isset($_POST['save']))
        {
        $file_name='photo';
        $category=1;
        $photo=$this->upload_photo($file_name);
            $params=array(
            'photo'=>$photo,
            'category_id'=>$category,
            'description'=>$this->input->post('description'),


            );
            $news=$this->Admin_model->Slider($params);
             if($news)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Slider Captured Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
        }

    }

     /* INSERT PHYSICAL FACILITIES */
      public function Facilities()
    {
        if(isset($_POST['save']))
        {
        $file_name='photo';
        $category=2;
        $photo=$this->upload_photo($file_name);
            $params=array(
            'photo'=>$photo,
            'category_id'=>$category,
            'description'=>$this->input->post('description'),


            );
            $news=$this->Admin_model->Facilities($params);
             if($news)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Content Captured Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
        }

    }

         /* INSERT TEACHERS */
      public function Add_teacher()
    {
        if(isset($_POST['save']))
        {
        $file_name='passport';
        $category=2;
        $photo=$this->upload_photo($file_name);
            $params=array(

            'title'=>$this->input->post('title'),
            'first_name'=>$this->input->post('fname'),
            'middle_name'=>$this->input->post('mname'),
            'surname'=>$this->input->post('surname'),
            'combination'=>$this->input->post('combination'),
            'passport'=>$photo,
            'message'=>$this->input->post('message')
            );
            $result=$this->Admin_model->Add_teacher($params);
             if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Teacher details Captured Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Teachers');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Teachers');

            }
        }
    }

             /* INSERT Director of department */
      public function Add_director()
    {
        if(isset($_POST['save']))
        {

            $category=2;
            $params=array(
            'teacher'=>$this->input->post('teacher'),
            'department'=>$this->input->post('department'),
            'about'=>$this->input->post('about'),
            'objectives'=>$this->input->post('objectives')
            );
            $result=$this->Admin_model->Add_director($params);
             if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Director details Captured Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Directors');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Directors');

            }
        }
    }
         /* INSERT STUDENT LEADERS */
      public function Add_leader()
    {
        if(isset($_POST['save']))
        {
        $file_name='passport';
        $category=2;
        $photo=$this->upload_photo($file_name);
            $params=array(
            'first_name'=>$this->input->post('fname'),
            'middle_name'=>$this->input->post('mname'),
            'surname'=>$this->input->post('surname'),
            'level'=>$this->input->post('level'),
            'position'=>$this->input->post('position'),
            'image'=>$photo,
            'message'=>$this->input->post('message')
            );
            $result=$this->Admin_model->Add_leader($params);
             if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Student leader Added Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');

            }
        }
    }

         /* INSERT BOM MEMBER */
      public function Add_bom()
    {
        if(isset($_POST['save']))
        {
        $file_name='passport';
        $category=2;
        $photo=$this->upload_photo($file_name);
            $params=array(
            'title'=>$this->input->post('title'),
            'first_name'=>$this->input->post('fname'),
            'middle_name'=>$this->input->post('mname'),
            'surname'=>$this->input->post('surname'),
            'position'=>$this->input->post('position'),
            'pass'=>$photo,
            'message'=>$this->input->post('message')
            );
            $result=$this->Admin_model->Add_bom($params);
             if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Board Member Added Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');

            }
        }
    }

         /* INSERT PTA MEMBER */
      public function Add_PTA()
    {
        if(isset($_POST['save']))
        {
        $file_name='passport';
        $category=2;
        $photo=$this->upload_photo($file_name);
            $params=array(
            'title'=>$this->input->post('title'),
            'first_name'=>$this->input->post('fname'),
            'middle_name'=>$this->input->post('mname'),
            'surname'=>$this->input->post('surname'),
            'position'=>$this->input->post('position'),
            'image'=>$photo,
            'message'=>$this->input->post('message')
            );
            $result=$this->Admin_model->Add_PTA($params);
             if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">PTA Member Added Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');

            }
        }
    }
    /* UPLOAD PHOTO/PASSPORT */
      public function upload_photo($passport)
    {
        $field_name = $passport;
        $config['upload_path'] = 'assets/news/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '3000';
        $config['max_height'] = '2900';
        $config['encrypt_name'] = true;

       // $this->load->library('upload',$config);
         $this->upload->initialize($config);
        if (!$this->upload->do_upload($field_name))
        {
          $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
        }
         else {
            $file_data = $this->upload->data();
            $filename = $file_data['file_name'];
            return $filename;
        }

    }

    /* =============================== DATA FROM MANIPULATION ============================================ */
     /* DELETE NEWS */
     public function delete_news($id)
     {
         $result=$this->Admin_model->delete_news($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">News  Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');

            }
     }

      /* UPDATE NEWS */
     public function update_news($id)
     {
        $params=array(
        'title'=>$this->input->post('title'),
        'news'=>$this->input->post('news'),
        );
         $result=$this->Admin_model->update_news($id,$params);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">News  Successfully Updated.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');

            }
     }

          /* DELETE EVENTS */
     public function delete_events($id)
     {
         $result=$this->Admin_model->delete_events($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Event  Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');

            }
     }

      /* UPDATE EVENTS */
     public function update_events($id)
     {
        $params=array(
        'subject'=>$this->input->post('subject'),
        'message'=>$this->input->post('message'),
        );
         $result=$this->Admin_model->update_events($id,$params);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Event  Successfully Updated.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/News');

            }
     }

          /* DELETE SLIDER */
     public function delete_slider($id)
     {
         $result=$this->Admin_model->delete_slider($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Slider  Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
     }

      /* UPDATE SLIDER*/
     public function update_slide($id)
     {
        $params=array(
        'description'=>$this->input->post('description'),
        );
         $result=$this->Admin_model->update_slide($id,$params);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Facility  Successfully Updated.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
     }
           /* DELETE FACILITY */
     public function delete_facility($id)
     {
         $result=$this->Admin_model->delete_facility($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Facility Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
     }

      /* UPDATE&nbsp;FACILITY */
     public function update_facility($id)
     {
        $params=array(
        'description'=>$this->input->post('description'),
        );
         $result=$this->Admin_model->update_facility($id,$params);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Facility  Successfully Updated.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
     }

            /* DELETE Director */
     public function delete_director($id)
     {
         $result=$this->Admin_model->delete_director($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Director Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Update_images');

            }
     }

      /* UPDATE DIRECTOR */
     public function update_director($id)
     {
        $params=array(
        'department'=>$this->input->post('department'),
        );
         $result=$this->Admin_model->update_director($id,$params);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Director  Successfully Updated.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Directors');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Directors');

            }
     }

            /* DELETE TEACHER */
     public function delete_teacher($id)
     {
         $result=$this->Admin_model->delete_teacher($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Teacher Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Teachers');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Teachers');

            }
     }

      /* DELETE STUDENT*/
     public function delete_student($id)
     {
         $result=$this->Admin_model->delete_student($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Student Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Student_leaders');

            }
     }

     /* DELETE BOM*/
     public function delete_board($id)
     {
         $result=$this->Admin_model->delete_board($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Board Member Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Board');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Board');

            }
     }
      /* DELETE PTA*/
     public function delete_PTA($id)
     {
         $result=$this->Admin_model->delete_PTA($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">PTA Member Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/PTA');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/PTA');

            }
     }
     /* DELETE ALUMINI*/
     public function delete_alumini($id)
     {
         $result=$this->Admin_model->delete_alumini($id);
          if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Alumini Successfully Deleted.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Alumini');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Admin/Alumini');

            }
     }

     /* ADMIN LOGIN FUNCTION */
    public function Login()
    {
        if(isset($_POST['btn-login']))
        {
            $params=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')
            );
        }
        $result=$this->Admin_model->Login($params);
        if($result)
        {
                 $session_data1 = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => 1
                    );
                    echo "success";
                    $this->session->set_userdata($session_data1);
                    redirect('Admin/Dashboard');


        }
        else
        {
         $this->session->set_flashdata('error', '<div class="alert alert-danger">Username or Password is incorrect!.<button class="close" data-dismiss="alert" >&times;</button></div>');
         redirect('Admin/index');
        }

    }

        // =============LOGOUT FROM THE SYSTEM BY ADMIN========================
     function logout()
    {
        $this->session->unset_userdata('is_logged_in');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('Admin/index');
    }

}
