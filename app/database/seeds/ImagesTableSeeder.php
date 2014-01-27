<?php

class ImagesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('images')->delete();

		$images = array(
			
		);

		// Uncomment the below to run the seeder
		DB::table('images')->insert($images);
	}

}
