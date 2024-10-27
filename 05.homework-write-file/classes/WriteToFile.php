<?php
class WriteToFile
{
  public $fp;
  public $file_name;

  public function __construct($file_name)
  {
    $this->file_name = $file_name;
    if (is_writable($this->file_name)) {

      if (!$this->fp = fopen($this->file_name, 'a')) {
        echo "Cannot open file ($this->file_name)";
        exit;
      }
    } else {
      echo "The file $this->file_name is not writable";
    }
  }

  public function __destruct()
  {
    fclose($this->fp);
  }

  public function write($content)
  {
    // Write $somecontent to our opened file.
    if (fwrite($this->fp, $content.PHP_EOL) === FALSE) {
      echo "Cannot write to file ($this->file_name)";
      exit;
    }

    echo "Success, wrote ($content) to file ($this->file_name)";
  }
}
