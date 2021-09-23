<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url();?>/css/admin.css" type="text/css">
	<title>Admin meni</title>
</head>
<body>
	<nav id="navbar">
		<h1>Admin meni</h1>
		<ul>
			<li><a href="/domaci/public/dashboard">Profil</a></li>
			<li><a href="/domaci/public/login/logout">Izloguj se</a></li>
			<li><a href="/domaci/public/dodajKnjige">Dodaj knjige</a></li>
		</ul>
	</nav>
	<main>
		<h1>Korisnici</h1>
		<section>
			<table>
				<tr>
					<th>Ime:</th>
					<th>Prezime:</th>
					<th>Privilegije:<?php echo $_SESSION['isAdmin'] ? "Admin" : "Korisnik";?></th>
					<th>Datum kreiranja:</th>
					<th>Akcije:</th>
				</tr>
			<?php if($user_data): 
				foreach($user_data as $user): 
					if($user['isAdmin']!='0'):?>
					<tr class="disabled">
						<td><?= $user['first_name'] ?></td>
						<td><?= $user['last_name'] ?></td>
						<td><?= $user['isAdmin'] ? "Admin" : "Korisnik";?></td>
						<td><?= $user['registration_date'] ?></td>
						<td>Izmeni privilegije -- Obriši </td>
					</tr>
					<?php else:?>
					<tr class="normal">
						<td><?= $user['first_name'] ?></td>
						<td><?= $user['last_name'] ?></td>
						<td><?= $user['isAdmin'] ? "Admin" : "Korisnik";?></td>
						<td><?= $user['registration_date'] ?></td>
						<td><a href="/domaci/public/admin/edit/<?=$user['user_id'];?>"> Izmeni privilegije</a> <a href="/domaci/public/admin/delete/<?=$user['user_id'];?>"> Obriši </a></td>
					</tr>
					<?php endif; ?>
				<?php endforeach;?>
			<?php endif; ?>
			</table>
		</section>
		
	</main>
