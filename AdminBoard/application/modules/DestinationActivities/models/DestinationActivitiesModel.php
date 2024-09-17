<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DestinationActivitiesModel extends CI_Model {

	function getDestinationInfoByID(string $destinationId):array{
		$sql = "SELECT name, id FROM destination
		where id='$destinationId'";

		$result = $this->db->query($sql)->row_array();
		return $result;
	}

	function getActivitiesAllVisible():array{
		$sql = "SELECT activity_id, name, pre_menu_id
		from activity_master
		WHERE is_deleted_flag = 'NO'
		order by activity_id";

		$result = $this->db->query($sql);

		$data = array();
		while($row=mysqli_fetch_assoc($result->result_id)){
			$row['enc_activity_id']=urlencode(base64_encode($row['activity_id']));
			$data[$row['activity_id']]=$row;
		}

		return $data;
	}

	function getAllDestinationActivitiesById(string $destinationId):array{
		$this->db->select('activity_id')->from('destination_activities')->where(array('destination_id'=>$destinationId));
		$result = $this->db->get()->result_array();

		return $result;
	}
	
	function updateActivityByDestinationId(string $destinationId, array $data){

		$this->db->trans_start();

		$this->db->delete('destination_activities', array('destination_id'=>$destinationId));

		if(isset($data['activity_id'])){
			$dataInsert = array();
			foreach ($data['activity_id'] as $key => $row) {
				$dataInsert[] = array(
					'destination_id' => $destinationId,
					'activity_id' => base64_decode(urldecode($row)),
					'created_by' => $this->session->userdata['emp_id'],
					'created_on' => date('Y-m-d H:i:s'),
				);
			}

			$this->db->insert_batch('destination_activities', $dataInsert); 
		}
		
		/*closing transaction block*/
		$this->db->trans_complete();

		/*checking if any error occured during transaction*/
		if ($this->db->trans_status() === FALSE){
			return FALSE;
		}
		
		return urlencode(base64_encode($destinationId));
	}

}