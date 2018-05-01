<?php 
session_start();
include('connect.php');

$chkActive =$_POST['chkActive']='active'?'1':'0';

$search=$conn->query("Select * from custt where EMail='".$EMail."'")->num_rows;

if($search==0 || $search=="")
{
 
$insert=$conn->query("insert into esp.custt 
	(UnivCustID, 
	LocID, 
	SPID, 
	CustSrchID, 
	CustName, 
	SoundexName, 
	CustPhone, 
	CustAdd1, 
	CustAdd2, 
	CustCity, 
	CustState, 
	CustPostCode, 
	CustCntry, 
	CustBAdd1, 
	CustBAdd2, 
	CustBCity, 
	CustBState, 
	CustBPostCode, 
	CustBCntry, 
	FedID, 
	NProfit, 
	CustPmtMthd, 
	CustMarket, 
	CustReferral, 
	CustFax, 
	Chngd, 
	ISActive, 
	NotesExist, 
	GroupID, 
	IsAgency
	)
	values
	(1, 
	1, 
	1, 
	1, 
	'". $_POST['name'] ."', 
	'". $_POST['name'] ."', 
	'". $_POST['Phone'] ."', 
	'". $_POST['Address1'] ."',
	'". $_POST['Address2'] ."',
	'". $_POST['City'] ."',
	'". $_POST['State'] ."',
	'". $_POST['siteZip'] ."',
	'". $_POST['ddlSiteCountry'] ."',
	'". $_POST['BillAddress1'] ."',
	'". $_POST['BillAddress2'] ."',
	'". $_POST['BillCity'] ."',
	'". $_POST['billState'] ."',
	'". $_POST['billZip'] ."',
	'". $_POST['BillCountry'] ."',
	1,
	1,
	'". $_POST['paymethods'] ."',
	'". $_POST['mrkt'] ."',
	'". $_POST['ReferralSource'] ."',
	'". $_POST['Fax'] ."',
	1,
	$chkActive  ,
	'". $_POST['NotesExist'] ."',
	1, 
	1
	)");
	
	echo $insert;
	exit;

	
}

else
{
	
	echo 'not inserted';
	exit;

/* 		$update=$conn->query("UPDATE `tbl_devices_config` SET `pointto`='".$pointto."',`config_interval`='".$config_interval."',`report_Interval`='".$report_Interval_edit."' , updatedon = now() where `bmsmac`='".$BeaconMAC_edit."'");

		/* echo "UPDATE `tbl_devices_config` SET `pointto`='".$pointto."',`config_interval`='".$config_interval."',`report_Interval`='".$report_Interval_edit."' , updatedon = now() where `bmsmac`='".$BeaconMAC_edit."'"; 
		
		echo 'data updated successfully';
		exit; */

	}
	
	