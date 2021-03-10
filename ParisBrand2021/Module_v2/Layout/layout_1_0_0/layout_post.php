<style>
    @media (max-width: 414px) {
        .layout_1_0_0{
            margin-top: 20px;
        }
    }
</style>
<div class="layout_1_0_0">

        <!-- Breadcrumb -->
        <?php get_template_part('Module_v2/Category/breadcrumb_1_1_0/breadcrumb_1_1_0'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Post Main -->
                <?php get_template_part('Module_v2/Post/post_2_0_0/post_2_0_0'); ?>
            </div>
            <div class="col-lg-3">
                <!-- Sidebar -->
                <?php get_sidebar(); ?>
                <!-- Sidebar -->
            </div>
        </div>
    </div>
    <?php //get_template_part('Module_v2/Home/regist_6_1_0/regist_6_1_0'); ?>
    <?php get_template_part('Module_v2/Popup/tool_1_0_0/tool_1_0_0'); ?>
</div>