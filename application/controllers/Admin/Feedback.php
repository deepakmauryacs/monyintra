<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Adminuser');
    }
    public function index($id = '') {
        if (!empty($id)) {
            $data['edit_feedback'] = $this->db->get_where('tbl_feedback', ['id' => $id])->row();
        }else{
            $data['edit_feedback'] = '';
        }
       
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/client_feedback', $data);
        $this->load->view('dashboard/footer');
    }

    public function all() {
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/all_client_feedback');
        $this->load->view('dashboard/footer');
    }

    public function add() {
        $edit_id = $this->input->post('edit_id');

        // print_r($edit_id);die();
        $name = $this->input->post('name');
        $description = $this->input->post('description');


        if (empty($name)) {
            $result['status'] = 0;
            $result['message'] = 'name field required';
            echo json_encode($result);
            die;
        }
      
    
        if (empty($description)) {
            $result['status'] = 0;
            $result['message'] = 'description field  required';
            echo json_encode($result);
            die;
        }
       
        $old_image = $this->input->post('old_image');
        $image = $_FILES['image'];
        if (!empty($image['name'])) {
            $row = $this->doUpload('image', 'feedback');
            if ($row['status']) {
                $data['image'] = $row['file_name'];
                $this->removeFile($old_image, 'feedback');
            } else {
                $result['status'] = 0;
                $result['message'] = $row['file_name'];
                echo json_encode($result);
                die;
            }
        }
        $data['name'] = $name;
        $data['description'] = $description;
     
        // print_r($data);die();
        if (!empty($edit_id)) {
            $this->db->update('tbl_feedback', $data, ['id' => $edit_id]);
            $result['status'] = 1;
            $result['message'] = 'Feedback update successfully';
        } else {
            $this->db->insert('tbl_feedback', $data);
            $result['status'] = 1;
            $result['message'] = 'Feedback add successfully';
        }
        echo json_encode($result);
        die;
    }

 
   
    public function delete_feedback() {
        $id = $_POST["id"];
        $this->Adminuser->delete_Record('tbl_feedback', $id);
    }

   
    public function getFeedbacKList() {
        $column = array('id', 'image', 'name' , 'description');
        $query = " SELECT * FROM tbl_feedback ";
        $query.= " WHERE id > 0 ";
        if (isset($_POST['order'])) {
            $query.= ' ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
        } else {
            $query.= ' ORDER BY id DESC ';
        }
        $number_filter_row = $this->db->query($query)->num_rows();
        if (isset($_POST["length"]) && $_POST["length"] != - 1) {
            $query.= ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
        }
        $result = $this->db->query($query)->result();
        $data = array();
        $status = array('1' => 'Active', '2' => 'Inactive');
        foreach ($result as $key => $feedback) {
            $sub_array = array();
            $sub_array[] = ++$key;
            $sub_array[] = '<img src="' . base_url() . 'uploads/feedback/' . $feedback->image . '" style="width: 50px;height: 50px;">';
          
           
            $sub_array[] = $feedback->name;
            $sub_array[] = $feedback->description;
            $sub_array[] = '
       <div>
       
        <a href="' . base_url() . 'Admin/Feedback/index/' . $feedback->id . '" class="btn btn-xs btn-secondary" style="border-radius: 0px;"> <i class="fas fa-edit"></i></a>

        <a  id="' . $feedback->id . '" name="delete"  href="javascript:void(0)" class="btn btn-xs btn-danger delete" style="border-radius: 0px;"> 
          <i class="fas fa-trash-alt"></i> </a>
        </div>';
            $data[] = $sub_array;
        }
        //   print_r($data);
        $draw = !empty($_POST["draw"]) ? $_POST["draw"] : 1;
        $output = array("draw" => intval($draw), "recordsTotal" => $this->count_all_data(), "recordsFiltered" => $number_filter_row, "data" => $data);
        echo json_encode($output);
    }
    
    public function count_all_data() {
        $query = "SELECT * FROM  tbl_feedback";
        $query.= " WHERE id > 0 ";
        $row = $this->db->query($query);
        return $row->num_rows();
    }
}
