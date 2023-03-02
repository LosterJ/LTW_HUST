<!DOCTYPE html>
<html>
<head>
    <title>Page</title>
</head>
<body>
    <?php
    class Page {
        private $page;
        private $title;
        private $year;
        private $copyright;

        function __construct($title, $year, $copyright) {
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }

        private function addHeader() {
            $this->page = file_get_contents("Header.php");
        }

        private function addFooter() {
            $this->page .= file_get_contents("Footer.php");
            $this->page .= "<span>".$this->title.$this->year.$this->copyright."</span></footer>";
        }

        public function addContent(string $a) {
            $this->page .= file_get_contents("Content.php");
            $this->page .= "<content><p>$a</p></content>";
        }

        public function get() {
            $a = "";
            $this->addHeader();
            $this->addContent($a);
            $this->addFooter();
            return $this->page;
        }
    }
    ?>
</body>
</html>