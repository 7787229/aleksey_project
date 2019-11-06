<?php

/* extension/module/octhemeoption.twig */
class __TwigTemplate_a74d92092890b7cefce6367df267acdb65d7229713e66e6f637a7621603bc449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-octhemeoption\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb theme-option-breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        ";
        if ((isset($context["error_load_file"]) ? $context["error_load_file"] : null)) {
            // line 23
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_load_file"]) ? $context["error_load_file"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 27
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 32
        echo "        <div class=\"theme-option-container\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil fw\"></i>";
        // line 35
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 38
        echo (isset($context["action_import"]) ? $context["action_import"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-data\" class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"file\" />
                    </form>

                    <form action=\"";
        // line 42
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-octhemeoption\" class=\"form-horizontal\">
                        <ul class=\"nav nav-tabs general-sections\">
                            <li class=\"active\"><a href=\"#tab-configuration\" data-toggle=\"tab\">";
        // line 44
        echo (isset($context["tab_configuration"]) ? $context["tab_configuration"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 45
        echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-category\" data-toggle=\"tab\">";
        // line 46
        echo (isset($context["tab_category"]) ? $context["tab_category"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-stylesheet\" data-toggle=\"tab\">";
        // line 47
        echo (isset($context["tab_stylesheet"]) ? $context["tab_stylesheet"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-database\"  data-toggle=\"tab\">";
        // line 48
        echo (isset($context["tab_backup"]) ? $context["tab_backup"] : null);
        echo "</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-configuration\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-image\">";
        // line 53
        echo (isset($context["entry_loader_image"]) ? $context["entry_loader_image"] : null);
        echo "</label>
                                    <div class=\"col-sm-9\">
                                        <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 55
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\"  /></a>
                                        <input type=\"hidden\" name=\"module_octhemeoption_loader_img\" value=\"";
        // line 56
        echo (isset($context["module_octhemeoption_loader_img"]) ? $context["module_octhemeoption_loader_img"] : null);
        echo "\" id=\"input-image\" />
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-configuration-store\">";
        // line 61
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <select id=\"input-configuration-store\" class=\"form-control\">
                                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 65
            echo "                                                <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" ";
            if (($this->getAttribute($context["store"], "store_id", array()) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                        </select>
                                    </div>
                                </div>

                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 72
            echo "                                    <div id=\"frm-configuration-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"frm-configuration\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-catalog-";
            // line 74
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_catalog"]) ? $context["entry_catalog"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_catalog[";
            // line 76
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-catalog-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    ";
            // line 77
            if ($this->getAttribute((isset($context["module_octhemeoption_catalog"]) ? $context["module_octhemeoption_catalog"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 78
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 79
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 81
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 82
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 84
            echo "                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-rotator-";
            // line 89
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_rotator"]) ? $context["entry_rotator"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_rotator[";
            // line 91
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-rotator-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    ";
            // line 92
            if ($this->getAttribute((isset($context["module_octhemeoption_rotator"]) ? $context["module_octhemeoption_rotator"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 93
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 94
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 96
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 97
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 99
            echo "                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-quickview-";
            // line 104
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_quickview"]) ? $context["entry_quickview"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_quickview[";
            // line 106
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-quickview-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    ";
            // line 107
            if ($this->getAttribute((isset($context["module_octhemeoption_quickview"]) ? $context["module_octhemeoption_quickview"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 108
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 109
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 111
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 112
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 114
            echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                            </div>

                            <div class=\"tab-pane\" id=\"tab-stylesheet\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-stylesheet-store\">";
        // line 123
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <select id=\"input-stylesheet-store\" class=\"form-control\">
                                            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 127
            echo "                                                <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" ";
            if (($this->getAttribute($context["store"], "store_id", array()) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                        </select>
                                    </div>
                                </div>

                                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 134
            echo "                                    <div id=\"frm-stylesheet-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"frm-stylesheet\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-status-";
            // line 136
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_status[";
            // line 138
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-status-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control style-status\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 139
            if ($this->getAttribute((isset($context["module_octhemeoption_status"]) ? $context["module_octhemeoption_status"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 140
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 141
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 143
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 144
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 146
            echo "                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"row stylesheet-settings\" id=\"stylesheet-settings-";
            // line 150
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                            <div class=\"col-sm-2\">
                                                <ul class=\"nav nav-pills nav-stacked\" id=\"stylesheet\">
                                                    <li class=\"active\"><a href=\"#tab-body-";
            // line 153
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_body"]) ? $context["tab_body"] : null);
            echo "</a></li>
                                                    <li><a href=\"#tab-a-";
            // line 154
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_a"]) ? $context["tab_a"] : null);
            echo "</a></li>
                                                    <li><a href=\"#tab-header-";
            // line 155
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_header"]) ? $context["tab_header"] : null);
            echo "</a></li>
                                                </ul>
                                            </div>
                                            <div class=\"col-sm-10\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"tab-body-";
            // line 160
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-body-color\">";
            // line 162
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-body-color\" class=\"jscolor form-control\" name=\"module_octhemeoption_body[";
            // line 164
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][color]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_body"]) ? $context["module_octhemeoption_body"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "color", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-body-font-family\">";
            // line 168
            echo (isset($context["entry_font_family"]) ? $context["entry_font_family"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-body-font-family\" class=\"form-control\" name=\"module_octhemeoption_body[";
            // line 170
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][font_family]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_body"]) ? $context["module_octhemeoption_body"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "font_family", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-body-font-size\">";
            // line 174
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-body-font-size\" class=\"form-control\" name=\"module_octhemeoption_body[";
            // line 176
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_body"]) ? $context["module_octhemeoption_body"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "font_size", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-body-font-weight\">";
            // line 180
            echo (isset($context["entry_font_weight"]) ? $context["entry_font_weight"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-body-font-weight\" class=\"form-control\" name=\"module_octhemeoption_body[";
            // line 182
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][font_weight]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_body"]) ? $context["module_octhemeoption_body"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "font_weight", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-line-height\">";
            // line 186
            echo (isset($context["entry_line_height"]) ? $context["entry_line_height"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-line-height\" class=\"form-control\" name=\"module_octhemeoption_body[";
            // line 188
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][line_height]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_body"]) ? $context["module_octhemeoption_body"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "line_height", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"tab-pane\" id=\"tab-a-";
            // line 193
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-color\">";
            // line 195
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-color\" class=\"jscolor form-control\" name=\"module_octhemeoption_a_tag[";
            // line 197
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][color]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_a_tag"]) ? $context["module_octhemeoption_a_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "color", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-hover-color\">";
            // line 201
            echo (isset($context["entry_hover_color"]) ? $context["entry_hover_color"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-hover-color\" class=\"jscolor form-control\" name=\"module_octhemeoption_a_tag[";
            // line 203
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][hover_color]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_a_tag"]) ? $context["module_octhemeoption_a_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "hover_color", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"tab-pane\" id=\"tab-header-";
            // line 208
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-hcolor\">";
            // line 210
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-hcolor\" class=\"jscolor form-control\" name=\"module_octhemeoption_header_tag[";
            // line 212
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][color]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "color", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-hfont-family\">";
            // line 216
            echo (isset($context["entry_font_family"]) ? $context["entry_font_family"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-hfont-family\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 218
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][font_family]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "font_family", array());
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-2 control-label\" for=\"input-hfont-weight\">";
            // line 222
            echo (isset($context["entry_font_weight"]) ? $context["entry_font_weight"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" id=\"input-hfont-weight\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 224
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][font_weight]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "font_weight", array());
            echo "\" />
                                                            </div>
                                                        </div>

                                                        <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\"><a href=\"#tab-h1-";
            // line 229
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo "h1";
            echo "</a></li>
                                                            <li><a href=\"#tab-h2-";
            // line 230
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo "h2";
            echo "</a></li>
                                                            <li><a href=\"#tab-h3-";
            // line 231
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo "h3";
            echo "</a></li>
                                                            <li><a href=\"#tab-h4-";
            // line 232
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo "h4";
            echo "</a></li>
                                                            <li><a href=\"#tab-h5-";
            // line 233
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo "h5";
            echo "</a></li>
                                                            <li><a href=\"#tab-h6-";
            // line 234
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo "h6";
            echo "</a></li>
                                                        </ul>
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-h1-";
            // line 237
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-2 control-label\" for=\"input-h1-font-size\">";
            // line 239
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"text\" id=\"input-h1-font-size\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 241
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][h1][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "h1", array()), "font_size", array());
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-h2-";
            // line 245
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-2 control-label\" for=\"input-h2-font-size\">";
            // line 247
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"text\" id=\"input-h2-font-size\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 249
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][h2][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "h2", array()), "font_size", array());
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-h3-";
            // line 253
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-2 control-label\" for=\"input-h3-font-size\">";
            // line 255
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"text\" id=\"input-h3-font-size\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 257
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][h3][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "h3", array()), "font_size", array());
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-h4-";
            // line 261
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-2 control-label\" for=\"input-h4-font-size\">";
            // line 263
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"text\" id=\"input-h4-font-size\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 265
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][h4][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "h4", array()), "font_size", array());
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-h5-";
            // line 269
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-2 control-label\" for=\"input-h5-font-size\">";
            // line 271
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"text\" id=\"input-h5-font-size\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 273
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][h5][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "h5", array()), "font_size", array());
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-h6-";
            // line 277
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-2 control-label\" for=\"input-h6-font-size\">";
            // line 279
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"text\" id=\"input-h6-font-size\" class=\"form-control\" name=\"module_octhemeoption_header_tag[";
            // line 281
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "][h6][font_size]\" value=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module_octhemeoption_header_tag"]) ? $context["module_octhemeoption_header_tag"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), "h6", array()), "font_size", array());
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                            </div>

                            <div class=\"tab-pane\" id=\"tab-product\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-product-store\">";
        // line 296
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <select id=\"input-product-store\" class=\"form-control\">
                                            ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 300
            echo "                                                <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" ";
            if (($this->getAttribute($context["store"], "store_id", array()) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                                        </select>
                                    </div>
                                </div>

                                ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 307
            echo "                                    <div id=\"frm-product-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"frm-product\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-swatches-";
            // line 309
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_use_swatches"]) ? $context["entry_use_swatches"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_use_swatches[";
            // line 311
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-swatches-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 312
            if ($this->getAttribute((isset($context["module_octhemeoption_use_swatches"]) ? $context["module_octhemeoption_use_swatches"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 313
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 314
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 316
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 317
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 319
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-dimension-";
            // line 323
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_icon_swatches"]) ? $context["entry_icon_swatches"] : null);
            echo "</label>
                                            <div class=\"col-sm-3\">
                                                <input type=\"text\" value=\"";
            // line 325
            echo $this->getAttribute((isset($context["module_octhemeoption_swatches_width"]) ? $context["module_octhemeoption_swatches_width"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_octhemeoption_swatches_width[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
            echo "\" class=\"form-control\" />
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <input type=\"text\" value=\"";
            // line 328
            echo $this->getAttribute((isset($context["module_octhemeoption_swatches_height"]) ? $context["module_octhemeoption_swatches_height"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_octhemeoption_swatches_height[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
            echo "\" class=\"form-control\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-color-option-";
            // line 332
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_color_option"]) ? $context["entry_color_option"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_swatches_option[";
            // line 334
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-color-option-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 336
                echo "                                                        ";
                if ((($this->getAttribute($context["option"], "type", array()) == "select") || ($this->getAttribute($context["option"], "type", array()) == "radio"))) {
                    // line 337
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["option"], "option_id", array());
                    echo "\" ";
                    if (($this->getAttribute((isset($context["module_octhemeoption_swatches_option"]) ? $context["module_octhemeoption_swatches_option"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["option"], "option_id", array()))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</option>
                                                        ";
                }
                // line 339
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-zoom-";
            // line 344
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_use_zoom"]) ? $context["entry_use_zoom"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_use_zoom[";
            // line 346
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control zoom-status\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 347
            if ($this->getAttribute((isset($context["module_octhemeoption_use_zoom"]) ? $context["module_octhemeoption_use_zoom"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 348
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 349
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 351
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 352
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 354
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group zoom-settings zoom-settings-";
            // line 357
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-zoom-position-";
            // line 358
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_position"]) ? $context["entry_zoom_position"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_zoom_position[";
            // line 360
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-position-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    <option value=\"outside\" ";
            // line 361
            if (($this->getAttribute((isset($context["module_octhemeoption_zoom_position"]) ? $context["module_octhemeoption_zoom_position"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "outside")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_outside"]) ? $context["text_outside"] : null);
            echo "</option>
                                                    <option value=\"inside\" ";
            // line 362
            if (($this->getAttribute((isset($context["module_octhemeoption_zoom_position"]) ? $context["module_octhemeoption_zoom_position"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "inside")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_inside"]) ? $context["text_inside"] : null);
            echo "</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group zoom-settings zoom-settings-";
            // line 366
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-zoom-space-";
            // line 367
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_space"]) ? $context["entry_zoom_space"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" id=\"input-zoom-space-";
            // line 369
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" name=\"module_octhemeoption_zoom_space[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_octhemeoption_zoom_space"]) ? $context["module_octhemeoption_zoom_space"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" placeholder=\"";
            echo (isset($context["text_zoom_space"]) ? $context["text_zoom_space"] : null);
            echo "\" />
                                                <span><i class=\"fa fa-exclamation-circle\"></i> <i>";
            // line 370
            echo (isset($context["text_for_space"]) ? $context["text_for_space"] : null);
            echo "</i></span>
                                            </div>
                                        </div>
                                        <div class=\"form-group zoom-settings zoom-settings-";
            // line 373
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-zoom-title-";
            // line 374
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_title"]) ? $context["entry_zoom_title"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_zoom_title[";
            // line 376
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-title-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 377
            if ($this->getAttribute((isset($context["module_octhemeoption_zoom_title"]) ? $context["module_octhemeoption_zoom_title"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 378
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 379
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 381
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 382
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 384
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group \" style=\"display:none !important;\" >
                                            <label class=\"col-sm-3 control-label\" for=\"input-zoom-background-";
            // line 388
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_bg"]) ? $context["entry_zoom_bg"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_zoom_background_status[";
            // line 390
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-background-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 391
            if ($this->getAttribute((isset($context["module_octhemeoption_zoom_background_status"]) ? $context["module_octhemeoption_zoom_background_status"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 392
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 393
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 395
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 396
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 398
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group \" style=\"display:none !important;\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-zoom-background-color-";
            // line 402
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_bg_color"]) ? $context["entry_zoom_bg_color"] : null);
            echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"text\" id=\"input-zoom-background-color-";
            // line 404
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control jscolor\" name=\"module_octhemeoption_zoom_background_color[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_octhemeoption_zoom_background_color"]) ? $context["module_octhemeoption_zoom_background_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                            </div>
                                            <label class=\"col-sm-2 control-label\" for=\"input-zoom-background-opacity-";
            // line 406
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_bgopacity"]) ? $context["entry_zoom_bgopacity"] : null);
            echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"text\" id=\"input-zoom-background-opacity-";
            // line 408
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" name=\"module_octhemeoption_zoom_background_opacity[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_octhemeoption_zoom_background_opacity"]) ? $context["module_octhemeoption_zoom_background_opacity"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                            </div>

                            <div class=\"tab-pane\" id=\"tab-category\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-category-store\">";
        // line 417
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <select id=\"input-category-store\" class=\"form-control\">
                                            ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 421
            echo "                                                <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" ";
            if (($this->getAttribute($context["store"], "store_id", array()) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "                                        </select>
                                    </div>
                                </div>
                                ";
        // line 426
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 427
            echo "                                    <div id=\"frm-category-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"frm-category\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-custom-view-";
            // line 429
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_custom_view"]) ? $context["entry_custom_view"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_custom_view[";
            // line 431
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-custom-view-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 432
            if ($this->getAttribute((isset($context["module_octhemeoption_custom_view"]) ? $context["module_octhemeoption_custom_view"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 433
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 434
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 436
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 437
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 439
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-cview-";
            // line 443
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_category_view"]) ? $context["entry_category_view"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_category_view[";
            // line 445
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-cview-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    <option value=\"list\" ";
            // line 446
            if (($this->getAttribute((isset($context["module_octhemeoption_category_view"]) ? $context["module_octhemeoption_category_view"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "list")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_list"]) ? $context["text_list"] : null);
            echo "</option>
                                                    <option value=\"grid\" ";
            // line 447
            if (($this->getAttribute((isset($context["module_octhemeoption_category_view"]) ? $context["module_octhemeoption_category_view"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "grid")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_grid"]) ? $context["text_grid"] : null);
            echo "</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-columns-";
            // line 452
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_columns_grid"]) ? $context["entry_columns_grid"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_grid_columns[";
            // line 454
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-columns-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    <option value=\"2\" ";
            // line 455
            if (($this->getAttribute((isset($context["module_octhemeoption_grid_columns"]) ? $context["module_octhemeoption_grid_columns"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "2")) {
                echo " selected=\"selected\" ";
            }
            echo ">2</option>
                                                    <option value=\"3\" ";
            // line 456
            if (($this->getAttribute((isset($context["module_octhemeoption_grid_columns"]) ? $context["module_octhemeoption_grid_columns"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "3")) {
                echo " selected=\"selected\" ";
            }
            echo ">3</option>
                                                    <option value=\"4\" ";
            // line 457
            if (($this->getAttribute((isset($context["module_octhemeoption_grid_columns"]) ? $context["module_octhemeoption_grid_columns"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "4")) {
                echo " selected=\"selected\" ";
            }
            echo ">4</option>
                                                    <option value=\"5\" ";
            // line 458
            if (($this->getAttribute((isset($context["module_octhemeoption_grid_columns"]) ? $context["module_octhemeoption_grid_columns"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "5")) {
                echo " selected=\"selected\" ";
            }
            echo ">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-layered-";
            // line 463
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_use_layered"]) ? $context["entry_use_layered"] : null);
            echo "</label>
                                            <div class=\"col-sm-3\">
                                                <select name=\"module_octhemeoption_use_layered[";
            // line 465
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-layered-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 466
            if ($this->getAttribute((isset($context["module_octhemeoption_use_layered"]) ? $context["module_octhemeoption_use_layered"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 467
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 468
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 470
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 471
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 473
            echo "                                                </select>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <select name=\"module_octhemeoption_layered_column[";
            // line 476
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                                                    <option value=\"left\" ";
            // line 477
            if (($this->getAttribute((isset($context["module_octhemeoption_layered_column"]) ? $context["module_octhemeoption_layered_column"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "left")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_column_left"]) ? $context["text_column_left"] : null);
            echo "</option>
                                                    <option value=\"right\" ";
            // line 478
            if (($this->getAttribute((isset($context["module_octhemeoption_layered_column"]) ? $context["module_octhemeoption_layered_column"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "right")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_column_right"]) ? $context["text_column_right"] : null);
            echo "</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-cquickview-";
            // line 483
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_use_quickview"]) ? $context["entry_use_quickview"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_use_cate_quickview[";
            // line 485
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-cquickview-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                    ";
            // line 486
            if ($this->getAttribute((isset($context["module_octhemeoption_use_cate_quickview"]) ? $context["module_octhemeoption_use_cate_quickview"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                // line 487
                echo "                                                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\">";
                // line 488
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            } else {
                // line 490
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                        <option value=\"0\" selected=\"selected\">";
                // line 491
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                                    ";
            }
            // line 493
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-product-image-";
            // line 497
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_product_image"]) ? $context["entry_product_image"] : null);
            echo "</label>
                                            <div class=\"col-sm-6\">
                                                <select name=\"module_octhemeoption_image_effect[";
            // line 499
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-product-image-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                    <option value=\"none\" ";
            // line 500
            if (($this->getAttribute((isset($context["module_octhemeoption_image_effect"]) ? $context["module_octhemeoption_image_effect"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "none")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_none"]) ? $context["text_none"] : null);
            echo "</option>
                                                    <option value=\"rotator\" ";
            // line 501
            if (($this->getAttribute((isset($context["module_octhemeoption_image_effect"]) ? $context["module_octhemeoption_image_effect"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "rotator")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_use_rotator"]) ? $context["text_use_rotator"] : null);
            echo "</option>
                                                    <option value=\"swatches\" ";
            // line 502
            if (($this->getAttribute((isset($context["module_octhemeoption_image_effect"]) ? $context["module_octhemeoption_image_effect"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "swatches")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo (isset($context["text_use_swatches"]) ? $context["text_use_swatches"] : null);
            echo "</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-product-image-";
            // line 507
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_icon_swatches"]) ? $context["entry_icon_swatches"] : null);
            echo "</label>
                                            <div class=\"col-sm-3\">
                                                <input type=\"text\" value=\"";
            // line 509
            echo $this->getAttribute((isset($context["module_octhemeoption_cate_swatches_width"]) ? $context["module_octhemeoption_cate_swatches_width"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_octhemeoption_cate_swatches_width[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
            echo "\" class=\"form-control\" />
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <input type=\"text\" value=\"";
            // line 512
            echo $this->getAttribute((isset($context["module_octhemeoption_cate_swatches_height"]) ? $context["module_octhemeoption_cate_swatches_height"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_octhemeoption_cate_swatches_height[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
            echo "\" class=\"form-control\" />
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        echo "                            </div>

                            <div class=\"tab-pane\" id=\"tab-database\" >
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
        // line 521
        echo (isset($context["entry_theme_database"]) ? $context["entry_theme_database"] : null);
        echo "</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <select id=\"input-theme\" class=\"form-control\" name=\"file\">
                                                    ";
        // line 526
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["database"]) ? $context["database"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 527
            echo "                                                        <option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["value"];
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <button type=\"button\" id=\"button-import\" class=\"btn btn-primary btn-theme-option\"><i class=\"fa fa-upload\"></i> ";
        // line 532
        echo (isset($context["button_import"]) ? $context["button_import"] : null);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });

        // Module Configuration of Stores
        \$('.frm-configuration').hide();
        \$('#frm-configuration-0').show();
        \$('#input-configuration-store').change(function () {
            var store_id = \$(this).val();
            \$('.frm-configuration').hide();
            \$('#frm-configuration-' + store_id).show();
        });

        // Stylesheet of Stores
        \$('.frm-stylesheet').hide();
        \$('#frm-stylesheet-0').show();
        \$('#input-stylesheet-store').change(function () {
            var store_id = \$(this).val();
            \$('.frm-stylesheet').hide();
            \$('#frm-stylesheet-' + store_id).show();
        });

        // Enable / Disable Stylesheet Settings
        \$('.stylesheet-settings').hide();
        var style_selection = \$('.style-status');
        style_selection.each(function () {
            var store_id = \$(this).data('store-id');
            var status = parseInt(\$('#input-status-' + store_id).val());

            if(status === 1) {
                \$('#stylesheet-settings-' + store_id).show();
            } else {
                \$('#stylesheet-settings-' + store_id).hide();
            }
        });

        style_selection.on('change', function () {
            var store_id = \$(this).data('store-id');
            var status = parseInt(\$('#input-status-' + store_id).val());

            if(status === 1) {
                \$('#stylesheet-settings-' + store_id).show();
            } else {
                \$('#stylesheet-settings-' + store_id).hide();
            }
        });

        // Product Configuration of Stores
        \$('.frm-product').hide();
        \$('#frm-product-0').show();
        \$('#input-product-store').change(function () {
            var store_id = \$(this).val();
            \$('.frm-product').hide();
            \$('#frm-product-' + store_id).show();
        });

        // Category Configuration of Stores
        \$('.frm-category').hide();
        \$('#frm-category-0').show();
        \$('#input-category-store').change(function () {
            var store_id = \$(this).val();
            \$('.frm-category').hide();
            \$('#frm-category-' + store_id).show();
        });

        // Enable / Disable Zoom Settings
        \$('.zoom-settings').hide();
        var zoom_status = \$('.zoom-status');
        zoom_status.each(function () {
            var store_id = \$(this).data('store-id');
            var status = parseInt(\$('#input-zoom-' + store_id).val());

            if(status === 1) {
                \$('.zoom-settings-' + store_id).show();
            } else {
                \$('.zoom-settings-' + store_id).hide();
            }
        });

        zoom_status.change(function () {
            var store_id = \$(this).data('store-id');
            var status = parseInt(\$('#input-zoom-' + store_id).val());

            if(status === 1) {
                \$('.zoom-settings-' + store_id).show();
            } else {
                \$('.zoom-settings-' + store_id).hide();
            }
        });
    });
</script>

<script type=\"text/javascript\"><!--
    \$('#button-import').on('click', function() {

        \$('#form-data input[name=\\'file\\']').val(\$('#input-theme').val());

        \$('#form-data').submit();
    });
    //--></script>
";
        // line 655
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/octhemeoption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1668 => 655,  1542 => 532,  1537 => 529,  1526 => 527,  1522 => 526,  1514 => 521,  1508 => 517,  1493 => 512,  1483 => 509,  1476 => 507,  1464 => 502,  1456 => 501,  1448 => 500,  1442 => 499,  1435 => 497,  1429 => 493,  1424 => 491,  1419 => 490,  1414 => 488,  1409 => 487,  1407 => 486,  1399 => 485,  1392 => 483,  1380 => 478,  1372 => 477,  1368 => 476,  1363 => 473,  1358 => 471,  1353 => 470,  1348 => 468,  1343 => 467,  1341 => 466,  1333 => 465,  1326 => 463,  1316 => 458,  1310 => 457,  1304 => 456,  1298 => 455,  1292 => 454,  1285 => 452,  1273 => 447,  1265 => 446,  1259 => 445,  1252 => 443,  1246 => 439,  1241 => 437,  1236 => 436,  1231 => 434,  1226 => 433,  1224 => 432,  1216 => 431,  1209 => 429,  1203 => 427,  1199 => 426,  1194 => 423,  1179 => 421,  1175 => 420,  1169 => 417,  1163 => 413,  1148 => 408,  1141 => 406,  1132 => 404,  1125 => 402,  1119 => 398,  1114 => 396,  1109 => 395,  1104 => 393,  1099 => 392,  1097 => 391,  1089 => 390,  1082 => 388,  1076 => 384,  1071 => 382,  1066 => 381,  1061 => 379,  1056 => 378,  1054 => 377,  1046 => 376,  1039 => 374,  1035 => 373,  1029 => 370,  1019 => 369,  1012 => 367,  1008 => 366,  997 => 362,  989 => 361,  983 => 360,  976 => 358,  972 => 357,  967 => 354,  962 => 352,  957 => 351,  952 => 349,  947 => 348,  945 => 347,  937 => 346,  930 => 344,  924 => 340,  918 => 339,  906 => 337,  903 => 336,  899 => 335,  893 => 334,  886 => 332,  875 => 328,  865 => 325,  858 => 323,  852 => 319,  847 => 317,  842 => 316,  837 => 314,  832 => 313,  830 => 312,  822 => 311,  815 => 309,  809 => 307,  805 => 306,  799 => 302,  784 => 300,  780 => 299,  774 => 296,  768 => 292,  749 => 281,  744 => 279,  739 => 277,  730 => 273,  725 => 271,  720 => 269,  711 => 265,  706 => 263,  701 => 261,  692 => 257,  687 => 255,  682 => 253,  673 => 249,  668 => 247,  663 => 245,  654 => 241,  649 => 239,  644 => 237,  636 => 234,  630 => 233,  624 => 232,  618 => 231,  612 => 230,  606 => 229,  596 => 224,  591 => 222,  582 => 218,  577 => 216,  568 => 212,  563 => 210,  558 => 208,  548 => 203,  543 => 201,  534 => 197,  529 => 195,  524 => 193,  514 => 188,  509 => 186,  500 => 182,  495 => 180,  486 => 176,  481 => 174,  472 => 170,  467 => 168,  458 => 164,  453 => 162,  448 => 160,  438 => 155,  432 => 154,  426 => 153,  420 => 150,  414 => 146,  409 => 144,  404 => 143,  399 => 141,  394 => 140,  392 => 139,  384 => 138,  377 => 136,  371 => 134,  367 => 133,  361 => 129,  346 => 127,  342 => 126,  336 => 123,  330 => 119,  320 => 114,  315 => 112,  310 => 111,  305 => 109,  300 => 108,  298 => 107,  292 => 106,  285 => 104,  278 => 99,  273 => 97,  268 => 96,  263 => 94,  258 => 93,  256 => 92,  250 => 91,  243 => 89,  236 => 84,  231 => 82,  226 => 81,  221 => 79,  216 => 78,  214 => 77,  208 => 76,  201 => 74,  195 => 72,  191 => 71,  185 => 67,  170 => 65,  166 => 64,  160 => 61,  152 => 56,  148 => 55,  143 => 53,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  114 => 42,  107 => 38,  101 => 35,  96 => 32,  88 => 28,  85 => 27,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-octhemeoption" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb theme-option-breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if error_load_file %}*/
/*             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_load_file }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="theme-option-container">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-pencil fw"></i>{{ text_edit }}</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form action="{{ action_import }}" method="post" enctype="multipart/form-data" id="form-data" class="form-horizontal">*/
/*                         <input type="hidden" name="file" />*/
/*                     </form>*/
/* */
/*                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-octhemeoption" class="form-horizontal">*/
/*                         <ul class="nav nav-tabs general-sections">*/
/*                             <li class="active"><a href="#tab-configuration" data-toggle="tab">{{ tab_configuration }}</a></li>*/
/*                             <li><a href="#tab-product" data-toggle="tab">{{ tab_product }}</a></li>*/
/*                             <li><a href="#tab-category" data-toggle="tab">{{ tab_category }}</a></li>*/
/*                             <li><a href="#tab-stylesheet" data-toggle="tab">{{ tab_stylesheet }}</a></li>*/
/*                             <li><a href="#tab-database"  data-toggle="tab">{{ tab_backup }}</a></li>*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab-configuration">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="input-image">{{ entry_loader_image }}</label>*/
/*                                     <div class="col-sm-9">*/
/*                                         <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title=""  /></a>*/
/*                                         <input type="hidden" name="module_octhemeoption_loader_img" value="{{ module_octhemeoption_loader_img }}" id="input-image" />*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="input-configuration-store">{{ entry_store }}</label>*/
/*                                     <div class="col-sm-6">*/
/*                                         <select id="input-configuration-store" class="form-control">*/
/*                                             {% for store in stores %}*/
/*                                                 <option value="{{ store.store_id }}" {% if(store.store_id == 0) %}selected="selected"{% endif %}>{{ store.name }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 {% for store in stores %}*/
/*                                     <div id="frm-configuration-{{ store.store_id }}" class="frm-configuration">*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-catalog-{{ store.store_id }}">{{ entry_catalog }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_catalog[{{ store.store_id }}]" id="input-catalog-{{ store.store_id }}" class="form-control">*/
/*                                                     {% if module_octhemeoption_catalog[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-rotator-{{ store.store_id }}">{{ entry_rotator }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_rotator[{{ store.store_id }}]" id="input-rotator-{{ store.store_id }}" class="form-control">*/
/*                                                     {% if module_octhemeoption_rotator[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-quickview-{{ store.store_id }}">{{ entry_quickview }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_quickview[{{ store.store_id }}]" id="input-quickview-{{ store.store_id }}" class="form-control">*/
/*                                                     {% if module_octhemeoption_quickview[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/* */
/*                             <div class="tab-pane" id="tab-stylesheet">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="input-stylesheet-store">{{ entry_store }}</label>*/
/*                                     <div class="col-sm-6">*/
/*                                         <select id="input-stylesheet-store" class="form-control">*/
/*                                             {% for store in stores %}*/
/*                                                 <option value="{{ store.store_id }}" {% if(store.store_id == 0) %}selected="selected"{% endif %}>{{ store.name }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 {% for store in stores %}*/
/*                                     <div id="frm-stylesheet-{{ store.store_id }}" class="frm-stylesheet">*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-status-{{ store.store_id }}">{{ entry_status }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_status[{{ store.store_id }}]" id="input-status-{{ store.store_id }}" class="form-control style-status" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_status[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="row stylesheet-settings" id="stylesheet-settings-{{ store.store_id }}">*/
/*                                             <div class="col-sm-2">*/
/*                                                 <ul class="nav nav-pills nav-stacked" id="stylesheet">*/
/*                                                     <li class="active"><a href="#tab-body-{{ store.store_id }}" data-toggle="tab">{{ tab_body }}</a></li>*/
/*                                                     <li><a href="#tab-a-{{ store.store_id }}" data-toggle="tab">{{ tab_a }}</a></li>*/
/*                                                     <li><a href="#tab-header-{{ store.store_id }}" data-toggle="tab">{{ tab_header }}</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <div class="tab-content">*/
/*                                                     <div class="tab-pane active" id="tab-body-{{ store.store_id }}">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-body-color">{{ entry_color }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-body-color" class="jscolor form-control" name="module_octhemeoption_body[{{ store.store_id }}][color]" value="{{ module_octhemeoption_body[store.store_id].color }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-body-font-family">{{ entry_font_family }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-body-font-family" class="form-control" name="module_octhemeoption_body[{{ store.store_id }}][font_family]" value="{{ module_octhemeoption_body[store.store_id].font_family }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-body-font-size">{{ entry_font_size }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-body-font-size" class="form-control" name="module_octhemeoption_body[{{ store.store_id }}][font_size]" value="{{ module_octhemeoption_body[store.store_id].font_size }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-body-font-weight">{{ entry_font_weight }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-body-font-weight" class="form-control" name="module_octhemeoption_body[{{ store.store_id }}][font_weight]" value="{{ module_octhemeoption_body[store.store_id].font_weight }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-line-height">{{ entry_line_height }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-line-height" class="form-control" name="module_octhemeoption_body[{{ store.store_id }}][line_height]" value="{{ module_octhemeoption_body[store.store_id].line_height }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/* */
/*                                                     <div class="tab-pane" id="tab-a-{{ store.store_id }}">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-color">{{ entry_color }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-color" class="jscolor form-control" name="module_octhemeoption_a_tag[{{ store.store_id }}][color]" value="{{ module_octhemeoption_a_tag[store.store_id].color }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-hover-color">{{ entry_hover_color }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-hover-color" class="jscolor form-control" name="module_octhemeoption_a_tag[{{ store.store_id }}][hover_color]" value="{{ module_octhemeoption_a_tag[store.store_id].hover_color }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/* */
/*                                                     <div class="tab-pane" id="tab-header-{{ store.store_id }}">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-hcolor">{{ entry_color }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-hcolor" class="jscolor form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][color]" value="{{ module_octhemeoption_header_tag[store.store_id].color }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-hfont-family">{{ entry_font_family }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-hfont-family" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][font_family]" value="{{ module_octhemeoption_header_tag[store.store_id].font_family }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-2 control-label" for="input-hfont-weight">{{ entry_font_weight }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" id="input-hfont-weight" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][font_weight]" value="{{ module_octhemeoption_header_tag[store.store_id].font_weight }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <ul class="nav nav-tabs">*/
/*                                                             <li class="active"><a href="#tab-h1-{{ store.store_id }}" data-toggle="tab">{{ 'h1' }}</a></li>*/
/*                                                             <li><a href="#tab-h2-{{ store.store_id }}" data-toggle="tab">{{ 'h2' }}</a></li>*/
/*                                                             <li><a href="#tab-h3-{{ store.store_id }}" data-toggle="tab">{{ 'h3' }}</a></li>*/
/*                                                             <li><a href="#tab-h4-{{ store.store_id }}" data-toggle="tab">{{ 'h4' }}</a></li>*/
/*                                                             <li><a href="#tab-h5-{{ store.store_id }}" data-toggle="tab">{{ 'h5' }}</a></li>*/
/*                                                             <li><a href="#tab-h6-{{ store.store_id }}" data-toggle="tab">{{ 'h6' }}</a></li>*/
/*                                                         </ul>*/
/*                                                         <div class="tab-content">*/
/*                                                             <div class="tab-pane active" id="tab-h1-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-2 control-label" for="input-h1-font-size">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="text" id="input-h1-font-size" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][h1][font_size]" value="{{ module_octhemeoption_header_tag[store.store_id].h1.font_size }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="tab-pane" id="tab-h2-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-2 control-label" for="input-h2-font-size">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="text" id="input-h2-font-size" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][h2][font_size]" value="{{ module_octhemeoption_header_tag[store.store_id].h2.font_size }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="tab-pane" id="tab-h3-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-2 control-label" for="input-h3-font-size">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="text" id="input-h3-font-size" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][h3][font_size]" value="{{ module_octhemeoption_header_tag[store.store_id].h3.font_size }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="tab-pane" id="tab-h4-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-2 control-label" for="input-h4-font-size">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="text" id="input-h4-font-size" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][h4][font_size]" value="{{ module_octhemeoption_header_tag[store.store_id].h4.font_size }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="tab-pane" id="tab-h5-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-2 control-label" for="input-h5-font-size">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="text" id="input-h5-font-size" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][h5][font_size]" value="{{ module_octhemeoption_header_tag[store.store_id].h5.font_size }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="tab-pane" id="tab-h6-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-2 control-label" for="input-h6-font-size">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="text" id="input-h6-font-size" class="form-control" name="module_octhemeoption_header_tag[{{ store.store_id }}][h6][font_size]" value="{{ module_octhemeoption_header_tag[store.store_id].h6.font_size }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/* */
/*                             <div class="tab-pane" id="tab-product">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="input-product-store">{{ entry_store }}</label>*/
/*                                     <div class="col-sm-6">*/
/*                                         <select id="input-product-store" class="form-control">*/
/*                                             {% for store in stores %}*/
/*                                                 <option value="{{ store.store_id }}" {% if(store.store_id == 0) %}selected="selected"{% endif %}>{{ store.name }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 {% for store in stores %}*/
/*                                     <div id="frm-product-{{ store.store_id }}" class="frm-product">*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-swatches-{{ store.store_id }}">{{ entry_use_swatches }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_use_swatches[{{ store.store_id }}]" id="input-swatches-{{ store.store_id }}" class="form-control" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_use_swatches[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-dimension-{{ store.store_id }}">{{ entry_icon_swatches }}</label>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <input type="text" value="{{ module_octhemeoption_swatches_width[store.store_id] }}" name="module_octhemeoption_swatches_width[{{ store.store_id }}]" placeholder="{{ entry_width }}" class="form-control" />*/
/*                                             </div>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <input type="text" value="{{ module_octhemeoption_swatches_height[store.store_id] }}" name="module_octhemeoption_swatches_height[{{ store.store_id }}]" placeholder="{{ entry_height }}" class="form-control" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-color-option-{{ store.store_id }}">{{ entry_color_option }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_swatches_option[{{ store.store_id }}]" id="input-color-option-{{ store.store_id }}" class="form-control">*/
/*                                                     {% for option in options %}*/
/*                                                         {% if option.type == 'select' or option.type == 'radio' %}*/
/*                                                             <option value="{{ option.option_id }}" {% if module_octhemeoption_swatches_option[store.store_id] == option.option_id %} selected="selected" {% endif %}>{{ option.name }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-zoom-{{ store.store_id }}">{{ entry_use_zoom }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_use_zoom[{{ store.store_id }}]" id="input-zoom-{{ store.store_id }}" class="form-control zoom-status" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_use_zoom[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group zoom-settings zoom-settings-{{ store.store_id }}">*/
/*                                             <label class="col-sm-3 control-label" for="input-zoom-position-{{ store.store_id }}">{{ entry_zoom_position }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_zoom_position[{{ store.store_id }}]" id="input-zoom-position-{{ store.store_id }}" class="form-control">*/
/*                                                     <option value="outside" {% if module_octhemeoption_zoom_position[store.store_id] == 'outside' %}selected="selected"{% endif %}>{{ text_outside }}</option>*/
/*                                                     <option value="inside" {% if module_octhemeoption_zoom_position[store.store_id] == 'inside' %}selected="selected"{% endif %}>{{ text_inside }}</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group zoom-settings zoom-settings-{{ store.store_id }}">*/
/*                                             <label class="col-sm-3 control-label" for="input-zoom-space-{{ store.store_id }}">{{ entry_zoom_space }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <input type="text" id="input-zoom-space-{{ store.store_id }}" class="form-control" name="module_octhemeoption_zoom_space[{{ store.store_id }}]" value="{{ module_octhemeoption_zoom_space[store.store_id] }}" placeholder="{{ text_zoom_space }}" />*/
/*                                                 <span><i class="fa fa-exclamation-circle"></i> <i>{{ text_for_space }}</i></span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group zoom-settings zoom-settings-{{ store.store_id }}">*/
/*                                             <label class="col-sm-3 control-label" for="input-zoom-title-{{ store.store_id }}">{{ entry_zoom_title }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_zoom_title[{{ store.store_id }}]" id="input-zoom-title-{{ store.store_id }}" class="form-control" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_zoom_title[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group " style="display:none !important;" >*/
/*                                             <label class="col-sm-3 control-label" for="input-zoom-background-{{ store.store_id }}">{{ entry_zoom_bg }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_zoom_background_status[{{ store.store_id }}]" id="input-zoom-background-{{ store.store_id }}" class="form-control" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_zoom_background_status[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group " style="display:none !important;">*/
/*                                             <label class="col-sm-3 control-label" for="input-zoom-background-color-{{ store.store_id }}">{{ entry_zoom_bg_color }}</label>*/
/*                                             <div class="col-sm-2">*/
/*                                                 <input type="text" id="input-zoom-background-color-{{ store.store_id }}" class="form-control jscolor" name="module_octhemeoption_zoom_background_color[{{ store.store_id }}]" value="{{ module_octhemeoption_zoom_background_color[store.store_id] }}" />*/
/*                                             </div>*/
/*                                             <label class="col-sm-2 control-label" for="input-zoom-background-opacity-{{ store.store_id }}">{{ entry_zoom_bgopacity }}</label>*/
/*                                             <div class="col-sm-2">*/
/*                                                 <input type="text" id="input-zoom-background-opacity-{{ store.store_id }}" class="form-control" name="module_octhemeoption_zoom_background_opacity[{{ store.store_id }}]" value="{{ module_octhemeoption_zoom_background_opacity[store.store_id] }}" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/* */
/*                             <div class="tab-pane" id="tab-category">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="input-category-store">{{ entry_store }}</label>*/
/*                                     <div class="col-sm-6">*/
/*                                         <select id="input-category-store" class="form-control">*/
/*                                             {% for store in stores %}*/
/*                                                 <option value="{{ store.store_id }}" {% if(store.store_id == 0) %}selected="selected"{% endif %}>{{ store.name }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% for store in stores %}*/
/*                                     <div id="frm-category-{{ store.store_id }}" class="frm-category">*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-custom-view-{{ store.store_id }}">{{ entry_custom_view }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_custom_view[{{ store.store_id }}]" id="input-custom-view-{{ store.store_id }}" class="form-control" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_custom_view[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-cview-{{ store.store_id }}">{{ entry_category_view }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_category_view[{{ store.store_id }}]" id="input-cview-{{ store.store_id }}" class="form-control">*/
/*                                                     <option value="list" {% if module_octhemeoption_category_view[store.store_id] == 'list' %} selected="selected" {% endif %}>{{ text_list }}</option>*/
/*                                                     <option value="grid" {% if module_octhemeoption_category_view[store.store_id] == 'grid' %} selected="selected" {% endif %}>{{ text_grid }}</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-columns-{{ store.store_id }}">{{ entry_columns_grid }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_grid_columns[{{ store.store_id }}]" id="input-columns-{{ store.store_id }}" class="form-control">*/
/*                                                     <option value="2" {% if module_octhemeoption_grid_columns[store.store_id] == '2' %} selected="selected" {% endif %}>2</option>*/
/*                                                     <option value="3" {% if module_octhemeoption_grid_columns[store.store_id] == '3' %} selected="selected" {% endif %}>3</option>*/
/*                                                     <option value="4" {% if module_octhemeoption_grid_columns[store.store_id] == '4' %} selected="selected" {% endif %}>4</option>*/
/*                                                     <option value="5" {% if module_octhemeoption_grid_columns[store.store_id] == '5' %} selected="selected" {% endif %}>5</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-layered-{{ store.store_id }}">{{ entry_use_layered }}</label>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <select name="module_octhemeoption_use_layered[{{ store.store_id }}]" id="input-layered-{{ store.store_id }}" class="form-control" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_use_layered[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <select name="module_octhemeoption_layered_column[{{ store.store_id }}]" class="form-control">*/
/*                                                     <option value="left" {% if module_octhemeoption_layered_column[store.store_id] == 'left' %} selected="selected" {% endif %}>{{ text_column_left }}</option>*/
/*                                                     <option value="right" {% if module_octhemeoption_layered_column[store.store_id] == 'right' %} selected="selected" {% endif %}>{{ text_column_right }}</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-cquickview-{{ store.store_id }}">{{ entry_use_quickview }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_use_cate_quickview[{{ store.store_id }}]" id="input-cquickview-{{ store.store_id }}" class="form-control" data-store-id="{{ store.store_id }}">*/
/*                                                     {% if module_octhemeoption_use_cate_quickview[store.store_id] %}*/
/*                                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                         <option value="0">{{ text_disabled }}</option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }}</option>*/
/*                                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-product-image-{{ store.store_id }}">{{ entry_product_image }}</label>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select name="module_octhemeoption_image_effect[{{ store.store_id }}]" id="input-product-image-{{ store.store_id }}" class="form-control">*/
/*                                                     <option value="none" {% if module_octhemeoption_image_effect[store.store_id] == 'none' %}selected="selected" {% endif %}>{{ text_none }}</option>*/
/*                                                     <option value="rotator" {% if module_octhemeoption_image_effect[store.store_id] == 'rotator' %}selected="selected" {% endif %}>{{ text_use_rotator }}</option>*/
/*                                                     <option value="swatches" {% if module_octhemeoption_image_effect[store.store_id] == 'swatches' %}selected="selected" {% endif %}>{{ text_use_swatches }}</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-3 control-label" for="input-product-image-{{ store.store_id }}">{{ entry_icon_swatches }}</label>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <input type="text" value="{{ module_octhemeoption_cate_swatches_width[store.store_id] }}" name="module_octhemeoption_cate_swatches_width[{{ store.store_id }}]" placeholder="{{ entry_width }}" class="form-control" />*/
/*                                             </div>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <input type="text" value="{{ module_octhemeoption_cate_swatches_height[store.store_id] }}" name="module_octhemeoption_cate_swatches_height[{{ store.store_id }}]" placeholder="{{ entry_height }}" class="form-control" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/* */
/*                             <div class="tab-pane" id="tab-database" >*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="input-theme">{{ entry_theme_database }}</label>*/
/*                                     <div class="col-sm-9">*/
/*                                         <div class="row">*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select id="input-theme" class="form-control" name="file">*/
/*                                                     {% for key, value in database %}*/
/*                                                         <option value="{{ key }}">{{ value }}</option>*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <button type="button" id="button-import" class="btn btn-primary btn-theme-option"><i class="fa fa-upload"></i> {{ button_import }}</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         $('.toggle.btn').on('click', function () {*/
/*             var ckb_status = parseInt($(this).find('.ckb-switch').val());*/
/*             if(ckb_status == 1) {*/
/*                 $(this).find('.ckb-switch').val('0');*/
/*             } else {*/
/*                 $(this).find('.ckb-switch').val('1');*/
/*             }*/
/*         });*/
/* */
/*         // Module Configuration of Stores*/
/*         $('.frm-configuration').hide();*/
/*         $('#frm-configuration-0').show();*/
/*         $('#input-configuration-store').change(function () {*/
/*             var store_id = $(this).val();*/
/*             $('.frm-configuration').hide();*/
/*             $('#frm-configuration-' + store_id).show();*/
/*         });*/
/* */
/*         // Stylesheet of Stores*/
/*         $('.frm-stylesheet').hide();*/
/*         $('#frm-stylesheet-0').show();*/
/*         $('#input-stylesheet-store').change(function () {*/
/*             var store_id = $(this).val();*/
/*             $('.frm-stylesheet').hide();*/
/*             $('#frm-stylesheet-' + store_id).show();*/
/*         });*/
/* */
/*         // Enable / Disable Stylesheet Settings*/
/*         $('.stylesheet-settings').hide();*/
/*         var style_selection = $('.style-status');*/
/*         style_selection.each(function () {*/
/*             var store_id = $(this).data('store-id');*/
/*             var status = parseInt($('#input-status-' + store_id).val());*/
/* */
/*             if(status === 1) {*/
/*                 $('#stylesheet-settings-' + store_id).show();*/
/*             } else {*/
/*                 $('#stylesheet-settings-' + store_id).hide();*/
/*             }*/
/*         });*/
/* */
/*         style_selection.on('change', function () {*/
/*             var store_id = $(this).data('store-id');*/
/*             var status = parseInt($('#input-status-' + store_id).val());*/
/* */
/*             if(status === 1) {*/
/*                 $('#stylesheet-settings-' + store_id).show();*/
/*             } else {*/
/*                 $('#stylesheet-settings-' + store_id).hide();*/
/*             }*/
/*         });*/
/* */
/*         // Product Configuration of Stores*/
/*         $('.frm-product').hide();*/
/*         $('#frm-product-0').show();*/
/*         $('#input-product-store').change(function () {*/
/*             var store_id = $(this).val();*/
/*             $('.frm-product').hide();*/
/*             $('#frm-product-' + store_id).show();*/
/*         });*/
/* */
/*         // Category Configuration of Stores*/
/*         $('.frm-category').hide();*/
/*         $('#frm-category-0').show();*/
/*         $('#input-category-store').change(function () {*/
/*             var store_id = $(this).val();*/
/*             $('.frm-category').hide();*/
/*             $('#frm-category-' + store_id).show();*/
/*         });*/
/* */
/*         // Enable / Disable Zoom Settings*/
/*         $('.zoom-settings').hide();*/
/*         var zoom_status = $('.zoom-status');*/
/*         zoom_status.each(function () {*/
/*             var store_id = $(this).data('store-id');*/
/*             var status = parseInt($('#input-zoom-' + store_id).val());*/
/* */
/*             if(status === 1) {*/
/*                 $('.zoom-settings-' + store_id).show();*/
/*             } else {*/
/*                 $('.zoom-settings-' + store_id).hide();*/
/*             }*/
/*         });*/
/* */
/*         zoom_status.change(function () {*/
/*             var store_id = $(this).data('store-id');*/
/*             var status = parseInt($('#input-zoom-' + store_id).val());*/
/* */
/*             if(status === 1) {*/
/*                 $('.zoom-settings-' + store_id).show();*/
/*             } else {*/
/*                 $('.zoom-settings-' + store_id).hide();*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <script type="text/javascript"><!--*/
/*     $('#button-import').on('click', function() {*/
/* */
/*         $('#form-data input[name=\'file\']').val($('#input-theme').val());*/
/* */
/*         $('#form-data').submit();*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/
