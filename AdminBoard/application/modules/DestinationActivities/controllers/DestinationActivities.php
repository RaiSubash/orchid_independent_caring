<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DestinationActivities extends OAS_Controller {
	public $data = array();

	public function __construct(){
		parent::__construct();
	}


	public function index(){
		$this->data['main_title'] = "Destination Activities Management";
		$this->data['title_small'] = "";

		$this->data['inner_template'] = 'Index';
		$this->load->view('Common/common', $this->data);
	}

	function getDestinationList(){
		$length   = $this->input->post('length');
		$start    = $this->input->post('start');
		$columns  = $this->input->post('columns');
		$order    = $this->input->post('order');

		$orderBySql = "ORDER BY ".$columns[$order[0]['column']]['data']." ".$order[0]['dir'];
		$whereAllSql = "WHERE 1";
		foreach ($columns as $key => $value) {
			if(!empty($value['search']['value'])){ 
				$sqlString =  " AND ".$value['data']." LIKE '%".$value['search']['value']."%' "; 
				$whereAllSql .=  $sqlString;  
			}
		}

		$basicQuery = "SELECT id, name
		FROM destination
		WHERE is_deleted_flag = 'NO' ";

		if($length == -1){
			$dataQuery = "SELECT * FROM ($basicQuery) a $whereAllSql $orderBySql";
		}
		else{
			$dataQuery = "SELECT * FROM ($basicQuery) a $whereAllSql $orderBySql LIMIT $start, $length";
		}
		$queryResult = $this->db->query($dataQuery);

		$recordsFilteredQuery = "SELECT count(id) AS records_filtered FROM ($basicQuery) a $whereAllSql";
		$recordsFiltered =  $this->db->query($recordsFilteredQuery)->row_array();
		$recordsFiltered = $recordsFiltered['records_filtered'];

		$result = array();

		while ($row = mysqli_fetch_assoc($queryResult->result_id)) {
			$encId = urlencode(base64_encode($row["id"]));

			$row['action'] = '<div class="btn-group mt-2 mr-1 dropleft">
			<i class="bx bx-caret-down waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
			<div class="dropdown-menu">';

			$row['action'] .= "<a class='dropdown-item manage_activities' href='javascript:void(0)' data-id='".$encId."'>Assign Activities</a>";
			
			$row['action'] .= '</div></div>';
			$result[] = $row;
		}

		$response = array(
			'draw'            => intval($this->input->post('draw'))+1,
			'recordsTotal'    => $recordsFiltered,
			'recordsFiltered' => $recordsFiltered,
			'data'            => $result,
		);

		print(json_encode($response));
		exit();
	}

	public function manageDestinationActivities(string $encDestinationId){

		$output = array(
			'response' => FALSE,
			'msg' => "Operation Failed. Please try again",
			'result' => "",
		);

		try {
			$data['encDestinationId'] = $encDestinationId;
			$destinationId = base64_decode(urldecode($encDestinationId));

			$this->load->model('DestinationActivitiesModel');

			if(null != $this->input->post('destination_id')) {

				$this->load->library('form_validation');
				$this->form_validation->set_rules('destination_id', 'Destination Id', 'required');

				if($this->form_validation->run() === FALSE) {
					$output = array(
						'result' => $this->form_validation->error_array(),
					);

					throw new Exception('Form Validation Error');
				}
				else{
					$dataInsert = array(
						'activity_id'=>$this->input->post('activity_id[]'),
					);

					$result = $this->DestinationActivitiesModel->updateActivityByDestinationId($destinationId, $dataInsert);

					if(! empty($result)){
						$output = array(
							'result' => $result,
							'response' => TRUE,
							'msg' => "Activity Updated Successfully",
						);
					}
				}
			}
			else{
				$this->load->helper('common');
				$data['user'] =$this->DestinationActivitiesModel->getDestinationInfoByID($destinationId);
				$data['menu'] = arrayHierarchy($this->DestinationActivitiesModel->getActivitiesAllVisible(), 'pre_menu_id', 'activity_id');

				$permission =$this->DestinationActivitiesModel->getAllDestinationActivitiesById($destinationId);

				$data['userPermission'] = array();
				foreach ($permission as $key => $row) {
					$data['userPermission'][] = $row['activity_id'];
				}

				$output = array(
					'result' => $this->load->view('DestinationActivitiesModal', $data, true),
					'response' => True,
					'msg' => '',
				);
			}
		} catch (Exception $e) {
			$output['msg'] = $e->getMessage();
			$output['response'] = FALSE;
		}
		
		print(json_encode($output));
		exit();
	}

}