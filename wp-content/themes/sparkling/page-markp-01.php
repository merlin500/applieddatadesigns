<?php

/**

 * Template Name: MarkP-01

 *

 * This is the template that displays full width page without sidebar
 * @package sparkling
 */

/**
 * Tutorial: https://www.youtube.com/watch?v=nj2DKyQn6Gs&t=14s
*/

get_header(); ?>


  <div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
	
	<!-- Modal -->
	<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="bi bi-plus-circle"></i>
									</button>
		<?php
			global $wpdb;
			$row = $wpdb->get_results("select ct.CompetitionType, c.Duration, c.StartDate, c.EndDate, c.Placed, c.WeekNmbr 
				from wpsq_jj_competitions c inner join wpsq_jj_competition_types ct
				on c.CompetitionTypeId = ct.CompetitionTypeId
				Order By c.StartDate DESC, ct.CompetitionType");
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
									
								</td>
								<td><?php echo $comp->CompetitionType; ?></td>
								<td class="center-text"><?php echo $comp->Duration; ?></td>
								<td class="center-text"><?php echo $comp->StartDate; ?></td>
								<td class="center-text"><?php echo $comp->EndDate; ?></td>
								<td class="center-text"><?php echo $comp->Placed; ?></td>
								<td class="center-text"><?php echo $comp->WeekNmbr; ?></td>
							</tr>
					<?php } ?>
				</tbody>
			</table>

	</main><!-- #main -->

  </div><!-- #primary -->

</div><!-- close .main-content-inner -->

<?php get_footer(); ?>

