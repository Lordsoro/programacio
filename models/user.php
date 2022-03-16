<?php 
class User{
 private int $id;
    private string $userName;
    private string $email;
    private string $avatarImage;

    public function __construct(int $id, string $userName, string $email,string $avatarImage)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->email= $email;
        $this->avatarImage = $avatarImage;
    }
    public function __getId()
    {
        return $this->id;
    }
    public function __getName(){
        return $this->userName;
    }
    public function __getEmail(){
        return $this->email;
    }
    public function __getImage(){
        return $this->avatarImage;
    }
    public function __setId($id)
    {
        $this->id =$id;
    }
    public function __setName($userName)
    {
        $this->userName=$userName;
    }
    public function __setEmail($email)
    {
        $this->email =$email;
    }
    public function __setImage($avatarImage)
    {
        $this->$avatarImage =$avatarImage;
    }
}

   

?>