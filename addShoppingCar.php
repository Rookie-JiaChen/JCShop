<?php
	include_once 'include/jc_goods.php';
	session_start();
	
	if(isset($_SESSION['islogin'])&&$_SESSION['islogin']==1){
			
	if(isset($_REQUEST['goodsid'])){
		$goodsid = $_REQUEST['goodsid'];
		
		$rs = findGoodsByGoodsId($goodsid);
		
		if(isset($_POST['num'])){  //�ж��Ƿ�����Ʒ����
			$num=$_POST['num'];
		}else{
			$num=1;
		}
		
		if(count($rs)>0){							 //�ж��Ƿ������ݿ����ҵ�����Ʒ
			$good = $rs;							 //ȡ�����ؽ�����е���Ʒ	
			if(isset($_SESSION['shoppingCar'])){     //�ж�Session���Ƿ�����������(���Ƿ���ڹ��ﳵ)
				$arr = $_SESSION['shoppingCar'];
				if(array_key_exists($goodsid,$arr)){	 //�жϸ��������Ƿ���������ֵ(���жϹ��ﳵ���Ƿ��Ѿ����ڸ���Ʒ)	
						
					$arr[$goodsid]['num'] += $num; 		 //������ڸ���Ʒ��������+1	
				}
				else{
					//��ǰû���������Ʒ���Ѹ���Ʒ��������ﳵ
					$arr[$goodsid] = array('goodsname'=>$good['goodsname'],'goodsprice'=>$good['goodsprice'],'num'=>$num,'goodsid'=>$goodsid,'photo'=>$good['photo']);		
				}
				$_SESSION['shoppingCar'] = $arr;
			}
			else{
				//˵�����ﳵΪ��
				$arr[$goodsid] = array('goodsname'=>$good['goodsname'],'goodsprice'=>$good['goodsprice'],'num'=>$num,'goodsid'=>$goodsid,'photo'=>$good['photo']);	
				$_SESSION['shoppingCar'] = $arr;
			}
		}
		//�����ݿ���û�ҵ�����Ʒ
		else{
			echo "<script>alert('������Ʒʧ�ܣ�����Ʒ�޷���������ﳵ��');</script>";
		}
	}
	echo "<script>location.href='shoppingCart.php';</script>";
	}
	else{
		header("Location:login.php");
	}

	


?>
