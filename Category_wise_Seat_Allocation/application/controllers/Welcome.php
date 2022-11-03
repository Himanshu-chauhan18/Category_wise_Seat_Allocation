<?php
class Welcome extends Controller
{
   
    function __construct()
    {
        parent::__construct();
    }

   public function login()
    {    
        $username=$_POST['username'];
		$password=$_POST['password'];
		$login_model = $this->loadModel('Login');
        $login_model->loginCred($username,$password); 
		if(Session::get('username') && Session::get('password'))
		{	
			$this->view->render('login/show_page');
		}else{
			$this->view->render('login/login_page');
		}
    }

    public function logout(){
		Session::destroy();
		header('location: http://localhost/Category_wise_Seat_Allocation/index');
	}

public function  read()
{
	$login_model = $this->loadModel('Login');
	$arr=$login_model->read(); 
	

	// echo "<pre>";
	// print_r($arr);
	// exit;
         ?>
		<thead>
      <th>Category</th>
	<?php
    foreach($arr[1] as $row1)
    {
      ?>
          <th><?php echo $row1[1]; ?></th>
      <?php
    }
    ?>
      <th>Total</th>
	  <?php


	foreach($arr[0] as $row){
		?>
	
    </thead>
		<tr>
			<td><?php echo $row['categoryName']; ?></td>
			<td><?php echo $row['seats1']; ?></td>
			<td><?php echo $row['seats2']; ?></td>
			<td><?php echo $row['seats3']; ?></td>
			<td><?php echo $row['seats4']; ?></td>
			<td><?php echo $row['counter']; ?></td>
		</tr>
		<?php
	}


	?>
	<thead>
  <th>Total</th>
<?php
foreach($arr[2] as $row3)
{
  ?>
<th><?php echo $row3[0]; ?></th>
  <?php
}
?>

  <?php


}
}