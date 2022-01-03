<?php

require_once "File.php";

class FileService
{

    private string $url;
    private string $token;

    public function __construct(string $url, string $token)
    {
        if(!$url){
            throw new \Exception("Url must be define");
        }

        if(!preg_match('/http.*/', $url)){
            throw new \Exception("Url is not a valid url format");
        }

        $this->url = $url;
        $this->token = $token;

    }


    private function decodeMimeType(){
        return "mime";
    }

    public function getFiles(){

        $files = [];

        $files[] = new File("nombre1","jpg","/asdasd&asdasd");
        $files[] = new File("nombre2","jpg","/asdasd&asdasd");
        $files[] = new File("nombre3","jpg","/asdasd&asdasd");


        return $files;
    }

    public function getFile($id){
        //TODO busco por ID

        $mime = $this->decodeMimeType();

        //Es lo mismo
        echo $this->getUrl();
        echo $this->url;

        $file = new File("nombre","jpg","/asdasd&asdasd");


        return $file;
    }

    public function createFile(){

        $file = new File("nombre","jpg","/asdasd&asdasd");

        return $file;

    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }



}
