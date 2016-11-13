<?php 

class city {
	function city() {
		$this->county = "Franklin";
	}
}

/* Creating the Object */

$mycity = new city();

/* show object prop*/

echo $mycity->county;

?>