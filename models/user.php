<?php
class UserModel extends Model{
    public function register()
    {
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        $password = md5($post['password']);
     
        if($post['submit']){
            if($post['name'] == '' || $post['email'] = ''  || $post['password']== ''){
                Messages::setMsg('Please fill all fields!', 'error');
                return;
            }

            $this->query('INSERT INTO shareboard.users (name, email, password) VALUES (:name, :email, :password)');
            $this->bind(':name', $post['name']); 
            $this->bind(':email', $post['email']); 
            $this->bind(':password', $password); 
            $this->execute();

            if($this->lastInsertId())
            {
                //redirect
                header('Location: '.ROOT_URL.'users/login');
            }
        }
        return;
    }

    public function login()
    {
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if($post['submit']){
            $this->query('SELECT * FROM shareboard.users WHERE email = :email AND password = :password');
           
            $this->bind(':email', $post['email']); 
            $this->bind(':password', $password); 
            $this->execute();

            $row = $this->single();
            if($row)
            {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "email" => $row['email']
                );
                //redirect
                header('Location: '.ROOT_URL.'shares');
            }else{
                Messages :: setMsg('Incorect login', 'error');
               
            }
        }
        return;
    }
   
}