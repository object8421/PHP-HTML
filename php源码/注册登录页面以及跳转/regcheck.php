<?php
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "ע��")
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		$psw_confirm = $_POST["confirm"];
		if($user == "" || $psw == "" || $psw_confirm == "")
		{
			echo "<script>alert('��ȷ����Ϣ�����ԣ�'); history.go(-1);</script>";
		}
		else
		{
			if($psw == $psw_confirm)
			{
				mysql_connect("localhost","root","root");	//�������ݿ�
				mysql_select_db("vt");	//ѡ�����ݿ�
				mysql_query("set names 'gdk'");	//�趨�ַ���
				$sql = "select username from user where username = '$_POST[username]'";	//SQL���
				$result = mysql_query($sql);	//ִ��SQL���
				$num = mysql_num_rows($result);	//ͳ��ִ�н��Ӱ�������
				if($num)	//����Ѿ����ڸ��û�
				{
					echo "<script>alert('��,�û����Ѵ���'); history.go(-1);</script>";
				}
				else	//�����ڵ�ǰע���û�����
				{
					$sql_insert = "insert into user (username,password,phone,address) values('$_POST[username]','$_POST[password]','','')";
					$res_insert = mysql_query($sql_insert);
					//$num_insert = mysql_num_rows($res_insert);
					if($res_insert)
					{
						echo "<script>alert('ע��ɹ���'); history.go(-1);</script>";
					}
					else
					{
						echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";
					}
				}
			}
			else
			{
				echo "<script>alert('���벻һ�£�'); history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
	}
?>