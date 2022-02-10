<?php


namespace App\classes;


class DataEntry
{
    protected $title;
    protected $authorName;
    protected $description;
    protected $image;
    protected $imageName;
    protected $directory;
    protected $fileName;
    protected $idFileName;
    protected $file;
    protected $idFile;
    protected $data;
    protected $IdData;
    protected $array;
    protected $array1;
    protected $array2;
    protected $id;
    protected $arrayData;
    protected $text;
    protected $content;
    protected $finalText;


    public function __construct($post=null)
    {
        if($post){
            $this->title=$post['title'];
            $this->authorName=$post['author_name'];
            $this->description=$post['description'];
        }

    }

    public function index(){
        if($this->title && $this->authorName && $this->description){
            $this->image = $this->imageUpload();
            $this->fileName = 'db.txt';
            $this->file=fopen($this->fileName,'a');

            $this->id = $this->getId();
            $this->data = "@$this->id@,$this->title,$this->authorName,$this->description,$this->image$";
            fwrite($this->file,$this->data);
            fclose($this->file);
            if($this->image){return 'Data Save Successfully';}
        }
        return null;
    }


    protected function imageUpload(){
        $this->imageName = $_FILES['image']['name'];
        if($this->imageName){
            $this->directory = 'assets/img/upload/'.$this->imageName;
            move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);
            return $this->directory;
        }
        return false;

    }

    public function getAllData(){
        $this->fileName = 'db.txt';
        if(@file_get_contents($this->fileName)) {
            $this->data = file_get_contents($this->fileName);
            if (!$this->data) {
                echo 'error';
            }
            $this->array = explode('$', $this->data);
            foreach ($this->array as $key => $value) {
                $this->array1 = explode(',', $value);
                if ($this->array1[0]) {
                    $this->array2[$key]['id'] = $this->array1[0];
                    $this->array2[$key]['title'] = $this->array1[1];
                    $this->array2[$key]['author'] = $this->array1[2];
                    $this->array2[$key]['description'] = $this->array1[3];
                    $this->array2[$key]['image'] = $this->array1[4];
                }
            }
            return $this->array2;
        }
        else{
            return [];
        }

    }
    protected function getId(){
        $this->idFileName = 'id.txt';
        $this->IdData = (@file_get_contents($this->idFileName))? (@file_get_contents($this->idFileName)):0;
        $this->IdData += 1;
        $this->idFile=fopen('id.txt','w');
        fwrite($this->idFile,$this->IdData);
        fclose($this->idFile);
        return $this->IdData;
    }
    public function update($key=null){

    }
    public function delete($key=null)
    {

        $this->fileName = 'db.txt';
        $this->content = file_get_contents($this->fileName);
        $this->arrayData = explode($this->content,'$');

        foreach ($this->arrayData  as $dt){
            if( str_contains($dt,$key) ){
                break;
            }
            $this->finalText .= $dt."$";
        }
        $this->file=fopen($this->fileName,'w');
        fwrite($this->file,$this->finalText);
        fclose($this->file);
    }


}