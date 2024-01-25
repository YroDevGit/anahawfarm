<?php
function showSuccess($title){
?>
<div>
			<div align="center">
				<div style="margin-top: 100px;">
					<div>
						<div>
								
								<div>
									<div>
										<span style="color: green; font-size: 40px;">✔</span>
									</div>
								</div>

								<div style="margin-top: 10px;">
									<div>
										<div>
											<span><?php echo $title; ?></span>
										</div>
									</div>
								</div>

								

								<div align="center">
									<div style="width: 300px; margin-top: 20px;">
										<div>
											<marquee><span style="color: red;">Page will load, please wait.....</span></marquee>
										</div>
									</div>
								</div>

						</div>
					</div>
				</div>
			</div>
		</div>
<?php
}



 ?>