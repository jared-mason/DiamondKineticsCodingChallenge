<?php

class Card{

	var $firstName;
	var $lastName;
	var $imageUrl;
	var $position;
	var $bio;
	var $avgMaxBarrelSpeed;
	var $avgMaxHandSpeed;
	var $avgAttackAngle;

	function __construct($firstName, $lastName, $imageUrl, $position, $bio, $avgMaxBarrelSpeed, $avgMaxHandSpeed, $avgAttackAngle)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->imageUrl = $imageUrl;
		$this->position = $position;
		$this->bio = $bio;
		$this->avgMaxBarrelSpeed = $avgMaxBarrelSpeed;
		$this->avgMaxHandSpeed = $avgMaxHandSpeed;
		$this->avgAttackAngle = $avgAttackAngle;
		
	}

	function drawCard(){
	
	echo"
		<div class='baseball-card-container'>
		<div class='baseball-card'>
			<div class='baseball-card-front'>
				<img src='$this->imageUrl' alt='Bill'>
			</div>
			<div class='baseball-card-back'>
				<p>
				$this->firstName $this->lastName <br>
				Position: $this->position <br><br>
				$this->bio <br><br>
				Average Max Barrel Speed: $this->avgMaxBarrelSpeed mph<br>
				Average Max Hand Speed: $this->avgMaxHandSpeed mph<br>
				Average Attack Angle: $this->avgAttackAngle degrees
				</p>
			</div>
		</div>
		</div>
		";

	}

}

?>


