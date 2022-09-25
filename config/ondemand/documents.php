<?php
add_action( 'property_dir', 'property_dir' );
function property_dir() {

    // Get All Folders
    $folders = get_field( 'folder_lists' );

    ?>
    <div uk-overflow-auto>
        <ul uk-accordion>
            <?php
            foreach ( $folders as $folder ) :

                // Get All Uploaded Documents
                $files = $folder['document_file'];
                // Start to Fetch All Sub-Documents
                $subfolders = $folder['sub_folder_lists']; 

                // Filter folder for Tax Packages
                if ( str_contains($folder['folder_name'], 'Tax Packages') ) {
                    $data_folder_label = 'data-folder="tax-packages"';
                } else {
                    $data_folder_label = '';
                }

                ?>
                <li <?php echo $data_folder_label; ?>>
                    <a href="#" class="uk-accordion-title"> <?php echo $folder['folder_name'] ?> </a>
                    <div class="uk-accordion-content">
                        <?php
                        // Check if Sub-Folder ready
                        if ( $subfolders ) : ?>
                        <ul uk-accordion>
                            <?php 
                            foreach ( $subfolders as $sfolder ) :
                                // Get All Uploaded Sub-Documents
                                $sfiles = $sfolder['sub_document_file']; ?>
                                <li>
                                    <a href="#" class="uk-accordion-title"> <?php echo $sfolder['sub_folder_name']; ?> </a>
                                    <div class="uk-accordion-content">
                                        <ul>
                                            <?php foreach ( $sfiles as $sfile ) : ?>
                                            <li><a href="<?php echo $sfile['url']; ?>" target="_blank"><?php echo $sfile['title']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php 
                            endforeach; ?>
                        </ul>
                        <?php endif;

                        // End of Sub-Directory ?>
                        <ul>
                            <?php 
                            foreach ( $files as $file ) : ?>
                                <li><a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['title']; ?></a></li>
                            <?php 
                            endforeach; ?>
                        </ul>
                    </div>
                </li>
            <?php
            endforeach; ?>
        </ul>
    </div>

<?php } // End Property Directory

add_action( 'property_dir_alert', 'property_dir_alert', 10, 1 );
function property_dir_alert( $postID ) { 

    if ( wp_is_mobile() ) {
        $btn_action = 'Tap';
    } else {
        $btn_action = 'Click';
    }

    // Get All Folders
    $folders = get_field( 'folder_lists' );

    foreach ( $folders as $folder ) {
        // Is Sub-Directory Active
        $isfolder = $folder['ff_featured'];

    }
    if ( $isfolder ) :
        // Get the Updated Folder Name
        $folder_label = $folder['folder_name']; 

        // Create expiration for the alert notification
        $timestamp = get_the_modified_time('Y-m-d H:i:s'); // get post modified date
        $start_date = date($timestamp);
        $expires = strtotime('+3 days', strtotime($timestamp)); // set expiration to 3 days only

        $date_diff = ($expires-strtotime($timestamp)) / 86400;

        if ( round($date_diff, 0) <= '0' ) {
            $hidden = 'hidden';
            $doc_featured = 1;
        } else {
            $hidden = '';
            $doc_featured = 0;
        } ?>

        <aside class="uk-alert-warning uk-link-reset uk-text-small" uk-alert <?php echo $hidden; ?>>
            <a href="#" class="uk-alert-close" uk-close aria-label="Close Alert Notification"></a>
            <strong><?php echo $folder_label; ?></strong> document was uploaded, and it is ready to download.
            <a href="#" class="highlight-folder | uk-text-bold"><?php echo $btn_action; ?> here to view document</a>
        </aside>
        <!-- <?php echo round($date_diff, 0)." days left"; ?> -->

    <?php 
    endif;

    $od_docs = get_posts([ 'post_type' => [ 'nas-ondemand' ], 'p' => $postID, 'post_status' => [ 'publish' ] ]);

    if ( $doc_featured ) {
        update_field( 'field_632eb5eebe96a', false, $postID );
    }

} // End Property Directory Alert


// add_filter('upload_dir', 'awesome_wallpaper_dir');
// $upload_dir = wp_upload_dir();
// $uploads = [ $upload_dir['baseurl'], $upload_dir['url'], 'property-documents/'.$post->post_name ];

// filter('acfe/upload_dir/key=field_5f39c8c5f3718', $uploads, $field);