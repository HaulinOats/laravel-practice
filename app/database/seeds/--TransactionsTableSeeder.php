<?php

class TransactionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('transactions')->delete();

		$transactions = array(
			[
				"name"   	  => "Transaction 1",
				"amount" 	  => "22.53",
				"user_id"     => "1"
			],
			[
				"name"   	  => "Transaction 2",
				"amount" 	  => "21.21",
				"user_id"     => "1"
			],
			[
				"name"   	  => "Transaction 3",
				"amount" 	  => "216.34",
				"user_id"     => "3"
			],
			[
				"name"   	  => "Transaction 4",
				"amount" 	  => "16.68",
				"user_id"     => "4"
			],
			[
				"name"   	  => "Transaction 5",
				"amount" 	  => "78.91",
				"user_id"     => "4"
			],
			[
				"name"   	  => "Transaction 6",
				"amount" 	  => "71.62",
				"user_id"     => "4"
			],
			[
				"name"   	  => "Transaction 7",
				"amount" 	  => "102.04",
				"user_id"     => "3"
			],
			[
				"name"   	  => "Transaction 8",
				"amount" 	  => "100.01",
				"user_id"     => "3"
			],
			[
				"name"   	  => "Transaction 9",
				"amount" 	  => "88.17",
				"user_id"     => "2"
			],
			[
				"name"   	  => "Transaction 10",
				"amount" 	  => "42.08",
				"user_id"     => "2"
			],
			[
				"name"   	  => "Transaction 11",
				"amount" 	  => "22.98",
				"user_id"     => "2"
			]

		);

		// Uncomment the below to run the seeder
		DB::table('transactions')->insert($transactions);
	}

}
