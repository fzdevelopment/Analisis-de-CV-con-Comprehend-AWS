<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detalle_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get detalle by iddetalle
     */
    function get_detalle($iddetalle)
    {
        return $this->db->get_where('detalle',array('iddetalle'=>$iddetalle))->row_array();
    }
        
    /*
     * Get all detalle
     */
    function get_all_detalle()
    {
        $this->db->order_by('iddetalle', 'desc');
        return $this->db->get('detalle')->result_array();
    }
        
    /*
     * function to add new detalle
     */
    function add_detalle($params)
    {
        $this->db->insert('detalle',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update detalle
     */
    function update_detalle($iddetalle,$params)
    {
        $this->db->where('iddetalle',$iddetalle);
        return $this->db->update('detalle',$params);
    }
    
    /*
     * function to delete detalle
     */
    function delete_detalle($iddetalle)
    {
        return $this->db->delete('detalle',array('iddetalle'=>$iddetalle));
    }
}
