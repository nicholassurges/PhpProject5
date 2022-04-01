<?php

class Books {
    public $author;
	public $catId;
    public $isbn;
    public $price;
    public $title;

    public function populate($result) {
        $this->author = $result["author"];
        $this->catId = $result["catID"];
        $this->isbn = $result["isbn"];
        $this->price = $result["price"];
        $this->title = $result["title"];
    }

    function printAsRow() {
        print "<tr>\n";
        $this->printRow($this->isbn);
        $this->printRow($this->author);
        $this->printRow($this->title);
        $this->printRow($this->price);
      
        print "</tr>\n";
    }

    function printAsRowFiltered($filter) {
        print "<tr>\n";
        if (array_key_exists("author", $filter)) {
            $this->printRow($this->author);
        }
        if (array_key_exists("catID", $filter)) {
        $this->printRow($this->catId);
        }
        if (array_key_exists("isbn", $filter)) {
        $this->printRow($this->isbn);
        }
        if (array_key_exists("price", $filter)) {
        $this->printRow($this->price);
        }
        if (array_key_exists("title", $filter)) {
        $this->printRow($this->title);
        }
        print "</tr>\n";
    }

    function printRow($data) {
        print "<td>" . $data . "</td>\n";
    }
}
?>