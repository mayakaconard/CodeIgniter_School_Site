<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model
{

          /*  UPDATE NEWS  */
    public function Insert_news($params)
    {

        $qry = $this->db->insert('news', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
      /*  UPDATE EVENTS  */
    public function Insert_events($params)
    {

        $qry = $this->db->insert('events', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }

       /*  UPDATE Slider  */
    public function Slider($params)
    {

        $qry = $this->db->insert('image_gallery', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }

       /*  UPDATE PHYSICAL FACILITIES  */
    public function Facilities($params)
    {

        $qry = $this->db->insert('image_gallery', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
      /*  ADD TEACHER  */
    public function Add_teacher($params)
    {

        $qry = $this->db->insert('teachers', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
      /*  ADD DIRECTOR  */
    public function Add_director($params)
    {

        $qry = $this->db->insert('department_directors', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
       /*  ADD STUDENT LEADER  */
    public function Add_leader($params)
    {

        $qry = $this->db->insert('student_leaders', $params);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
    /*  ADD BOM MEMBER  */
    public function Add_bom($params)
    {

            $qry = $this->db->insert('board_of_management', $params);
            if ($qry) {
                    return true;
            } else {
                    return false;
            }
    }
        /*  ADD PTA MEMBER  */
    public function Add_PTA($params)
    {

            $qry = $this->db->insert('pta_members', $params);
            if ($qry) {
                    return true;
            } else {
                    return false;
            }
    }




    /* ===================================GET DETAILS FROM DATABASE================================================================== */
    /* GET TEACHERS */
    public function get_teachers()
    {
        $this->db->select('*');
        $this->db->from('teachers');
        $query=$this->db->get();
        return $query->result_array();
    }

    /* GET DEPARTMENTS*/
    public function get_departments()
    {
        $this->db->select('*');
        $this->db->from('departments');
        $query=$this->db->get();
        return $query->result_array();
    }

     /* GET IMAGES FOR PYSICAL FACILITIES */
    public function get_facilities()
    {
        $this->db->select('*');
        $this->db->from('image_gallery');
        $this->db->where('category_id',2);
        $query=$this->db->get();
        return $query->result_array();
    }
     /* GET NEWS */
    public function get_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $query=$this->db->get();
        return $query->result_array();
    }

    /* GET STUDENT LEADERS */
    public function get_students()
    {
        $this->db->select('*');
        $this->db->from('student_leaders');
        $query=$this->db->get();
        return $query->result_array();
    }

     /* GET DEPARTMENT DIRECTORS*/
    public function get_directors()
    {
        $this->db->select('*');
        $this->db->from('department_directors d');
        $this->db->join('teachers t','t.id=d.teacher','inner');
        $this->db->join('departments p','p.dept_id=d.department');
        $query=$this->db->get();
        return $query->result_array();
    }

     /* GET EVENTS */
    public function get_events()
    {
        $this->db->select('*');
        $this->db->from('events');
        $query=$this->db->get();
        return $query->result_array();
    }
       /* GET IMAGES FOR SLIDER */
    public function update_slider()
    {
        $this->db->select('*');
        $this->db->from('image_gallery');
        $this->db->where('category_id',1);
        $query=$this->db->get();
        return $query->result_array();
    }
       /* GET PTA MEMBERS */
    public function get_PTA()
    {
        $this->db->select('*');
        $this->db->from('pta_members');
        $query=$this->db->get();
        return $query->result_array();
    }
         /* GET PTA BOARD */
    public function get_board()
    {
        $this->db->select('*');
        $this->db->from('board_of_management');
        $query=$this->db->get();
        return $query->result_array();
    }


           /* GET ALUMINI */
    public function get_alumini()
    {
        $this->db->select('*');
        $this->db->from('alumini');
        $query=$this->db->get();
        return $query->result_array();
    }

  /* =====================DATA MANIPULATION FUNCTIONS ---------DELETE---------------------- ====================================*/

  /* DELETE SELECTED  NEWS FROM DATABASE */
  public function delete_news($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('news');
      if($query)
      {
          return true;
      }
  }
   /* Update SELECTED  NEWS FROM DATABASE */
  public function update_news($id,$params)
  {
       $data = array(
           'title'=>$params['title'],
           'news'=>$params['news']
           );
    $this->db->where('id',$id);
    $query= $this->db->update('news',$data);
      if($query)
      {
          return true;
      }
  }


  /* DELETE SELECTED  events FROM DATABASE */
  public function delete_events($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('events');
      if($query)
      {
          return true;
      }
  }
   /* Update SELECTED  events FROM DATABASE */
  public function update_events($id,$params)
  {
       $data = array(
           'subject'=>$params['subject'],
           'message'=>$params['message']
           );
    $this->db->where('id',$id);
    $query= $this->db->update('events',$data);
      if($query)
      {
          return true;
      }
  }

    /* DELETE SELECTED  SLIDER FROM DATABASE */
  public function delete_slider($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('image_gallery');
      if($query)
      {
          return true;
      }
  }
   /* Update SELECTED  SLIDER FROM DATABASE */
  public function update_slide($id,$params)
  {
       $data = array(
           'description'=>$params['description']
           );
    $this->db->where('id',$id);
    $query= $this->db->update('image_gallery',$data);
      if($query)
      {
          return true;
      }
  }

    /* DELETE SELECTED  FACILITY FROM DATABASE */
  public function delete_facility($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('image_gallery');
      if($query)
      {
          return true;
      }
  }
   /* Update SELECTED  FACILITY FROM DATABASE */
  public function update_facility($id,$params)
  {
       $data = array(
           'description'=>$params['description']
           );
    $this->db->where('id',$id);
    $query= $this->db->update('image_gallery',$data);
      if($query)
      {
          return true;
      }
  }

      /* DELETE SELECTED DEPARTMENT  DIRECTOR FROM DATABASE */
  public function delete_director($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('department_directors');
      if($query)
      {
          return true;
      }
  }
   /* Update SELECTED  FACILITY FROM DATABASE */
  public function update_director($id,$params)
  {
       $data = array(
           'department'=>$params['department']
           );
    $this->db->where('id',$id);
    $query= $this->db->update('department_directors',$data);
      if($query)
      {
          return true;
      }
  }

        /* DELETE SELECTED TEACHER FROM DATABASE */
  public function delete_teacher($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('teachers');
      if($query)
      {
          return true;
      }
  }

    /* DELETE SELECTED STUDENT LEADER FROM DATABASE */
  public function delete_student($id)
  {
    $this->db->where('st_id',$id);
    $query= $this->db->delete('student_leaders');
      if($query)
      {
          return true;
      }
  }

  /* DELETE BOARD MEMBER FROM DATABASE */
  public function delete_board($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('board_of_management');
      if($query)
      {
          return true;
      }
  }

   /* DELETE PTA MEMBER FROM DATABASE */
  public function delete_PTA($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('pta_members');
      if($query)
      {
          return true;
      }
  }
     /* DELETE ALUMINI FROM DATABASE */
  public function delete_alumini($id)
  {
    $this->db->where('id',$id);
    $query= $this->db->delete('alumini');
      if($query)
      {
          return true;
      }
  }

  /* FUNCTION LOGIN */
  public function Login($params)
  {
    $data=array(
    'username'=>$params['username'],
    'password'=>$params['password']
    );
     $query = $this->db->get_where('admin', $data);
        if ($query->num_rows() == 1) {
            return $query->row('username');
        }
        else {
            return false;
        }
  }

  public function get_admin($username)
  {
     $data = array(
            'username' => $username
        );
        $qry = $this->db->get_where('admin', $data);
        if ($qry) {
            return $qry->result_array();
        }
  }





























 /*******************************GET STUDENT CLEARANCE DETAILS IN THE STUDENT DASHBOARD************************************************/

     public function getUserName($email)
    {
        $data = array(
            'email_address' => $email
        );
        $qry = $this->db->get_where('users', $data);
        if ($qry) {
            return $qry->result_array();
        }
    }

    //GET THE ACADEMIC DETAUILS OF A STUDENT AS PER HIS/HER SESSION
    /*****************************GET ACAADENIC DETAILS OF A STUDENT AS PER HIS/HER SESSION***********************************************/
    public function StudentDetails($user)
    {

        $this->db->select('*');
        $this->db->from('users u');
        $this->db->join('schools s','s.sch_id=u.school','left');
        $this->db->join('departments d','d.dept_id=u.department_id','left');
        $this->db->join('programmes p','p.prog_id=u.program');
        $this->db->where('u.email',$user);
        $query=$this->db->get();
        return $query;
    }



/*****************************GET THE REGNO OF THE CLEARING STUDENT***********************************************/
    function get_regnumber($email)
{   $sql="SELECT * FROM users WHERE email=?";
    $query=$this->db->query($sql,$email);
    if($query->num_rows()==1){
        return $query->row('reg_number');
    }
    else{
        return false;
    }
    //return $query->result_array();
}




/*****************************GET DEPARTMENTS CLEARED BY A STUDENT AS PER HIS/HER SESSION***********************************************/
    public function Departments_notclered($user)
    {

        $this->db->select('*');
        $this->db->from('section_arares a');
        $this->db->join('sections s','s.section_id=a.section_id','left');
       // $this->db->join('departments d','d.dept_id=a.department_id','left');
        $this->db->join('users u','u.user_id=a.student','left');
        $this->db->join('status t','t.status_id=a.status_id');
        $this->db->where('u.email',$user ,'a.status_id',2);
        $this->db->where('a.status_id',2);
        $query=$this->db->get();
        return $query;
    }

               //count Departments not cleared
       public function UnclearedSections($email)
       {
              $sql="SELECT section_arares.student,section_arares.status_id,users.email,users.user_id FROM section_arares,users
                    WHERE section_arares.student=users.user_id AND users.email=? AND section_arares.status_id=2";
              $query=$this->db->query($sql,$email);
              return $query->num_rows();
       }

    public function Check_Sections($user)
    {

        $this->db->select('*');
        $this->db->from('section_arares a');
        $this->db->join('users u','u.user_id=a.student');
        $this->db->where('u.email',$user);
        $this->db->where('a.status_id',2);
        $query=$this->db->get();
        $count=$query->num_rows();
       //$count=$this->db->count_all_results('section_arares');

            return $count;

    }

    //FUNCTION FOR PDF GENERATION USING THE MPDF LIBRARIES
    function print_sections()
{   $sql="SELECT * FROM sections";
    $query=$this->db->query($sql);
    return $query->result_array();
}
/*****************************INSERT SESSION DATA OF THE CLEARING STUDENT INTO THE CLEARANCE TABLE FOR CLEARANCE***********************************************/
public function Auto_Clearance($clearance)
{
    $qry = $this->db->insert('clearance', $clearance);
        if ($qry) {
            return true;
        } else {
            return false;
        }
}
/*****************************GET DETAILS OF THE CLEARING STUDENTS*************************************************************/
public function get_student($email)
{
    $this->db->select('*');
    $this->db->from('users u');
    $this->db->join('schools s','s.sch_id=u.school','left');
    $this->db->join('departments d','d.dept_id=u.department_id','left');
    $this->db->join('programmes p','p.prog_id=u.program','left');
    $this->db->join('clearance c','u.reg_number=c.reg_number');
    $this->db->where('u.email',$email);

    $query=$this->db->get();
    return $query->result_array();
   // return $query;
}
/*****************************GET CLEARANCE DETAILS FROM DATABASE FOR PDF GENERATION***********************************************/
public function get_clearanceDetails($email)
{

    $sql="SELECT sections.*, clearance.*  FROM sections, clearance WHERE email=?" ;
        $qry=$this->db->query($sql,$email);
        return $qry->result_array();

}

/*****************************UPDATE THE CLEARANCE TABLE BU SETTING THE CLEARANCE TITLE OF THE CLEARING STUDENT INTO DATABASE FOR EMAIL ATTACHMENT***********************************************/
public function Update_certificate($output,$email)
{
    $sql="UPDATE clearance SET certificate='$output' WHERE email=?";
    $query=$this->db->query($sql,$email);
    return true;
}

/*****************************GET CLEARANCE CERTIFICATE TITLE FROM DATABASE FOR EMAIL ATTACHMENT***********************************************/
public function getCertificate($email)
{
    $sql="SELECT certificate FROM clearance WHERE email=?";
    $query=$this->db->query($sql,$email);
     if($query->num_rows()==1){
        return $query->row('certificate');
    }
}

/*****************************CHECK THE CLEARANCE STATUS OF THE STUDENT ***********************************************/
public function Check_clearance($email)
{
    $sql="SELECT * FROM clearance WHERE email=?";
    $query=$this->db->query($sql,$email);
    if($query->num_rows()==1){
        return true;
    }
    else{
        return false;
    }
}

public function Check_sectionClearance($email)
{
    $this->db->select('*');
        $this->db->from('section_arares a');
        $this->db->join('users u','u.user_id=a.student');
        $this->db->where('u.email',$email);
        $this->db->where('a.status_id',2);
        $query=$this->db->get();
        $count=$query->num_rows();
     if($query->num_rows()==1){
        return true;
    }
    else{
        return false;
    }
}

}

?>