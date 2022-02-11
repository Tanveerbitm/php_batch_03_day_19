<?php


namespace App\classes;


class DataEntry
{

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
    protected $i = 1;
    protected $first = '';
    protected $second = '';
    protected $rest;
    protected $strArray;
    protected $code;
    protected $productName;
    protected $price;
    protected $quantity;
    protected $showEditData;
    protected $trimData;
    protected $givenImage;
    protected $filterData;
    protected $dateTime;
    protected $email;
    protected $addedBy;
    protected $addedAt;


    public function __construct($post = null)
    {
        if ($post) {
            $this->code = $post['code'];
            $this->productName = $post['name'];
            $this->price = $post['price'];
            $this->quantity = $post['quantity'];
        }

    }
    public function index()
    {
        if ($this->code && $this->productName && $this->quantity && $this->price) {
            date_default_timezone_set('Asia/Dhaka');
            $this->dateTime = date("l jS \of F Y h:i:s A");
            $this->image = $this->imageUpload();
            $this->fileName = 'db.txt';
            $this->file = fopen($this->fileName, 'a');
            $this->email = $_SESSION["email"];
            $this->id = $this->getId();
            $this->data = "@$this->id@,$this->code,$this->productName,$this->price,$this->quantity,$this->image,$this->email,$this->email,$this->dateTime,$this->dateTime$";
            fwrite($this->file, $this->data);
            fclose($this->file);
            if ($this->image) {
                return 'Data Save Successfully';
            }
        }
        return null;
    }
    protected function imageUpload()
    {
        $this->imageName = $_FILES['image']['name'];
        if ($this->imageName) {
            $this->directory = 'assets/img/upload/' . $this->imageName;
            move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
            return $this->directory;
        }
        return false;

    }
    public function getAllData()
    {
        $this->fileName = 'db.txt';
        if (@file_get_contents($this->fileName)) {
            $this->data = file_get_contents($this->fileName);
            if (!$this->data) {
                echo 'error';
            }
            $this->array = explode('$', $this->data);
            foreach ($this->array as $key => $value) {
                $this->array1 = explode(',', $value);
                if ($this->array1[0]) {
                    $this->array2[$key]['id'] = $this->array1[0];
                    $this->array2[$key]['code'] = $this->array1[1];
                    $this->array2[$key]['name'] = $this->array1[2];
                    $this->array2[$key]['price'] = $this->array1[3];
                    $this->array2[$key]['quantity'] = $this->array1[4];
                    $this->array2[$key]['image'] = $this->array1[5];
                    $this->array2[$key]['addedBy'] = $this->array1[6];
                    $this->array2[$key]['modifiedBy'] = $this->array1[7];
                    $this->array2[$key]['addedAt'] = $this->array1[8];
                    $this->array2[$key]['modifiedAt'] = $this->array1[9];
                }
            }
            return $this->array2;
        } else {
            return [];
        }

    }

    public function getAllFilterData($key=null){
        if($key){
            return array_filter($this->getAllData(),function($element)use($key){
                if($element['code'] == $key){return $element;}
        });
        }
        return  $this->getAllData();

    }

    protected function getId()
    {
        $this->idFileName = 'id.txt';
        $this->IdData = (@file_get_contents($this->idFileName)) ? (@file_get_contents($this->idFileName)) : 0;
        $this->IdData += 1;
        $this->idFile = fopen('id.txt', 'w');
        fwrite($this->idFile, $this->IdData);
        fclose($this->idFile);
        return $this->IdData;
    }
    public function getupdateInfo($key = null)
    {
        $key .= ',';
        $this->fileName = 'db.txt';
        $this->content = file_get_contents($this->fileName);
        if (str_contains($this->content, $key)) {
            $this->strArray = explode($key, $this->content);
            foreach ($this->strArray as $data) {
                if ($this->i == 1) {
                    $this->first = $data;
                    $this->i++;
                } else {
                    $this->second = $data;
                    $this->showEditData = $key . $data;
                    $this->showEditData = explode(',', $this->showEditData);
                    $this->array2['id'] = $this->showEditData[0];
                    $this->array2['code'] = $this->showEditData[1];
                    $this->array2['name'] = $this->showEditData[2];
                    $this->array2['price'] = $this->showEditData[3];
                    $this->array2['quantity'] = $this->showEditData[4];
                    $this->array2['image'] = $this->showEditData[5];
                    $this->array2['addedBy'] = $this->showEditData[6];
                    $this->array2['modifiedBy'] = $this->showEditData[7];
                    $this->array2['addedAt'] = $this->showEditData[8];
                    $this->array2['modifiedAt'] = substr($this->showEditData[9], 0, strpos($this->showEditData[9],'$'));
                    $this->rest = substr($this->second, strpos($this->second, '$') + 1);
                    return ["data"=>$this->array2,
                        "trimData"=>$this->first.$this->rest];
                }
            }
        }

    }
    public function delete($key = null)
    {
        $key .= ',';
        $this->fileName = 'db.txt';
        $this->content = file_get_contents($this->fileName);
        $this->strArray = explode($key, $this->content);
        foreach ($this->strArray as $data) {
            if ($this->i == 1) {
                $this->first = $data;
                $this->i++;
            } else {
                $this->second = $data;
                $this->rest = substr($this->second, strpos($this->second, '$') + 1);
            }
        }
        $this->finalText = $this->first . $this->rest;
        $this->file = fopen($this->fileName, 'w');
        fwrite($this->file, $this->finalText);
        fclose($this->file);
    }
    public function update($post=null){
        if ($post) {
            $this->id = $post['id'];
            $this->givenImage = $post['given_image'];
            $this->trimData =$post['trim_data'];
            $this->code = $post['code'];
            $this->productName = $post['name'];
            $this->price = $post['price'];
            $this->quantity = $post['quantity'];
            $this->addedBy = $post['added_by'];
            $this->addedAt = $post['added_at'];
            date_default_timezone_set('Asia/Dhaka');
            $this->dateTime = date("l jS \of F Y h:i:s A");
            $this->email = $_SESSION["email"];

            if($this->id && $this->code && $this->productName && $this->price && $this->quantity && $this->givenImage && $this->addedBy && $this->addedAt){
                $this->image = ($this->imageUpload())?$this->imageUpload():$this->givenImage;
                $this->email = $_SESSION["email"];
                $this->fileName = 'db.txt';
                $this->data = "$this->id,$this->code,$this->productName,$this->price,$this->quantity,$this->image,$this->addedBy,$this->email,$this->addedAt,$this->dateTime$";
                $this->finalText = $this->data . $this->trimData;
                $this->file = fopen($this->fileName, 'w');
                fwrite($this->file, $this->finalText);
                fclose($this->file);
            }
        }

    }


}