<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Human
{
  private $year;
  protected $beauty = 'Xau';
  public function getOld() :int
  {
    return $this->calculateOld();
  }

  private function calculateOld() :int
  {
    return 2020-$this->year;
  }
  public function setYear($year) :int
  {
     return $this->year = $year;
  }
}

class Chieu extends Human
{
  public function seeBeauty() :string
  {
    return $this->beauty;
  }
}

$human = new Human;
$human->setYear(1999);
echo($human->getOld()); // kết quả là 21
echo ("<br>");
$chieu = new Chieu;
echo($chieu->seeBeauty()); // kết quả là Xau
?>
</body>
</html>