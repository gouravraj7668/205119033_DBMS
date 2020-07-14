<?php 

session_start();

class users{
	public $host = "localhost";
	public $username = "root";
	public $pass = "";
	public $db_name = "web_quiz";
	public $conn;
	public $data;
	public $cat;
	public $ques;
	public $ans;
	public $qst;
	
	
	public function __construct()
	{
		$this->conn = mysqli_connect($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
			die("Database Connection Failed".$this->conn->connect_errno);
		}
	}
	
	
	public function signup($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function url($url)
	{
		header("location:".$url);
	}
	
	public function signin($email,$pass)
	{
		$en = "select email,pass from signup where email='$email' and pass='$pass'";
		$q = $this->conn->query($en);
		
		$q->fetch_array(MYSQLI_ASSOC);
		
		if($q->num_rows > 0 )
		{
			$_SESSION['email'] = $email;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function user_profile($email)
	{
		$en = "select * from signup where email='$email'";
		$q = $this->conn->query($en);
		
		$row = $q->fetch_array(MYSQLI_ASSOC);
		
		if($q->num_rows > 0 )
		{
			$this->data[] = $row;
		}
		return $this->data;
		
	}
	
	public function cat_show()
	{
		
		$en = "select * from category";
		$q = $this->conn->query($en);
		while($row = $q->fetch_array(MYSQLI_ASSOC))
		{
			$this->cat[] = $row;
		}
		return $this->cat;
		
	}
	public function ques_show($ques)
	{
	
		$en = "select * from questions where cat_id='$ques'";
		$q = $this->conn->query($en);
		
		while($row = $q->fetch_array(MYSQLI_ASSOC))
		{
			$this->ques[] = $row;
		}
		
		return $this->ques;
	}
	
	public function answer($data) 
	{
		$ans = implode("",$data);
		
		$right = 0;
		$wrong = 0;
		$no_answer = 0;
		$en = "select id,correct_ans from questions where cat_id='".$_SESSION['cat']."'";
		$q = $this->conn->query($en);
		$n = "not_attempt";
		while($qst = $q->fetch_array(MYSQLI_ASSOC))
		{
			if($qst['correct_ans'] == $_POST[$qst['id']])
			{
				$right++;
			}
			elseif($_POST[$qst['id']] == $n)
			{
				$no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		
		$array = array();
		$array['right'] = $right;
		$array['wrong'] = $wrong;
		$array['no_answer'] = $no_answer;
		
		return $array;
		
	}
	
}

?>