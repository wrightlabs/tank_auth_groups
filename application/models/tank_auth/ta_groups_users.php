<?php

require APPPATH . 'models/tank_auth/users.php';
/**
 * Extends the Tank Auth Users model with minimal support for groups
 *
 * @author John.Wright
 */
class TA_Groups_Users extends Users {
    
    /**
     * Set group_id for user.
     *
     * @param	int
     * @param	int
     * @return	bool
     */
    function set_group_id($user_id, $group_id)
    {
            $this->db->set('group_id', $group_id);
            $this->db->where('id', $user_id);

            $this->db->update($this->table_name);
            return $this->db->affected_rows() > 0;
    }
}

?>
