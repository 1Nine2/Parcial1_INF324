<?php 
    class Queries extends CI_Model{
        public function getRoles(){
            $roles = $this->db->get('tbl_roles');
            if($roles -> num_rows() > 0){
                return $roles -> result();
            }
        }

        public function makePerson($data){
            return $this->db->insert('tbl_persons',$data);
    
        }

        
        public function editPerson($data){
            $ci = $data['ci'];
            unset($data['ci']);
            $this->db->where('ci', $ci);
            $this->db->update('tbl_persons' ,$data);
            return true;

            }

            public function deletePerson($data){
                $ci = $data['ci'];
                unset($data['ci']);
                $this->db->where('ci', $ci);
                $this->db->delete('tbl_persons' ,$data);
                return true;
    
                }

        public function ViewAll(){
            return $this->db->select(['tbl_persons.name','tbl_persons.ci','tbl_persons.fechan','tbl_persons.deptoc']);
            $users = $this->db->get();
            return $users->result();
    
        
        }

        public function prom(){
            $this->db->select_avg('notafinal');
            $query = $this->db->get('students');
            return $query-> result();
        }
    }

    
?>