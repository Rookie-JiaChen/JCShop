<?php
include_once "comm.php" ;//���빫���������еĹ��������ļ�

/*
* �����û��û����������ѯ�û���Ϣ
*/

function findAdmin($adminname,$adminpassword){
	$strQuery = "select * from jc_admin where admin_name = '$adminname' and admin_password = '$adminpassword' "; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
		return $rs[0];
	}
	return $rs;
}

function findAllAdmin(){
	$strQuery = "select * from jc_admin "; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
		return $rs;
	}
	return $rs;
}

function findAdminLimit($line,$row){
	$strQuery = "select * from jc_admin limit $line,$row"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}

/*
* �����û�id�ţ�id����ѯ�û���Ϣ
*/

function findAdminById($id){
	$strQuery = "select * from jc_admin where admin_id = $id"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs[0];
	}
	return $rs;
}

/**
* �����û�
*/
function addAdmin($name,$password){ //����Ϊ��Ӧ���ݿ����ֶΣ�����id����Ҫ�ֶ����ӣ���Ϊ����������
	$insertStr = "insert into jc_admin(admin_name,admin_password) values('$name',$password)"; //SQL���
	$rs = execUpdate($insertStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
/*
* �޸��û�
*/
function updateAdmin($admin_id,$admin_name,$password){ //����Ϊ��Ӧ���ݿ����ֶ�
	$updateStr = "update jc_admin set admin_name='$admin_name',admin_password = '$password' where admin_id = $admin_id"; //SQL���
	$rs = execUpdate($updateStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
/*
* ɾ���û�
*/
function deleteAdmin($id){ //�����û�id��ɾ���û�
	$deleteStr = "delete from jc_admin where admin_id = $id";
	$rs = execUpdate($deleteStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
?>
