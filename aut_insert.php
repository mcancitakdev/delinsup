<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5">
			<form action="important/operation.php" method="POST" id="insertForm" enctype="multipart/form-data">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<?php 
				$i=1;
				foreach ($lang as $la)
				{
					//We have prepared our tab menu according to the language
					?>
					<li class="nav-item" role="presentation">
						<button class="nav-link <?php echo ($i==1) ? ' active' : '';  ?>" id="pills-<?php echo $i; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $i; ?>" type="button" role="tab" aria-controls="pills-<?php echo $i; ?>" aria-selected="true"><?php echo stripslashes($la['name']); ?></button>
					</li>
					<?php
					$i++; 
				}
				?>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<?php 
					$i=1; 
					foreach ($lang as $la)
					{?>
						<div class="tab-pane fade<?php echo ($i==1) ? ' show active' : '';  ?>" id="pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $i; ?>-tab">
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="f_title_<?php echo $la['title']; ?>"  aria-describedby="emailHelp" placeholder="Enter Title">
							</div>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="f_text1_<?php echo $la['title']; ?>" placeholder="Enter Text1">
							</div>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="f_text2_<?php echo $la['title']; ?>" placeholder="Enter Text2">
							</div>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="f_text3_<?php echo $la['title']; ?>" placeholder="Enter Text3">
							</div>
						</div>
						<?php 
					$i++;
					}?>
				</div>
				<button type="submit" class="btn btn-primary" name="insertForm">Submit</button>
			</form>
		</div>
		<div class="col-md-6"></div>
	</div>
</div>

