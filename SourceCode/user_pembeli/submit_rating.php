<?php

	$koneksi = new PDO("mysql:host=localhost;dbname=playbooks", "root", "");

	if(isset($_POST["rating_data"]))
	{

		$data = array(
			':id_user'		=>	$_POST["id_user"],
			':username'		=>	$_POST["username"],
			':judul'		=>	$_POST["judul"],
			':rating'		=>	$_POST["rating_data"],
			':ulasan'		=>	$_POST["ulasan"],
			':datetime'		=>	time(),
			':noseri_buku'	=>	$_POST["noseri_buku"]
		);

		$query = "
		INSERT INTO ulasan 
		(id_user, username, judul, rating, ulasan, datetime, noseri_buku) 
		VALUES (:id_user, :username, :judul, :rating, :ulasan, :datetime, :noseri_buku)
		";

		$statement = $koneksi->prepare($query) or die('Gagal');

		$statement->execute($data);

		echo "Ulasan Anda Berhasil Diulas, Terima Kasih !";

	}

	if(isset($_POST["action"]))
	{
		$average_rating = 0;
		$total_review = 0;
		$five_star_review = 0;
		$four_star_review = 0;
		$three_star_review = 0;
		$two_star_review = 0;
		$one_star_review = 0;
		$total_user_rating = 0;
		$review_content = array();

		$query = "
		SELECT * FROM ulasan GROUP BY datetime DESC
		";
		

		$result = $koneksi->query($query, PDO::FETCH_ASSOC);

		foreach($result as $row)
		{
			date_default_timezone_set('Asia/Jakarta');
			$review_content[] = array(
				'username'		=>	$row["username"],
				'judul'			=>	$row["judul"],
				'ulasan'		=>	$row["ulasan"],
				'rating'		=>	$row["rating"],
				'datetime'		=>	date('d F Y, h:i:s A', $row["datetime"])
			);

			if($row["rating"] == '5')
			{
				$five_star_review++;
			}

			if($row["rating"] == '4')
			{
				$four_star_review++;
			}

			if($row["rating"] == '3')
			{
				$three_star_review++;
			}

			if($row["rating"] == '2')
			{
				$two_star_review++;
			}

			if($row["rating"] == '1')
			{
				$one_star_review++;
			}

			$total_review++;

			$total_user_rating = $total_user_rating + $row["rating"];

		}

		$average_rating = $total_user_rating / $total_review;

		$output = array(
			'average_rating'	=>	number_format($average_rating, 1),
			'total_review'		=>	$total_review,
			'five_star_review'	=>	$five_star_review,
			'four_star_review'	=>	$four_star_review,
			'three_star_review'	=>	$three_star_review,
			'two_star_review'	=>	$two_star_review,
			'one_star_review'	=>	$one_star_review,
			'review_data'		=>	$review_content
		);

		echo json_encode($output);

	}

?>