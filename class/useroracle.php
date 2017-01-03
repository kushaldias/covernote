<?php 

class useroracle extends db_oci{
	public $userid;
	public $usertype;
	
	public function __construct($data){
		parent::__construct();
		$this->userid = $data[0];
		
	}

//_____________________________________________________________
	public function getAmountByWord($data){
		
		$sql = "SELECT common.to_words('$data') DD FROM dual";
		
		//$row = parent::query($sql);
		//$amountword = $row[0]['TO_WORDS'];
		
		return parent::query($sql);
		}

//_____________________________________________________________
	public function getMarinePolicy($data){
		$user_id = $data[0].$data[1].$data[2].$data[3].$data[4];
		
		$sql ="select rownum rown ,pol.pol_policy_id,pol.pol_proposal_number,pol.pol_policy_number,		par.ppa_pty_party_name,duc.name,cg.rv_meaning,det.pod_policy_expiry_date,pol.pol_product_code,duc.lob, AMOUNTMASK(POD_SUM_INSURED_ASSURED),pol_policy_id Polid,(SELECT COUNT(*) from t_policy pol,t_policy_party par,t_product duc,t_policy_detail det,cg_ref_codes cg where pol.pol_policy_id = par.ppa_pol_policy_id 
		and pol.pol_policy_id = det.pod_pol_policy_id 
		and pol.pol_product_code = duc.product_code 
		and pol.pol_policy_status = cg.rv_abbreviation 
		and cg.rv_domain = 'POLICY STATUS' 
		and par.ppa_shr_stake_holder_fn_code = 'POLICY-HOL' 
		and det.pod_effective_end_date is null 
		and pol.pol_policy_number like '".$data."') as C 
		from t_policy pol,t_policy_party par,t_product duc,t_policy_detail det,cg_ref_codes cg
		where pol.pol_policy_id = par.ppa_pol_policy_id 
		and pol.pol_policy_id = det.pod_pol_policy_id 
		and pol.pol_product_code = duc.product_code 
		and pol.pol_policy_status = cg.rv_abbreviation 
		and cg.rv_domain = 'POLICY STATUS' 
		and par.ppa_shr_stake_holder_fn_code = 'POLICY-HOL' 
		and det.pod_effective_end_date is null 
		and pol.pol_policy_number like '".$data."' ";
	
		return parent::query($sql);

		}

//________________________________________________________________________
	public function checkPolicy($data){
		$policy_id = $data;
		
		$sql = "select rownum rown ,pol.pol_policy_id,pol.pol_proposal_number,pol.pol_policy_number,		par.ppa_pty_party_name,duc.name,cg.rv_meaning,det.pod_policy_expiry_date,pol.pol_product_code,duc.lob, AMOUNTMASK(POD_SUM_INSURED_ASSURED),pol_policy_id Polid from t_policy pol,t_policy_party par,t_product duc,t_policy_detail det,cg_ref_codes cg
		where pol.pol_policy_id = par.ppa_pol_policy_id 
		and pol.pol_policy_id = det.pod_pol_policy_id 
		and pol.pol_product_code = duc.product_code 
		and pol.pol_policy_status = cg.rv_abbreviation 
		and cg.rv_domain = 'POLICY STATUS' 
		and par.ppa_shr_stake_holder_fn_code = 'POLICY-HOL' 
		and det.pod_effective_end_date is null 
		and pol.pol_policy_number like '".$policy_id."'";
		
		parent::query($sql);
		if(parent::getAffectedRows() > 0){ return TRUE; }
		else { return FALSE;}
		//return $policy_id;
		}


//_____________________________________________________________
	public function getPolicyDetails($data){
		
		$sql = "select 

pol.pol_policy_number,
pol.pol_policy_branch_code as policy_branch,

(SELECT pp.ppa_pty_party_name
FROM t_policy_party pp
WHERE pp.ppa_pol_policy_id = pol.pol_policy_id
AND pp.ppa_effective_end_date IS NULL
AND pp.ppa_shr_stake_holder_fn_code = 'POLICY-HOL' ) POLICY_HOLDER_NAME,

(SELECT pp.ppa_pty_party_code
FROM t_policy_party pp
WHERE pp.ppa_pol_policy_id = pol.pol_policy_id
AND pp.ppa_effective_end_date IS NULL
AND pp.ppa_shr_stake_holder_fn_code = 'POLICY-HOL' ) POLICY_PARTY_CODE,

(SELECT pp.ppa_pty_party_code
FROM t_policy_party pp
WHERE pp.ppa_pol_policy_id = pol.pol_policy_id
AND pp.ppa_effective_end_date IS NULL
AND pp.ppa_shr_stake_holder_fn_code = 'POLICY-HOL' ) POLICY_CODE,

NVL((select con.con_address_line_1 || ' ' || con.con_address_line_2 || ' ' || con.con_address_line_3
from t_policy_party pr1 ,t_contact con
where pr1.ppa_pol_policy_id =POL.pol_policy_id
and pr1.ppa_shr_stake_holder_fn_code = 'POLICY-HOL'
and pr1.ppa_effective_end_date is null
and pr1.ppa_pfy_pty_party_id=con.con_pty_party_id
and con.con_effective_end_date is null
and con.con_type_of_contact like 'Mailing%'
and rownum=1),' ') ADDRESS,

to_char(det.pod_created_date,'DD-MM-YYYY') as pod_created_date,

det.pod_term,

decode(det.pod_term_unit,'G','YEAR','F','MONTH','D','DAY') AS Duration_Unit,

pol.pol_product_code,

to_char(det.pod_effective_start_date,'DD-MM-YYYY') as pod_effective_start_date,

to_char(det.pod_policy_expiry_date,'DD-MM-YYYY') as pod_policy_expiry_date,

det.pod_sum_insured_assured,

det.pod_net_premium,

DECODE(pro.lob,'01','FIRE INSURANCE',
'02','MISC INSURANCE','03',
'MARINE INSURANCE','04',
'MOTOR INSURANCE','05'
,'ENGINEERING INSURANCE') AS LOB,

(SELECT pp.ppa_pty_party_code
FROM t_policy_party pp
WHERE pp.ppa_pol_policy_id = pol.pol_policy_id
AND pp.ppa_effective_end_date IS NULL
AND pp.ppa_shr_stake_holder_fn_code in('AGENT','BROKER','HNB_BANK','HNB_STAFF','ASSU_STAFF','DIR_SP','DIR_SP')) PARTY_CODE,

(select 
decode(pro.pop_value_alpha_code,'EXP','EXPORT','IMP','IMPORT')
from
t_policy_property pro 
where 
pro.pop_pol_policy_id = pol.pol_policy_id
and pro.pop_effective_end_date is null
and pro.pop_par_parameter_name = 'Import/Export') As ImportOrExport,

(select pro.pop_value_alpha_code from t_policy_property pro
where pro.pop_pol_policy_id = pol.pol_policy_id
and pro.pop_effective_end_date is null
and pro.pop_par_parameter_name = 'Mode of transport') as Modeoftransport

from t_policy pol,t_policy_detail det,t_product pro
where
pol.pol_policy_id = det.pod_pol_policy_id
and pro.product_code = pol.pol_product_code
and det.pod_effective_end_date is null
and pol.pol_policy_id = '$data' ";

		return parent::query($sql);
		
		}


}

?>