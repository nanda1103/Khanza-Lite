<?php
include('../../../../config.php');

$antriloket = fetch_assoc(query("SELECT antrian FROM antriprioritas"));
$antriloket = $antriloket['antrian'] - 1;
if($antriloket == '-1') {
  echo '0';
} else {
  echo $antriloket;
}

?>
