 <?php
                // Custom post_type
               /* $labels = array(
                  'name' => 'Prestataire',
                  'singular_name' => 'Prestataire',
                  'add_new' => 'Ajouter un Prestataire',
                  'add_new_item' => 'Ajouter un nouveau Prestataire',
                  'edit_item' => 'Editer un Prestataire',
                  'new_item' => 'Nouveau prestataire',
                  'view_item' => 'Voir le Prestataire',
                  'search_items' => 'Rechercher un Prestataire',
                  'not_found' =>  'Aucun Prestataire',
                  'not_found_in_trash' => 'Aucun Prestataire dans la corbeille', 
                  'parent_item_colon' => '',
                  'menu_name' => 'Prestataire'
                );
                
                $args = array(
                  'labels' => $labels,
                  'public' => true,
                  'publicly_queryable' => true,
                  'show_ui' => true, 
                  'show_in_menu' => true, 
                  'query_var' => true,
                  'rewrite' => true,
                  'capability_type' => 'post',  
                  'has_archive' => true, 
                  'hierarchical' => true,
                  'menu_position' => 5,
                  'supports' => array('title','editor','author','thumbnail')
                ); 
                register_post_type('prestataire',$args);
                */
				
				/************************************************************/
                // Custom taxonomy TYPES DE REGIONS
                $labels = array(
                    'name' =>  'Toutes les regions',
                    'singular_name' => 'Type',
                    'search_items' =>  'Rechercher un type',
                    'all_items' => 'Tous les types',
                    'parent_item' => 'Type parent',
                    'parent_item_colon' => 'Type parent,',
                    'edit_item' => 'Editer ce type', 
                    'update_item' => 'Mettre à jour ce type',
                    'add_new_item' => 'Ajouter un nouveau type',
                    'new_item_name' => 'Nouveau type',
                    'menu_name' => 'Types de regions',
                ); 	
                
                register_taxonomy('type',array('region'), array(
                    'hierarchical' => true,
                    'labels' => $labels,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'type', 'with_front' => false)
                ));  
				
				/************************************************************/
		         // Custom taxonomy TYPE DE VILLAS
                $labels_villa = array(
                    'name' =>  'Types de villa',
                    'singular_name' => 'Type de villa',
                    'search_items' =>  'Rechercher un type',
                    'all_items' => 'Tous les types',
                    'parent_item' => 'Type parent',
                    'parent_item_colon' => 'Type parent,',
                    'edit_item' => 'Editer ce type', 
                    'update_item' => 'Mettre à jour ce type',
                    'add_new_item' => 'Ajouter un nouveau type',
                    'new_item_name' => 'Nouveau type',
                    'menu_name' => 'Types de villas',
                ); 	
                
                register_taxonomy('type_villa',array('product'), array(
                    'hierarchical' => true,
                    'labels' => $labels_villa,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'type_villa', 'with_front' => false)
                ));  		
				
				
				/************************************************************/
		         // Custom taxonomy ARCHITECTURE
                $architecture = array(
                    'name' =>  'Architecture',
                    'singular_name' => 'Architecture',
                    'search_items' =>  'Rechercher une architecture',
                    'all_items' => 'Toutes les architectures',
                    'parent_item' => 'Architecture parent',
                    'parent_item_colon' => 'Architecture parent,',
                    'edit_item' => 'Editer cette architecture', 
                    'update_item' => 'Mettre à jour cette architecture',
                    'add_new_item' => 'Ajouter une nouvelle architecture',
                    'new_item_name' => 'Nouvelle architecture',
                    'menu_name' => 'Architectures',
                ); 	
                
                register_taxonomy('architecture',array('product'), array(
                    'hierarchical' => true,
                    'labels' => $architecture,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'architecture', 'with_front' => false)
                ));  		
				
				/************************************************************/
		         // Custom taxonomy DECORATION INTERIEURE
                $deco = array(
                    'name' =>  'Decoration',
                    'singular_name' => 'Decoration',
                    'search_items' =>  'Rechercher une decoration',
                    'all_items' => 'Toutes les decorations',
                    'parent_item' => 'Decoration parent',
                    'parent_item_colon' => 'Decoration parent,',
                    'edit_item' => 'Editer cette decoration', 
                    'update_item' => 'Mettre à jour cette decoration',
                    'add_new_item' => 'Ajouter une nouvelle decoration',
                    'new_item_name' => 'Nouvelle decoration',
                    'menu_name' => 'Decorations',
                ); 	
                
                register_taxonomy('decoration',array('product'), array(
                    'hierarchical' => true,
                    'labels' => $deco,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'decoration', 'with_front' => false)
                )); 
				
								
				/************************************************************/
		         // Custom taxonomy EMPLACEMENT / ENVIRONNEMENT
                $emplacement = array(
                    'name' =>  'Emplacement',
                    'singular_name' => 'Emplacement',
                    'search_items' =>  'Rechercher un emplacement',
                    'all_items' => 'Tous les emplacements',
                    'parent_item' => 'Emplacement parent',
                    'parent_item_colon' => 'Emplacement parent,',
                    'edit_item' => 'Editer cet emplacement', 
                    'update_item' => 'Mettre à jour cet emplacement',
                    'add_new_item' => 'Ajouter un nouvel emplacement',
                    'new_item_name' => 'Nouvel emplacement',
                    'menu_name' => 'Emplacements',
                ); 	
                
                register_taxonomy('emplacement',array('product'), array(
                    'hierarchical' => true,
                    'labels' => $emplacement,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'emplacement', 'with_front' => false)
                ));  
				
				/************************************************************/
		         // Custom taxonomy VUE DE LA VILLA
                $vue = array(
                    'name' =>  'Vue',
                    'singular_name' => 'Vue',
                    'search_items' =>  'Rechercher une vue',
                    'all_items' => 'Toutes les vues',
                    'parent_item' => 'Vue parent',
                    'parent_item_colon' => 'Vue parent,',
                    'edit_item' => 'Editer cette vue', 
                    'update_item' => 'Mettre à jour cette vue',
                    'add_new_item' => 'Ajouter une nouvelle vue',
                    'new_item_name' => 'Nouvelle vue',
                    'menu_name' => 'Vues de la villa',
                ); 	
                
                register_taxonomy('vue',array('product'), array(
                    'hierarchical' => true,
                    'labels' => $vue,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'vue', 'with_front' => false)
                )); 
				
				/************************************************************/
		         // Custom taxonomy PERSONNEL ET ORGANISATION
                $personnel = array(
                    'name' =>  'Personnel',
                    'singular_name' => 'Personnel',
                    'search_items' =>  'Rechercher un personnel',
                    'all_items' => 'Tous les emplacements',
                    'parent_item' => 'Personnel parent',
                    'parent_item_colon' => 'Personnel parent,',
                    'edit_item' => 'Editer cet personnel', 
                    'update_item' => 'Mettre à jour cet personnel',
                    'add_new_item' => 'Ajouter un nouvel personnel',
                    'new_item_name' => 'Nouvel personnel',
                    'menu_name' => 'Personnel et Organisation',
                ); 	
				
                register_taxonomy('personnel',array('product'), array(
                    'hierarchical' => true,
                    'labels' => $personnel,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'personnel', 'with_front' => false)
                )); 
        
		

        