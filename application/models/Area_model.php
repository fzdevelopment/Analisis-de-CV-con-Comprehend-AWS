<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Area_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get area by idarea
     */
    function get_area($idarea)
    {
        return $this->db->get_where('area',array('idarea'=>$idarea))->row_array();
    }
        
    /*
     * Get all area
     */
    function get_all_area()
    {
        $this->db->order_by('idarea', 'desc');
        return $this->db->get('area')->result_array();
    }
        
    /*
     * function to add new area
     */
    function add_area($params)
    {
        $this->db->insert('area',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update area
     */
    function update_area($idarea,$params)
    {
        $this->db->where('idarea',$idarea);
        return $this->db->update('area',$params);
    }
    
    /*
     * function to delete area
     */
    function delete_area($idarea)
    {
        return $this->db->delete('area',array('idarea'=>$idarea));
    }
}