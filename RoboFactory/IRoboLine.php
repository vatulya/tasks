<?php

interface IRoboLine
{

	/**
	 * @param Robot $robot
	 * @param mixed $hull
	 * @return Robot
	 */
	public function setHull(Robot $robot, $hull);

	/**
	 * @param Robot $robot
	 * @param mixed $landingGear
	 * @return Robot
	 */
	public function setLandingGear(Robot $robot, $landingGear);

	/**
	 * @param Robot $robot
	 * @param mixed $engine
	 * @return Robot
	 */
	public function setEngine(Robot $robot, $engine);

	/**
	 * @param Robot $robot
	 * @param mixed $weapons
	 * @return Robot
	 */
	public function setWeapons(Robot $robot, $weapons);

}