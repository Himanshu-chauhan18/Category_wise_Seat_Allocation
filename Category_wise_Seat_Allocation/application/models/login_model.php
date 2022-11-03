<?php


class LoginModel
{
   
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    
    public function loginCred($username, $password)
    { 
        $uname1='Admin' ;
        $pwd1='Admin@4321#';
        $uname2= 'User1';
        $pwd2='User1@7890#' ;
        $uname3= 'User2';
        $pwd3= 'User2@456#';
        
            if($username==$uname1 && $password==$pwd1)
            {
              Session::set('username',$username);
              Session::set('password',$password);
            }else if($username==$uname2 && $password==$pwd2)
            {
                Session::set('username',$username);
                Session::set('password',$password);
            }else if($username==$uname3 && $password==$pwd3)
            {
                Session::set('username',$username);
                Session::set('password',$password);
            }else{
               return 0;
            }
	  }

    public function read()
    { 
       $sql= 'select * from dateallocation order by AllocationDate';
       $query = $this->db->query($sql);
       $query->execute();
     
       while ($row1= $query->fetch(PDO::FETCH_NUM))
       {
              $i=$row1[0];
              $date_f=$row1[1];

           $arr1[]=[$i, date("jSM,Y",strtotime($date_f))];
           $e=$row1[0];
           $sql11 ="select sum(SeatsCount) from  categorywiseallocation where  AllocationDateId= $e";
           $query11 = $this->db->query($sql11);
           $query11->execute();
           $tot[]=$query11->fetch(PDO::FETCH_NUM);
       }

       
       
      
        //    $sql11 ="select sum(SeatsCount) from  categorywiseallocation where  AllocationDateId= $Id";
        //    $query11 = $this->db->query($sql11);
        //    $query11->execute();
      


       $arr2=[];
       $sql1 = 'select * from categorymaster';
       $query1 = $this->db->query($sql1);
       $query1->execute();
       while ($row2= $query1->fetch(PDO::FETCH_NUM))
       {
           $arr3=[];     
           $Id=$row2[0];
         $arr3['categoryName']=$row2[1];
         $counter=0;
        for($i=0;$i<count($arr1);$i++)
        {
           $var = $arr1[$i][0]; 
      
           $sql2="select * from  categorywiseallocation where CategoryId=$Id and AllocationDateId= $var";
           $query2 = $this->db->query($sql2);
           $query2->execute();
          
           if($query2->rowCount()>0)
           {
            while ($row3= $query2->fetch(PDO::FETCH_NUM))
            {
                 $arr3['seats'.$i+1]=$row3[3];    
            }
                $counter++;  
            }else{
                $arr3['seats'.$i+1]='N/A';
            }
        }
        
        $arr3['counter']=$counter; 
        // $arr3['date']=$arr1;
        $arr2[]=$arr3;
    }
    
    

    return [$arr2,$arr1,$tot];
   
	}

    

}
