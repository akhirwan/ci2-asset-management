<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gilang
 * Date: 5/8/13
 * Time: 9:16 AM
 * To change this template use File | Settings | File Templates.
 */

class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //  ================= AUTOMATIC CODE ==================

    //    KODE ASSIGNMENTS
    public function getKodeAssign()
    {	
		$today = date("ymd");
        //$q = $this->db->query("select MAX(RIGHT(kd_penjualan,3)) as kd_max from tbl_penjualan_header");
        $q = $this->db->query("select MAX(RIGHT(asg_id,3)) as last from assignments where asg_id like '%$today%'");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = $today.sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "SIGN".$kd;
    }
	
    //    KODE STATUS
    public function getKodeStatus()
    {	
		$q = $this->db->query("select MAX(RIGHT(stat_id,3)) as last from status");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "STAT".$kd;
    }
	
    //    KODE ASSETS
    public function getKodeAssets()
    {	
		$today = date("ymd");
        //$q = $this->db->query("select MAX(RIGHT(kd_penjualan,3)) as kd_max from tbl_penjualan_header");
        $q = $this->db->query("select MAX(RIGHT(ast_id,3)) as last from assets where ast_id like '%$today%'");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = $today.sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "AST".$kd;
    }
	
    //    KODE ASSETS
    public function getKodePersons()
    {	
		$today = date("ymd");
        $q = $this->db->query("select MAX(RIGHT(person_id,3)) as last from persons where person_id like '%$today%'");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = $today.sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "USER".$kd;
    }
	
    //    KODE DEPARTEMEN
    public function getKodeDept()
    {	
		$q = $this->db->query("select MAX(RIGHT(dept_id,3)) as last from departments");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "DEPT".$kd;
    }
		
    //    KODE LEVEL
    public function getKodeLvl()
    {	
		$q = $this->db->query("select MAX(RIGHT(lvl_id,3)) as last from levels");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "LVL".$kd;
    }
		
    //    KODE CATEGORY
    public function getKodeCat()
    {	
		$q = $this->db->query("select MAX(RIGHT(cat_id,3)) as last from categories");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "CAT".$kd;
    }
	
    //    KODE AREA
    public function getKodeArea()
    {	
		$q = $this->db->query("select MAX(RIGHT(area_id,3)) as last from areas");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "AREA".$kd;
    }
	
