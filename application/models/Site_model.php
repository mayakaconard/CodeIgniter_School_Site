<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site_model extends CI_Model
{





    /* ===================================GET DETAILS FROM TO THE WEBSITE================================================================== */
    /* GET IMAGES FOR SLIDER */
    public function update_slider()
    {
        $this->db->select('*');
        $this->db->from('image_gallery');
        $this->db->where('category_id',1);
        $query=$this->db->get();
        return $query->result_array();
    }

    /* GET IMAGES FOR PYSICAL FACILITIES */
    public function get_facilities()
    {
        $this->db->select('*');
        $this->db->from('image_gallery');
        $this->db->where('category_id',2);
        $this->db->order_by('date_posted','DESC');
        $this->db->limit(4);
        $query=$this->db->get();
        return $query->result_array();
    }
     /* GET NEWS */
    public function get_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('date_posted','DESC');
        $this->db->limit(3);
        $query=$this->db->get();
        return $query->result_array();
    }
    /* GET TEACHERS */
    public function get_teachers()
    {
        $this->db->select('*');
        $this->db->from('teachers');
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


    /* GET DEPARTMENTS*/
    public function get_departments()
    {
        $this->db->select('*');
        $this->db->from('departments');
        $query=$this->db->get();
        return $query->result_array();
    }
     /* GET DEPARTMENT DIRECTORS*/
    public function get_directors($id)
    {
        $this->db->select('*');
        $this->db->from('department_directors d');
        $this->db->join('teachers t','t.id=d.teacher','inner');
        $this->db->join('departments p','p.dept_id=d.department');
        $this->db->where('p.dept_id',$id);
        $query=$this->db->get();
        return $query;
    }

     /* GET EVENTS */
    public function get_events()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by('date_posted','DESC');
        $this->db->limit(3);
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

    public function Alumini_registration($params)
    {
        $qry=$this->db->insert('alumini',$params);
         if ($qry) {
            return true;
        } else {
            return false;
        }
    }
    /* FETCH QUOTES RANDOMLY TO THE SITE */
    /*function get_quotes()
    {
        $tdate = date('Y-m-d');
        $this->db->select('daily_qoute')->from('daily_qoutes');
        $res = $this->db->get();


        return $res->result();;
    }*/




 /*******************************GET STUDENT CLEARANCE DETAILS IN THE STUDENT DASHBOARD************************************************/

     public function getUserName($email)
    {
        $data = array(
            'email' => $email
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