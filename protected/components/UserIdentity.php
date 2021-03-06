<?php
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 * 
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu
 *
 */
class UserIdentity extends CUserIdentity
{
	public $email;
	private $_id;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		if(preg_match('/@/',$this->username)) //$this->username can filled by username or email
			$record = Users::model()->findByAttributes(array('email' => strtolower($this->username)));
		else 
			$record = Users::model()->findByAttributes(array('username' => strtolower($this->username)));
			
		if($record === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if($record->password !== Users::hashPassword($record->salt,$this->password))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->_id = $record->user_id;
			$this->setState('level', $record->level_id);
			$this->setState('language', $record->language_id);
			$this->email = $record->email;
			$this->setState('username', $record->username);
			$this->setState('displayname', $record->displayname);
			$this->setState('creationDate', $record->creation_date);
			$this->setState('lastloginDate', $record->lastlogin_date);
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;

	}

	public function getId() {
		return $this->_id;
	}

}