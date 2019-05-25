<?php
class ShareModel extends Model{
    public function Index()
    {
        $this->query('SELECT * FROM shareboard.shares');
        $rows = $this->resultset();
        return $rows;
    }
}