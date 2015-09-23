<?php /* 

single.product.php
1. woocommerce_before_main_content

	1. wrapper-start.php  => ouverture du conteneur 
	2. $wrap_before
	3. breadcrumb.php => Fil d'ariane
	4. $wrap_after
	
	content-single-product.php
		1. woocommerce_before_single_product
		2. content-single-product.php => ouverture du produit
			1. woocommerce_before_single_product_summary => ouverture du résumé / Intégration images
					
							product-image.php => Image principale
							product-thumbnails.php => Galerie photo
			
			2. woocommerce_single_product_summary => résumé
			
							title.php
							price.php
							short-description.php
							variable.php
							meta.php
	
			3. woocommerce_after_single_product_summary => fermeture résumé / Intégration de la partie content
			
							tabs.php  => wc-template-function.php
								description.php
								additional-information.php
									product-attributes.php
								single_product-review.php
									comments
									rating
									form
			
			
		3. meta
		4.woocommerce_after_single_product => fermeture du produit / sidebar
		

	woocommerce_sidebar
	
		1. sidebar.php
	
woocommerce_after_main_content