<?php


class qa_html_theme_layer extends qa_html_theme_base {

    public function q_item_stats($q_item)
    {
            // You can also use $post['views_raw'] to get a raw integer count of views

            if (isset($q_item['views'])) {
                    $q_item['views']['prefix'] = '<img src="' .
QA_HTML_THEME_LAYER_URLTOROOT . 'ojo.svg" width="16" height="16"
style="vertical-align: middle">&nbsp';
            }

            parent::q_item_stats($q_item);
    }

    public function q_view_stats($q_view)
    {
            if (isset($q_view['views'])) {
                    $q_view['views']['prefix'] = '<img src="' .
QA_HTML_THEME_LAYER_URLTOROOT . 'ojo.svg" width="16" height="16"
style="vertical-align: middle">&nbsp';
            }

            parent::q_view_stats($q_view);
    }
	
}
/*
   Omit PHP closing tag to help avoid accidental output
 */







