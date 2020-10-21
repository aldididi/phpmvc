 <?php

 class Mahasiswa_model{
    /* private $mhs = [
        [
            "nama" => "aldy",
            "nim" => "1234",
            "jurusan" => "Matematika"
        ],
        [
            "nama" => "didi",
            "nim" => "345",
            "jurusan" => "Fisika"
        ],
        [
            "nama" => "Shazqia",
            "nim" => "4567",
            "jurusan" => "Elektro"
        ],
        [
            "nama" => "Syafina",
            "nim" => "5876",
            "jurusan" => "Bispro"
        ],
        [
            "nama" => "Suci",
            "nim" => "328654",
            "jurusan" => "Akuntansi"
        ],

    ]; */
    private $dbh; //database handler
    private $stmt; //statment

    public function __construct(){
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try{
         $this->dbh = new PDO($dsn, 'root', '');   
        } catch(PDOException $e){
            die($e -> getMessage());
        }
    }

     public function getAllMahasiswa(){
         $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
         $this->stmt->execute();
         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
     }
 }