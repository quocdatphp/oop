<?php 
namespace math\circle;

use math\constant;
use DateTime;
	require_once __DIR__ . '/../constant.php';

class circle 
	{
		public function getAreaCircle($radius)
		{
			return Constant::PI * $radius * $radius;
		}

		public function getTimeStamp()
		{
			$dateTime = new DateTime();
			return $dateTime->getTimestamp();
		}
	}
 ?>