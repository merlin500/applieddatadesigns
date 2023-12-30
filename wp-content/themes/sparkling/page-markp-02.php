<?php

/**

 * Template Name: MarkP-02

 *

 * This is the template that displays full width page without sidebar
 * @package sparkling
 */

/**
 * Tutorial: https://www.youtube.com/watch?v=nj2DKyQn6Gs&t=14s
*/

get_header(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- <script>
	jQuery(document).ready(function($) {
		const myModal = document.getElementById('exampleModal')
		//const myInput = document.getElementById('myInput')
		console.log("THIS IS WORKING");
		myModal.addEventListener('shown.bs.modal', () => {
  		//myInput.focus()
		})
	});
</script> -->

  <div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
	<!-- Modal -->

		<?php
			global $wpdb;
			$row = $wpdb->get_results("select c.CompetitionId, ct.CompetitionType, c.Duration, 
				c.StartDate, c.EndDate,	c.Placed, c.WeekNmbr 
				from wpsq_jj_competitions c inner join wpsq_jj_competition_types ct
				on c.CompetitionTypeId = ct.CompetitionTypeId
				Order By c.StartDate DESC, ct.CompetitionType");
			$scores = $wpdb->get_results("SELECT PlayerName, Score
				FROM wpsq_jj_player_scores ps inner join wpsq_jj_players p
				on ps.PlayerId = p.PlayerId
				Where CompetitionId = 58
				Order By Score DESC");
		?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="center-text">Scores</th>
						<th>Type</th>
						<th class="center-text">Duration</th>
						<th class="center-text">Started</th>
						<th class="center-text">Ended</th>
						<th class="center-text">Placed</th>
						<th class="center-text">Week</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($row as $comp) { ?>
							<tr>
<!-- https://www.w3schools.com/PHP/func_date_date_format.asp -->
								<td class="center-text">
 									<button type="button" comp-id="<?php echo $comp->CompetitionId; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="bi bi-plus-circle"></i>
									</button>									
								</td>
								<td><?php echo $comp->CompetitionType; ?></td>
								<td class="center-text"><?php echo $comp->Duration; ?></td>
								<td class="center-text"><?php echo date('m/d/y h:i a', strtotime($comp->StartDate)); ?></td>
								<td class="center-text"><?php echo date('m/d/y h:i a', strtotime($comp->EndDate)); ?></td>
								<td class="center-text"><?php echo $comp->Placed; ?></td>
								<td class="center-text"><?php echo $comp->WeekNmbr; ?></td>
<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Player Scores</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div><!-- Modal -->								
							</tr>						
					<?php } ?>	
				</tbody><!-- #tbody -->
			</table><!-- #table -->
	</main><!-- #main -->

  </div><!-- #primary -->

</div><!-- close .main-content-inner -->

<?php get_footer(); ?>

