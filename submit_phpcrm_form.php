<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
$street1=$_POST['street1'];
  $street2=$_POST['street2'];
  $city=$_POST['city'];
   $state=$_POST['state'];
  $country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$civil=$_POST['civil'];
  $citizenship=$_POST['citizenship'];
  $telephone=$_POST['telephone'];
   $cellphone=$_POST['cellphone'];
  $unit_code=$_POST['unit_code'];
  $occupant1=$_POST['occupant1'];
  $occupant2=$_POST['occupant2'];
  $date=$_POST['date'];
  $radio1=$_POST['radio1'];
  $radio2=$_POST['radio2'];
  $number_pet=$_POST['number_pet'];
  $employer=$_POST['employer'];
  $business_address=$_POST['business_address'];
  $emp_phone=$_POST['emp_phone'];
  $emp_email=$_POST['emp_email'];
  $radio3=$_POST['radio3'];
  $describe1=$_POST['describe1'];
  $radio4=$_POST['radio4'];
  $describe2=$_POST['describe2'];
  $radio5=$_POST['radio5'];
  $describe3=$_POST['describe3'];
  $notify=$_POST['notify'];
  $add_tel=$_POST['add_tel'];
  $relationship=$_POST['relationship'];
  $relocation=$_POST['relocation'];
  $radio6=$_POST['radio6'];
  $radio7=$_POST['radio7'];
  
  
  

  $field1="<b>Street1:</b> ".$street1."<br>"."<b>Street2:</b> ".$street2."<br>"."<b>City:</b> ".$city."<br>"."<b>State:</b> ".$state."<br>"."<b>Country:</b> ".$country."<br>"."<b>Zipcode:</b> ".$zipcode."<br>"."<b>Civil Status:</b> ".$civil."<br>"."<b>Citizenship:</b> ".$citizenship."<br>"."<b>Telephone:</b> ".$telephone."<br>"."<b>Prefered unit code:</b> ".$unit_code."<br>"."<b>Occupant 1:</b> ".$occupant1."<br>"."<b>Occupant 2:</b> ".$occupant2."<br>"."<b>Target Date to Move In:</b> ".$date."<br>"."<b>Proposed Occupant Smoke:</b> ".$radio1."<br>"."<b>Do you owe pet?:</b> ".$radio2."<br>"."<b>If yes, number of pets and type:</b> ".$number_pet."<br>"."<b>Employment=>Employer:</b> ".$employer."<br>"."<b>Business Address:</b> ".$business_address."<br>"."<b>Phone:</b> ".$emp_phone."<br>"."<b>Email:</b> ".$emp_email."<br>"."<b>Been convicted of a felony:</b> ".$radio3."<br>"."<b>Describe:</b> ".$describe1."<br>"."<b>Been evicated from a rental:</b> ".$radio4."<br>"."<b>Describe:</b> ".$describe2."<br>"."<b>Defaulted on a lease:</b> ".$radio5."<br>"."<b>Describe:</b> ".$describe3."<br>"."<b>In case of emergency, please notify:</b> ".$notify."<br>"."<b>His/Her address and Telephone:</b> ".$add_tel."<br>"."<b>Relationship:</b> ".$relationship."<br>"."<b>Reason for relocation:</b> ".$relocation."<br>"."<b>Term and condition:</b> ".$radio6."<br>"."<b>Where did you hear us:</b> ".$radio7;

  

}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$cellphone,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
exit();
//echo $response;
?>