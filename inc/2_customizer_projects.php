<?php
    //ADMIN CONFIG
	$project = tr_post_type('projects');
	$project -> setIcon('dashicons-palmtree');
	$project -> setTitlePlaceholder('Enter project name here');
    $project -> forceDisableGutenberg();
    $project -> setSupports(['title', 'page-attributes', 'revisions']);
    
    //ADMIN FIELDS
    $project -> setTitleForm(function(){
		$form = tr_form();

        //DETAILED SPECS - COLORS
        echo '<h1 style="font-weight:bolder;">Project images</h1><hr/>';
        echo $form->repeater('Project Images')->setFields([
            $form->image('Image')
            $form->image('Image Mobile')
        ]);

        echo $form->textarea('Description');
    });

	//APPLIES
	$type = tr_taxonomy('types');
    $type ->setHierarchical();
    $type ->showPostTypeAdminColumn(true);
    $type ->addPostType('projects');
    // $type ->setMainForm(function() {
    //     $form = tr_form();
    //     echo "<h1>Informations to project type page</h1>";
    //     echo $form->text('Title');
    //     echo $form->text('Description');
    //     echo $form->text('Fit');
    //     echo $form->image('Banner');
    // });


	//REGISTER
	$project->register();
?>