//    KODE PENJUALAN
    public function getKodePenjualan()
    {	
		$today = date("ymd");
        //$q = $this->db->query("select MAX(RIGHT(kd_penjualan,3)) as kd_max from tbl_penjualan_header");
        $q = $this->db->query("select MAX(RIGHT(kd_penjualan,3)) as last from tbl_penjualan_header where kd_penjualan like '$today%'");
		
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->last)+1;
                $kd = $today.sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "O-".$kd;
    }

    //    KODE BARANG
    function getKodeBarang(){
        $q = $this->db->query("select MAX(RIGHT(kd_barang,3)) as kd_max from tbl_barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "B-".$kd;
    }

    //    KODE PELANGGAN
    public function getKodePelanggan(){
        $q = $this->db->query("select MAX(RIGHT(kd_pelanggan,3)) as kd_max from tbl_pelanggan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "P-".$kd;
    }

    //    KODE PEGAWAI
    public function getKodePegawai(){
        $q = $this->db->query("select MAX(RIGHT(kd_pegawai,3)) as kd_max from tbl_pegawai");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "K-".$kd;
    }

    public function getTambahStok($kd_barang,$tambah)
    {
        $q = $this->db->query("select stok from tbl_barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok + $tambah;
        }
        return $stok;
    }
    public function getKurangStok($kd_barang,$kurangi)
    {
        $q = $this->db->query("select stok from tbl_barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok - $kurangi;
        }
        return $stok;
    }
    public function getKembalikanStok($kd_barang)
    {
        $q = $this->db->query("select stok from tbl_barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok;
        }
        return $stok;
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
	
	function post_spec($result = array())
        {
            $total_array = count($result);

            if($total_array != 0)
            {
                $this->db->insert_batch('asset_spec', $result);
            }
        }
	
	function post_spec_update($result = array())
        {
            $total_array = count($result);

            if($total_array != 0)
            {
                $this->db->update_batch('asset_spec', $result);
            }
        }

	/*function getAllDataAssets(){
		$this->db->select('assets.ast_id,assets.ast_name,assets.ast_desc,categories.cat_name,persons.person_name,areas.area_id');
		$this->db->order_by('assets.ast_id','asc');
		$this->db->from('assets');
	
		$this->db->join('categories','categories.cat_id=assets.cat_id');
		$this->db->join('persons','persons.person_id=assets.person_id');
		$this->db->join('areas','areas.area_id=assets.area_id');
		
		$query=$this->db->get();
		return $query->result();
    }*/
		
	function getAllDataAssets(){
        return $this->db->query("
				select assets.id,assets.ast_id,assets.ast_name,assets.ast_desc,categories.cat_name,assets.person_id,areas.area_name,persons.person_id,persons.full_name
                from assets
                left join categories on assets.cat_id=categories.cat_id
                left join persons on assets.person_id=persons.person_id
                left join areas on assets.area_id=areas.area_id
                where assets.id ")->result();
    }
	
	function getUserDataAssets(){
		$id = $this->session->userdata['ID'];
		$this->db->select('assets.id,assets.ast_id,assets.ast_name,assets.ast_desc,categories.cat_name,assets.person_id,areas.area_name,persons.person_id,persons.full_name');
		$this->db->order_by('assets.ast_id','desc');
		$this->db->where('persons.person_id',$id);
		$this->db->from('assets');
	
		$this->db->join('categories','categories.cat_id=assets.cat_id');
		$this->db->join('areas','areas.area_id=assets.area_id');
		$this->db->join('persons','persons.person_id=assets.person_id');
		
		$query=$this->db->get();
		return $query->result();
    }
	
	function getProfile(){
		$id = $this->session->userdata['ID'];
		$this->db->select('persons.id,persons.person_id,persons.user_name,persons.full_name,persons.pwd,persons.nik,persons.email,persons.inactive,departments.dept_name,levels.lvl_name');
		$this->db->order_by('persons.person_id','desc');
		$this->db->where('persons.person_id',$id);
		$this->db->from('persons');
	
		$this->db->join('departments','departments.dept_id=persons.dept_id');
		$this->db->join('levels','levels.lvl_id=persons.lvl_id');
		
		$query=$this->db->get();
		return $query->result();
    }
	
	function getDataAssets($id){
        return $this->db->query("
				select assets.id,assets.ast_id,assets.ast_name,assets.ast_desc,categories.cat_id,categories.cat_name,areas.area_id,areas.area_name,persons.person_id,persons.full_name,departments.dept_name
				from assets 
				left join categories on assets.cat_id=categories.cat_id
                left join persons on assets.person_id=persons.person_id
                left join departments on persons.dept_id=departments.dept_id
                left join areas on assets.area_id=areas.area_id
                where assets.ast_id = '$id'")->result();
    }
		
	function getDataAssetbyUser($id){
        return $this->db->query("
				select assets.id,assets.ast_id,assets.ast_name,assets.ast_desc,categories.cat_id,categories.cat_name,areas.area_id,areas.area_name,persons.person_id,persons.full_name,departments.dept_name
				from assets 
				left join categories on assets.cat_id=categories.cat_id
                left join persons on assets.person_id=persons.person_id
                left join departments on persons.dept_id=departments.dept_id
                left join areas on assets.area_id=areas.area_id
                where assets.person_id = '$id'")->result();
    }
			
	function getDataSpec($id){
        return $this->db->query("
				select asset_spec.id,asset_spec.ast_id,asset_spec.attr,asset_spec.value
				from asset_spec
                where asset_spec.ast_id = '$id'")->result();
    }
				
	function getDataSpecbyId($id){
        return $this->db->query("
				select asset_spec.ast_id,asset_spec.attr,asset_spec.value
				from asset_spec
                where asset_spec.id = '$id'")->result();
    }
	
	function getAllDataPersons(){
        return $this->db->query("
				select persons.id,persons.person_id,persons.user_name,persons.full_name,persons.pwd,persons.nik,persons.email,persons.inactive,departments.dept_name,levels.lvl_name
                from persons
                left join departments on persons.dept_id=departments.dept_id
                left join levels on persons.lvl_id=levels.lvl_id
                where persons.id")->result();
    }
	
	function getActiveDataPersons(){
        return $this->db->query("
				select persons.id,persons.person_id,persons.user_name,persons.full_name,persons.pwd,persons.nik,persons.email,persons.inactive,departments.dept_name,levels.lvl_name
                from persons
                left join departments on persons.dept_id=departments.dept_id
                left join levels on persons.lvl_id=levels.lvl_id
                where persons.id and persons.inactive = '0'")->result();
    }
		
	function getInactiveDataPersons(){
        return $this->db->query("
				select persons.id,persons.person_id,persons.user_name,persons.full_name,persons.pwd,persons.nik,persons.email,persons.inactive,departments.dept_name,levels.lvl_name
                from persons
                left join departments on persons.dept_id=departments.dept_id
                left join levels on persons.lvl_id=levels.lvl_id
                where persons.id and persons.inactive = '1'")->result();
    }
				
    function getDataPersons($id){
        return $this->db->query("
				select persons.person_id,persons.user_name,persons.full_name,persons.pwd,persons.nik,persons.email,departments.dept_name,levels.lvl_name,departments.dept_id,levels.lvl_id
                from persons
                left join departments on persons.dept_id=departments.dept_id
                left join levels on persons.lvl_id=levels.lvl_id
				where person_id = '$id'")->result();
    }
		
	function getDataAssignmentsbyAsset($id){
        return $this->db->query("
				select assignments.id,assignments.asg_id,assignments.ast_id,assignments.complaint_date,assignments.complaints,assignments.service_start,assignments.service_end,assignments.support_by,assignments.support_by_last,status.stat_name,status.stat_id
                from assignments
                left join status on assignments.stat_id=status.stat_id
				where assignments.ast_id = '$id' ")->result();
    }
			
	function getAllDataAssignments(){
        return $this->db->query("
				select assignments.id,assignments.asg_id,assignments.ast_id,assignments.complaint_date,assignments.complaints,assignments.service_start,assignments.service_end,assignments.support_by,assignments.support_by_last,status.stat_name,status.stat_id
                from assignments
                left join status on assignments.stat_id=status.stat_id
				where assignments.id ")->result();
    }
		
    function getDataAssignments($id){
        return $this->db->query("SELECT * from assignments where asg_id = '$id'")->result();
    }
			
    function getDataStatus($id){
        return $this->db->query("SELECT * from status where stat_id = '$id'")->result();
    }
						
    function getDataDepartments($id){
        return $this->db->query("SELECT * from departments where dept_id = '$id'")->result();
    }
				
    function getDataLevels($id){
        return $this->db->query("SELECT * from levels where lvl_id = '$id'")->result();
    }
				
    function getDataCategories($id){
        return $this->db->query("SELECT * from categories where cat_id = '$id'")->result();
    }
		
    function getDataAreas($id){
        return $this->db->query("SELECT * from areas where area_id = '$id'")->result();
    }
	
    function getBarangJual(){
        return $this->db->query ("SELECT * from tbl_barang where stok > 0")->result();
    }

    function getAllDataPenjualan(){
        return $this->db->query("SELECT
                a.kd_penjualan,
                a.tanggal_penjualan,
                a.total_harga,
			    (select count(kd_penjualan) as jum from tbl_penjualan_detail where kd_penjualan=a.kd_penjualan) as jumlah
			    from tbl_penjualan_header a
			    ORDER BY a.kd_penjualan DESC
		")->result();
    }

    function getDataPenjualan($id){
        return $this->db->query("SELECT * from tbl_penjualan_header a
                left join tbl_pelanggan b on a.kd_pelanggan=b.kd_pelanggan
                left join tbl_pegawai c on a.kd_pegawai=c.kd_pegawai
                where a.kd_penjualan = '$id'")->result();
    }

    function getBarangPenjualan($id){
        return $this->db->query("
                select a.kd_barang,a.qty,b.nm_barang,b.harga
                from tbl_penjualan_detail a
                left join tbl_barang b on a.kd_barang=b.kd_barang
                where a.kd_penjualan = '$id'")->result();
    }

    function getLapPenjualan($tgl_awal,$tgl_akhir){
        return $this->db->query("SELECT *,sum(a.total_harga) as total_all from tbl_penjualan_header a
                left join tbl_pelanggan b on a.kd_pelanggan=b.kd_pelanggan
                left join tbl_pegawai c on a.kd_pegawai=c.kd_pegawai
                where a.tanggal_penjualan between '$tgl_awal' and '$tgl_akhir'
                ")->result();
    }

    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('persons');
        $this->db->where('user_name', $username);
        $this->db->where('pwd', MD5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}