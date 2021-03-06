<?php namespace App\Models\Core;

use App\Models\Sximo;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class corporate_user extends Sximo  {
	
	protected $table = 'corporate_user';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public function rfps(){
		return $this->hasMany('App\Models\Rfp','user_id');
	}

	public static function querySelect(){
		
		return " 
			SELECT  corporate_user.*,  tb_groups.name 
			FROM corporate_user LEFT JOIN tb_groups ON tb_groups.group_id = corporate_user.group_id 
		";
	}	
	
	public static function queryWhere(  ){
		
		return "    WHERE corporate_user.id !=''   ";
	}
	
	public static function queryGroup(){
		return "      ";
	}

	public static function getRows( $args , $gid = 0 )
	{
       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;
	   
        extract( array_merge( array(
			'page' 		=> '0' ,
			'limit'  	=> '0' ,
			'sort' 		=> '' ,
			'order' 	=> '' ,
			'params' 	=> '' ,
			'flimit' 	=> '' ,
			'fstart' 	=> '' ,
			'global'	=> 1	  
        ), $args ));
		
		$offset = ($page-1) * $limit ;	
		$limitConditional = ($page !=0 && $limit !=0) ? "LIMIT  $offset , $limit" : '';	
		/* Added since version 5.1.7 */
		if($fstart !='' && $flimit != '')
			$limitConditional = "LIMIT  $fstart , $flimit" ;	
		/* End Added since version 5.1.7 */

		$orderConditional = ($sort !='' && $order !='') ?  " ORDER BY {$sort} {$order} " : '';

		// Update permission global / own access new ver 1.1
		$table = with(new static)->table;
		if($global == 0 )
				$params .= " AND {$table}.entry_by ='".$gid."'"; 	
		// End Update permission global / own access new ver 1.1			
        
		$rows = array();
	    $result = \DB::select( self::querySelect() . self::queryWhere(). " 
				{$params} ". self::queryGroup() ." {$orderConditional}  {$limitConditional} ");
		
		$total = \DB::select( "
				SELECT  count(corporate_user.id) as total 
			FROM tb_users LEFT JOIN tb_groups ON tb_groups.group_id = corporate_user.group_id " . self::queryWhere(). " 
				{$params} ". self::queryGroup() );
		$total = (count($total) != 0 ? $total[0]->total : 0 );

		return $results = array('rows'=> $result , 'total' => $total);	


	
	}	

	
	public static function level( $id ) {

		$group_id = 0;
		$sql = \DB::table('tb_groups')->where('group_id',$id)->get();
		if(count($sql)){
			$row = $sql[0];
			$group_id = $row->level;
		}
		return $group_id;
			
	}

}
