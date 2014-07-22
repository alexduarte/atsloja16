<?php  class Carrier extends CarrierCore{
	/** @var string numero first line */
    public $id_erp;

    
    private $new_fields = array();
     public  function __construct($id_address = NULL, $id_lang = NULL){
        $this->nd_addField('id_erp', parent::TYPE_STRING,null,null,false);
 
        //nao mexer a partir daqui
        $this->nd_addNewFields();
        parent::__construct($id_address);
    }
 
    private function nd_addNewFields(){
        if(!empty($this->new_fields)){
            foreach($this->new_fields as $name=>$def){
                $this->$name = '';
                parent::$definition['fields'][$name] = $def;
            }
        }
    }
 
    private function nd_addField($fieldname, $type, $validate, $size=null, $required=false){
        $this->new_fields[$fieldname] = array(
            'type' => $type,
            'validate' => $validate,
            'required' => $required,
            'size' => $size
        );
    }
}