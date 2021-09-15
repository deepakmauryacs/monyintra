<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Adminuser');
    }
    public function index($id = '') {
        if (!empty($id)) {
            $data['edit_service'] = $this->db->get_where('tbl_services', ['id' => $id])->row();
        }
        $data['category'] = $this->db->get_where('tbl_service_category', ['id >' => 0])->result();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/service', $data);
        $this->load->view('dashboard/footer');
    }

    public function all() {
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/all_services');
        $this->load->view('dashboard/footer');
    }

    public function add() {
        $edit_id = $this->input->post('edit_id');

        // print_r($edit_id);die();
        $category = $this->input->post('category');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $slug = $this->input->post('slug');
        if (empty($category)) {
            $result['status'] = 0;
            $result['message'] = 'category field required';
            echo json_encode($result);
            die;
        }
        if (empty($title)) {
            $result['status'] = 0;
            $result['message'] = 'title field required';
            echo json_encode($title);
            die;
        }
        if (empty($description)) {
            $result['status'] = 0;
            $result['message'] = 'description field  required';
            echo json_encode($description);
            die;
        }
        if (empty($slug)) {
            $result['status'] = 0;
            $result['message'] = 'slug field required';
            echo json_encode($result);
            die;
        }
        $old_image = $this->input->post('old_image');
        $image = $_FILES['image'];
        if (!empty($image['name'])) {
            $row = $this->doUpload('image', 'services');
            if ($row['status']) {
                $data['image'] = $row['file_name'];
                $this->removeFile($old_image, 'services');
            } else {
                $result['status'] = 0;
                $result['message'] = $row['file_name'];
                echo json_encode($result);
                die;
            }
        }
        $data['category'] = $category;
        $data['title'] = $title;
        $data['description'] = $description;
        $data['slug'] = $slug;
        // print_r($data);die();
        if (!empty($edit_id)) {
            $this->db->update('tbl_services', $data, ['id' => $edit_id]);
            $result['status'] = 1;
            $result['message'] = 'Service update successfully';
        } else {
            $this->db->insert('tbl_services', $data);
            $result['status'] = 1;
            $result['message'] = 'Service add successfully';
        }
        echo json_encode($result);
        die;
    }

    public function edit($id) {
        $sql = "SELECT * FROM `tbl_product` WHERE `id`= $id ";
        $data['product'] = $this->db->query($sql)->row();
        $data['category'] = $this->Adminuser->select_Record('tbl_cateogery');
        $data['brand'] = $this->Adminuser->select_Record('tbl_brand');
        $data['unit'] = $this->Adminuser->select_Record('tbl_unit');
        $this->load->view('dash/header');
        $this->load->view('dash/edit_product', $data);
        $this->load->view('dash/footer');
    }

   
    public function delete_service() {
        $id = $_POST["service_id"];
        $this->Adminuser->delete_Record('tbl_services', $id);
    }

    public function showDetails() {
        $id = $this->input->post('id');
        $data = $this->db->get_where('tbl_services', ['id' => $id])->row();
        //print_r($data);
        $html = ' <div class="table-responsive">
            <table class="table table-bordered mb-0">';
        $html.= '<tr><th>Image:</th><td><img src="' . base_url() . 'uploads/services/' . $data->image . '" style="width: 50px;height: 50px;"></td></tr>';
        $html.= '<tr><th>Title:</th><td>' . $data->title . '</td></tr>';
        $html.= '<tr><th>Category:</th><td>' . get_field_value('tbl_service_category', 'category', ['slug' => $data->category]) . '</td></tr>';
        $html.= '<tr><th>Description:</th><td>' . $data->description . '</td></tr>';
        $html.= '<tr><th>Slug : </th><td>' . $data->slug . '</td></tr>';
        $html.= '</table>
            </div>';
        echo $html;
    }

    public function getServiceList() {
        $column = array('id', 'image', 'category', 'title', 'description');
        $query = " SELECT * FROM tbl_services ";
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
        foreach ($result as $key => $services) {
            $sub_array = array();
            $sub_array[] = ++$key;
            $sub_array[] = '<img src="' . base_url() . 'uploads/services/' . $services->image . '" style="width: 50px;height: 50px;">';
            // $sub_array[] = get_field_value('tbl_cateogery','category',['id'=>$services->category]);
            $sub_array[] = get_field_value('tbl_service_category', 'category', ['slug' => $services->category]);
            $sub_array[] = $services->title;
            $sub_array[] = '
       <div>
        <a  onclick="showDetails(`' . $services->id . '`);"   class="btn btn-xs btn-primary" style="color: white;border-radius: 0px;" ><i class="fas fa-eye"></i></a>
        <a href="' . base_url() . 'Admin/Service/index/' . $services->id . '" class="btn btn-xs btn-secondary" style="border-radius: 0px;"> <i class="fas fa-edit"></i></a>

        <a  id="' . $services->id . '" name="delete"  href="javascript:void(0)" class="btn btn-xs btn-danger delete" style="border-radius: 0px;"> 
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
        $query = "SELECT * FROM  tbl_services";
        $query.= " WHERE id > 0 ";
        $row = $this->db->query($query);
        return $row->num_rows();
    }
}
