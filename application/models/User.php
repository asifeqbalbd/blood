
<?php  
class User extends CI_Model  
{  
	public function search_result($k)
	{
		$this->db->where('b_type', $k);
		$sql = $this->db->get('donor');
		return $sql->result();
	}

	public function search_blood($r)
	{
		$this->db->order_by('city', 'AESC');
		$this->db->where('b_type', $r);
		$sql = $this->db->get('donor');
		return $sql->result();
	}

	public function search_city($s)
	{
		$this->db->order_by('b_type', 'AESC');
		$this->db->where('city', $s);
		$sql = $this->db->get('donor');
		return $sql->result();
	}

	public function search_con($s)
	{
		$this->db->where('date', $s);
		$sql = $this->db->get('con');
		return $sql->result();
	}

	public function login_val($u)
	{
		$this->db->where('auth_username', $u);
		$sql = $this->db->get('auth');
		return $sql->result();
	}
	public function con_insertdata($data)
	{
		$query = $this->db->insert('con',$data);
		return $query;
	}
	public function join_insertdata($data)
	{
		$query = $this->db->insert('join',$data);
		return $query;
	}
	public function showdata()
	{
		$this->db->order_by('id', 'DESC');
		$sql = $this->db->get('con');
		return $sql;
	}
	public function showdata_join()
	{
		$this->db->order_by('id', 'DESC');
		$sql = $this->db->get('join');
		return $sql;
	}
	public function delete($id){
		$this->db->where('id',$id);
		$sql = $this->db->delete('con');
		return $sql;
	}
	public function delete_join($id){
		$this->db->where('id',$id);
		$sql = $this->db->delete('join');
		return $sql;
	}
	
}  



