	<?php 
		
		class Home extends Controllers{
			public function __construct()
			{
				parent::__construct();
				session_start();
			}

			public function home()
			{
				$data['page_tag'] = NOMBRE_EMPESA;
				$data['page_title'] = NOMBRE_EMPESA;
				$data['page_name'] = "tienda_virtual";
				$this->views->getView($this,"home",$data); 
			}

		}
	?>
