public function demo_search(){
		$data = $this->input->get('demo_input[]');
		$q = $this->input->get('q');
    
    //getting Total Number Count data
		$row_count= $this->welcome_model->demo_search($data,$q,'start','limit');
		$TotalData = $row_count->num_rows(); 
		if($_POST){
      
      // Ajax call
			$limit=10;
			$start= $_POST['limt'];
			
			$results= $this->welcome_model->demo_search($data,$q,$limit, $start);
			$query['dealers'] = $results->result();
			$query['total_rows'] = $TotalData;
			$query['limit'] = $limit;
			$query['start'] = $start;
			 return $this->load->view('demoNextPage',$query);

		}else{
    
    //initial limit and start point
        $limit=2;
        $start=0;
		}


		$results= $this->welcome_model->demo_search($data,$q,$limit, $start);
		$query['dealers'] = $results->result();

		$query['total_rows'] = $TotalData;
		$query['limit'] = $limit;
		$query['start'] = $start;

		$this->load->view('demo-page',$query);
	
	}
