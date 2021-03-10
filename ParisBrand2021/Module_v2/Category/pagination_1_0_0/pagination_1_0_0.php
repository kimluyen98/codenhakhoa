<style>
    .pagination_1_0_0 {
        text-align: center;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }
    
    .pagination_1_0_0 .page_nav {
        padding-left: 0
    }
    
    .pagination_1_0_0 .wp-pagenavi {
        display: flex;
        justify-content: center;
        padding: 20px 0;
        flex-wrap: wrap;
        align-items: center;
    }
    .pagination_1_0_0 .wp-pagenavi a{
        background: #ccc;
        color: #333;
        margin: 0 4px;
        display: block;
        padding: 3px 8px !important;
        border-radius: 4px;
        transition: 0.6s;
    }
    
    .pagination_1_0_0 .wp-pagenavi span.current{
        width: auto !important;
        height: auto !important;
    }
    
    .pagination_1_0_0 .wp-pagenavi span{
        background: #ccc;
        color: #333;
        margin: 0 4px;
        display: block;
        padding: 3px 8px !important;
        border-radius: 4px;
        transition: 0.6s;
    }

    .pagination_1_0_0 .wp-pagenavi a,  .pagination_1_0_0 .wp-pagenavi span{
        text-decoration: none;
        border: 1px solid #BFBFBF;
        margin: 2px;
    }
    
    .pagination_1_0_0 .wp-pagenavi .pages {
        margin: 0 10px 0 0;
    }
    
    .pagination_1_0_0 .wp-pagenavi .current {
        background: #004689;
        color: #fff
    }
    
    .pagination_1_0_0 .wp-pagenavi .current,
    .pagination_1_0_0 .wp-pagenavi a {
        border: 1px solid #004689;
        display: block;
    }
    @media (max-width: 414px){
        .pagination_1_0_0 .wp-pagenavi .pages{
            display: none;
        }
        .pagination_1_0_0 .first, .pagination_1_0_0 .last{
            display: none !important;
        }
    }
</style>

<div class="pagination_1_0_0">
    <?php wp_pagenavi('','',''); ?>
</div>


