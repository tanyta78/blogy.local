<?php
class ShareModel extends Model{
    public function Index()
    {
        $this->query('SELECT * FROM shareboard.shares ORDER BY create_date DESC');
        $rows = $this->resultset();
        return $rows;
    }

    public function Add()
    {
        //Sanitize POST
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        if($post['submit']){
            if($post['title'] == '' || $post['body'] = ''  || $post['link']== ''){
                Messages::setMsg('Please fill all fields!', 'error');
                return;
            }


            $this->query('INSERT INTO shareboard.shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']); 
            $this->bind(':body', $post['body']); 
            $this->bind(':link', $post['link']); 
            $this->bind(':user_id', 1); 
            $this->execute();

            if($this->lastInsertId())
            {
                //redirect
                header('Location: '.ROOT_URL.'shares');
            }
        }
        return;
    }
}