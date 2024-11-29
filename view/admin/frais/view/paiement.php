<?php session_start(); 
	require_once('../../../../model/bdd/connexion.php');
	require_once('../model/select-paiement.php');

	$nblmd=$pdo->prepare('SELECT SUM(montant_payer) AS prix_total FROM paiement');
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];
	$c=1;

?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once('head.php'); ?>
	</head>
	<body>
		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Mettez le code de l'élève" name="motcle" value="<?php echo ($mc) ?>"
							/>
						</div>
					</form>

				</div>
			</div>
			<div class="header-right">
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-name"><?= $_SESSION['nom']." (".$_SESSION['role'].")" ?></span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							
							<a class="dropdown-item" href="../../logout.php"
								><i class="dw dw-logout"></i> Se Déconnecter</a
							>
							<a class="dropdown-item" href="profile.php"
								><i class="dw dw-logout"></i> Retour dans le tableau de bord</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="#" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="#">
					Tableau de Bord
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<?php require_once('menu.php'); ?>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			
			<div class="xs-pd-20-10 pd-ltr-20">
			
				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">PAIEMENTS DES ELEVES DE L'ECOLE KIMBWALA &nbsp;&nbsp;
										<a href="add-paiement.php" class="btn btn-outline-success" title="Ajouter un nouveau Paiement"><i
											class="icon-copy fa fa-plus-circle"
											aria-hidden="true"
										></i></a>
										&nbsp;&nbsp;
										<a href="imprimer-paiement.php" class="btn btn-outline-primary" title="Impression Globale"><i
											class="icon-copy fa fa-print"
											aria-hidden="true"
										></i></a></div>

					<div class="table-responsive table--no-card m-b-30">
						<table class="data-table table nowrap">
							<thead>
								
								<tr>
									<th class="table-plus">ID</th>
									<th>CODE ELEVE</th>
									<th>MONTANT A PAYER</th>
									<th>MONTANT PAYER</th>
									<th>DATE PAIEMENT</th>
									<th class="datatable-nosort"></th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$ps->fetch()){?>
								<tr>
									<td><?php  echo $c;?></td>
									<td><?php  echo($et['code_eleve'])?></td>
									<td><?php if ($et['montant_a_payer']==0) {
											echo "<font color='green'>".'En Ordre'."</font>";
										}else{?>
											<?php  echo($et['montant_a_payer']."$")?>
								<?php } ?></td>
									<td><?php  echo($et['montant_payer'])?></td>
									<td><?php  echo($et['dates'])?></td>
									<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-paiement.php?id=<?php echo($et['id'])?>" class="btn btn-danger" title="suppression"><i
											class="icon-copy fa fa-trash-o"
											aria-hidden="true"
										></i></a></td>
								<!-- <td><a href="../view/editer-paie.php?id=<?php echo($et['id'])?>" class="btn btn-primary">Editer</a></td> -->
											</tr>	
									<?php
									$c++;
									 } ?>	
							</tbody>
							<tfoot style="background: black; color:white;font-size: 17px !important;text-align: center !important;">
                                            <tr>
                                                <th colspan="4" style="text-align: center;">Total Montant Payer(<?php echo $nblmd."$";?>)</th>
                                            </tr>
                                        </tfoot>
						</table>
					</div>
				</div>

				
			</div>
		</div>

		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="vendors/scripts/dashboard3.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
