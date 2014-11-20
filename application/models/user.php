<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
//Attributes
/*var $image='';
var $password='';
var $mobile='';
var $ID='';
var $email='';
var $name='';
var $about='';*/
//Adding to the database functions "addAttribute()"
 public function addImage($userImage)
 {$this->db->set('image', $userImage); 
$this->db->insert('User'); }

 public function addPassword($userPass)
 {
 $this->db->set('password', $userPass); 
$this->db->insert('User'); 
 }
 public function addMobile($userMob)
 {$this->db->set('mobile', $userMob); 
$this->db->insert('User'); }
 public function addID($userID)
 {$this->db->set('ID', $userID); 
$this->db->insert('User'); 
 }
 public function addEmail($userEmail){
 $this->db->set('email', $userEmail); 
$this->db->insert('User'); 
 }
 public function addName($userName)
 {$this->db->set('name', $userName); 
$this->db->insert('User'); 
 }
 public function addAbout($userAbout)
 {$this->db->set('about', $userAbout); 
$this->db->insert('User'); 
 
 }
 //Updating values 
 public function updateUser($id,$userImage,$userPassword,$userMobile,$userEmail,$userName,$userAbout) //The id="id of current User" ...other user inputs are fetched from the input fields of the view
 {
 $data = array(
               'image' => $userImage,
               'password' => $userPassword,
               'mobile' => $userMobile,
			   'email' => $userEmail,
			   'name' => $userName,
			   'about' => $userAbout
			   
            );
 $this->db->where('ID', $id);
$this->db->update('User', $data); 
 }
//Getters from the database
public function getAllUsers(){   //To get all the users in the database //To get user by user use foreach
$query = $this->db->get('User');
return $query;
}
/*public function targetUsers($id,$name,$mobile,$email) //This could be used for searching for a specific user foreach is also used
{
$this->db->where('name ==', $name);
$this->db->or_where('id ==', $id);
$this->db->or_where('mobile ==', $mobile);
$this->db->or_where('email ==', $email);
$query=$this->db->get();
 return $query;
}*/

public function targetUsers($criteria,$value){ //Specify the criteria according to which you will be searching
if($criteria=='ID')
$query = $this->db->get_where('User', array('id' => $value));
else if ($criteria=='name')
$query = $this->db->get_where('User', array('name' => $value));
else if ($criteria=='email')
$query = $this->db->get_where('User', array('email' => $value));
else if ($criteria=='mobile')
$query = $this->db->get_where('User', array('mobile' => $value));
return $query;


}
}



?>