<?php

use App\Artist;

use Illuminate\Database\Seeder;

	class ArtistsTableSeeder extends Seeder {
		public function run() {
			DB::table('artists') -> delete();
			Artist::create(array(
				'name' => 'Tool'
				));
		}
	}
?>	