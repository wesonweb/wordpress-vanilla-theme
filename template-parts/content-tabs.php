<!-- the following code uses Advanced Custom Fields to let users create two custom field groups -
    one for the tab buttons and another for the tab panels.

    tabs_title 
    tabs_panel

    Both use repeater fields

    tabs_title
        tab_title       ===>    this is the wording for the tab button
        data_for_tab    ===>    this is what links the tab title to the relevant panel

    tabs_panel
        data_tab        ===>    this links the panel to the tab
        tab_content     ===>    the content that appears in the panel 
-->

<!-- check if there are tabs in the template -->
<?php if( have_rows('tabs_title') ): ?> 
<div class="tabs">
    <div class="tabs__sidebar" role="tablist">
        <?php while( have_rows('tabs_title') ): the_row(); /* loop through the fields within the tabs_title */
            // vars
            $title      = get_sub_field('tab_title'); /* get the ACF field for tab button title */
            $datafortab = get_sub_field('data_for_tab'); /* get the data number that will link title and panel */
        ?>
        <!-- check if there is $title and then loop through and add the content into the title -->
        <?php if( $title ): ?>
            <button class="tabs__button" data-for-tab=<?php echo $datafortab ?> role="tab" aria-selected="false" tab-index="0"><p><?php echo $title; ?></p></button>
        <?php endif; ?>
        <?php endwhile; endif;?>
    </div>

    <!-- tab panels -->
    <!-- check if there are tabs in the template -->
    <?php if( have_rows('tabs_panel') ): ?>
            <?php while( have_rows('tabs_panel') ): the_row(); /* loop through the fields within the tabs_title */
            // vars
            $datatab    = get_sub_field('data_tab'); /* get the ACF field for data tab */
            $content    = get_sub_field('tab_content'); /* get the content for the panel */
            ?>
            
            <div class="tabs__content"  role="tabpanel" data-tab="<?php echo $datatab?>">
            <!-- check if there is content  -->
            <?php if( $content ): ?>
                <!-- display the content -->
                <?php echo $content; ?>  
            <?php endif; ?>
            </div>
        <?php endwhile; endif; ?>
</div>


<!-- insert the following code into the template to display the tabs -->

<?php get_template_part( 'template-parts/content', 'tabs' ); ?>

<!-- The JS code that activates the tabs is in js/scripts.js -->