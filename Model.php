function dealer_search($data,$q,$limit, $start){
        
        $this->db->select('dealers.*,states.state_name,city.city_name');
        $this->db->from('dealers');
        $this->db->join('states','states.s_id = dealers.state','left');
        $this->db->join('city','city.c_id = dealers.city','left'); 
               
        $this->db->where('dealers.status','1');
        if(!empty($data)){
            if(empty($data[1])){
                $this->db->where('dealers.popular_dealer',$data[0]);            
            } 
        }
        if(!empty($q)){
            $this->db->like('dealer_name',$q);
            $this->db->or_like( 'states.state_name', $q);
            $this->db->or_like( 'city.city_name', $q);
        }
        if($limit !='st'){
            $this->db->limit($limit, $start); 
        }
        $query = $this->db->get();
        return $query;
    }
