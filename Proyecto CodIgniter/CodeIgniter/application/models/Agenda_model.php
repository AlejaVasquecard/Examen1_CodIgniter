<?php

class Agenda_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function obtener_agendas()
	{
		$query = $this->db->get('citas');

		return $query->result_array();
	}

	public function guardar_citas($data)
	{

		$this->db->get_where('citas', array('cedula' => $data['cedula']));
		$count =  $this->db->affected_rows();
		if ($count === 1) {
			return 0;
		}
		$this->db->insert('citas', $data);
		return $this->db->affected_rows();
	}

	function edit($tblname,$form_data,$field_id,$id){
		$sql = "UPDATE ".$tblname." SET ";
		$data = array();
	
		foreach($form_data as $column=>$value){
	
			$data[] =$column."="."'".$value."'";
	
		}
		$sql .= implode(',',$data);
		$sql.=" where ".$field_id." = ".$id."";
		return db_query($sql); 
	}
}
