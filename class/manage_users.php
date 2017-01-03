<?php

class manage_users extends DB {

    public function __construct() {
        parent::__construct();
    }

    public function add($data) {
        $fullname = strip_tags($data['fullname']);
        $username = strip_tags($data['username']);
        $password = md5($data['password']);
        $accountrype = strip_tags($data['accountrype']);
        $epf = strip_tags($data['epf']);
        $limit = strip_tags($data['limit']);
        $signature = $images[0];

        $signature = $data['images'][0];

        $sql = "INSERT INTO `manage_users` (`fullname`, `epf`,`username`,`password`,`account_type`, `signature`, `amount_limit`) 
				VALUES ('$fullname', '$epf' ,'$username', '$password', '$accountrype', '$signature', '$limit');";
        parent::query($sql);
        return TRUE;
    }

    public function get($data) {
        $id = $_REQUEST['id'];
        if ($id == "") {
            $sql = "SELECT * FROM `manage_users`;";
            return parent::query($sql);
        } else if ($id != "") {
            $sql = "SELECT * FROM `manage_users` WHERE `id` = '$id';";
            $rows = parent::query($sql);
            return $rows[0];
        }
    }

    public function pagination($next) {
        $sql = "SELECT * FROM `manage_users` LIMIT $next, " . MAX_ITEMS_PER_PAGE . ";";
        return parent::query($sql);
    }

    public function total() {
        $sql = "SELECT * FROM `manage_users`;";
        parent::query($sql);
        return parent::getAffectedRows();
    }

    public function edit($data) {
        $fullname = strip_tags($data['fullname']);
        $username = strip_tags($data['username']);
        $password = $data['password'];
        $accounttype = strip_tags($data['accountrype']);
        $signature = ($data['images'][0] == "") ? ' `signature` = "default.gif"' : ' `signature`= "' . $data['images'][0] . '"';

        $id = $data['id'];
        $limit = strip_tags($data['limit']);

        if ($password != "") {
            $password = md5($password);
            $sql = "UPDATE `manage_users` SET 	`fullname` = '$fullname',
										`username` = '$username',
										`password` = '$password',
										`account_type` = '$accounttype',
										`amount_limit` = '$limit',
										$signature
					WHERE `id` = '$id';";
        } else {
            $sql = "UPDATE `manage_users` SET 	`fullname` = '$fullname',
										`username` = '$username',
										`account_type` = '$accounttype',
										`amount_limit` = '$limit',
										$signature
					WHERE `id` = '$id';";
        }
        parent::query($sql);
        return TRUE;
    }

    public function isLogin() {
        if ($_SESSION['SLOGINUSER'] == "") {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    //============================ System Login Function =====================================
    public function login($data) {
        $username = mysql_real_escape_string($data['username']);
        $password = mysql_real_escape_string($data['password']);

        $sql = "SELECT * FROM users WHERE userName = '$username' AND Password = '$password' AND userstatus ='1'";
        $row = parent::query($sql);
        if (parent::getRowCount() > 0) {
            $_SESSION['SLOGINUSER'] = $username;
            $_SESSION['USERID'] = $row[0]['idusers'];
            $user_level_id = $row[0]['userRoles_iduserRoles'];

            $sql = "SELECT * FROM user_roles WHERE iduserRoles = '$user_level_id'";
            $row = parent::query($sql);
            $_SESSION['SUSERTYPE'] = $row[0]['userRole'];

            return TRUE;
        } else {
            return FALSE;
        }
    }

    //========================================================================================

    public function logOut() {
        unset($_SESSION['SLOGINUSER']);
        unset($_SESSION['SUSERTYPE']);
        return TRUE;
    }

    private function addAllowances($data) {
        $users_id = $data['id'];
        $meta_allwance_ids = $data['meta_allwance_id'];

        foreach ($meta_allwance_ids as $meta_allwance_id) {
            $sql = "INSERT INTO `users_allowances` (`users_id`,`meta_allwance_id`) 
						VALUES ('$users_id','$meta_allwance_id');";

            $sql = "INSERT INTO `users_allowances` (`users_id`,`meta_allwance_id`)  
						VALUES ('$users_id','$meta_allwance_id')
			 	 	ON DUPLICATE KEY UPDATE `users_id`='$users_id',
			 	 							`meta_allwance_id` = '$meta_allwance_id';";
            parent::query($sql);
        }
        return TRUE;
    }

    private function addPersonalInformation($data) {
        $manage_users_id = $data['id'];
        $fullname = $data['fullname'];
        $meta_dipartment_id = $data['meta_dipartment_id'];
        $meta_designation_id = $data['meta_designation_id'];
        $meta_job_catagory_id = $data['meta_job_catagory_id'];

        $sql = "INSERT INTO `users_personal_informations` 
					(`manage_users_id`, `fullname`, `meta_dipartment_id`, `meta_designation_id`, `meta_job_catagory_id`) 
				VALUES ( '$manage_users_id', '$fullname', '$meta_dipartment_id', '$meta_designation_id', '$meta_job_catagory_id')
				ON DUPLICATE KEY UPDATE `fullname` = '$meta_allwance_id',
		 	 							`meta_dipartment_id` = '$meta_dipartment_id',
		 	 							`meta_designation_id` = '$meta_designation_id',
		 	 							`meta_job_catagory_id` = '$meta_job_catagory_id';";
        parent::query($sql);
        return TRUE;
    }

    private function addSalaryInformation($data) {
        $manage_users_id = $data['id'];
        $basicsalary = $data['basicsalary'];
        $bank_name = $data['bank_name'];
        $bank_acc_not = $data['bank_acc_not'];

        $working_hrs_start = $data['working_hrs_start'];
        $working_hrs_end = $data['working_hrs_end'];

        $ot_normal_rate = $data['ot_normal_rate'];
        $ot_special_rate = $data['ot_special_rate'];

        $sql = "INSERT INTO `users_salary_informations` 
					(	`manage_users_id`, `basicsalary`, `bank_name`,	`bank_acc_not`,
						`working_hrs_start`, `working_hrs_end`, 
						`ot_normal_rate`, `ot_special_rate`)
			   VALUES ( '$manage_users_id', '$basicsalary', '$bank_name', '$bank_acc_not', 
			   			'$working_hrs_start', '$working_hrs_end', '$ot_normal_rate', '$ot_special_rate')
			   ON DUPLICATE KEY UPDATE	`basicsalary` = '$basicsalary', 
			   							`bank_name` = '$bank_name',	
			   							`bank_acc_not` = '$bank_acc_not', 
			   							`working_hrs_start` = '$working_hrs_start', 
			   							`working_hrs_end` = '$working_hrs_end', 
										`ot_normal_rate` = '$ot_normal_rate', 
										`ot_special_rate` = '$ot_special_rate';";
        parent::query($sql);
    }

    public function log($data) {
        $userid = $_SESSION['USERID'];
        $action = $data['action'];
        $desc = $data['desc'];
        $sql = "INSERT INTO `log` (`manage_users_id`,`action`,`change_description`) VALUES ('$userid','$action','$desc');";
        return parent::query($sql);
    }

}

?>